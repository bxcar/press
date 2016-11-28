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
    <script src="/wp-content/themes/sydney/js/script_for_form_button.js"></script>
    <!--    <link rel="stylesheet" href="/wp-content/themes/sydney/fancybox/jquery.fancybox.css"  />-->
    <!--    <link rel="icon" href="/lp/ru/img/favicon.ico" type="image/x-icon">-->
    <!--    <link rel="shortcut icon" href="/lp/ru/img/favicon.ico" type="image/x-icon">-->
    <!---->
    <!---->
    <!--    <!--[if lt IE 10]>-->
    <!--    <script src="/wp-content/themes/sydney/js/html5shiv.js"></script>-->
    <!--    <p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите свой браузер,</a> чтобы улучшить отображение сайта.</p>-->
    <!--    <![endif]-->
    <!---->
    <!--    <script type="text/javascript" src="/wp-content/themes/sydney/js/lib/jquery-1.8.0.min.js"></script>-->
    <!--    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
    <!---->
    <!--    <script type="text/javascript" src="/wp-content/themes/sydney/fancybox/jquery.fancybox.pack.js"></script>-->
    <!--    <script type="text/javascript" src="/wp-content/themes/sydney/js/lib/jquery.cookie.js"></script>-->
    <!---->
    <!--    <script src="/wp-content/themes/sydney/js/jquery.maskedinput.min.js"></script>-->
    <!--<!--    <script src="/wp-content/themes/sydney/js/scripts1.js"></script>-->
    <!--    <script src="/wp-content/themes/sydney/js/multi.js"></script>-->
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

        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

            document,'script','https://connect.facebook.net/en_US/fbevents.js');


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
    <script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=YPPjOWo3CY79Vp3dG/2LKb9ul5NNNp4zRKtkOZO7MwRNLgp9pJLjU9mfdQqcRcFRvtyMVaPuyNTIIDimgFy38jpNW3m2o6si1YQVNDfHaGESE1eWn45kqsmnYQ3mFH/wla6Qsh*a*RZ6MlJ0u5FbVMnNY1CxrfjvZgxtEMaqMrE-&pixel_id=1000045496';</script>
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
        (function(){ var widget_id = 'c1yVYkheNi';var d=document;var w=window;function l(){
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
    <!-- {/literal} END JIVOSITE CODE -->
</head>

<body <?php body_class(); ?>>
<!--<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('a[rel="fancybox"]').fancybox();
    });
</script>-->
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
                        <!--<img src="/wp-content/themes/sydney/img/telephone_not_fill.png" width="30" height="30"
                             style="width: 21px; height: 21px; float: left; margin-right: 10px;">-->
                        <p <!--style="overflow: hidden;-->">098 11 69 555<br><a href="#"><span class="popmake-522 header-number-text">Закажите&nbsp;обратный&nbsp;звонок</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
    <?php sydney_slider_template(); ?>

    <div class="header-image">
        <?php sydney_header_overlay(); ?>
        <img class="header-inner" src="<?php header_image(); ?>"
             width="<?php echo esc_attr(get_custom_header()->width); ?>" alt="<?php bloginfo('name'); ?>">
    </div>

    <div id="content" class="page-wrap" style="padding-top: 30px; padding-bottom: 0;">
        <div class="container content-wrapper">
            <div class="row">
                <div class="top-form-container">
                    <div class="form-descr box">
                        <h3>Получите <span class="discount-size">скидку</span> <br/>
                            1000&nbsp;грн. на тур*</h3>

                        <p><span>Акция!</span> Дарим сертификат на 1000&nbsp;грн. на покупку тура*
                            всем
                            посетителям
                            сайта. <br/>
                            Просто заполните форму.</p>

                        <p><span>Осталось всего 7 сертификатов!</span></p>
                    </div>
                    <div class="sidebar-column col-md-4">
                        <aside id="text-2" class="widget widget_text"><h3 class="widget-title"
                                                                          style="text-align: center; width: 93%;">
                                Заполните форму сейчас</h3>
                            <p class="under-header-in-form">и получите 5 вариантов отдыха с подробным расчётом цен</p>
                            <div class="textwidget">
<!--                                <div role="form" class="wpcf7" id="wpcf7-f47-o1" lang="ru-RU" dir="ltr">-->
                                    <div class="screen-reader-response"></div>
                                    <form onsubmit="loaderMainFormTop();" id="contact-form" action="/thanks/" method="post"
                                          class="wpcf7-form">
                                        <!--action="/#wpcf7-f47-o1"-->
                                        <div style="display: none;">
                                            <input type="hidden" name="order" value="Верхняя форма на главной странице">
                                        </div>
                                            <span class="wpcf7-form-control-wrap your-name"><input required type="text"
                                                                                                   style="width: 100%;"
                                                                                                   name="your-name"
                                                                                                   placeholder="Ваше имя*"
                                                                                                   value="" size="40"
                                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                   aria-required="true"
                                                                                                   aria-invalid="false"></span>

                                            <span class="wpcf7-form-control-wrap tel-564"><input required type="tel"
                                                                                                 style="width: 100%;"
                                                                                                 name="tel-564"
                                                                                                 placeholder="Контактный телефон*"
                                                                                                 value=""
                                                                                                 size="40"
                                                                                                 class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                                 aria-invalid="false"></span>

                                            <span class="wpcf7-form-control-wrap your-message"><textarea
                                                    name="your-message"
                                                    placeholder="Пожелания к туру*"
                                                    cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea"
                                                    aria-invalid="false"></textarea></span> </label></p>
                                        <p><input id="submit-but" type="submit" value="Отправить">
                                        </p>
                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                    </form>
                                    <p class="form-text2">Мы перезвоним вам через
                                        10 минут, засекайте!</p>
                                </div>
                            </div>
                        </aside>
<!--                    </div>-->
                </div>
                <h2 id="goto-from-top-button" class="tour-header">Лучшие Цены на&nbsp;Туры по&nbsp;направлениям</h2>
