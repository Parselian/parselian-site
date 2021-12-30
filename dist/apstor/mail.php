<?php

$name = isset($_POST['user_name']) ? $_POST['user_name'] : '---';
$phone = isset($_POST['user_phone']) ? $_POST['user_phone'] : '---';
$gift = isset($_POST['user_gift']) ? $_POST['user_gift'] : '---';

$to = 'leads@irepair.spb.ru';
// $to = 'parselian.study@yandex.ru';
//$to = 'str1t3r@gmail.com';

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp>
  <xmp>Выбранный подарок: ".$gift."</xmp>
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта Apstor";
$from = array('Apstor', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);
