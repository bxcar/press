<?php

//$sendto  = 'seo@makintour.com, coralborispol@gmail.com'; //Адреса, куда будут приходить письма
$sendto  = 'malanchukdima@mail.ru'; //Адреса, куда будут приходить письма

$phone  = $_POST['tel-564'];
$name  = $_POST['your-name'];
$p = trim(strip_tags($_POST['target'], '<br>')).trim(strip_tags($_POST['target-manager'], '<br>'));

// Формирование заголовка письма

$subject  = '[Новая заявка - Coral Travel г. Борисполь]';
//$headers  = "From: ".$name." \r\n";
//$headers .= "Reply-To: ". strip_tags($name) . "\r\n";
//$headers .= "MIME-Version: 1.0\r\n";
//$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

$msg = "Новая заявка - Coral Travel г. Борисполь\r\n";
$msg .= "Имя: ".$name."\r\n";
$msg .= "Телефон: ".$phone."\r\n";
$msg .= "Идентификатор формы: ".$p."\r\n";

// отправка сообщения
if(mail($sendto, $subject, $msg)) {
    echo "true";
} else {
    echo "false";
}
?>