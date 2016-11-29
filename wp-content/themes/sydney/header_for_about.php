<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic"
        rel="stylesheet">
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
        <?php if (get_theme_mod('site_favicon')) : ?>
            <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>"/>
        <?php endif; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
    <!-- Facebook Pixel Code -->

    <script>

        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ?

                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)f._fbq = n;

            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;

            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,

            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');


        fbq('init', '129477284107022', {

            em: 'insert_email_variable,'

        });

        fbq('track', 'PageView');

    </script>

    <noscript><img height="1" width="1" style="display:none"

                   src="https://www.facebook.com/tr?id=129477284107022&ev=PageView&noscript=1"

        /></noscript>

    <!-- DO NOT MODIFY -->

    <!-- End Facebook Pixel Code -->
    <script
        type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=YPPjOWo3CY79Vp3dG/2LKb9ul5NNNp4zRKtkOZO7MwRNLgp9pJLjU9mfdQqcRcFRvtyMVaPuyNTIIDimgFy38jpNW3m2o6si1YQVNDfHaGESE1eWn45kqsmnYQ3mFH/wla6Qsh*a*RZ6MlJ0u5FbVMnNY1CxrfjvZgxtEMaqMrE-&pixel_id=1000045496';</script>
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function () {
            var widget_id = 'c1yVYkheNi';
            var d = document;
            var w = window;

            function l() {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = '//code.jivosite.com/script/widget/' + widget_id;
                var ss = document.getElementsByTagName('script')[0];
                ss.parentNode.insertBefore(s, ss);
            }

            if (d.readyState == 'complete') {
                l();
            } else {
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })();</script>
    <!-- {/literal} END JIVOSITE CODE -->
</head>

<body <?php body_class(); ?>>
<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'sydney'); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-12  header-logo">
                        <?php if (get_theme_mod('site_logo')) : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><img
                                    class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>"
                                    alt="<?php bloginfo('name'); ?>"/></a>
                        <?php else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                      rel="home"><?php bloginfo('name'); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 header-menu">
                        <div class="btn-menu"></div>
                        <nav id="mainnav" class="mainnav" role="navigation" style="color: red;">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback')); ?>
                        </nav><!-- #site-navigation -->
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 header-number">
                        <p <!--style="overflow: hidden;-->">098 11 69 555<br><a href="#"><span
                                class="popmake-522 header-number-text">Закажите обратный звонок</span></a></p>

                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <?php sydney_slider_template(); ?>

    <div class="header-image header-image-about">
        <p class="header-on-top-image">О нас</p>
        <?php sydney_header_overlay(); ?>
        <img class="header-inner" src="/wp-content/themes/sydney/img/about-header_optimize.jpg"
             width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <div id="content" class="page-wrap" style="padding-top: 30px; padding-bottom: 0;">
        <div class="container content-wrapper">
            <div class="row row-for-padding">
                <p>
                    <a style="margin-right: 20px; text-decoration: underline;"
                       href="/%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d1%8b/">Контакты</a>
<!--                    <a style="text-decoration: underline; /*color: #ff7300;*/" href="#">Отзывы</a>-->
                </p>
                <p class="about">Официальное представительство туристической компании «Coral Travel», расположенное в
                    Борисполе,
                    с 2015 года предлагает вам комфортный, интересный и качественный отдых по доступным ценам.
                    Опираясь на главный девиз «Coral Travel» - НАДЕЖНОСТЬ, мы стремимся обеспечивать услуги
                    хорошего качества, основываясь на нашем опыте, неиссякаемой энергии и энтузиазме.
                    Современный персональный подход открывает для наших клиентов удивительный дух и
                    разнообразную культуру посещаемых стран.
                    Нашим главным достижением является большое количество дольных клиентов, которые ощутили
                    преимущества организованного отдыха, воспользовавшись услугами компании «Coral Travel» .
                    Международная туристическая компания «Coral Travel» имеет более чем 20-ти летнюю безупречную
                    репутацию, основанную на качестве предоставляемых услуг. Мы предлагаем туры в 28 стран
                    и более 60-ти различных направлений из Украины. Услугами «Coral Travel» вы можете
                    воспользоваться в 233 агентствах, представленных в 76 украинских городах.
                </p>

                <h2 class="tour-header about-tour-header">Мы для туристов, а не туристы для нас</h2>
                <p class="about">Принципом работы компании является ориентированность на пожелания клиента.
                    Откройте для себя новые места, посетите свои любимые уголки планеты,
                    по новым неизведанным маршрутам, подобранным менеджерами компании
                    «Coral Travel» специально для вас!</p>

                