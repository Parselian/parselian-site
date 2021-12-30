<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$user_ip = $_SERVER['REMOTE_ADDR'];

require_once($_SERVER['DOCUMENT_ROOT'].'/include/db-cfg.php');

$ipCheck_IP = $_SERVER['REMOTE_ADDR'];
$ipCheck_IPEncoded = md5('32rf'.$ipCheck_IP.'gsff2');
$yesterdayTimestamp = date('Y-m-d H:i:s', strtotime('yesterday'));

$ipQ = mysqli_query($connection, 'select * from website_users_ip_check where encoded="'.$ipCheck_IPEncoded.'" AND timestamp>"'.$yesterdayTimestamp.'"');
$ipArr = mysqli_fetch_assoc($ipQ);
// echo '<pre>';
// print_r ($apArr);
$ipBlackList = ['79.134.200.114'];


if (!in_array($ipCheck_IP, $ipBlackList)) {
    if (isset($ipArr)) {
        $to = 'leads@irepair.spb.ru';
    
        $message = "Телефон: ".$phone." Имя: ".$name." (IP: ".$user_ip.")";
        
        // Обработка обращения из ВК
        if (isset($_COOKIE['rk']) && $_COOKIE['rk'] == 'vk') {  
            $message .= ' (Источник РКВК)';
            if (isset($_COOKIE['rs'])) {
                $message .= ' (' . $_COOKIE['rs'] . ')';
            }
        }

        //mail($to, 'Новая заявка с сайта center-apple.ru', $message);
    
        require_once "SendMailSmtpClass.php";
        $mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
        $subject = "Заявка с сайта Center-Apple.ru";
        $from = array('Center Apple', 'applecare.spb@yandex.ru');
        $result = $mailSMTP->send($to, $subject, $message, $from);
    
    
        // ПАРАНОИДАЛЬНАЯ БЕЗОПАСНОСТЬ ЗАПРОСА
        $message = mysqli_real_escape_string($message);
        $message = str_replace(['b','c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'l', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', ';'], 'a', $message);
        $message = addslashes($message);
    
    
        $mailSql = "INSERT INTO website_forms_leads (text) VALUES ('$message')";
        mysqli_query($connection, $mailSql);
    } else {
        // пользователь не был на сайте
    }
}










