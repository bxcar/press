<?php
//$sendto  = 'seo@makintour.com, coralborispol@gmail.com'; //Адреса, куда будут приходить письма
$sendto = 'malanchukdima@mail.ru'; //Адреса, куда будут приходить письма

$phone = $_POST['tel-564'];
$name = $_POST['your-name'];
$p = trim(strip_tags($_POST['target'], '<br>'))
    . trim(strip_tags($_POST['target-manager'], '<br>'))
    . trim(strip_tags($_POST['callback'], '<br>'));

// Формирование заголовка письма

$subject = '[Новая заявка - Coral Travel г. Борисполь]';
//$headers  = "From: ".$name." \r\n";
//$headers .= "Reply-To: ". strip_tags($name) . "\r\n";
//$headers .= "MIME-Version: 1.0\r\n";
//$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

//$msg = "Новая заявка - Coral Travel г. Борисполь\r\n";
$msg = "Имя: " . $name . "\r\n";
$msg .= "Телефон: " . $phone . "\r\n";
$msg .= "Идентификатор формы: " . $p . "\r\n";

// отправка сообщения
if (mail($sendto, $subject, $msg)) {
//    header( 'Refresh: 0; url=/wp-content/themes/sydney/page_thanks.php');
    echo "<script>
    document.location.href='/thanks/';
    </script>";
} else {
    //    header('Location: /wp-content/themes/sydney/page_thanks.php', true, 303);
//    echo "false";
}
?>
<!--<script>
    document.location.href='/thanks/';
    alert('hello');
</script>
-->
<!--<script language=javascript>
    window.location.href = "http://www.google.com"
</script>-->


<!--<div class="textwidget">-->
<!--    <div role="form" class="wpcf7" id="wpcf7-f47-o1" lang="ru-RU" dir="ltr">-->
<!--        <div class="screen-reader-response"></div>-->
<!--        <form onsubmit="loaderCallback();" id="contact-form-popup" action="/wp-content/themes/sydney/pupup_sendmessage.php" method="post"-->
<!--              class="wpcf7-form">-->
<!--            <div style="display: none;">-->
<!--                <input type="hidden" name="_wpcf7" value="47">-->
<!--                <input type="hidden" name="_wpcf7_version" value="4.5.1">-->
<!--                <input type="hidden" name="_wpcf7_locale" value="ru_RU">-->
<!--                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f47-o1">-->
<!--                <input type="hidden" name="_wpnonce" value="3f027fa8db">-->
<!--                <input type="hidden" value="Обратный звонок в верхнем меню" name="callback"></input>-->
<!--            </div>-->
<!--                                            <span style="width: 100%; margin-left: 0;" class="wpcf7-form-control-wrap your-name"><input type="text" required-->
<!--                                                                                                                                        style="width: 100%;-->
<!--                                                                                                   margin-bottom: 30px;-->
<!--                                                                                                   margin-left: 0;-->
<!--                                                                                                   margin-top: 30px;"-->
<!--                                                                                                                                        name="your-name"-->
<!--                                                                                                                                        placeholder="Ваше имя*"-->
<!--                                                                                                                                        value="" size="40"-->
<!--                                                                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"-->
<!--                                                                                                                                        aria-required="true"-->
<!--                                                                                                                                        aria-invalid="false"></span>-->
<!--                                            <span style="width: 100%; margin-left: 0;" class="wpcf7-form-control-wrap tel-564"><input type="tel" required-->
<!--                                                                                                                                      style="width: 100%;-->
<!--                                                                                                 margin-left: 0;"-->
<!--                                                                                                                                      name="tel-564"-->
<!--                                                                                                                                      placeholder="Контактный телефон*"-->
<!--                                                                                                                                      value=""-->
<!--                                                                                                                                      size="40"-->
<!--                                                                                                                                      class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"-->
<!--                                                                                                                                      aria-invalid="false"></span>-->
<!---->
<!--            <input class="wpcf7-form-control-wrap" style="width: 100%;-->
<!--                                                                                                   margin-bottom: 0;-->
<!--                                                                                                   margin-left: 0;-->
<!--                                                                                                   margin-top: 0;"-->
<!--                   id="submit-but-callback" type="submit" value="Отправить">-->
<!--            <div class="wpcf7-response-output wpcf7-display-none"></div>-->
<!--            <p style="margin-left: 0; width: 100%;">Отправляя форму вы даёте согласие на обработку персональных данных согласно закона Украины «О защите персональных данных»</p>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->

<!--<div class="textwidget">
    <form onsubmit="loaderCallback();" id="contact-form-popup" action="/wp-content/themes/sydney/pupup_sendmessage.php"
          method="post">
        <input type="hidden" value="Обратный звонок в верхнем меню" name="callback"></input>

                                            <span style="width: 100%; margin-left: 0;"
                                                  class="wpcf7-form-control-wrap your-name"><input type="text" required
                                                                                                   style="width: 100%;
                                                                                                   margin-bottom: 30px;
                                                                                                   margin-left: 0;
                                                                                                   margin-top: 30px;"
                                                                                                   name="your-name"
                                                                                                   placeholder="Ваше имя*"
                                                                                                   value="" size="40"
                                                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required">
                                            </span>
                                            <span style="width: 100%; margin-left: 0;"
                                                  class="wpcf7-form-control-wrap tel-564"><input type="tel" required
                                                                                                 style="width: 100%;
                                                                                                 margin-left: 0;"
                                                                                                 name="tel-564"
                                                                                                 placeholder="Контактный телефон*"
                                                                                                 value=""
                                                                                                 size="40"
                                                                                                 class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel">
                                            </span>

        <input class="wpcf7-form-control-wrap" style="width: 100%;
                                                                                                   margin-bottom: 0;
                                                                                                   margin-left: 0;
                                                                                                   margin-top: 0;"
               id="submit-but-callback" type="submit" value="Отправить">
        <p style="margin-left: 0; width: 100%;">Отправляя форму вы даёте согласие на обработку персональных данных
            согласно закона Украины «О защите персональных данных»</p>
    </form>
</div>-->

<!--<div class="textwidget">
    <div role="form" class="wpcf7" id="wpcf7-f47-o1" lang="ru-RU" dir="ltr">
        <div class="screen-reader-response"></div>
        <script>
            function addhotel(th) {
                var p = document.getElementById("hotel-country");
                /*var country_titile = jQuery(th).parent().parent().parent().children(".entry-header").html();*/
                var country_titile = jQuery(th).parent().parent().parent().children().children(".title-post").html();
                /*var hotel_title = jQuery(th).parent().parent().parent().children(".entry-post").html();*/
                var hotel_title = jQuery(th).parent().parent().parent().children().children("p").html();
                p.innerHTML = country_titile + hotel_title;
                var input = document.getElementById("input-country");
                input.setAttribute("value", country_titile + hotel_title);
            }
            function loader() {
                var loading = document.getElementById("submit-but-special");
                loading.setAttribute("value", "");
                loading.setAttribute("style",
                    "background: url(/wp-content/themes/sydney/img/post_preloader.gif) 50% 50% no-repeat #0088e7; width: 100%; margin-left: 0;");
                var delay = 3000;
                setTimeout("document.location.href='/thanks/'", delay);
            }
        </script>

        <form onsubmit="loader();" id="contact-form-popup" action="/wp-content/themes/sydney/pupup_sendmessage.php" method="post"
              class="wpcf7-form">
            <p id="hotel-country"></p>
            <input style="display: none" type="text" value="" name="target" id = "input-country"></input>
            <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="47">
                <input type="hidden" name="_wpcf7_version" value="4.5.1">
                <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f47-o1">
                <input type="hidden" name="_wpnonce" value="3f027fa8db">
            </div>
                                            <span style="width: 100%; margin-left: 0;" class="wpcf7-form-control-wrap your-name"><input type="text" required
                                                                                                                                        style="width: 100%;
                                                                                                   margin-bottom: 30px;
                                                                                                   margin-left: 0;
                                                                                                   margin-top: 30px;"
                                                                                                                                        name="your-name"
                                                                                                                                        placeholder="Ваше имя*"
                                                                                                                                        value="" size="40"
                                                                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                                                        aria-required="true"
                                                                                                                                        aria-invalid="false"></span>
                                            <span style="width: 100%; margin-left: 0;" class="wpcf7-form-control-wrap tel-564"><input type="tel" required
                                                                                                                                      style="width: 100%;
                                                                                                 margin-left: 0;"
                                                                                                                                      name="tel-564"
                                                                                                                                      placeholder="Контактный телефон*"
                                                                                                                                      value=""
                                                                                                                                      size="40"
                                                                                                                                      class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                                                                                                      aria-invalid="false"></span>

            <input class="wpcf7-form-control-wrap" style="width: 100%;
                                                                                                   margin-bottom: 0;
                                                                                                   margin-left: 0;
                                                                                                   margin-top: 0;"
                   id="submit-but-special" type="submit" value="Отправить">
            <div class="wpcf7-response-output wpcf7-display-none"></div>
            <p style="margin-left: 0; width: 100%;">Отправляя форму вы даёте согласие на обработку персональных данных согласно закона Украины «О защите персональных данных»</p>
        </form>
    </div>
</div>-->

