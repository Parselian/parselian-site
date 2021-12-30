<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$device = $_POST['user_device'];
$problem = $_POST['user_problem'];
$message = $_POST['user_addr'];

$to = 'parselian.study@yandex.ru';

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp>
  <xmp>Устройство: ".$device."</xmp>
  <xmp>Проблема: ".$problem."</xmp>
  <xmp>Адрес для курьера: ".$message."</xmp>
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта guru-fake.ru";
$from = array('Guru Fake', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);
