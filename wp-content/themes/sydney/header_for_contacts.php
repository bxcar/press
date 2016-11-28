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
        (function(){ var widget_id = 'c1yVYkheNi';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
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
                                class="popmake-522 header-number-text">Закажите обратный звонок</span></a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <?php sydney_slider_template(); ?>

    <div class="header-image header-image-contacts">
        <p class="header-on-top-image">Контакты</p>
        <?php sydney_header_overlay(); ?>
        <img class="header-inner" src="/wp-content/themes/sydney/images/contacts.jpg"
             width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <div id="content" class="page-wrap" style="padding-top: 30px; padding-bottom: 0;">
        <div class="container content-wrapper">
            <div class="row">
                <div class="top-form-container top-form-container-contacts">
                    <div class="contacts-text-left">
                        <p>Приходите к нам. Мы всегда рады нашим туристам!</p>
                        <p><span>Адрес:</span><br> Борисполь, ул. Киевский Шлях, 2/6 ТРЦ&nbsp;Аэромолл<br>
                            <span>График работы:</span><br> <strong>Пн-Вс</strong> с 9:00 – 20:00<br>
                            <span>Телефон:</span><br>
                            <strong><span class="contacts-telephone">063 211 95 55</span><br>
                                <span class="contacts-telephone">099 213-95-55<span class="viber-in-contacts"> (Viber, WhatsApp)</span></span><br>
                                <span class="contacts-telephone">098 116 95 55</span><br></strong>
                            <span>Электронная почта:</span><br>
                            <strong>coralborispol@gmail.com</strong>
                        </p>
                    </div>
                    <div class="contacts-map-right" style="display: inline-block; vertical-align: top;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2545.1364595532696!2d30.92083026659438!3d50.36400992402535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f2b88ab99d49d4f!2z0JDRjdGA0L7QvNC-0LvQuyDQotCg0KY!5e0!3m2!1sru!2sua!4v1479465435502"
                            width="350" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <section class="team">
                    <div class="grid">
                        <div class="team-item box">
                            <div class="team-img Dunai"></div>
                            <div class="team-info">
                                <h3>Вознюк Адриана</h3>

                                <p class="team-tel">+38 099 213-95-55</p>
                                <p class="viber-whatsapp"><span>(Viber, WhatsApp)</span> +38 099 213-95-55</p>

                                <p class="team-mail">coralborispol@gmail.com</p>


                                <p class="team-year">7 лет в туризме</p>

                                <a href="#" class="popmake-129 modal-link product-link img-link"
                                   data-order="Проверьте нас (Наталия)"
                                   data-img="http://www.makintour.com/uploads/Dunai.jpg">Задайте мне вопрос</a>
                            </div>
                        </div>

                        <div class="team-item box">
                            <div class="team-img Desyatnik">
                            </div>
                            <div class="team-info">
                                <h3>Легкая Людмила</h3>

                                <p class="team-tel">+38 099 213-95-55</p>
                                <p class="viber-whatsapp"><span>(Viber, WhatsApp)</span> +38 099 213-95-55</p>

                                <p class="team-mail">coralborispol@gmail.com</p>

                                <p class="team-year">12 лет в туризме</p>

                                <a href="#" class="popmake-from_2 modal-link product-link img-link"
                                   data-order="Проверьте нас (Владимир)"
                                   data-img="http://www.makintour.com/uploads/Desyatnik.JPG">Задайте мне вопрос</a>
                            </div>
                        </div>

                        <div class="team-item box">
                            <div class="team-img Chorna"></div>
                            <div class="team-info">
                                <h3>Тютюн Анна</h3>

                                <p class="team-tel">+38 099 213-95-55 </p>
                                <p class="viber-whatsapp"><span>(Viber, WhatsApp)</span> +38 099 213-95-55</p>

                                <p class="team-mail">coralborispol@gmail.com </p>

                                <p class="team-year">6 лет в туризме</p>

                                <a href="#" class="popmake-form_1 modal-link product-link img-link"
                                   data-order="Проверьте нас (Юлия)"
                                   data-img="http://www.makintour.com/uploads/Chorna.jpg">Задайте мне вопрос</a>
                            </div>
                        </div>
                    </div>
                </section>

                