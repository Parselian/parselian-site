<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$to = 'parselian.study@yandex.ru';

$user_ip = $_SERVER['REMOTE_ADDR'];
$sources = [
    'banner-na-poiske' => PHP_EOL . 'Внимание: клиент оставил заявку после клика по баннеру на поиске. Передайте эту информацию в чат Общение',
    'vk'               => '(Источник РКВК)',
    'mytarget'         => '(Источник MYTARGET)',
    'fb'               => '(Источник РКФБ)',
];
$rk = $_POST['rk'] ?? $_COOKIE['rk'] ?? '';
if ($rk) $message .= $sources[$rk] ?? '';

$message = "
  <xmp>Телефон: ".$phone."</xmp> 
  <xmp>Имя: ".$name."</xmp>
";
//mail($to, 'Новая заявка с сайта center-apple.ru', $message);

require_once "SendMailSmtpClass.php";
$mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
$subject = "Заявка с сайта laptop-power.ru";
$from = array('Laptop Power', 'applecare.spb@yandex.ru');
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
            'source_tag'   => 'APPLE_GARAGE',
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