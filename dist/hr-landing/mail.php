<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];


//$to = 'leads@irepair.spb.ru';
$to = 'parselian.study@yandex.ru';
//$to = 'str1t3r@gmail.com';

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp> 
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта HR-landing";
$from = array('ifixit', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);
