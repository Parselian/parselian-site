<?php

$name = isset($_POST['user_name']) ? $_POST['user_name'] : '---';
$phone = isset($_POST['user_phone']) ? $_POST['user_phone'] : '---';
$device = isset($_POST['user_device']) ? $_POST['user_device'] : '---';
$location = isset($_POST['user_location']) ? $_POST['user_location'] : '---';
$message = isset($_POST['user_message']) ? $_POST['user_message'] : '---';

$to = 'leads@irepair.spb.ru';
$user_ip = $_SERVER['REMOTE_ADDR'];

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp>
  <xmp>Что сломалось: ".$device."</xmp> 
  <xmp>Адрес клиента: ".$location."</xmp>
  <xmp>Описание поломки: ".$message."</xmp> 
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

$sources = [
    'banner-na-poiske' => PHP_EOL . 'Внимание: клиент оставил заявку после клика по баннеру на поиске. Передайте эту информацию в чат Общение',
    'vk'               => '(Источник РКВК)',
    'mytarget'         => '(Источник MYTARGET)',
    'fb'               => '(Источник РКФБ)',
];
$rk = $_POST['rk'] ?? $_COOKIE['rk'] ?? '';
if ($rk) $message .= $sources[$rk] ?? '';


require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта center-bosch.ru";
$from = array('Center Bosch', 'applecare.spb@yandex.ru');
$result = $mailSMTP->send($to, $subject, $message, $from);

$myCurl = curl_init();
curl_setopt_array($myCurl, array(
    CURLOPT_URL            => 'https://sca.tools/api/website-leads-api.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => http_build_query(array(
        'action' => 'create_new_website_lead',
        'source' => $subject,
        'text'   => $message,
        'lead'   => [
            'source_tag'   => 'BOSCH_CENTER',
            'name'         => $name ?? '–',
            'phone_number' => $phone ?? 0,
            'device'       => $device ?? '–',
            'problem'      => $problem ?? '–',
            'ip'           => $user_ip,
            'rk'           => $rk,
        ],
    ))
));
curl_exec($myCurl);