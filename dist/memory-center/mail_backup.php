<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$to = 'leads@irepair.spb.ru';

$message = "Телефон: ".$phone." Имя: ".$name;
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта Center-Apple.ru";
$from = array('Center Apple', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);
