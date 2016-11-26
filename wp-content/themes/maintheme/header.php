<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name') ?></title>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" href="css/mobile_test.css">-->
    <!--<link rel="stylesheet" href="css/new-test.css">-->
    <link rel="icon" href="<?php bloginfo('template_url')?>/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php bloginfo('template_url')?>/img/favicon.ico" type="image/x-icon">

    <!--[if lt IE 10]>
    <p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста, <a
        href="http://browsehappy.com/" target="_blank">обновите свой браузер,</a> чтобы улучшить отображение сайта.
    </p>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-40557418-4', 'auto');
        ga('send', 'pageview');
    </script>
    <?php wp_head(); ?>
</head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter40437170 = new Ya.Metrika({
                    id: 40437170,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/40437170" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<div class="container">
    <header>
        <div class="header-top grid">
            <div class="logo-block box"><a class="logo" href="<?php echo home_url(); ?>/index.php"><img
                        src="<?php bloginfo('template_url')?>/img/logo.png" alt="logo"/></a></div>
        </div>
        <div class="header-top grid grid2">
            <div class="address box">
                <p><span>Приходите в гости:</span>
                    г.&nbsp;Луцк, ул.&nbsp;Кривой Вал,&nbsp;34, оф. 201 <br/>
                </p>
            </div>
            <div class="telephone box">
                <p class="tel-text">Звоните нам сейчас:</p>

                <p class="tel-number">+38(068) 528 2227</p>

                <p><a class="modal-link product-link" href="#feedback"
                      data-order="Зворотній дзвінок">или закажите обратный звонок</a></p>
            </div>
            //упрощенный вариант php кода в теге nav
            <?php //wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'nav', 'container'=>'false')); ?>

            <nav class="nav">
                <?php
                $input_parameters_array = array(
                    'container' => false, //без предварительной обертки тегом
                    'echo' => false, //вернуть меню для предварительной обработки средствами PHP
                    'items_wrap' => '%3$s', //аргументы функции формата строки sprtintf();
                    'depth' => 0, //глубина, уровнеь вложенности = 1
                );
                //Удалим из строки меню всё кроме HTML-тега гиперссылки
                print strip_tags(wp_nav_menu($input_parameters_array), '<a>');
                ?>
            </nav>
        </div>

        <div class="titles grid">

            <h1>
                <script type="text/javascript" src="<?php bloginfo('template_url')?>js/multi.js"></script>
                Горящие Туры<br/>
                с&nbsp;гарантией&nbsp;<span>ЛУЧШЕЙ</span>&nbsp;цены&nbsp;в Луцке <!--bloginfo('description') -->
            </h1>


            <a class="abs-link modal-link" href="#works"><span>Как это работает?</span></a>
        </div>
        <div class="form-container grid">
            <div class="form-descr box">
                <h3>Получите <br/>
                    1000&nbsp;грн. на тур*</h3>

                <p><span>Акция!</span> Дарим сертификат на 1000&nbsp;грн. на покупку тура* всем посетителям сайта. <br/>
                    Просто заполните форму справа.</p>

                <p><span>Осталось всего 7 сертификатов!</span></p>
            </div>
            <div class="form-block box">
                <h3>ЗАПОЛНИТЕ
                    ФОРМУ СЕЙЧАС</h3>

                <p class="form-text">и получите 5 вариантов отдыха
                    с подробным расчетом цены!</p>

                <form class="form" action="#">
                    <input type="text" name="name" class="name text-field"
                           placeholder="Ваше имя*"
                           pattern="[A-Za-zА-Яа-яЁёІіЇї\s]{2,30}"
                           required="" title="например, Иванов Иван">

                    <input type="text" name="phone" class="phone text-field"
                           placeholder="Контактный телефон*"
                           pattern="^([+]+)*[0-9\s-]{5,20}"
                           required="" title="например, +38 0332 28 28 22 ">

                    <textarea class="text-field" name="comment" placeholder="Пожелания к туру"></textarea>

                    <input type="submit" class="send btn1 product-link"
                           data-order="Акция 1000 грн на тур - расчитать" value="Расчитать">
                </form>

                <p class="form-text2">Мы перезвоним вам через
                    10 минут, засекайте!</p>

                <span class="form-strip"><img src="<?php bloginfo('template_url')?>/img/form-strip.png" alt=""/></span>
            </div>
        </div>

        <a class="fixed-button modal-link product-link" href="#tour" data-order="Подбор тура за 10 минут"></a>
    </header>