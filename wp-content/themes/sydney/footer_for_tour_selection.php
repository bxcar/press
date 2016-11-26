<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.11.2016
 * Time: 22:51
 */

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
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
    <script>
        document.getElementById('contact-form').addEventListener('submit', function (evt) {
            var loading = document.getElementById("submit-but");
            loading.setAttribute("value", "");
            loading.setAttribute("style",
                "background: url(/wp-content/themes/sydney/img/post_preloader.gif) 50% 50% no-repeat #0088e7  !important;");
        }, false);
        //                    $(event.target).find(".wpcf7-response-output").on("DOMNodeInserted", function (event) {
        document.getElementById('contact-form').addEventListener('DOMNodeInserted', function (evt) {
            var loading = document.getElementById("submit-but");
            loading.setAttribute("value", "Отправить");
            loading.setAttribute("style",
                "background: #0088e7 !important;");
        });
    </script>
    <div class="sidebar-column col-md-4">
        <aside id="text-2" class="widget widget_text"><h3 class="widget-title"
                                                          style="text-align: center; width: 93%;">
                Заполните форму сейчас</h3>
            <p class="under-header-in-form">и получите 5 вариантов отдыха с подробным расчётом цен</p>
            <div class="textwidget">
                <div role="form" class="wpcf7" id="wpcf7-f47-o1" lang="ru-RU" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form id="contact-form" action="/#wpcf7-f47-o1" method="post" class="wpcf7-form">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="47">
                            <input type="hidden" name="_wpcf7_version" value="4.5.1">
                            <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f47-o1">
                            <input type="hidden" name="_wpnonce" value="3f027fa8db">
                        </div>
                        <!--<p><label> Ваше имя (обязательно)<br>-->
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                                                                   style="width: 100%;"
                                                                                                   name="your-name"
                                                                                                   placeholder="Ваше имя*"
                                                                                                   value="" size="40"
                                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                   aria-required="true"
                                                                                                   aria-invalid="false"></span>
                        <!--                                        </label></p>-->
                        <!--                                        <p><label> Контактный телефон (обязательно)<br>-->
                                            <span class="wpcf7-form-control-wrap tel-564"><input required type="tel"
                                                                                                 style="width: 100%;"
                                                                                                 name="tel-564"
                                                                                                 placeholder="Контактный телефон*"
                                                                                                 value=""
                                                                                                 size="40"
                                                                                                 class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                                 aria-invalid="false"></span>
                        <!--                                        </label></p>-->
                        <!--                                        <p><label> Пожелания к туру<br>-->
                                            <span class="wpcf7-form-control-wrap your-message"><textarea
                                                    name="your-message"
                                                    placeholder="Пожелания к туру*"
                                                    cols="40" rows="10"
                                                    class="wpcf7-form-control wpcf7-textarea"
                                                    aria-invalid="false"></textarea></span> </label></p>
                        <p><input id="submit-but" type="submit" value="Отправить"><!--<img class="ajax-loader"
                                                                                               src="http://localhost/wp-content/plugins/contact-form-7/images/ajax-loader.gif"
                                                                                               alt="Отправка..."
                                                                                               style="visibility: hidden;">-->
                            <!--                                            class="wpcf7-form-control wpcf7-submit"-->
                        </p>
                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                    <p class="form-text2">Мы перезвоним вам через
                        10 минут, засекайте!</p>
                </div>
            </div>
        </aside>
    </div>
    <div class="seo-tour-selection"
         style="     margin-top: 50px;
                     width: 80%;
                     margin-right: auto;
                     margin-left: auto;">
        <h3>Подбор тура онлайн с Coral Travel</h3>
        <p>Туристическая компания Coral Travel поможет вам подобрать тур во все страны, которые будут вам интересны.
            Мы прислушиваемся к вашим пожеланиям и учитываем все волнующие вас детали. Экономьте свое время
            и пользуйтесь системой онлайн поиска и подбора тура. Отыщите интересующие вас отели и курорты всего
            за пару минут. Просто введите необходимую информацию и получите возможность выбрать тур самостоятельно.</p>
        <p>Для более детальной информации обращайтесь в офис компании Coral Travel, наши менеджеры помогут осуществить
            поиск тура, узнать цены по интересующим направлениям, а так же забронировать и купить тур. </p>
    </div>
</div>

</div>
</div>
<div class="footer-tour-select">
    <p>Есть вопросы? Звоните нам сейчас:<br>
        098 11 69 555</p>
</div>
</div><!-- #content -->

<?php if (is_active_sidebar('footer-1')) : ?>
    <?php get_sidebar('footer'); ?>
<?php endif; ?>

<a class="go-top"><i class="fa fa-angle-up"></i></a>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="grid foot">
        <p class="f-text1 box">ООО «ХОРОШЕЕ АГЕНСТВО» <br/>
            ЕГРПОУ: 39818659 <br/>
            <a class="popmake-515" href="#">Платежная информация</a><br/>
            моб. +38 098 11 69 555
        </p>

        <p class="f-text2 box">г.&nbsp;Борисполь, <br/>
            ул.&nbsp;Киевский шлях, 2/6, <br/>ТРЦ «АЕРОМОЛ»<br>
            <span>e-mail:</span> coralborispol@gmail.com</p>

        <p class="f-text3 box">
            <a class="popmake-158 modal-link" href="#">Соглашение об обработке персональных данных.</a><br/>

            <a class="popmake-bank modal-link" href="#">Банковская гарантия</a><br/>

            <!--            <a class="modal-link" href="#confidenc3">Лицензия</a>-->
        </p>
    </div>
    <!--<div class="site-info container">
        <a href="<?php /*echo esc_url(__('http://wordpress.org/', 'sydney')); */ ?>"><?php /*printf(__('Proudly powered by %s', 'sydney'), 'WordPress'); */ ?></a>
        <span class="sep"> | </span>
        <?php /*printf(__('Theme: %2$s by %1$s.', 'sydney'), 'aThemes', '<a href="http://athemes.com/theme/sydney" rel="designer">Sydney</a>'); */ ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
<div class="modal-boxes">
    <div id="feedback" class="modal">
        <div class="form-block">
            <h3>Обратный звонок</h3>

            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁёІіЇї\s]{2,30}{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +38 033 228 2822 ">

                <textarea class="text-field" name="comment"
                          placeholder="Ваш вопрос и желаемое время звонка*"></textarea>


                <input type="submit" class="send btn1" value="Перезвоните мне">
            </form>
        </div>
    </div>

    <div id="tour" class="modal">

        <h4>Получить Лучшие цены на туры
        </h4>
        <h5>в любую страну по запросу</h5>

        <div class="modal-img">
            <img src="http://www.makintour.com/uploads/Dunai.jpg" alt=""/>
        </div>
        <div class="form-block">
            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁёІіЇї\s]{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +38 0332 28 28 22 ">

                <input type="submit" class="send btn1" value="Жду звонка">
            </form>
        </div>
    </div>

    <div id="hotel" class="modal">
        <h4>С удовольствием Расскажу вам больше
            о курортах и ценах на отдых</h4>

        <div class="modal-img">
            <img src="http://www.makintour.com/uploads/Dunai.jpg" id="modal-pic" alt=""/>
        </div>
        <div class="form-block">
            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁёІіЇї\s]{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +38 0332 28 28 22 ">

                <input type="submit" class="send btn1" value="Жду звонка">
            </form>
        </div>
    </div>

    <div id="confidenc" class="modal">
        <div class="form-block">
            <h3>>Соглашение об обработке
                персональных данных</h3>

            <p>Лица, предоставившие на данном сайте сведения, которые подпадают под определение
                «персональные данные» согласно действующему законодательству Украины,
                а также разместившие иную информацию, тем самым подтверждают свое согласие
                на обработку такой информации, в том числе персональных данных, и их передачу ООО «МАКИНТУР»
                для дальнейшей обработки в целях обратной связи и с другими целями в пределах осуществления
                своей хозяйственной деятельности, в том числе накопление и хранение такой информации.</p>

            <p>ООО «МАКИНТУР» гарантирует полную конфиденциальность при обработке данных,
                указанных посетителями на сайте компании.</p>

            <p>Лицо, указывающее какие либо данные на этом сайте, гарантирует,
                что предоставляемая информация является точной и достоверной,
                и не нарушает действующее законодательство Украины, законные права
                и интересы третьих лиц, а вся информация предоставлена в отношении себя лично.</p>
        </div>
    </div>

    <div id="confidenc2" class="modal">
        <div class="form-block">
            <img src="img/bankovskaya-garantiya.jpg" alt="Банківська гарантія">
        </div>
    </div>
    <div id="confidenc3" class="modal">
        <div class="form-block">
            <img src="img/license.jpg" alt="Ліцензія">
        </div>
    </div>

    <div id="works" class="modal">
        <div class="form-block">
            <h3>Как это работает?</h3>

            <p>Для Вас в нашей компании трудятся только профессиональные эксперты туризма,
                которые подберут наилучшие предложения по турам в любую точку мира, учтя все Ваши пожелания.</p>

            <p>Всё что Вам необходимо сделать, это за 10 секунд оформить простую форму,
                указав свои контакты для обратной связи - а дальше эксперт Вашего отдыха
                свяжется с Вами и сделает все, что бы Ваша поездка была комфортной и незабываемой.
                Укажите свои пожелания к туру, и наши эксперты подберут для Вас наиболее точные и выгодные
                предложения. </p>

            <p>Свяжитесь с нами напрямую и получите моментальную консультацию
                по Вашему туру с гарантией наилучшей цены!<br/>Звоните по номеру +38 098 11 69 555 </p>
            <!-- <p>Звоните по номеру +38 098 11 69 555 </p> -->
            <p></p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</div><!-- #page -->
</body>
</html>

<!--<div class="textwidget">-->
<!--    <div role="form" class="wpcf7" id="wpcf7-f47-o1" lang="ru-RU" dir="ltr">-->
<!--        <div class="screen-reader-response"></div>-->
<!--        <form id="contact-form-popup" action="/#wpcf7-f47-o1" method="post"-->
<!--              class="wpcf7-form">-->
<!--            <div style="display: none;">-->
<!--                <input type="hidden" name="_wpcf7" value="47">-->
<!--                <input type="hidden" name="_wpcf7_version" value="4.5.1">-->
<!--                <input type="hidden" name="_wpcf7_locale" value="ru_RU">-->
<!--                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f47-o1">-->
<!--                <input type="hidden" name="_wpnonce" value="3f027fa8db">-->
<!--            </div>-->
<!--            <p style="padding-left: 150px; background: url(/wp-content/themes/sydney/img/adriana.png) no-repeat;">-->
<!--                                            <span style="width: 100%; margin-left: 0;"-->
<!--                                                  class="wpcf7-form-control-wrap your-name"><input type="text"-->
<!--                                                                                                   style="width: 100%;-->
<!--                                                                                                   margin-bottom: 30px;-->
<!--                                                                                                   margin-left: 0;-->
<!--                                                                                                   margin-top: 30px;"-->
<!--                                                                                                   name="your-name"-->
<!--                                                                                                   placeholder="Ваше имя*"-->
<!--                                                                                                   value="" size="40"-->
<!--                                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"-->
<!--                                                                                                   aria-required="true"-->
<!--                                                                                                   aria-invalid="false"></span>-->
<!--                                            <span style="width: 100%; margin-left: 0;"-->
<!--                                                  class="wpcf7-form-control-wrap tel-564"><input type="tel" required-->
<!--                                                                                                 style="width: 100%;-->
<!--                                                                                                 margin-left: 0;"-->
<!--                                                                                                 name="tel-564"-->
<!--                                                                                                 placeholder="Контактный телефон*"-->
<!--                                                                                                 value=""-->
<!--                                                                                                 size="40"-->
<!--                                                                                                 class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"-->
<!--                                                                                                 aria-invalid="false"></span>-->
<!---->
<!--            </p>-->
<!--            <p style="padding-left: 150px;">-->
<!--                <input class="wpcf7-form-control-wrap" style="width: 100%;-->
<!--                                                                                                   margin-bottom: 0;-->
<!--                                                                                                   margin-left: 0;-->
<!--                                                                                                   margin-top: 0;"-->
<!--                       id="submit-but" type="submit" value="Отправить">-->
<!--            </p>-->
<!--            <div class="wpcf7-response-output wpcf7-display-none"></div>-->
<!--            <p style="margin-left: 0; width: 100%;">Отправляя форму вы даёте согласие на обработку персональных данных-->
<!--                согласно закона Украины «О защите персональных данных»</p>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
