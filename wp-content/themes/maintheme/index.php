<?php get_header(); ?>
<div class="main">
    <section class="prices">
        <div class="grid">
            <h2>Лучшие Цены на туры <br/>по направлениям</h2>
        </div>
        <div class="tile">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!--post-->
                <article>
                    <div class="tour tour-margin-left">
                        <div id="tour-1">
<!--                            <img src="--><?php //bloginfo('template_url') ?><!--/img/hilton.jpg" width="100%" height="100%">-->
                            <?php the_post_thumbnail('full'); ?>
                        </div>

                        <a href="#tour" class="hotel modal-link product-link"
                           data-order="AMC Royal Hotel 5*" country="Египет"><p><strong><?php the_title(); ?>
                                    &nbsp;</strong>
                            </p><strong><?php the_content(); ?><!--AMC Royal Hotel 5<sup>☆</sup>-->&nbsp;</strong></a>
                        <div class="tprice"> <!-- for tags the_tags() --> <!-- for date the_date('d.m.y') -->
                            <!--fot link to record the_permalink()-->
                            <!-- для сокращенной записи the_excerpt();-->
                            <div>от <strong><b><?php the_tags('<style>b a {color: #0088e7;}</style>'); ?></b></strong> $</div>
                            <a href="#tour" class="btnprice modal-link product-link"
                               data-order="AMC Royal Hotel 5*" country="Египет">Еще цены</a>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?>
                <!--post navigation-->
            <?php else: ?>
                <!--no posts found-->
            <?php endif; ?>
            <div class="tour tour-margin-right">
                <div id="tour-2">
                    <img src="<?php bloginfo('template_url') ?>/img/empty.png">
                </div>

                <a href="#tour" class="hotel modal-link product-link"
                   data-order="Eden Resort and Spa 5*" country="Шри-Ланка"><p><strong>Шри-Ланка&nbsp;</strong></p>
                    <strong>Eden Resort and Spa 5<sup>☆</sup>&nbsp;</strong></a>
                <div class="tprice">
                    <div>от <strong><b>484</b></strong> $</div>
                    <a href="#tour" class="btnprice modal-link product-link"
                       data-order="Eden Resort and Spa 5*" country="Шри-Ланка">Еще цены</a>
                </div>
            </div>
            <div class="tour  tour-margin-left">
                <div id="tour-3">
                    <img src="<?php bloginfo('template_url') ?>/img/empty.png">
                </div>

                <a href="#tour" class="hotel modal-link product-link"
                   data-order="Hilton Sharjah 5*" country="ОАЕ"><p><strong>ОАЕ&nbsp;</strong></p><strong>Hilton Sharjah
                        5<sup>☆</sup>&nbsp;</strong></a>
                <div class="tprice">
                    <div>от <strong><b>338</b></strong> $</div>
                    <a href="#tour" class="btnprice modal-link product-link"
                       data-order="Hilton Sharjah 5*" country="ОАЕ">Еще цены</a>
                </div>
            </div>
            <div class="tour tour-margin-right">
                <div id="tour-4">
                    <img src="<?php bloginfo('template_url') ?>/img/empty.png">
                </div>

                <a href="#tour" class="hotel modal-link product-link"
                   data-order="Royal Mirage Beach Resort 3*" country="Индия"><p><strong>Индия&nbsp;</strong></p><strong>Royal
                        Mirage Beach Resort 3<sup>☆</sup>&nbsp;</strong></a>
                <div class="tprice">
                    <div>от <strong><b>394</b></strong> $</div>
                    <a href="#tour" class="btnprice modal-link product-link"
                       data-order="Royal Mirage Beach Resort 3*" country="Индия">Еще цены</a>
                </div>
            </div>
            <div class="tour  tour-margin-left">
                <div id="tour-5">
                    <img src="<?php bloginfo('template_url') ?>/img/empty.png">
                </div>

                <a href="#tour" class="hotel modal-link product-link"
                   data-order="FS Alsol Luxury Village 5*" country="Доминикана"><p><strong>Доминикана&nbsp;</strong></p>
                    <strong>FS Alsol Luxury Village 5<sup>☆</sup>&nbsp;</strong></a>
                <div class="tprice">
                    <div>от <strong><b>1 357</b></strong> $</div>
                    <a href="#tour" class="btnprice modal-link product-link"
                       data-order="FS Alsol Luxury Village 5" country="Доминикана">Еще цены</a>
                </div>
            </div>
            <div class="tour tour-margin-right">
                <div id="tour-6">
                    <img src="<?php bloginfo('template_url') ?>/img/empty.png">
                </div>

                <a href="#tour" class="hotel modal-link product-link"
                   data-order="Sun Island Resort & Spa 5*" country="Мальдивы"><p><strong>Мальдивы&nbsp;</strong></p>
                    <strong>Sun Island Resort & Spa 5<sup>☆</sup>&nbsp;</strong></a>
                <div class="tprice">
                    <div>от <strong><b>1 221</b></strong> $</div>
                    <a href="#tour" class="btnprice modal-link product-link"
                       data-order="Sun Island Resort & Spa 5*" country="Мальдивы">Еще цены</a>
                </div>
            </div>
            <div class="tour  tour-margin-left">
                <div id="tour-7">
                    <img src="<?php bloginfo('template_url') ?>/img/empty.png">
                </div>

                <a href="#tour" class="hotel modal-link product-link"
                   data-order="Beston Pattaya 4*" country="Тайланд"><p><strong>Тайланд&nbsp;</strong></p><strong>Beston
                        Pattaya 4<sup>☆</sup>&nbsp;</strong></a>
                <div class="tprice">
                    <div>от <strong><b>865</b></strong> $</div>
                    <a href="#tour" class="btnprice modal-link product-link"
                       data-order="Beston Pattaya 4*" country="Тайланд">Еще цены</a>
                </div>
            </div>
            <div class="tour tour-margin-right">
                <div id="tour-8">
                    <img src="<?php bloginfo('template_url') ?>/img/empty.png">
                </div>

                <a href="#tour" class="hotel modal-link product-link"
                   data-order="Kiwengwa Beach Resort 5*" country="Танзания"><p><strong>Танзания&nbsp;</strong></p>
                    <strong>Kiwengwa Beach Resort 5<sup>☆</sup>&nbsp;</strong></a>
                <div class="tprice">
                    <div>от <strong><b>1 025</b></strong> $</div>
                    <a href="#tour" class="btnprice modal-link product-link"
                       data-order="Kiwengwa Beach Resort 5*" country="Танзания">Еще цены</a>
                </div>
            </div>


            <p class="prices-info">Все сборы уже включены в стоимость! По некоторым направлениям необходимо
                открытие визы. Стоимость указана
                на одного при двухместном размещении. Цены реальные, но места кончаются</p>

            <p><a class="btn1 modal-link product-link" href="#tour"
                  data-order="Получить все предложения">Получить все предложения</a></p>
        </div>
    </section>

    <!--<div class="privilege" style="display: block !important;">
        <h1 class="privilege-title">Преимущества поездки на отдых в Египет</h1>
        <p class="privilege-item"><span class="header-in-privilege-item">Красное море</span> Самое красивое море и
            самый яркий подводный мир именно в
            Египте.
            Красное море - это рай для дайверов, именно здесь можно посмотреть на диковинных
            рыб и богатый коралловый риф.
        </p>
        <p class="privilege-item"><span class="header-in-privilege-item">Сезон круглый год</span>
            Отдых в Египте всегда комфортен, температура воды в Красном море
            не опускается ниже 23 С, а воздуха не ниже 24 С. Лето в Египте круглый год!</p>
        <p class="privilege-item"><span class="header-in-privilege-item">Виза</span> Упрощенный визовый режим -
            виза оформляется по прилету. Никакой суеты и проблем с документами</p>
        <p class="privilege-item"><span class="header-in-privilege-item">Выгодные цены</span>
            Египет находится не далеко, всего в 3.5-4 часах перелета из Украины,
            и местные цены также радуют, из-за чего отдых в Египте по-настоящему выгодный!</p>
        <p class="privilege-item"><span class="header-in-privilege-item">Экскурсии</span> Египет - колыбель
            цивилизаций, ее горячие пустыни более 40 столетий
            охраняют Сфинксы и древние фараоны. Музеи, памятники, пирамиды и мегаполисы - все это ждет Вас в
            Египте.</p>
        <p class="privilege-item"><span class="header-in-privilege-item">Питание "всё включено"</span> Cамый
            комфортный отдых, когда Вам не нужно заботится ни о чем
            и у Вас есть возможность неограниченно дегустировать блюда разной кухни.</p>
    </div>-->

    <section class="request">
        <div class="grid add-padding">
            <h2><a class="modal-link product-link" href="#tour" data-order="Запрос">Оставьте запрос</a></h2>

            <p class="req-text">и получите сертификат на 1000&nbsp;грн.*, который действует на следующих
                туроператоров:</p>

            <ul class="req-list">
                <li><img src="<?php bloginfo('template_url') ?>/img/company1.png" alt=""/></li>
                <li><img src="<?php bloginfo('template_url') ?>/img/company2.png" alt=""/></li>
                <li class="tagbrmobile"><img src="<?php bloginfo('template_url') ?>/img/company3.png" alt=""/></li>
                <li class="tagbrdesktop"><img src="<?php bloginfo('template_url') ?>/img/company4.png" alt=""/></li>
                <li><img src="<?php bloginfo('template_url') ?>/img/company5.png" alt=""/></li>
                <li class="tagbrmobile"><img src="img/company6.png" alt=""/></li>
                <li><img src="<?php bloginfo('template_url') ?>/img/company7.png" alt=""/></li>
            </ul>

            <p class="req-text2">Осталось всего 7 сертификатов</p>
        </div>
    </section>
    <section class="team">
        <div class="grid">
            <p class="team-text">Наши эксперты подберут и рассчитают для вас 5 вариантов отдыха за 10 минут.</p>

            <h2>Проверьте нас прямо сейчас!</h2>

            <div class="team-item box">
                <div class="team-img Dunai"></div>
                <div class="team-info">
                    <h3>Дунай Наталия</h3>

                    <p class="team-tel">+38(068) 528-22-27</p>

                    <p class="team-mail">nd@makintour.com</p>


                    <p class="team-year">8 лет в туризме</p>

                    <a href="#hotel" class="modal-link product-link img-link"
                       data-order="Проверьте нас (Наталия)"
                       data-img="http://www.makintour.com/uploads/Dunai.jpg">Задайте мені запитання</a>
                </div>
            </div>

            <div class="team-item box">
                <div class="team-img Desyatnik">
                </div>
                <div class="team-info">
                    <h3>>Десятнык Владимир</h3>

                    <p class="team-tel">+38(068) 528-22-27</p>

                    <p class="team-mail">tour0303@makintour.com</p>

                    <p class="team-year">7 лет в туризме</p>

                    <a href="#hotel" class="modal-link product-link img-link"
                       data-order="Проверьте нас (Владимир)"
                       data-img="http://www.makintour.com/uploads/Desyatnik.JPG">Задайте мені запитання</a>
                </div>
            </div>

            <div class="team-item box">
                <div class="team-img Chorna"></div>
                <div class="team-info">
                    <h3>Черная Юлия</h3>

                    <p class="team-tel">+38(068) 528-22-27 </p>

                    <p class="team-mail">tour0301@makintour.com </p>

                    <p class="team-year">6 лет в туризме</p>

                    <a href="#hotel" class="modal-link product-link img-link"
                       data-order="Проверьте нас (Юлия)"
                       data-img="http://www.makintour.com/uploads/Chorna.jpg">Задайте мені запитання</a>
                </div>
            </div>

            <div class="team-item box">
                <div class="team-img Korolchuk"></div>
                <div class="team-info">
                    <h3>Корольчук Наталия</h3>

                    <p class="team-tel">+38(068) 528-22-27 </p>

                    <p class="team-mail">bulgaria@makintour.com</p>

                    <p class="team-year">8 лет в туризме</p>

                    <a href="#hotel" class="modal-link product-link img-link"
                       data-order="Проверьте нас (Наталия)"
                       data-img="http://www.makintour.com/uploads/Korolchuk.jpg">Задайте мне вопрос</a>
                </div>
            </div>

            <p class="telephone2"><span>Есть вопрос по отдыху? С удовольствием поможем:</span>
                +38(068) 528 2227 </p>
        </div>
    </section>
    <section class="prices">
        <div class="grid">
            <h3> Время обработки заявок: </h3>
            <p class="dates">Пн-Пт: 10.00 - 19.00<br/>
                Сб: 10.00 - 17.00<br/>
                Вс: выходной<br/><br/>
                <span class="prefooter">Если вы оставите заявку в другое время, мы обязятельно перезвоним в рабочее время офиса:</span>
            </p>
        </div>
    </section>
    <section class="bottom-form">
        <div class="grid">
            <h2>Мы гарантируем <span>ЛУЧШИЕ&nbsp;цены</span><br/> на Туры
                в Луцке</h2>

            <div class="form-container">
                <div class="form-descr box">
                    <h3>Получите <br/>
                        1000 грн. на тур*</h3>

                    <p><span>Акция!</span> Дарим сертификат на 1000&nbsp;грн. на покупку тура* всем посетителям сайта.
                        <br/>
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

                        <input type="submit" class="send btn1 product-link" value="Расчитать"
                               data-order="Акция (форма в футере)">
                    </form>

                    <p class="form-text2">Мы перезвоним вам через
                        10 минут, засекайте!</p>

                    <span class="form-strip"><img src="<?php bloginfo('template_url') ?>/img/form-strip.png"
                                                  alt=""/></span>
                </div>
                <div class="cert-descr"><p> *1000 грн на покупку пакетного тура за границу при стоимости тура от 10000
                        грн. </p></div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
