<?php

die(); // переехали на другой сервер

if (!isset($_COOKIE['auth'])) {
    header("Location: https://center-apple.ru/route.php?error=80130181");
    die();
}



require_once($_SERVER['DOCUMENT_ROOT'].'/include/users-cfg.php');

/*
// Проверка доступа по указанному логину, примитивная
if ($_COOKIE['auth'] == 'dimaneva' || $_COOKIE['auth'] == 'Aleksei') {
    // Доступ разршен
} else {
    header("Location: https://center-apple.ru/route.php?kassa_raschetnaya=Y");
    die();
}
*/

/*
if (!isset($_COOKIE['secret'])) {
    header("Location: https://center-apple.ru/route.php?kassa_raschetnaya=Y");
    die();
}
*/



function authAccessDenied () {
    header("Location: https://center-apple.ru/route.php?error=80130183");
    die();
}

require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

$authCurrentUrl = $_SERVER['REQUEST_URI'];
$authUsernameFromCookie = $_COOKIE['auth'];
$authSecretFromCookie = $_COOKIE['secret'];

$authNewSecret = md5($authUsersCfg[$authUsernameFromCookie]['secret'] . date("mdy"));


// ПРОВЕРКА АВТОРИЗАЦИИ ПОЛЬЗОВАТЕЛЯ НА САЙТЕ

if ($authNewSecret == $authSecretFromCookie) {
    // Авторизация пройдена
} else {
    //echo $authNewSecret . '<br>' . $authSecretFromCookie . '<br>';
    authAccessDenied();
}



// ПРОВЕРКА ДОСТУПА ПОЛЬЗОВАТЕЛЯ К СТРАНИЦЕ //

/*
if ($authPositionAccessCfg[$authUsersCfg[$authUsernameFromCookie]['position']][$authCurrentUrl] == true) {
    // Доступ разрешен
} else {
    authAccessDenied();
}
*/

/*
if ($authUsersCfg[$authUsernameFromCookie]['position'] == 'Админ') { // Админ
    // Доступ разршен ко всему
} elseif ($authUsersCfg[$authUsernameFromCookie]['position'] == 'Куратор') { // Куратор
    // Доступ разршен ко всему
} elseif ($authUsersCfg[$authUsernameFromCookie]['position'] == 'Отдел гарантий') { // Отдел гарантий
    if (isCurrentUrl('/garantii/')) {
        // Доступ к  разрешен
    } elseif (isCurrentUrl('/map.php')) {
        // Доступ к маршрутке разрешен
    } else {
        authAccessDenied();
    }
} else {
    authAccessDenied();
}
*/

?>