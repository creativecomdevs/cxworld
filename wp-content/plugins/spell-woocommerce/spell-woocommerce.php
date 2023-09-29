<?php

/**
 * Plugin Name: Sites Way E-commerce Gateway
 * Plugin URI:
 * Description: Sites Way E-commerce Gateway
 * Version: 1.1.2
 * Author: Sites Way
 * Author URI:
 * Developer: Sites Way
 * Developer URI:
 *
 * Woo: 12345:342928dfsfhsf8429842374wdf4234sfd
 * WC requires at least: 3.3.4
 * WC tested up to: 4.0.0
 *
 * Copyright: © 2020 Sites Way
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// based on
// http://docs.woothemes.com/document/woocommerce-payment-gateway-plugin-base/
// docs http://docs.woothemes.com/document/payment-gateway-api/

require_once dirname(__FILE__) . '/api.php';

add_action('plugins_loaded', 'wc_spell_payment_gateway_init');
function wc_spell_payment_gateway_init()
{
    if (!class_exists('WC_Payment_Gateway')) {
        return;
    }

    class SpellWCLogger
    {
        public function __construct()
        {
            $this->logger = new WC_Logger();
        }

        public function log($message)
        {
            $this->logger->add('spell', $message);
        }
    }

    class WC_Spell_Gateway extends WC_Payment_Gateway
    {
        public $id = "spell";
        public $title = "";
        public $method_title = "Sites Way E-commerce Gateway";
        public $description = " ";
        public $method_description = "";
        public $debug = true;
        public $supports = array( 'products', 'refunds' );

        private $cached_api;

        public function __construct()
        {
            // TODO: Set icon. Probably can be an external URL.
            $this->init_form_fields();
            $this->init_settings();
            $this->hid = $this->get_option( 'hid' );
            $this->label = $this->get_option( 'label' );
            $this->method_desc = $this->get_option( 'method_desc' );
            $this->title = $this->label;
            $this->method_description = $this->method_desc;
            $this->icon = null;

            if ($this->title === '') {
                $ptitle = "Select Payment Method";
                $this->title = $ptitle;
            };

            if ($this->method_description === '') {
                $pmeth = "Choose payment method on next page";
                $this->method_description = $pmeth;
            };

            add_action(
                'woocommerce_update_options_payment_gateways_' . $this->id,
                array($this, 'process_admin_options')
            );
            str_replace(
                'https:',
                'http:',
                add_query_arg('wc-api', 'WC_Spell_Gateway', home_url('/'))
            );
            add_action(
                'woocommerce_api_wc_gateway_spell',
                array($this, 'handle_callback')
            );


        }

        private function spell_api()
        {
            if (!$this->cached_api) {
                $this->cached_api = new SpellAPI(
                    $this->settings['private-key'],
                    $this->settings['brand-id'],
                    new SpellWCLogger(),
                    $this->debug
                );
            }
            return $this->cached_api;
        }

        private function log_order_info($msg, $o)
        {
            $this->spell_api()
                ->log_info($msg . ': ' . $o->get_order_number());
        }

        function handle_callback()
        {
            // Docs http://docs.woothemes.com/document/payment-gateway-api/
            // http://127.0.0.1/wordpress/?wc-api=wc_gateway_spell&id=&action={paid,sent}
            // The new URL scheme
            // (http://127.0.0.1/wordpress/wc-api/wc_gateway_spell) is broken
            // for some reason.
            // Old one still works.

            $GLOBALS['wpdb']->get_results(
                "SELECT GET_LOCK('spell_payment', 15);"
            );

            $this->spell_api()->log_info('received callback: '
                . print_r($_GET, true));
            $o = new WC_Order($_GET["id"]);
            $this->log_order_info('received success callback', $o);
            $payment_id = WC()->session->get(
                'spell_payment_id_' . $_GET["id"]
            );
            if (!$payment_id) {
                $input = json_decode(file_get_contents('php://input'), true);
                $payment_id = array_key_exists('id', $input) ? $input['id'] : '';
            }

            if ($this->spell_api()->was_payment_successful($payment_id)) {
                if (!$o->is_paid()) {
                    $o->payment_complete($payment_id);
                    $o->add_order_note(
                        sprintf( __( 'Payment Successful. Transaction ID: %s', 'woocommerce' ), $payment_id )
                    );
                }
                WC()->cart->empty_cart();
                $this->log_order_info('payment processed', $o);
            } else {
                if (!$o->is_paid()) {
                    $o->update_status(
                        'wc-failed',
                        __('ERROR: Payment was received, but order verification failed.')
                    );
                    $this->log_order_info('payment not successful', $o);
                }
            }

            $GLOBALS['wpdb']->get_results(
                "SELECT RELEASE_LOCK('spell_payment');"
            );

            header("Location: " . $this->get_return_url($o));
        }

        public function init_form_fields()
        {

            $this->form_fields = array(
                'enabled' => array(
                    'title' => __('Enable API', 'woocommerce'),
                    'label' => __('Enable API', 'woocommerce'),
                    'type' => 'checkbox',
                    'description' => '',
                    'default' => 'no',
                ),
                'hid' => array(
                    'title' => __('Enable payment method selection', 'woocommerce'),
                    'label' => __('Enable payment method selection', 'woocommerce'),
                    'type' => 'checkbox',
                    'description' => 'If set, buyers will be able to choose the desired payment method directly in WooCommerce',
                    'default' => 'yes',

                ),
                'method_desc' => array(
                    'title' => __('Change payment method description', 'woocommerce'),
                    'label' => __('', 'woocommerce'),
                    'type' => 'text',
                    'description' => 'If not set, "Choose payment method on next page" will be used',
                    'default' => 'Choose payment method on next page',

                ),
                'label' => array(
                    'title' => __('Change payment method title', 'woocommerce'),
                    'type' => 'text',
                    'description' => 'If not set, "Select payment method" will be used. Ignored if payment method selection is enabled',
                    'default' => 'Select Payment Method',

                ),
                'brand-id' => array(
                    'title' => __('Brand ID', 'woocommerce-spell'),
                    'type' => 'text',
                    'description' => __(
                        'Please enter your brand ID',
                        'woocommerce-spell'
                    ),
                    'default' => '',
                ),
                'private-key' => array(
                    'title' => __('Secret key', 'woocommerce-spell'),
                    'type' => 'text',
                    'description' => __(
                        'Please enter your secret key',
                        'woocommerce-spell'
                    ),
                    'default' => '',
                ),
                'debug' => array(
                    'title' => __('Debug Log', 'woocommerce'),
                    'type' => 'checkbox',
                    'label' => __('Enable logging', 'woocommerce'),
                    'default' => 'yes',
                    'description' =>
                    sprintf(
                        __(
                            'Log events to <code>%s</code>',
                            'woocommerce'
                        ),
                        wc_get_log_file_path('spell')
                    ),
                ),
            );
        }

        public function payment_fields() {
           if ($this->hid === 'no') {
               echo $this->method_description;
           }
           else {
                $payment_methods = $this->spell_api()->payment_methods(
                    get_woocommerce_currency(),
                    $this->get_language()
                );
                if (is_null($payment_methods)) {
                    echo('System error!');
                    return;
                }

                if (!array_key_exists("by_country", $payment_methods)) {
                    echo 'Plugin configuration error!';
                } else {
                    $data = $payment_methods["by_country"];
                    $methods = [];
                    foreach ($data as $country => $pms) {
                        foreach ($pms as $pm) {
                            if (!array_key_exists($pm, $methods)) {
                                $methods[$pm] = [
                                    "payment_method" => $pm,
                                    "countries" => [],
                                ];
                            }
                            if (!in_array($country, $methods[$pm]["countries"])) {
                                $methods[$pm]["countries"][] = $country;
                            }
                        }
                    }

                    $country_options = array_values(array_unique(
                        array_keys($payment_methods['by_country'])
                    ));
                    $any_index = array_search('any', $country_options);
                    if ($any_index !== false) {
                        array_splice($country_options, $any_index, 1);
                        $country_options = array_merge($country_options, ['any']);
                    }

                    $geo = new WC_Geolocation();
                    $user_ip  = $geo->get_ip_address();
                    $user_geo = $geo->geolocate_ip( $user_ip );
                    $detected_country = $user_geo['country'];

                    $selected_country = '';
                    if (in_array($detected_country, $country_options)) {
                        $selected_country = $detected_country;
                    } elseif ($any_index !== false) {
                        $selected_country = 'any';
                    } elseif (count($country_options) > 0) {
                        $selected_country = $country_options[0];
                    }


                    if (count($data) > 1) {
                        echo "<div><label><select id=\"spell-country\">";
                        foreach ($country_options as $country) {
                            echo "<option value=\"{$country}\"";
                            if ($country == $selected_country ) {
                                echo " selected=\"selected\"";
                            }
                            echo ">{$payment_methods['country_names'][$country]}</option>";
                        }
                        echo "</select></label></div>";
                    }

                    echo "<span style=\"display: flex; flex-flow: row wrap;\" >";
                    $checked = false;
                    if (count($methods) != 1) {
                        $checked = true;
                    }
                    foreach ($methods as $key => $data) {
                        $countries = htmlspecialchars(json_encode($data["countries"]));
                        echo "<label style=\"padding: 1em; width: 250px; \">
                                <input type=radio
                                    class=spell-payment-method
                                    name=spell-payment-method
                                    value=\"{$data["payment_method"]}\"
                                    data-countries=\"{$countries}\" ";

                        if (!$checked) {
                            echo "checked=\"checked\" ";
                            $checked = true;
                        }

                        echo ">";

                        echo "<div style=\"font-size: 14px;\">{$payment_methods['names'][$data["payment_method"]]}</div>";

                        $logo = $payment_methods['logos'][$data["payment_method"]];
                        if (!is_array($logo)) {
                            echo "<div><img src='https://gate.sitesway.sa".$logo."' height='30' style='max-width: 160px; max-height: 30px;'></div>";
                        } else {
                            $c = count($logo);
                            if ($c > 4) {
                                $c = 4;
                            }
                            $c = $c * 50;
                            echo "<span style=\"display: block; padding-bottom: 3px; min-width: ".$c."px; max-width: ".$c."px;\">";
                            foreach ($logo as $i) {
                                echo "<img src='https://gate.sitesway.sa".$i."' width='40' height='35' style='margin: 0 10px 10px 0; float: left;'>";
                            }
                            echo "<div style='clear: both;'></div></span>";
                        }

                        echo "</label>";
                    }
                    echo '</span>
                        <script>
                            function spellFilterPMs() {
                                var countrySelect = document.getElementById("spell-country");
                                if (countrySelect == null) {
                                    return;
                                };
                                var selected = countrySelect.value;
                                var els = document
                                    .getElementsByClassName("spell-payment-method");
                                var first = true;
                                for (var i = 0; i < els.length; i++) {
                                    var el = els[i];
                                    var countries = JSON
                                        .parse(el.getAttribute("data-countries"));

                                    var includes = false;
                                check_includes:
                                    for (var j = 0; j < countries.length; j++) {
                                        switch (countries[j]) {
                                        case selected:
                                        case "any":
                                            includes = true;
                                            break check_includes;
                                        }
                                    }

                                    el.parentElement.style.display = includes
                                        ? ""
                                        : "none";
                                    el.checked = false;
                                    if (includes && first) {
                                        first = false;
                                        el.checked = true;
                                    }
                                }
                            }

                            var countrySelect = document.getElementById("spell-country");
                            if (countrySelect != null) {
                                countrySelect.addEventListener("change", spellFilterPMs);
                            }
                            spellFilterPMs();
                        </script>';
                }
            }
        }

        public function get_language()
        {
            if (defined('ICL_LANGUAGE_CODE')) {
                $ln = ICL_LANGUAGE_CODE;
            } else {
                $ln = get_locale();
            }
            switch ($ln) {
            case 'et_EE':
                $ln = 'et';
                break;
            case 'ru_RU':
                $ln = 'ru';
                break;
            case 'lt_LT':
                $ln = 'lt';
                break;
            case 'lv_LV':
                $ln = 'lv';
                break;
            case 'et':
            case 'lt':
            case 'lv':
            case 'ru':
               break;
            default:
               $ln = 'en';
            }

            return $ln;
        }

        public function process_payment($o_id)
        {
            $o = new WC_Order($o_id);
            $total = round($o->calculate_totals() * 100);
            $notes = $this->get_notes();
//             if ($o->get_total_discount() > 0) {
//                 $total -= round($o->get_total_discount() * 100);
//             }
            $spell = $this->spell_api();
            $u = home_url() . '/?wc-api=wc_gateway_spell&id=' . $o_id;
            $params = [
                'success_callback' => $u . "&action=paid",
                'success_redirect' => $u . "&action=paid",
                'failure_redirect' => $u . "&action=cancel",
                'cancel_redirect' => $u . "&action=cancel",
                'creator_agent' => 'Woocommerce v3 module: '
                    . SPELL_MODULE_VERSION,
                'reference' => (string)$o->get_order_number(),
                'platform' => 'woocommerce',
                'purchase' => [
                    "currency" => $o->get_currency(),
                    "language" => $this->get_language(),
                    "notes" => $notes,
                    "products" => [
                        [
                            'name' => 'Payment',
                            'price' => $total,
                            'quantity' => 1,
                        ],
                    ],
                ],
                'brand_id' => $this->settings['brand-id'],
                'client' => [
                    'email' => $o->get_billing_email(),
                    'phone' => $o->get_billing_phone(),
                    'full_name' => $o->get_billing_first_name() . ' '
                        . $o->get_billing_last_name(),
                    'street_address' => $o->get_billing_address_1() . ' '
                        . $o->get_billing_address_2(),
                    'country' => $o->get_billing_country(),
                    'city' => $o->get_billing_city(),
                    'zip_code' => $o->get_shipping_postcode(),
                    'shipping_street_address' => $o->get_shipping_address_1()
                        . ' ' . $o->get_shipping_address_2(),
                    'shipping_country' => $o->get_shipping_country(),
                    'shipping_city' => $o->get_shipping_city(),
                    'shipping_zip_code' => $o->get_shipping_postcode(),
                ],
            ];

            $payment = $spell->create_payment($params);

            if (!array_key_exists('id', $payment)) {
                return array(
                    'result' => 'failure',
                );
            }

            WC()->session->set(
              'spell_payment_id_' . $o_id,
              $payment['id']
            );

            $this->log_order_info('got checkout url, redirecting', $o);
            $u = $payment['checkout_url'];
            if (array_key_exists("spell-payment-method", $_REQUEST)) {
                $u .= "?preferred=" . $_REQUEST["spell-payment-method"];
            }
            return array(
                'result' => 'success',
                'redirect' => $u,
            );
        }

        public function get_notes() {
            $cart = WC()->cart->get_cart();
            $nameString = '';
            foreach ($cart as $key => $cart_item) {
                $cart_product = $cart_item['data'];
                $name = method_exists( $cart_product, 'get_name' ) === true ? $cart_product->get_name() : $cart_product->name;
                if (array_keys($cart)[0] == $key) {
                    $nameString = $name;
                } else {
                    $nameString = $nameString . ';' . $name;
                }
            }
            return $nameString;
        }

        public function can_refund_order( $order ) {
            $has_api_creds = $this->get_option( 'enabled' ) && $this->get_option( 'private-key' ) && $this->get_option( 'brand-id' );

            return $order && $order->get_transaction_id() && $has_api_creds;
        }

        public function process_refund( $order_id, $amount = null, $reason = '' ) {
            $order = wc_get_order( $order_id );

            if ( ! $this->can_refund_order( $order ) ) {
                $this->log_order_info( 'Cannot refund order', $order );
                return new WP_Error( 'error', __( 'Refund failed.', 'woocommerce' ) );
            }

            $spell = $this->spell_api();
            $params = [
                'amount' => round($amount * 100),
            ];

            $result = $spell->refund_payment($order->get_transaction_id(), $params);

            if ( is_wp_error( $result ) || isset($result['__all__']) ) {
                $this->spell_api()
                    ->log_error($result['__all__'] . ': ' . $order->get_order_number());

                return new WP_Error( 'error', var_export($result['__all__'], true) );
            }

            $this->log_order_info( 'Refund Result: ' . wc_print_r( $result, true ), $order );

            switch ( strtolower( $result['status'] ) ) {
                case 'success':
                    $refund_amount = round($result['payment']['amount'] / 100, 2) . $result['payment']['currency'];

                    $order->add_order_note(
                    /* translators: 1: Refund amount, 2: Refund ID */
                        sprintf( __( 'Refunded %1$s - Refund ID: %2$s', 'woocommerce' ), $refund_amount, $result['id'] )
                    );
                    return true;
            }

            return true;
        }
    }

    // Add the Gateway to WooCommerce
    function woocommerce_add_spell_gateway($methods)
    {
        $methods[] = 'WC_Spell_Gateway';
        return $methods;
    }

    add_filter('woocommerce_payment_gateways', 'woocommerce_add_spell_gateway');

    function wp_add_spell_setting_link($links)
    {
        $url = get_admin_url()
            . '/admin.php?page=wc-settings&tab=checkout&section=spell';
        $settings_link = '<a href="' . $url . '">' . __('Settings', 'spell')
            . '</a>';
        array_unshift($links, $settings_link);
        return $links;
    }

    add_filter(
        'plugin_action_links_' . plugin_basename(__FILE__),
        'wp_add_spell_setting_link'
    );
}
