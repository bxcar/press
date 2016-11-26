<?php

//$sendto  = 'seo@makintour.com, coralborispol@gmail.com'; //Адреса, куда будут приходить письма
$sendto  = 'malanchukdima@mail.ru'; //Адреса, куда будут приходить письма
//$sendto  = 'seo@makintour.com, shakrov@ukr.net'; //Адреса, куда будут приходить письма

$phone  = $_POST['tel-564'];
$name  = $_POST['your-name'];
$comment  = $_POST['your-message'];
$order  = $_POST['order'];
//$source = $_POST['source'];

// Формирование заголовка письма

$subject  = '[Новая заявка - Coral Travel Борисполь]';
//$headers  = "From: ".$name." \r\n";
//$headers .= "Reply-To: ". strip_tags($name) . "\r\n";
//$headers .= "MIME-Version: 1.0\r\n";
//$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

//$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
//$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка - Coral Travel Борисполь</h2>\r\n";
//$msg .= "<p><strong>Источник:</strong> ".$source."</p>\r\n";
$msg .= "Имя: ".$name."\r\n";
$msg .= "Телефон: ".$phone."\r\n";
$msg .= "Пожелания к туру: ".$comment."\r\n";
$msg .= "Идентификатор: ".$order."\r\n";
//$msg .= "</body></html>";

// отправка сообщения
if(mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>