<?php
session_start();
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
/*$_SERVER['HTTP_REFERER']*/
if (!$_SESSION['urli']) {
    $_SESSION['urli'] = $_SERVER['REQUEST_URI'];
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
    <title itemprop='name'>Горящие туры в Борисполе: Coral Travel</title>
<!--    <link rel="canonical" href="http://coralborispol.com" itemprop="url">-->


    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Горящие туры в Борисполе - Coral Travel"/>
    <meta property="og:description" content="Самые выгодные цены от надежной компании"/>
    <meta property="og:url" content="http://coralborispol.com"/>
    <meta property="og:image"
          content="http://coralborispol.com/wp-content/themes/sydney/img/sharelink_1200x630adapt.png"/>

    <!--<meta property=og:url content="http://work.makintour.com">-->
    <!--<meta property="og:title" content="Работа для менеджера по туризму">-->
    <!--<meta property="og:description" content="Любите туризм и хотите работать в этой сфере Присоединяйтесь к команде профессионалов!">-->
    <!--<meta property="og:type" content="website">-->
    <!--<meta property="og:image" content="imagestild6131-6236-4936-b266-356133316465__en_logo_sqare2_wide_canvas.png">-->
    <!--<meta property="fb:app_id" content="257953674358265">-->

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="Работа для менеджера по туризму">
    <meta name="twitter:description"
          content="Любите туризм и хотите работать в этой сфере Присоединяйтесь к команде профессионалов!">
    <meta name="twitter:image" content="imagestild6131-6236-4936-b266-356133316465__en_logo_sqare2_wide_canvas.png">


    <meta name="description"
          content="ТРЦ АЭРОМОЛЛ - бронирование тура, авиаперелеты, экскурсионные туры из Борисполя. Гарантия надежности!">
    <script src="/wp-content/themes/sydney/js/script_for_form_button.js"></script>
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

    <?php include "tracking_codes_and_jivosite/vk.php" ?>
    <?php include "tracking_codes_and_jivosite/facebook_pixel_code.php" ?>
    <?php include "tracking_codes_and_jivosite/jivosite.php" ?>

    <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Coral Travel Борисполь",
  "url": "http://www.coralborispol.com",
  "logo": "http://coralborispol.com/wp-content/themes/sydney/img/logo_coral.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+38-098-11-69-555",
    "contactType": "customer service"
  }],
  "sameAs": [
    "http://www.facebook.com/borispol.coraltravel",
    "http://vk.com/borispol.coraltravel"
  ]
}

    </script>

</head>

<body <?php body_class(); ?>>
<?php include "tracking_codes_and_jivosite/google-analytics.php" ?>
<?php include "tracking_codes_and_jivosite/yandex-metrica.php" ?>

<div itemscope itemtype="http://schema.org/PostalAddress" style="display: none;">

    <span itemprop="name">Горящие туры в Борисполе: Coral Travel</span>
    <span itemprop="postalCode">08300,</span> <span
        itemprop="addressLocality">Украина, Киевская обл., г.Борисполь</span>
    <span itemprop="streetAddress">Кевский шлях 2/6</span>
    Телефон: <span itemprop="telephone">+38 098 11 69 555</span>
    E-mail: <span itemprop="email">info@coralborispol.com</span>

</div>

<div class="preloader">
    <div class="spinner">
        <div class="pre-bounce1"></div>
        <div class="pre-bounce2"></div>
    </div>
</div>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'sydney'); ?></a>

    <header itemscope itemtype="http://schema.org/WPHeader" id="masthead" class="site-header" role="banner">
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-12  header-logo">
                        <?php if (get_theme_mod('site_logo')) : ?>
                            <a<!-- href="--><?php /*//echo esc_url(home_url('/')); */ ?>" title="<?php bloginfo('name'); ?>">
                            <img
                                class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>"
                                alt="<?php bloginfo('name'); ?>"/></a>
                        <?php else : ?>
                            <h1 itemprop="headline" class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                                          rel="home"><?php bloginfo('name'); ?></a></h1>
                            <h2 itemprop="description" class="site-description"><?php bloginfo('description'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 header-menu">
                        <div class="btn-menu"></div>
                        <nav itemscope itemtype="https://schema.org/SiteNavigationElement" id="mainnav" class="mainnav"
                             role="navigation" style="color: red;">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback')); ?>
                        </nav><!-- #site-navigation -->
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 header-number">
                        <p <!--style="overflow: hidden;-->">098 11 69 555<br><a href="#"><span
                                class="popmake-522 header-number-text">Закажите&nbsp;обратный&nbsp;звонок</span></a></p>
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
                <?php //if(function_exists('the_ratings')) { the_ratings(); } ?>
                <div style="display: none">
                <?php //echo do_shortcode('[WPCR_SHOW POSTID="900" NUM="5" PAGINATE="1" PERPAGE="5" SHOWFORM="1" HIDEREVIEWS="0" HIDERESPONSE="0" SNIPPET="" MORE="" HIDECUSTOM="0" ] '); ?>
                </div>
