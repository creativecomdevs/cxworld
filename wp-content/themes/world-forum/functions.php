<?php

add_action('wp_enqueue_scripts', 'forum_styles');
add_action('wp_enqueue_scripts', 'forum_scripts');

function forum_styles()
{
    wp_enqueue_style('forum-style', get_template_directory_uri() . '/style.css?v' . $_SERVER['REQUEST_TIME']);
    wp_enqueue_style('forumorder-style', get_template_directory_uri() . '/assets/css/order-style.css?v' . $_SERVER['REQUEST_TIME']);
    if (is_page($post = 8)) {
        wp_enqueue_style('forumorder-style', get_template_directory_uri() . '/assets/css/order-style.css?v' . $_SERVER['REQUEST_TIME']);
    }
}

function forum_scripts()
{
    wp_enqueue_script('forum-validate', get_template_directory_uri() . '/assets/js/validate.js', array(), null, true);
    wp_enqueue_script('forum-toggle', get_template_directory_uri() . '/assets/js/toggle.js', array(), null, true);

    wp_enqueue_script('forumgsap-scripts', get_template_directory_uri() . '/assets/js/libs/gsap.min.js', array(), null, true);
    wp_enqueue_script('forumscrolltrigger-scripts', get_template_directory_uri() . '/assets/js/libs/ScrollTrigger.min.js', array(), null, true);
    wp_enqueue_script('forumscrollplugin-scripts', get_template_directory_uri() . '/assets/js/libs/ScrollToPlugin.min.js', array(), null, true);
    wp_enqueue_script('forumsmooth-scripts', get_template_directory_uri() . '/assets/js/libs/SmoothScroll.min.js', array(), null, true);
    wp_enqueue_script('forumswiper-scripts', get_template_directory_uri() . '/assets/js/libs/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('forummain-scripts', get_template_directory_uri() . '/assets/js/main.bundle.js', array(), null, true);
    wp_enqueue_script('forum-scripts', get_template_directory_uri() . '/assets/js/index.bundle.js', array(), null, true);
    wp_enqueue_script('forum-send', get_template_directory_uri() . '/assets/js/send-mail.js', array(), null, true);
}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function   tb_custom_woocommerce_change_order_status($order_id) // меняет статус заказа из обработки в завершён
{
    if (!$order_id) {
        return;
    }
    $order = wc_get_order($order_id);
    if ('processing' == $order->get_status()) {
        $order->update_status('completed');
    }
}
add_action('woocommerce_thankyou', 'tb_custom_woocommerce_change_order_status');

/**
 * Перенаправляем пользователей на страницу оформления
 * заказа после добавления товара в корзину.
 *
 * @param string @url Адрес перенаправления по умолчанию.
 */
function mihdan_add_to_cart_redirect($url)
{
    $url = wc_get_checkout_url() . '?tickets_provider=tribe_wooticket';
    return $url;
}
add_filter('woocommerce_add_to_cart_redirect', 'mihdan_add_to_cart_redirect');


function one_item_in_cart($valid, $product_id, $quantity)
{ // только один заказ в корзине

    global $woocommerce;

    $cart = $woocommerce->cart->empty_cart();

    if (!empty($cart) && $valid) {

        $woocommerce->cart->empty_cart();

        return $valid;
    }

    return $valid;
}

add_filter("woocommerce_add_to_cart_validation", "one_item_in_cart", 10, 3);

add_filter('woocommerce_currency_symbol', 'woocommerce_change_rub_symbol', 9999, 2);

function woocommerce_change_rub_symbol($valyuta_symbol, $valyuta_code)
{
    if ($valyuta_code === 'SAR') {
        return 'SAR';
    }
    return $valyuta_symbol;
}

/**
 * The Events Calendar - WooCommerce Tickets Remove You'll receive your tickets in another email. From Order Emails
 * 
 */
add_filter('wootickets_email_message', 'customize_woo_ticket_message', 10, 1);
function customize_woo_ticket_message($tribe_ticket)
{

    $tribe_ticket = '';

    return $tribe_ticket;
}

/**
 * @snippet       Hide Greetings @ WooCommerce Emails
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 4.6
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_filter('gettext', 'bbloomer_translate_woocommerce_strings_emails', 999);

function bbloomer_translate_woocommerce_strings_emails($translated)
{
    // Get strings and translate them into empty strings
    $translated = str_ireplace('Thanks for shopping with us.', '', $translated);
    $translated = str_ireplace('We hope to see you again soon.', '', $translated);
    return $translated;
}

add_filter('woocommerce_billing_fields', 'custom_billing_fields');
function custom_billing_fields($fields)
{
    // Only on checkout page
    if (is_checkout() && !is_wc_endpoint_url()) {
        $fields['billing_phone']['required'] = false;
    }
    return $fields;
}

// Remove string "(optional)" from billing phone field
add_filter('woocommerce_form_field', 'remove_checkout_optional_fields_label', 10, 4);
function remove_checkout_optional_fields_label($field, $key, $args, $value)
{
    // Only on checkout page
    if (is_checkout() && !is_wc_endpoint_url() && $key === 'billing_phone') {
        $optional = '&nbsp;<span class="optional">(' . esc_html__('optional', 'woocommerce') . ')</span>';
        $field = str_replace($optional, '', $field);
    }
    return $field;
}

/**
 * Fix for the security codes appearing in the emails
 */
add_filter('tribe_tickets_plus_woo_meta_data_enabled', '__return_false');


if ($_SERVER['REQUEST_URI'] === '/event/customer-experience-world-forum/') {
    wp_redirect( home_url() );
    exit;
}
