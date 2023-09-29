<?php

get_header();
?>

<main class="main">

    <section class="promo" id="promo">
        <div class="promo__bg"></div>
        <div class="container">
            <div class="promo__title title">
                <span>customer</span>
                <div class="promo__arrows">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/promo/arrow.png" alt="arrow">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/promo/arrow.png" alt="arrow">
                </div>
                <span>Improving customer experience
                    is a human-centric concept</span>
                <span>Experience</span>
                <span>World Forum</span>
            </div>
            <div class="promo__dates">
                <div class="promo__timer">
                    <div class="promo__wrap">
                        <span id="months">07</span>
                        Month
                    </div>
                    <div class="promo__wrap">
                        <span id="days">01</span>
                        Days
                    </div>
                    <div class="promo__wrap">
                        <span id="hours">09</span>
                        Hours
                    </div>
                </div>
                <button class="promo__button">
                <a href="/?add-to-cart=133"> Register Now</a>
                   
                </button>
                <div class="promo__date">
                    <span>24-25 JAN 2024</span>
                    Riyadh, the arena Gharnatah
                </div>
                <div class="promo__payment">No payment needed</div>
            </div>
        </div>
    </section>

    <div class="forum-schedule-wrapper">
        <div class="forum-speakers-wrapper">
            <section class="forum" id="about">
                <div class="container">
                    <h2 class="forum__title title">About forum</h2>
                    <div class="forum__wrapper">
                        <div class="forum__img">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/forum/forum.png" alt="arrow">
                        </div>
                        <div class="swiper forum__swiper">
                            <ul class="forum__slider swiper-wrapper">
                            <li class="forum__item swiper-slide">The forum is one of the initiatives that contribute to raising the efficiency of services in the public and private sectors by facilitating customers' journeys to meet their aspirations and desires.
                            It also addresses several topics, including customer experience strategies, research and measuring the customer experience, applications of artificial intelligence in managing the customer's voice, and several issues of interest to various vital industries.
                            The concept of improving customer experience is a human-centered concept, and its importance, as well as its contribution to realising the aspirations and goals of any facility and making the human person the basis and centre of change.
                            </li>
                                <!-- <?php
                                $my_posts = get_posts(array(
                                    'numberposts' => -1,
                                    'category_name'    => 'forum',
                                    'orderby'     => 'date',
                                    'order'       => 'ASC',
                                    'post_type'   => 'post',
                                    'suppress_filters' => true,
                                ));

                                global $post;

                                foreach ($my_posts as $post) {
                                    setup_postdata($post);
                                ?>
                                    <li class="forum__item swiper-slide"><?php the_field('text_forum_en') ?></li>
                                <?php
                                }

                                wp_reset_postdata();
                                ?> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="speakers" id="speakers">
                <div class="container">
                    <div class="speakers__wrap">
                        <h2 class="speakers__title title">speakers</h2>
                        <div class="speakers__arrows">
                            <div class="speakers__prev">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="99" y="99" width="98" height="98" rx="49" transform="rotate(-180 99 99)" stroke="white" stroke-opacity="0.5" stroke-width="2" />
                                    <path d="M25.9028 50.9028L46.346 71.346C46.8446 71.8446 47.653 71.8446 48.1516 71.346L54.0015 65.4961C54.5001 64.9975 54.5001 64.1891 54.0015 63.6905L45.6938 55.3828L68.3405 55.3828C69.0456 55.3828 69.6172 54.8112 69.6172 54.1061L69.6172 45.894C69.6172 45.1888 69.0456 44.6172 68.3405 44.6172L45.6938 44.6172L54.1211 36.1899C54.6197 35.6913 54.6197 34.8829 54.1211 34.3843L48.2712 28.5344C47.7726 28.0358 46.9642 28.0358 46.4656 28.5344L25.9028 49.0972C25.4042 49.5958 25.4042 50.4042 25.9028 50.9028Z" fill="white" />
                                </svg>
                            </div>
                            <div class="speakers__next">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="98" height="98" rx="49" fill="#FF9F18" stroke="#FF9F18" stroke-width="2" />
                                    <path d="M74.0972 49.0972L53.654 28.654C53.1554 28.1554 52.347 28.1554 51.8484 28.654L45.9985 34.5039C45.4999 35.0025 45.4999 35.8109 45.9985 36.3095L54.3062 44.6172L31.6595 44.6172C30.9544 44.6172 30.3828 45.1888 30.3828 45.8939L30.3828 54.106C30.3828 54.8112 30.9544 55.3828 31.6595 55.3828L54.3062 55.3828L45.8789 63.8101C45.3803 64.3087 45.3803 65.1171 45.8789 65.6157L51.7288 71.4656C52.2274 71.9642 53.0358 71.9642 53.5344 71.4656L74.0972 50.9028C74.5958 50.4042 74.5958 49.5958 74.0972 49.0972Z" fill="white" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="speakers__swiper  swiper">
                    <ul class="speakers__slider swiper-wrapper">

                        <?php
                        $my_posts = get_posts(array(
                            'numberposts' => -1,
                            'category_name'    => 'speakers',
                            'orderby'     => 'date',
                            'order'       => 'DSC',
                            'post_type'   => 'post',
                            'suppress_filters' => true,
                        ));

                        global $post;

                        foreach ($my_posts as $post) {
                            setup_postdata($post);
                        ?>
                            <li class="speakers__item swiper-slide">
                                <div class="speakers__img" style="background-image: url('<?php the_field('speakers_img'); ?>');">
                                    <a target="_blank" href="<?php the_field('speakers_link'); ?>" class="speakers__link">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" rx="8" fill="#0B0B0B" />
                                            <path d="M12.9645 10.4377C12.7282 10.2654 12.5086 10.1647 12.1956 10.0851C12.0011 10.0357 11.798 10.0121 11.497 10.0042C11.2636 9.99808 11.058 9.99872 11.0401 10.0056C11.0221 10.0125 10.8899 10.0431 10.7463 10.0736C10.3435 10.159 9.97081 10.3506 9.67443 10.6248C9.46291 10.8205 9.34714 10.9883 9.21288 11.2938C8.94134 11.9115 8.93573 12.4558 9.1947 13.0548C9.45283 13.6517 9.97678 14.062 10.73 14.257C10.9512 14.3143 11.0934 14.3288 11.4318 14.3283C12.2505 14.3273 12.7659 14.1229 13.2782 13.5961C13.5032 13.3647 13.6176 13.1769 13.7372 12.8423C13.8215 12.6063 13.83 12.543 13.8304 12.1473C13.8308 11.7712 13.8199 11.6781 13.75 11.4639C13.6251 11.0803 13.346 10.7159 12.9645 10.4377Z" fill="white" />
                                            <path d="M13.8472 29L13.8305 15.9361H9L9 29H13.8472Z" fill="white" />
                                            <path d="M22.4448 17.8432C22.428 17.8432 22.4154 17.4345 22.4154 16.8896V15.9361H17.5846L17.5846 29L22.4154 29L22.4155 25.3685C22.4156 22.9475 22.4274 21.6416 22.4511 21.4509C22.4998 21.0592 22.6785 20.5306 22.8286 20.3348C23.2768 19.7497 23.7669 19.4925 24.4079 19.506C24.6607 19.5114 24.7127 19.5239 24.947 19.6359C25.4503 19.8765 25.8325 20.3553 26.0344 20.9981C26.1635 21.4091 26.1729 21.736 26.1626 25.4479L26.1528 29H31L30.9999 25.2731C30.9999 23.1003 30.9863 21.3673 30.9672 21.1171C30.7929 18.8226 30.0461 17.2897 28.703 16.4698C28.3665 16.2644 28.0796 16.1539 27.5487 16.0254C27.3047 15.9663 27.1689 15.956 26.6261 15.9553C26.2592 15.9548 25.879 15.9718 25.7285 15.9954C25.3763 16.0506 24.689 16.2102 24.4881 16.2834C24.1948 16.3903 23.6767 16.6623 23.4532 16.8268C23.2135 17.0033 22.6398 17.5757 22.5382 17.7399C22.503 17.7967 22.461 17.8432 22.4448 17.8432Z" fill="white" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="speakers__wrapper">
                                    <p class="speakers__name"><?php the_title(); ?> <br>
                                        <span><?php the_field('speakers_position'); ?></span>
                                    </p>
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.0611 0H3.80014C3.2816 0 2.86124 0.420357 2.86124 0.938892V7.02283C2.86124 7.54137 3.2816 7.96172 3.80014 7.96172H12.4402L0.663897 19.738C0.297237 20.1047 0.297237 20.6992 0.663897 21.0658L4.93419 25.3361C5.30085 25.7028 5.89532 25.7028 6.26198 25.3361L18.0383 13.5598V22.3243C18.0383 22.8428 18.4586 23.2632 18.9772 23.2632H25.0611C25.5796 23.2632 26 22.8428 26 22.3243V0.938892C26 0.420356 25.5796 0 25.0611 0Z" fill="#FF9F18" />
                                    </svg>
                                    
                                </div>
                            </li>
                        <?php
                        }

                        wp_reset_postdata();
                        ?>

                    </ul>
                </div>

            </section>
        </div>
        <section class="schedule" id="agenda">
            <div class="container">
                <h2 class="schedule__title title">Agenda</h2>
                <div class="schedule__days">
                    <button class="schedule__day active">Day 1</button>
                    <button class="schedule__day">Day 2</button>
                </div>
                <div class="schedule__wrapper">
                    <div class="schedule__content active">
                        <h3 class="schedule__subtitle">DAY 1 - CX WORLD 2024 CONFERENCE - 24 JANUARY</h3>
                        <?php query_posts('p=358'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php if (have_rows('content')) : ?>
                                    <ul class="schedule__list">
                                        <?php while (have_rows('content')) : the_row(); ?>
                                            <?php if (get_sub_field('content_type') == 'var1') : ?>
                                                <li class="schedule__item orange">
                                                    <?php if (have_rows('accented_line')) : ?>
                                                        <?php while (have_rows('accented_line')) : the_row(); ?>
                                                            <div class="schedule__time"><?php the_sub_field('accented_time'); ?></div>
                                                            <?php if (have_rows('accented_main_text')) : ?>
                                                                <?php while (have_rows('accented_main_text')) : the_row(); ?>
                                                                    <div class="schedule__event">
                                                                        <?php the_sub_field('accented_main_text_orange_en'); ?>
                                                                        <?php if (get_sub_field('accented_main_text_black_en')) : ?>
                                                                            <p><span><?php the_sub_field('accented_main_text_black_en'); ?></span></p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            <?php if (have_rows('accented_descr_text')) : ?>
                                                                <?php while (have_rows('accented_descr_text')) : the_row(); ?>
                                                                    <div class="schedule__descr"><?php the_sub_field('accented_descr_text_en'); ?></div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php elseif (get_sub_field('content_type') == 'var2') : ?>
                                                <li class="schedule__item">
                                                    <?php if (have_rows('default_line')) : ?>
                                                        <?php while (have_rows('default_line')) : the_row(); ?>
                                                            <?php if (have_rows('default_time_block')) : ?>
                                                                <?php while (have_rows('default_time_block')) : the_row(); ?>
                                                                    <div class="schedule__time"><?php the_sub_field('default_time'); ?>
                                                                        <?php if (get_sub_field('default_time_description_en')) : ?>
                                                                            <p><?php the_sub_field('default_time_description_en'); ?></p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            <?php if (have_rows('default_main_text')) : ?>
                                                                <?php while (have_rows('default_main_text')) : the_row(); ?>
                                                                    <div class="schedule__event">
                                                                        <?php the_sub_field('default_main_text_en'); ?>
                                                                        <?php if (get_sub_field('default_text_content')) : ?>
                                                                            <?php if (have_rows('default_text_content')) : ?>
                                                                                <?php while (have_rows('default_text_content')) : the_row(); ?>
                                                                                    <?php if (have_rows('text_content')) : ?>
                                                                                        <?php while (have_rows('text_content')) : the_row(); ?>
                                                                                            <p>
                                                                                                <span><?php the_sub_field('text_content_bold_en'); ?></span>
                                                                                                <?php if (get_sub_field('text_content_light_en')) : ?>
                                                                                                    <?php the_sub_field('text_content_light_en'); ?>
                                                                                                <?php endif; ?>
                                                                                            </p>
                                                                                        <?php endwhile; ?>
                                                                                    <?php endif; ?>
                                                                                <?php endwhile; ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            <?php if (have_rows('default_descr_text')) : ?>
                                                                <?php while (have_rows('default_descr_text')) : the_row(); ?>
                                                                    <div class="schedule__descr"><?php the_sub_field('default_descr_text_en'); ?></div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <button class="schedule__button" id="first-btn">Watch in full</button>
                    </div>
                    <div class="schedule__content">
                        <h3 class="schedule__subtitle">DAY 2 - CX WORLD 2024 CONFERENCE - 25 JANUARY</h3>
                        <?php query_posts('p=361'); ?>
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php if (have_rows('content')) : ?>
                                    <ul class="schedule__list">
                                        <?php while (have_rows('content')) : the_row(); ?>
                                            <?php if (get_sub_field('content_type') == 'var1') : ?>
                                                <li class="schedule__item orange">
                                                    <?php if (have_rows('accented_line')) : ?>
                                                        <?php while (have_rows('accented_line')) : the_row(); ?>
                                                            <div class="schedule__time"><?php the_sub_field('accented_time'); ?></div>
                                                            <?php if (have_rows('accented_main_text')) : ?>
                                                                <?php while (have_rows('accented_main_text')) : the_row(); ?>
                                                                    <div class="schedule__event">
                                                                        <?php the_sub_field('accented_main_text_orange_en'); ?>
                                                                        <?php if (get_sub_field('accented_main_text_black_en')) : ?>
                                                                            <p><span><?php the_sub_field('accented_main_text_black_en'); ?></span></p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            <?php if (have_rows('accented_descr_text')) : ?>
                                                                <?php while (have_rows('accented_descr_text')) : the_row(); ?>
                                                                    <div class="schedule__descr"><?php the_sub_field('accented_descr_text_en'); ?></div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php elseif (get_sub_field('content_type') == 'var2') : ?>
                                                <li class="schedule__item">
                                                    <?php if (have_rows('default_line')) : ?>
                                                        <?php while (have_rows('default_line')) : the_row(); ?>
                                                            <?php if (have_rows('default_time_block')) : ?>
                                                                <?php while (have_rows('default_time_block')) : the_row(); ?>
                                                                    <div class="schedule__time"><?php the_sub_field('default_time'); ?>
                                                                        <?php if (get_sub_field('default_time_description_en')) : ?>
                                                                            <p><?php the_sub_field('default_time_description_en'); ?></p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            <?php if (have_rows('default_main_text')) : ?>
                                                                <?php while (have_rows('default_main_text')) : the_row(); ?>
                                                                    <div class="schedule__event">
                                                                        <?php the_sub_field('default_main_text_en'); ?>
                                                                        <?php if (have_rows('default_text_content')) : ?>
                                                                            <?php while (have_rows('default_text_content')) : the_row(); ?>
                                                                                <?php if (get_sub_field('default_text_content_type') == 'var1') : ?>
                                                                                    <?php if (have_rows('text_content')) : ?>
                                                                                        <?php while (have_rows('text_content')) : the_row(); ?>
                                                                                            <p>
                                                                                                <span><?php the_sub_field('text_content_bold_en'); ?></span>
                                                                                                <?php if (get_sub_field('text_content_light_en')) : ?>
                                                                                                    <?php the_sub_field('text_content_light_en'); ?>
                                                                                                <?php endif; ?>
                                                                                            </p>
                                                                                        <?php endwhile; ?>
                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>
                                                                                <?php if (get_sub_field('default_text_content_type') == 'var2') : ?>
                                                                                    <?php if (have_rows('list_item')) : ?>
                                                                                        <?php while (have_rows('list_item')) : the_row(); ?>
                                                                                            <p style="font-weight: 750;margin-top: 5px;">&#8226; <?php the_sub_field('list_item_en'); ?></p>
                                                                                        <?php endwhile; ?>
                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>
                                                                            <?php endwhile; ?>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                            <?php if (have_rows('default_descr_text')) : ?>
                                                                <?php while (have_rows('default_descr_text')) : the_row(); ?>
                                                                    <div class="schedule__descr"><?php the_sub_field('default_descr_text_en'); ?></div>
                                                                <?php endwhile; ?>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <button class="schedule__button" id="second-btn">Watch in full</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="awards-tickets-wrapper">
        <!-- <section class="awards" id="awards">
            <div class="container">
                <div class="awards__wrapper">
                    <h2 class="awards__title title">Awards</h2>
                    <div class="awards__logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/awards/logo.png" alt="logo">
                    </div>
                </div>

                <div class="awards__slider swiper">
                    <ul class="awards__list swiper-wrapper">
                        <li class="awards__item swiper-slide">
                            <div class="awards__text">The best benchmarking</div>
                            <div class="awards__icon">
                                <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Frame 99" clip-path="url(#clip0_178_507)">
                                        <path id="Vector" d="M45.3207 26.1286V17.5977C45.3207 6.93405 41.0552 2.66858 30.3915 2.66858H17.5951C6.93148 2.66858 2.66602 6.93405 2.66602 17.5977V30.3941C2.66602 41.0578 6.93148 45.3232 17.5951 45.3232H26.1261" stroke="#FF9F18" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_2" d="M14.0352 29.3064L19.1111 22.7163C19.8362 21.7779 21.1799 21.6072 22.1183 22.3324L26.0212 25.4035C26.9596 26.1286 28.3032 25.958 29.0283 25.0409L33.9549 18.6854" stroke="#FF9F18" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_3" d="M39.9503 32.1427L40.5474 33.3583C40.846 33.9555 41.5925 34.51 42.2536 34.638L43.0641 34.7659C45.4954 35.1712 46.0712 36.9627 44.3224 38.7328L43.5759 39.4793C43.0854 39.9911 42.8081 40.9722 42.9574 41.6547L43.0641 42.1025C43.7252 45.0457 42.1683 46.1761 39.609 44.6405L39.0545 44.3206C38.3934 43.9367 37.327 43.9367 36.6659 44.3206L36.1113 44.6405C33.5307 46.1974 31.9738 45.0457 32.6563 42.1025L32.7627 41.6547C32.912 40.9722 32.635 39.9911 32.1445 39.4793L31.398 38.7328C29.6492 36.9627 30.225 35.1712 32.6563 34.7659L33.4668 34.638C34.1066 34.5313 34.8744 33.9555 35.1729 33.3583L35.7701 32.1427C36.9218 29.818 38.7986 29.818 39.9503 32.1427Z" stroke="#FF9F18" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_178_507">
                                            <rect width="48" height="48" fill="white" transform="translate(0 0.00195312)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </li>

                        <li class="awards__item swiper-slide">
                            <div class="awards__text">The best business events</div>
                            <div class="awards__icon">
                                <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_497_370" fill="white">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.88281 32.475C9.88281 29.3606 12.4155 26.8279 15.5299 26.8279H18.3534V21.1808H15.5299C12.4155 21.1808 9.88281 18.6481 9.88281 15.5338C9.88281 12.4194 12.4155 9.88672 15.5299 9.88672C17.0219 9.88856 18.4526 10.4803 19.5099 11.5329C20.5673 12.5855 21.1655 14.0136 21.1741 15.5055H21.1769V18.3573H26.824V15.5338C26.824 12.4194 29.3567 9.88672 32.471 9.88672C35.5854 9.88672 38.1181 12.4194 38.1181 15.5338C38.1181 18.6481 35.5854 21.1808 32.471 21.1808H29.6475V26.8279H32.471C35.5854 26.8279 38.1181 29.3606 38.1181 32.475C38.1181 35.5893 35.5854 38.122 32.471 38.122C30.984 38.1199 29.5578 37.5316 28.5018 36.4847C27.4457 35.4379 26.8449 34.0169 26.8296 32.53H26.824V29.6514H21.1769V32.5032H21.1741C21.1655 33.9952 20.5673 35.4232 19.5099 36.4758C18.4526 37.5284 17.0219 38.1202 15.5299 38.122C12.4155 38.122 9.88281 35.5893 9.88281 32.475ZM15.5299 35.2985C17.1125 35.2985 18.3534 34.059 18.3534 32.475V29.6514H15.5299C13.9473 29.6514 12.7063 30.891 12.7063 32.475C12.7063 34.059 13.9473 35.2985 15.5299 35.2985ZM35.2946 32.475C35.2946 30.891 34.0536 29.6514 32.471 29.6514H29.6475V32.475C29.6475 34.059 30.8885 35.2985 32.471 35.2985C34.0536 35.2985 35.2946 34.059 35.2946 32.475ZM32.471 12.7102C30.8885 12.7102 29.6475 13.9498 29.6475 15.5338V18.3573H32.471C34.0536 18.3573 35.2946 17.1178 35.2946 15.5338C35.2946 13.9498 34.0536 12.7102 32.471 12.7102ZM12.7063 15.5338C12.7063 17.1178 13.9473 18.3573 15.5299 18.3573H18.3534V15.5338C18.3534 13.9498 17.1125 12.7102 15.5299 12.7102C13.9473 12.7102 12.7063 13.9498 12.7063 15.5338ZM26.824 21.1808H21.1769V26.8279H26.824V21.1808Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.2766C0 4.60316 4.59926 0.00390625 10.2727 0.00390625H37.7273C43.4007 0.00390625 48 4.60316 48 10.2766V37.7312C48 43.4046 43.4007 48.0039 37.7273 48.0039H10.2727C4.59926 48.0039 0 43.4046 0 37.7312V10.2766ZM10.2727 3.42815H37.7273C41.5096 3.42815 44.5758 6.49432 44.5758 10.2766V37.7312C44.5758 41.5135 41.5096 44.5797 37.7273 44.5797H10.2727C6.49041 44.5797 3.42424 41.5135 3.42424 37.7312V10.2766C3.42424 6.49432 6.49041 3.42815 10.2727 3.42815Z" />
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.88281 32.475C9.88281 29.3606 12.4155 26.8279 15.5299 26.8279H18.3534V21.1808H15.5299C12.4155 21.1808 9.88281 18.6481 9.88281 15.5338C9.88281 12.4194 12.4155 9.88672 15.5299 9.88672C17.0219 9.88856 18.4526 10.4803 19.5099 11.5329C20.5673 12.5855 21.1655 14.0136 21.1741 15.5055H21.1769V18.3573H26.824V15.5338C26.824 12.4194 29.3567 9.88672 32.471 9.88672C35.5854 9.88672 38.1181 12.4194 38.1181 15.5338C38.1181 18.6481 35.5854 21.1808 32.471 21.1808H29.6475V26.8279H32.471C35.5854 26.8279 38.1181 29.3606 38.1181 32.475C38.1181 35.5893 35.5854 38.122 32.471 38.122C30.984 38.1199 29.5578 37.5316 28.5018 36.4847C27.4457 35.4379 26.8449 34.0169 26.8296 32.53H26.824V29.6514H21.1769V32.5032H21.1741C21.1655 33.9952 20.5673 35.4232 19.5099 36.4758C18.4526 37.5284 17.0219 38.1202 15.5299 38.122C12.4155 38.122 9.88281 35.5893 9.88281 32.475ZM15.5299 35.2985C17.1125 35.2985 18.3534 34.059 18.3534 32.475V29.6514H15.5299C13.9473 29.6514 12.7063 30.891 12.7063 32.475C12.7063 34.059 13.9473 35.2985 15.5299 35.2985ZM35.2946 32.475C35.2946 30.891 34.0536 29.6514 32.471 29.6514H29.6475V32.475C29.6475 34.059 30.8885 35.2985 32.471 35.2985C34.0536 35.2985 35.2946 34.059 35.2946 32.475ZM32.471 12.7102C30.8885 12.7102 29.6475 13.9498 29.6475 15.5338V18.3573H32.471C34.0536 18.3573 35.2946 17.1178 35.2946 15.5338C35.2946 13.9498 34.0536 12.7102 32.471 12.7102ZM12.7063 15.5338C12.7063 17.1178 13.9473 18.3573 15.5299 18.3573H18.3534V15.5338C18.3534 13.9498 17.1125 12.7102 15.5299 12.7102C13.9473 12.7102 12.7063 13.9498 12.7063 15.5338ZM26.824 21.1808H21.1769V26.8279H26.824V21.1808Z" fill="#FF9F18" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.2766C0 4.60316 4.59926 0.00390625 10.2727 0.00390625H37.7273C43.4007 0.00390625 48 4.60316 48 10.2766V37.7312C48 43.4046 43.4007 48.0039 37.7273 48.0039H10.2727C4.59926 48.0039 0 43.4046 0 37.7312V10.2766ZM10.2727 3.42815H37.7273C41.5096 3.42815 44.5758 6.49432 44.5758 10.2766V37.7312C44.5758 41.5135 41.5096 44.5797 37.7273 44.5797H10.2727C6.49041 44.5797 3.42424 41.5135 3.42424 37.7312V10.2766C3.42424 6.49432 6.49041 3.42815 10.2727 3.42815Z" fill="#FF9F18" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.88281 32.475C9.88281 29.3606 12.4155 26.8279 15.5299 26.8279H18.3534V21.1808H15.5299C12.4155 21.1808 9.88281 18.6481 9.88281 15.5338C9.88281 12.4194 12.4155 9.88672 15.5299 9.88672C17.0219 9.88856 18.4526 10.4803 19.5099 11.5329C20.5673 12.5855 21.1655 14.0136 21.1741 15.5055H21.1769V18.3573H26.824V15.5338C26.824 12.4194 29.3567 9.88672 32.471 9.88672C35.5854 9.88672 38.1181 12.4194 38.1181 15.5338C38.1181 18.6481 35.5854 21.1808 32.471 21.1808H29.6475V26.8279H32.471C35.5854 26.8279 38.1181 29.3606 38.1181 32.475C38.1181 35.5893 35.5854 38.122 32.471 38.122C30.984 38.1199 29.5578 37.5316 28.5018 36.4847C27.4457 35.4379 26.8449 34.0169 26.8296 32.53H26.824V29.6514H21.1769V32.5032H21.1741C21.1655 33.9952 20.5673 35.4232 19.5099 36.4758C18.4526 37.5284 17.0219 38.1202 15.5299 38.122C12.4155 38.122 9.88281 35.5893 9.88281 32.475ZM15.5299 35.2985C17.1125 35.2985 18.3534 34.059 18.3534 32.475V29.6514H15.5299C13.9473 29.6514 12.7063 30.891 12.7063 32.475C12.7063 34.059 13.9473 35.2985 15.5299 35.2985ZM35.2946 32.475C35.2946 30.891 34.0536 29.6514 32.471 29.6514H29.6475V32.475C29.6475 34.059 30.8885 35.2985 32.471 35.2985C34.0536 35.2985 35.2946 34.059 35.2946 32.475ZM32.471 12.7102C30.8885 12.7102 29.6475 13.9498 29.6475 15.5338V18.3573H32.471C34.0536 18.3573 35.2946 17.1178 35.2946 15.5338C35.2946 13.9498 34.0536 12.7102 32.471 12.7102ZM12.7063 15.5338C12.7063 17.1178 13.9473 18.3573 15.5299 18.3573H18.3534V15.5338C18.3534 13.9498 17.1125 12.7102 15.5299 12.7102C13.9473 12.7102 12.7063 13.9498 12.7063 15.5338ZM26.824 21.1808H21.1769V26.8279H26.824V21.1808Z" stroke="#FF9F18" stroke-width="3.42424" mask="url(#path-1-inside-1_497_370)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 10.2766C0 4.60316 4.59926 0.00390625 10.2727 0.00390625H37.7273C43.4007 0.00390625 48 4.60316 48 10.2766V37.7312C48 43.4046 43.4007 48.0039 37.7273 48.0039H10.2727C4.59926 48.0039 0 43.4046 0 37.7312V10.2766ZM10.2727 3.42815H37.7273C41.5096 3.42815 44.5758 6.49432 44.5758 10.2766V37.7312C44.5758 41.5135 41.5096 44.5797 37.7273 44.5797H10.2727C6.49041 44.5797 3.42424 41.5135 3.42424 37.7312V10.2766C3.42424 6.49432 6.49041 3.42815 10.2727 3.42815Z" stroke="#FF9F18" stroke-width="3.42424" mask="url(#path-1-inside-1_497_370)" />
                                </svg>
                            </div>
                        </li>

                        <li class="awards__item swiper-slide">
                            <div class="awards__text">The best business leaders</div>
                            <div class="awards__icon">
                                <svg width="53" height="59" viewBox="0 0 53 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Frame 97" clip-path="url(#clip0_178_515)">
                                        <path id="Vector" d="M2.35547 21.5603V36.9708C2.35547 42.6141 2.35547 42.6141 7.67973 46.2109L22.3214 54.6758C24.5192 55.9471 28.11 55.9471 30.3078 54.6758L44.9496 46.2109C50.2738 42.6141 50.2738 42.6141 50.2738 36.9708V21.5603C50.2738 15.9172 50.2738 15.9172 44.9496 12.3204L30.3078 3.85544C28.11 2.58416 24.5192 2.58416 22.3214 3.85544L7.67973 12.3204C2.35547 15.9172 2.35547 15.9172 2.35547 21.5603Z" stroke="#FF9F18" stroke-width="4.26136" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_2" d="M28.2649 20.5911L30.0294 23.3507C30.308 23.7848 30.9271 24.2189 31.3914 24.343L34.5488 25.1491C36.499 25.6453 37.0252 27.3196 35.756 28.87L33.6821 31.3815C33.3725 31.7846 33.1249 32.4978 33.1558 32.9939L33.3416 36.2496C33.4654 38.2651 32.0414 39.2883 30.1841 38.5442L27.1506 37.3349C26.6862 37.1488 25.9124 37.1488 25.448 37.3349L22.4144 38.5442C20.5571 39.2883 19.1333 38.2341 19.2571 36.2496L19.4428 32.9939C19.4738 32.4978 19.2261 31.7536 18.9166 31.3815L16.8426 28.87C15.5734 27.3196 16.0997 25.6453 18.0498 25.1491L21.2072 24.343C21.7025 24.2189 22.3216 23.7538 22.5692 23.3507L24.3336 20.5911C25.448 18.9167 27.1815 18.9167 28.2649 20.5911Z" stroke="#FF9F18" stroke-width="4.26136" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_178_515">
                                            <rect width="52.3467" height="58" fill="white" transform="translate(0 0.00195312)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </li>

                        <li class="awards__item swiper-slide">
                            <div class="awards__text">The best practies</div>
                            <div class="awards__icon">
                                <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Group 107">
                                        <path id="Vector" d="M18.6432 39.0682C13.2851 39.0682 8.93164 34.7147 8.93164 29.3566C8.93164 24.9808 11.8787 21.1184 16.0982 19.9798C16.9242 19.7566 17.7725 20.1808 18.0851 20.9845C18.8218 22.8375 20.407 24.2664 22.327 24.7798C23.3763 25.0701 24.6265 25.0701 25.6758 24.7798C26.5019 24.5566 27.3726 24.9808 27.6851 25.7622C28.1316 26.9008 28.3549 28.1064 28.3549 29.3343C28.3549 32.1026 27.1716 34.7371 25.1177 36.5678C23.354 38.1752 21.0544 39.0682 18.6432 39.0682ZM15.7186 23.7082C13.6423 24.7798 12.2805 26.9454 12.2805 29.3566C12.2805 32.8617 15.1381 35.7194 18.6432 35.7194C20.2061 35.7194 21.7242 35.1389 22.8851 34.0896C24.247 32.884 25.0061 31.165 25.0061 29.3566C25.0061 28.9994 24.9837 28.6645 24.9168 28.3073C23.7335 28.4189 22.5279 28.3073 21.434 27.9947C19.0451 27.3473 16.9911 25.7845 15.7186 23.7082Z" fill="#FF9F18" />
                                        <path id="Vector_2" d="M23.9999 28.3593C23.1069 28.3593 22.2362 28.2476 21.4325 28.0244C18.5078 27.2207 16.0967 25.0551 14.9804 22.2421C14.5339 21.1034 14.3105 19.8979 14.3105 18.67C14.3105 13.3119 18.6641 8.95837 24.0223 8.95837C29.3804 8.95837 33.7339 13.3119 33.7339 18.67C33.7339 19.8979 33.5106 21.1034 33.0641 22.2421C31.9478 25.0774 29.5144 27.243 26.5897 28.0244C25.7637 28.2476 24.893 28.3593 23.9999 28.3593ZM23.9999 12.2849C20.4948 12.2849 17.6372 15.1426 17.6372 18.6477C17.6372 19.4514 17.7933 20.2551 18.0836 20.9918C18.8203 22.8448 20.4055 24.2737 22.3255 24.7872C23.3748 25.0774 24.6251 25.0774 25.6744 24.7872C27.6167 24.2514 29.2018 22.8448 29.9162 20.9918C30.2065 20.2551 30.3627 19.4514 30.3627 18.6477C30.3627 15.1426 27.5051 12.2849 23.9999 12.2849Z" fill="#FF9F18" />
                                        <path id="Vector_3" d="M29.3607 39.075C26.9495 39.075 24.65 38.182 22.8863 36.5746C22.5291 36.262 22.3281 35.7932 22.3281 35.3243C22.3281 34.8555 22.5291 34.3867 22.8863 34.0741C24.2258 32.8909 25.0072 31.1718 25.0072 29.3634C25.0072 28.5597 24.8509 27.756 24.5607 27.0192C24.3821 26.5727 24.4044 26.0816 24.6277 25.6574C24.8286 25.2332 25.2305 24.9206 25.677 24.7867C27.597 24.2509 29.1821 22.8443 29.9188 20.9913C30.2314 20.2099 31.0798 19.7634 31.9058 19.9867C36.1253 21.1253 39.0723 24.9876 39.0723 29.3634C39.0723 34.7216 34.7188 39.075 29.3607 39.075ZM26.503 35.0564C27.3737 35.5029 28.356 35.7262 29.3607 35.7262C32.8658 35.7262 35.7235 32.8685 35.7235 29.3634C35.7235 26.9523 34.3616 24.7867 32.2853 23.715C31.303 25.3225 29.8518 26.6174 28.1551 27.4211C28.2891 28.0462 28.356 28.6936 28.356 29.3634C28.356 31.4174 27.7086 33.4043 26.503 35.0564Z" fill="#FF9F18" />
                                        <path id="Vector_4" d="M30.6977 48.002H17.3023C5.17954 48.002 0 42.8224 0 30.6996V17.3043C0 5.18149 5.17954 0.00195312 17.3023 0.00195312H30.6977C42.8205 0.00195312 48 5.18149 48 17.3043V30.6996C48 42.8224 42.8205 48.002 30.6977 48.002ZM17.3023 3.35079C7.01023 3.35079 3.34884 7.01219 3.34884 17.3043V30.6996C3.34884 40.9917 7.01023 44.6531 17.3023 44.6531H30.6977C40.9898 44.6531 44.6512 40.9917 44.6512 30.6996V17.3043C44.6512 7.01219 40.9898 3.35079 30.6977 3.35079H17.3023Z" fill="#FF9F18" />
                                    </g>
                                </svg>
                            </div>
                        </li>

                        <li class="awards__item swiper-slide">
                            <div class="awards__text">The best knowledge base</div>
                            <div class="awards__icon">
                                <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Vector">
                                        <path d="M36 0.00195312H4C1.794 0.00195312 0 1.79595 0 4.00195V32.002C0 34.208 1.794 36.002 4 36.002H36C38.206 36.002 40 34.208 40 32.002V4.00195C40 1.79595 38.206 0.00195312 36 0.00195312ZM4 32.002V4.00195H18V32.002H4ZM22 32.002V4.00195H36L36.002 32.002H22Z" fill="#FF9F18" />
                                        <path d="M26 8.00195H32V12.002H26V8.00195ZM26 16.002H32V20.002H26V16.002Z" fill="#FF9F18" />
                                    </g>
                                </svg>
                            </div>
                        </li>

                        <li class="awards__item swiper-slide awards__item--get">
                            <svg width="497" height="353" viewBox="0 0 497 353" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M117.439 109.683V145.203C108.607 149.811 98.9115 151.731 88.9275 151.731C67.7115 151.731 52.2555 137.811 52.2555 116.019C52.2555 94.2272 67.7115 80.3072 88.9275 80.3072C99.6795 80.3072 109.183 82.7072 115.999 89.0432L105.439 100.563C101.407 96.3392 96.5115 94.1312 88.9275 94.1312C76.1595 94.1312 67.8075 103.347 67.8075 116.019C67.8075 128.691 76.1595 137.907 88.9275 137.907C95.4555 137.907 100.255 136.083 103.039 134.547V123.507H90.8475V109.683H117.439ZM131.198 150.003V82.0352H177.374V95.8592H146.174V108.531H175.646V122.355H146.174V136.179H179.102V150.003H131.198ZM204.243 150.003V95.2832H184.851V82.0352H238.611V95.2832H219.219V150.003H204.243ZM69.0555 265.003V210.283H49.6635V197.035H103.423V210.283H84.0315V265.003H69.0555ZM110.836 265.003V197.035H125.812V265.003H110.836ZM195.403 205.291L183.883 214.699C180.907 211.147 176.587 209.131 171.019 209.131C159.691 209.131 151.339 218.347 151.339 231.019C151.339 243.691 159.691 252.907 170.539 252.907C176.587 252.907 181.483 250.219 184.555 245.611L197.035 254.923C191.371 262.987 181.771 266.731 172.459 266.731C151.243 266.731 135.787 252.811 135.787 231.019C135.787 209.227 151.243 195.307 172.459 195.307C180.043 195.307 189.643 197.899 195.403 205.291ZM205.729 265.003V197.035H220.705V225.259L247.105 197.035H266.689L236.449 228.619L269.281 265.003H248.353L220.705 232.747V265.003H205.729ZM275.011 265.003V197.035H321.187V210.859H289.987V223.531H319.459V237.355H289.987V251.179H322.915V265.003H275.011ZM348.055 265.003V210.283H328.663V197.035H382.423V210.283H363.031V265.003H348.055ZM433.9 202.411L423.628 213.643C421.228 210.571 416.428 209.131 412.78 209.131C408.556 209.131 402.7 211.051 402.7 216.139C402.7 228.523 433.996 220.555 433.996 244.363C433.996 259.531 421.804 266.731 407.788 266.731C399.052 266.731 391.372 264.139 384.94 258.187L395.596 246.475C398.668 250.507 403.66 252.907 408.652 252.907C413.548 252.907 419.02 250.603 419.02 245.803C419.02 233.323 387.148 240.043 387.148 217.387C387.148 202.891 399.724 195.307 413.068 195.307C420.748 195.307 428.14 197.323 433.9 202.411Z" fill="white" />
                                <path d="M260.411 150.003L315.199 150.003C316.535 150.003 317.618 148.92 317.618 147.584L317.618 131.906C317.618 130.57 316.535 129.487 315.199 129.487L292.934 129.487L323.281 99.1401C324.226 98.1952 324.226 96.6633 323.281 95.7184L312.277 84.7142C311.332 83.7694 309.8 83.7694 308.855 84.7142L278.508 115.061L278.508 92.4755C278.508 91.1393 277.425 90.0561 276.089 90.0561L260.411 90.0561C259.075 90.0561 257.992 91.1393 257.992 92.4755L257.992 147.584C257.992 148.92 259.075 150.003 260.411 150.003Z" stroke="#FF9F18" />
                                <path d="M260.412 68.0043L315.2 68.0043C316.536 68.0043 317.619 66.921 317.619 65.5848L317.619 49.907C317.619 48.5708 316.536 47.4875 315.2 47.4875L292.935 47.4875L323.281 17.1409C324.226 16.1961 324.226 14.6642 323.281 13.7193L312.277 2.71508C311.332 1.77022 309.8 1.77022 308.856 2.71508L278.509 33.0617L278.509 10.4764C278.509 9.14013 277.426 8.0569 276.089 8.0569L260.412 8.0569C259.075 8.0569 257.992 9.14013 257.992 10.4764L257.992 65.5848C257.992 66.921 259.075 68.0043 260.412 68.0043Z" stroke="#FF9F18" />
                                <path d="M432.412 68.0043L487.2 68.0043C488.536 68.0043 489.619 66.921 489.619 65.5848L489.619 49.907C489.619 48.5708 488.536 47.4875 487.2 47.4875L464.935 47.4875L495.281 17.1409C496.226 16.1961 496.226 14.6642 495.281 13.7193L484.277 2.71508C483.332 1.77022 481.8 1.77022 480.856 2.71508L450.509 33.0617L450.509 10.4764C450.509 9.14013 449.426 8.0569 448.089 8.0569L432.412 8.0569C431.075 8.0569 429.992 9.14013 429.992 10.4764L429.992 65.5848C429.992 66.921 431.075 68.0043 432.412 68.0043Z" stroke="#FF9F18" />
                                <path d="M174.411 352.003L229.199 352.003C230.535 352.003 231.618 350.92 231.618 349.584L231.618 333.906C231.618 332.57 230.535 331.487 229.199 331.487L206.934 331.487L237.28 301.14C238.225 300.195 238.225 298.663 237.28 297.718L226.276 286.714C225.331 285.769 223.799 285.769 222.855 286.714L192.508 317.061L192.508 294.475C192.508 293.139 191.425 292.056 190.089 292.056L174.411 292.056C173.074 292.056 171.991 293.139 171.991 294.475L171.991 349.584C171.991 350.92 173.074 352.003 174.411 352.003Z" stroke="#FF9F18" />
                                <path d="M432.412 352.003L487.2 352.003C488.536 352.003 489.619 350.92 489.619 349.584L489.619 333.906C489.619 332.57 488.536 331.487 487.2 331.487L464.935 331.487L495.281 301.14C496.226 300.195 496.226 298.663 495.281 297.718L484.277 286.714C483.332 285.769 481.8 285.769 480.856 286.714L450.509 317.061L450.509 294.475C450.509 293.139 449.426 292.056 448.089 292.056L432.412 292.056C431.075 292.056 429.992 293.139 429.992 294.475L429.992 349.584C429.992 350.92 431.075 352.003 432.412 352.003Z" stroke="#FF9F18" />
                                <path d="M88.4111 68.0043L143.199 68.0043C144.535 68.0043 145.618 66.921 145.618 65.5848L145.618 49.907C145.618 48.5708 144.535 47.4875 143.199 47.4875L120.934 47.4875L151.281 17.1409C152.226 16.1961 152.226 14.6642 151.281 13.7193L140.277 2.71508C139.332 1.77022 137.8 1.77022 136.855 2.71508L106.508 33.0617L106.508 10.4764C106.508 9.14013 105.425 8.0569 104.089 8.0569L88.4112 8.0569C87.0749 8.0569 85.9917 9.14013 85.9917 10.4764L85.9917 65.5848C85.9917 66.921 87.0749 68.0043 88.4111 68.0043Z" stroke="#FF9F18" />
                                <path d="M346.411 150.003L401.199 150.003C402.535 150.003 403.618 148.92 403.618 147.584L403.618 131.906C403.618 130.57 402.535 129.487 401.199 129.487L378.934 129.487L409.281 99.1401C410.226 98.1952 410.226 96.6633 409.281 95.7184L398.277 84.7142C397.332 83.7694 395.8 83.7694 394.855 84.7142L364.508 115.061L364.508 92.4755C364.508 91.1393 363.425 90.0561 362.089 90.0561L346.411 90.0561C345.075 90.0561 343.992 91.1393 343.992 92.4755L343.992 147.584C343.992 148.92 345.075 150.003 346.411 150.003Z" fill="#FF9F18" />
                                <path d="M346.412 68.0043L401.2 68.0043C402.536 68.0043 403.619 66.921 403.619 65.5848L403.619 49.907C403.619 48.5708 402.536 47.4875 401.2 47.4875L378.935 47.4875L409.281 17.1409C410.226 16.1961 410.226 14.6642 409.281 13.7193L398.277 2.71508C397.332 1.77022 395.8 1.77022 394.856 2.71508L364.509 33.0617L364.509 10.4764C364.509 9.14013 363.426 8.0569 362.089 8.0569L346.412 8.0569C345.075 8.0569 343.992 9.14013 343.992 10.4764L343.992 65.5848C343.992 66.921 345.075 68.0043 346.412 68.0043Z" fill="#FF9F18" />
                                <path d="M2.41945 67.998L57.2073 67.998C58.5436 67.998 59.6268 66.9148 59.6268 65.5786L59.6268 49.9008C59.6268 48.5645 58.5436 47.4813 57.2073 47.4813L34.9426 47.4813L65.2892 17.1347C66.234 16.1898 66.2341 14.6579 65.2892 13.7131L54.285 2.70885C53.3401 1.764 51.8082 1.764 50.8634 2.70885L20.5167 33.0555L20.5168 10.4701C20.5168 9.1339 19.4335 8.05067 18.0973 8.05067L2.41945 8.05067C1.08323 8.05067 5.14607e-06 9.1339 5.02925e-06 10.4701L2.11515e-07 65.5786C9.46986e-08 66.9148 1.08322 67.998 2.41945 67.998Z" fill="#FF9F18" />
                                <path d="M260.412 352.003L315.2 352.003C316.536 352.003 317.619 350.92 317.619 349.584L317.619 333.906C317.619 332.57 316.536 331.487 315.2 331.487L292.935 331.487L323.281 301.14C324.226 300.195 324.226 298.663 323.281 297.718L312.277 286.714C311.332 285.769 309.8 285.769 308.856 286.714L278.509 317.061L278.509 294.475C278.509 293.139 277.426 292.056 276.089 292.056L260.412 292.056C259.075 292.056 257.992 293.139 257.992 294.475L257.992 349.584C257.992 350.92 259.075 352.003 260.412 352.003Z" fill="#FF9F18" />
                            </svg>

                        </li>
                    </ul>
                </div>
            </div>
        </section> -->

        <section class="tickets" id="tickets">
            <div class="container">
                <h2 class="tickets__title title">Tickets</h2>

                <div class="tickets__inner">
                    <div class="tickets__content">
                        <div class="tickets__box">
                            <p>
                                Exhibition fees: FREE
                            </p>
                            <a class="tickets__btn" href="/?add-to-cart=133">Registration</a>
                        </div>
                        <div class="tickets__box">
                            <p>Conference fees: 999 SAR</p>
                            <a class="tickets__btn" href="/?add-to-cart=134">Buy Tickets</a>
                        </div>
                        <!-- <div class="tickets__box">
                            <p class="tickets__buy-text">Saudicxa 2024 tickets
                                please click here</p>
                            <a class="tickets__btn" href="https://saudicxa.com/home" target="_blank">Buy Tickets For Award </a>
                        </div>

                        <p class="tickets__descr">You need <a href="#" target="_blank">discount code</a> for free until 31 December.</p> -->
                    </div>
                    <div class="tickets__img-box">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/tickets/tickets-arrows.svg" alt="arrows">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="gallery" id="galery">
        <div class="container">
            <div class="gallery__wrap">
                <h2 class="gallery__title title">gallery</h2>
                <div class="gallery__arrows">
                    <div class="gallery__prev">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="99" y="99" width="98" height="98" rx="49" transform="rotate(-180 99 99)" stroke="white" stroke-opacity="0.5" stroke-width="2" />
                            <path d="M25.9028 50.9028L46.346 71.346C46.8446 71.8446 47.653 71.8446 48.1516 71.346L54.0015 65.4961C54.5001 64.9975 54.5001 64.1891 54.0015 63.6905L45.6938 55.3828L68.3405 55.3828C69.0456 55.3828 69.6172 54.8112 69.6172 54.1061L69.6172 45.894C69.6172 45.1888 69.0456 44.6172 68.3405 44.6172L45.6938 44.6172L54.1211 36.1899C54.6197 35.6913 54.6197 34.8829 54.1211 34.3843L48.2712 28.5344C47.7726 28.0358 46.9642 28.0358 46.4656 28.5344L25.9028 49.0972C25.4042 49.5958 25.4042 50.4042 25.9028 50.9028Z" fill="white" />
                        </svg>
                    </div>
                    <div class="gallery__next">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="98" height="98" rx="49" fill="#FF9F18" stroke="#FF9F18" stroke-width="2" />
                            <path d="M74.0972 49.0972L53.654 28.654C53.1554 28.1554 52.347 28.1554 51.8484 28.654L45.9985 34.5039C45.4999 35.0025 45.4999 35.8109 45.9985 36.3095L54.3062 44.6172L31.6595 44.6172C30.9544 44.6172 30.3828 45.1888 30.3828 45.8939L30.3828 54.106C30.3828 54.8112 30.9544 55.3828 31.6595 55.3828L54.3062 55.3828L45.8789 63.8101C45.3803 64.3087 45.3803 65.1171 45.8789 65.6157L51.7288 71.4656C52.2274 71.9642 53.0358 71.9642 53.5344 71.4656L74.0972 50.9028C74.5958 50.4042 74.5958 49.5958 74.0972 49.0972Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery__swiper swiper">
            <ul class="gallery__list swiper-wrapper">
                <?php
                $my_posts = get_posts(array(
                    'numberposts' => -1,
                    'category_name'    => 'gallery',
                    'orderby'     => 'date',
                    'order'       => 'DSC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ));

                global $post;

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                ?>

                    <?php $slider_urls = get_field('gallery_images'); ?>
                    <?php if ($slider_urls) :  ?>
                        <?php foreach ($slider_urls as $slider_url) : ?>
                            <li class="gallery__item swiper-slide">
                                <img src="<?php echo esc_url($slider_url); ?>" alt="">
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php
                }

                wp_reset_postdata();
                ?>

            </ul>
        </div>

    </section>
    <section class="room">
        <div class="container">
            <h2 class="room__title title">room map</h2>
            <div class="room__img-box">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/room-map.png" alt="room map">
            </div>
        </div>
    </section>
    <section class="news" id="news">
        <div class="container">
            <h2 class="news__title title">Latest News</h2>
            <div class="news__swiper swiper">
                <ul class="news__list swiper-wrapper">

                    <?php
                    $my_posts = get_posts(array(
                        'numberposts' => -1,
                        'category_name'    => 'news',
                        'orderby'     => 'date',
                        'order'       => 'DSC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ));

                    global $post;

                    foreach ($my_posts as $post) {
                        setup_postdata($post);
                    ?>
                        <li class="news__item swiper-slide">
                            <div class="news__img-box">
                                <img src="<?php the_field('news_image'); ?>" alt="photos from the conference" />
                            </div>
                            <div class="news__content">
                                <h3 class="news__subtitle"><?php the_field('news_title_en'); ?></h3>
                                <div class="news__text">
                                    <p>
                                        <?php the_field('news_description_en'); ?>
                                    </p>
                                </div>
                                <button class="news__btn" type="button">
                                    <span class="sr-only">show text</span>
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="Group 126">
                                            <rect id="Rectangle 2" x="49.5" y="0.5" width="49" height="49" rx="24.5" transform="rotate(90 49.5 0.5)" fill="#FF9F18" stroke="#FF9F18" />
                                            <path id="Vector 8" d="M25.4514 37.0486L35.673 26.827C35.9223 26.5777 35.9223 26.1735 35.673 25.9242L32.748 22.9992C32.4987 22.7499 32.0946 22.7499 31.8453 22.9992L27.6914 27.1531L27.6914 15.8298C27.6914 15.4772 27.4056 15.1914 27.053 15.1914L22.947 15.1914C22.5944 15.1914 22.3086 15.4772 22.3086 15.8298L22.3086 27.1531L18.0949 22.9394C17.8456 22.6901 17.4415 22.6901 17.1922 22.9394L14.2672 25.8644C14.0179 26.1137 14.0179 26.5179 14.2672 26.7672L24.5486 37.0486C24.7979 37.2979 25.2021 37.2979 25.4514 37.0486Z" fill="white" />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </li>
                    <?php
                    }

                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="partners" id="partners">
        <div class="container">
            <h2 class="partners__title title">Partners</h2>

            <div class="partners__inner">
                <div class="partners__box">
                    <div class="partners__subtitle">main sponsors</div>
                    <ul class="partners__list">
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/sublogo.png" alt="logo saudi cx association" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/sponsor-2.png" alt="logo cx" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/sponsor-3.png" alt="logo saudi customer experience awarads" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/sponsor-4.png" alt="logo awards international" />
                        </li>
                    </ul>
                </div>

                <div class="partners__box">
                    <div class="partners__subtitle">Forum Partners</div>
                    <ul class="partners__list">
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/forum-1.png" alt="logo middle east" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/partner-4.png" alt="logo wow" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/forum-3.png" alt="logo cipher" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/forum-4.png" alt="logo survey connect" />
                        </li>
                    </ul>
                </div>

                <div class="partners__box">
                    <div class="partners__subtitle">Partners</div>
                    <ul class="partners__list">
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/partner-1.png" alt="logo question pro" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/forum-2.png" alt="logo interkey" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/partner-2.png" alt="logo good data" />
                        </li>
                        <li class="partners__item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/partners/partner-3.png" alt="logo moengage" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="wrap">
        <section class="contact" id="feedback">
            <div class="container">
                <h2 class="contact__title title">Contact us</h2>

                <form class="contact__form" action="#" id="form">
                    <label class="contact__label">
                        <span class="sr-only">First Name</span>
                        <input class="contact__input" type="text" placeholder="First Name*" name="name">
                    </label>

                    <label class="contact__label">
                        <span class="sr-only">Last Name</span>
                        <input class="contact__input" type="text" placeholder="Last Name*" name="last-name">
                    </label>

                    <label class="contact__label">
                        <span class="sr-only">Mobile Number</span>
                        <input class="contact__input" type="text" placeholder="Mobile Number*" name="mobile-number">
                    </label>

                    <label class="contact__label">
                        <span class="sr-only">Email</span>
                        <input class="contact__input" type="text" placeholder="Email*" name="email">
                    </label>

                    <label class="contact__label">
                        <span class="sr-only">Company Name</span>
                        <input class="contact__input" type="text" placeholder="Company Name*" name="company-name">
                    </label>

                    <label class="contact__label">
                        <span class="sr-only">Title</span>
                        <input class="contact__input" type="text" placeholder="Title*" name="title">
                    </label>

                    <label class="contact__label-text">
                        <span class="sr-only">Description</span>
                        <textarea class="contact__textarea" placeholder="Description" rows="1" name="description"></textarea>
                    </label>

                    <p class="contact__text"></p>
                    <button class="contact__btn disable" disabled="true" type="submit">Send</button>
                </form>
            </div>
        </section>
        <section class="response hidden">
            <div class="container">
                <div class="response__wrapper">
                    <h2 class="response__title title">Your application has been sent</h2>
                    <h3 class="response__subtitle">Our managers will contact you soon</h3>
                    <button class="response__btn">Resend the form</button>
                </div>
            </div>
        </section>
    </div>

    <section class="location" id="location">
        <div class="container">
            <h2 class="location__title title">location map</h2>

            <div class="location__inner">
                <div class="location__info">
                    <p class="location__place">
                        Riyadh, the arena Gharnatah <br>
                    24 – 25 JAN 2024<br>
09:00 AM to 06:00 PM

                    </p>

                    <div class="location__transport">
                        <p class="location__road">Imam abdullah bin saud bin abdulaziz road, Gharnatah, Riyadh 13241</p>
                    </div>

                    <div class="location__bottom">
                        <div class="location__support">Support Service</div>
                        <a class="location__tel" href="tel:+966582970968">+966 58 297 0968</a>
                    </div>
                </div>
                <div class="location__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.5147537737585!2d46.729144375994764!3d24.777821348558206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2efde8f1cd0b5d%3A0x4992b4380d1f29e5!2zVGhlIEFyZW5hIFJpeWFkaCBWZW51ZSBmb3IgRXhoaWJpdGlvbnMgfCDZhdix2YPYsiDYsNmKINij2LHZitmG2Kcg2KfZhNix2YrYp9i2INmE2YTZhdi52KfYsdi2INmI2KfZhNmB2LnYp9mE2YrYp9iq!5e0!3m2!1sen!2sru!4v1692604941044!5m2!1sen!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="modal">
        <div class="container">
            <div class="modal__wrapper">
                <div class="modal__header">
                    <div class="modal__logo">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/modal/logo.png" alt="logo">
                    </div>
                    <div class="modal__descr">
                        <p>Exhibition fees: FREE</p>
                        <p>Conference fees : 150 SR</p>
                    </div>
                    <div class="modal__close">
                        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="98" height="98" rx="49" fill="#FF9F18" stroke="#FF9F18" stroke-width="2" />
                            <path d="M51.119 41.0586C50.5338 41.6413 49.5875 41.6413 49.0023 41.0586L36.2669 28.3778C35.7611 27.8741 34.941 27.8741 34.4352 28.3778L28.5007 34.2868C27.9949 34.7905 27.9949 35.607 28.5007 36.1107L36.9288 44.5024L41.3299 49.0441C41.8141 49.5438 41.8141 50.3354 41.3299 50.8351L36.9286 55.3768L28.3794 63.8894C27.8736 64.393 27.8735 65.2095 28.3793 65.7132L34.3139 71.6223C34.8197 72.1259 35.6397 72.1259 36.1455 71.6223L48.881 58.9414C49.4662 58.3587 50.4125 58.3587 50.9977 58.9414L63.7331 71.6222C64.2389 72.1259 65.059 72.1259 65.5648 71.6222L71.4993 65.7132C72.0051 65.2095 72.0051 64.393 71.4993 63.8893L63.0712 55.4976L58.6701 50.9559C58.1859 50.4563 58.1859 49.6646 58.6701 49.1649L63.0714 44.6232L71.6207 36.1106C72.1265 35.607 72.1265 34.7905 71.6207 34.2868L65.6861 28.3777C65.1803 27.8741 64.3603 27.8741 63.8545 28.3777L51.119 41.0586Z" fill="white" />
                        </svg>
                    </div>
                </div>
                <form action="#" class="modal__form">
                    <input class="modal__input" type="text" name="name" placeholder="First name Last name">
                    <input class="modal__input" type="email" name="email" placeholder="Email">
                    <input class="modal__input" type="text" name="phone" placeholder="Phone number">
                    <input class="modal__input" type="text" name="company" placeholder="Company">
                    <input class="modal__input" type="text" name="position" placeholder="Position">
                    <input class="modal__input orange" type="text" name="discount" placeholder="Discount code">
                    <button class="modal__btn">To send</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>