<?php

$sendto  = 'seo@makintour.com, shakrov@ukr.net, marketing@makintour.com'; //Адреса, куда будут приходить письма

$phone  = $_POST['phone'];
$name  = $_POST['name'];
$comment  = $_POST['comment'];
$order  = $_POST['order'];
$source = $_POST['source'];

// Формирование заголовка письма

$subject  = '[Новая заявка - Макинтур ЛП Луцк]';
$headers  = "From: ".$name." \r\n";
$headers .= "Reply-To: ". strip_tags($name) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка - Макинтур ЛП Луцк</h2>\r\n";
$msg .= "<p><strong>Источник:</strong> ".$source."</p>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Пожелания:</strong> ".$comment."</p>\r\n";
$msg .= "<p><strong>Форма заказа:</strong> ".$order."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>