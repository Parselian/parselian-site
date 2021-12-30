<?php

$name = isset($_POST['user_name']) ? $_POST['user_name'] : '---';
$phone = isset($_POST['user_phone']) ? $_POST['user_phone'] : '---';
$device = isset($_POST['user_device']) ? $_POST['user_device'] : '---';
$location = isset($_POST['user_location']) ? $_POST['user_location'] : '---';
$message = isset($_POST['user_message']) ? $_POST['user_message'] : '---';

$to = 'parselian.study@yandex.ru';

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp>
  <xmp>Что сломалось: ".$device."</xmp> 
  <xmp>Адрес клиента: ".$location."</xmp>
  <xmp>Описание поломки: ".$message."</xmp> 
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта indesit-center.ru";
$from = array('Indesit Center', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);
