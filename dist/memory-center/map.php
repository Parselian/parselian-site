<?php
if (!isset($_COOKIE['auth'])) {
    header("Location: https://center-apple.ru/route.php");
    die();
}
include_once 'amocrm/amo_api.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/include/functions.php');

$amo = new AmoController();
//   КНОПКА <button style="font-size:15px">Я передал заказ СИ</button>
$host = 'localhost';
$username = 'user10054_dbuser';
$password = 'A7y0T2n7';
$db = 'user10054_db';

$connection = mysqli_connect($host, $username, $password, $db);
mysqli_set_charset($connection,"utf8");
$connection2 = mysqli_connect($host, $username, $password, $db);
mysqli_set_charset($connection2,"utf8");

$date = isset($_GET['date']) ? $_GET['date'] : date('d.m.Y');
//$start = microtime(true);
$leads = $amo->getLeadsByDate($date);
//echo microtime(true) - $start;
//echo '<br>';
//$testLeadsQ = mysqli_query($connection, 'select * from amo_leads where actual=1 and date(service_date)=curdate() group by orderID');

$eng = [];
$engineersForMapQ = mysqli_query($connection, 'select * from engineers where active=1 or active=2');
while ($row = mysqli_fetch_array($engineersForMapQ)) {
    $eng[$row['name']] = array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array(), "city" => $row['city']);
}

/*$eng = array(
    //'Дмитрий Щербачев' => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Павел Храмцов" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Айхан Мусаев" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Кучкаров Сергей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Ганнибалов Владислав" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Алихан Калиматов" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Ребров Антон" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Федкевич Станислав" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Разгуляев Валентин" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Ушанги Грдзелишвили" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Тимофей Савченко" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Иванов Артём" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Стороженко Сергей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Вэтэмэнеску Александр" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Сапожников Михаил" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Любимов Павел" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Лавров Александр" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Ящук Денис" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Лавров Георгий" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Грицишин Александр" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Шевцов Андрей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Мусаев Субхан" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Лиленков Кирилл" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Стажер" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Килин Алексей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Якуба Александр" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Якунин Антон" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Макаров Андрей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Демиденко Сергей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Плошенко Алексей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Синицын Никита" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Хусанов Шерзодбек" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Бакланов Евгений" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Федоров Захар" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Митин Артем" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Ермолин Никита" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Баренков Андрей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Низовцев Дмитрий" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Долгопятов Алексей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Корчагин Артем" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Матвей Щукин" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Инякин Виталий" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Терентьев Денис" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Буров Константин" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Кадач Олег" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    //"Кутузов Игорь" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Кунгуров Андрей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Узденов Али" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Иванченко Сергей" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Балашов Дмитрий" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "Игнатьев Николай" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array()),
    "ЧП СЦЭ" => array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array())
);*/

$engStatuses = array();
$newEng = array();
foreach ($eng as $name => $arr) {
    $query = 'select * from eng_statuses where eng="'.$name.'" and date="'.date('Y-m-d', strtotime($date)).'" order by id desc limit 0,1';
    $res = mysqli_query($connection, $query);
    $tmp = -1;

    if ($result = mysqli_fetch_array($res)) {
        $tmp = $result['status'];
    }
    $engStatuses[$name] = $tmp;
}
asort($engStatuses);
$reversed = array_reverse($engStatuses);

foreach ($reversed as $name => $status) {
    $newEng[$name] = $eng[$name];
}
$eng = $newEng;
$unsorted = array("09:00" => array(), "10:00" => array(), "11:00" => array(), "12:00" => array(), "13:00" => array(), "14:00" => array(), "15:00" => array(), "16:00" => array(), "17:00" => array(), "18:00" => array(), "19:00" => array(), "20:00" => array(), "21:00" => array(), "22:00" => array(), "23:00" => array());

foreach ($leads['response']['leads'] as $lead) {
    if ($lead['status_id'] == 16714372 || $lead['status_id'] == 16715356 || $lead['status_id'] == 16714378 || $lead['status_id'] == 143) continue;
    $time = "";
    $e = "";
    $metro = "";
    $model = "";
    $problem = "";
    $ozvuch1 = "";
    $ozvuch2 = "";
    $problem_descr1 = "";
    $problem_descr2 = "";
    $model2 = "";
    $problem2 = "";
    $model_features = "";
    $model_features2 = "";
    $garanty_date = "";
    $gsi = "";
    $garanty_time = "";
    $id = $lead['id'];
    $multiple_device = "";
    $model_a = "";
    $notice = "";
    $is_prodolzhenie = 0;
    foreach ($lead['custom_fields'] as $cf) {
        if ($cf['id'] == 460647) {
            $metro = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 29683) {
            $time = $cf['values'][0]['value'];
        }
        /*if ($cf['id'] == 26073) {
            $e = $cf['values'][0]['value'];
        }*/
        if ($cf['id'] == 485453) {
            $e = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 26063) {
            $model = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 26045) {
            $problem = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 474565) {
            $garanty_date = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 474567) {
            $garanty_time = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 474569) {
            $gsi = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479181) {
            $multiple_device = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 475585) {
            $ozvuch1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 476895) {
            $problem_descr1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479401) {
            $ozvuch2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479403) {
            $problem_descr2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479307) {
            $model2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479317) {
            $problem2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 476893) {
            $model_features = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479315) {
            $model_features2 = $cf['values'][0]['value'];
        }

        if ($cf['id'] == 475583) {
            $model_a = $cf['values'][0]['value'];
            $model_a = str_replace('A','',$model_a);
            $model_a = str_replace('a','',$model_a);
            $model_a = str_replace('А','',$model_a);
            $model_a = str_replace('а','',$model_a);
            $model_a = 'A'.$model_a;
        }
        if ($cf['id'] == 29649) {
            $notice = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479325) {
            $is_prodolzhenie = $cf['values'][0]['value'];
        }

        /////////////// ОБРАБОТКА ГОРОДОВ ///////////////

        if ($cf['id'] == 487265) {
            $city = $cf['values'][0]['value'];
        }

        /////////////////////////////////////////////////

    }
    $rounded_time = "";
    if ($time != "") {
        $rounded_time = substr($time, 0, 2).":00";
    }
    $ssset = false;
    if ($e != "" && $rounded_time != "" && !$garanty_date) {
        $eng[$e][$rounded_time][] = array('id' => $id, 'time' => $time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice, 'is_prodolzhenie' => $is_prodolzhenie, 'city' => $city);
        $ssset = true;
    }
    if ($rounded_time != "" && $garanty_date) {
        if (!$garanty_time) {
            $garanty_time = "09:00";
        }
        if ($gsi == "Ганнибалов Владислав") {
            $eng['Ганнибалов Владислав'][$rounded_time][] = array('id' => $id, 'time' => $garanty_time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice, 'is_prodolzhenie' => $is_prodolzhenie, 'city' => $city);
        } else {
            if ($gsi == "Усольцев Иван") {
                $eng['Усольцев Иван'][$rounded_time][] = array('id' => $id, 'time' => $garanty_time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice, 'is_prodolzhenie' => $is_prodolzhenie, 'city' => $city);
            }
            if ($gsi == "Головченко Антон") {
                $eng['Головченко Антон'][$rounded_time][] = array('id' => $id, 'time' => $garanty_time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice, 'is_prodolzhenie' => $is_prodolzhenie, 'city' => $city);
            }
        }
        $ssset = true;
    }

    if ($e == "" && !$ssset) {
        $unsorted[$rounded_time][] = array('id' => $id, 'time' => $time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice, 'is_prodolzhenie' => $is_prodolzhenie, 'city' => $city);
    }
}

/*
$testLeads = [];
while ($testLeadArr = mysqli_fetch_array($testLeadsQ)) {
    if ($lead['status_id'] == 16714372 || $lead['status_id'] == 16715356 || $lead['status_id'] == 16714378 || $lead['status_id'] == 143) continue;
    $time = $testLeadArr['time'];
    $e = $testLeadArr['eng'];
    $metro = $testLeadArr['metro'];
    $model = $testLeadArr['model1'];
    $problem = $testLeadArr['problem1'];
    $ozvuch1 = $testLeadArr['uslugi1'];
    $ozvuch2 = $testLeadArr['uslugi2'];
    $problem_descr1 = $testLeadArr['problem_description1'];
    $problem_descr2 = $testLeadArr['problem_description2'];
    $model2 = $testLeadArr['model2'];
    $problem2 = $testLeadArr['problem2'];
    $model_features = $testLeadArr['model_feature1'];
    $model_features2 = $testLeadArr['model_feature2'];
    $garanty_date = $testLeadArr['garanty_date'];
    $gsi = $testLeadArr['gsi'];
    $garanty_time = $testLeadArr['garanty_time'];
    $id = $testLeadArr['orderID'];
    $multiple_device = $testLeadArr['neskolko_ustroistv'];
    $model_a = $testLeadArr['model_a1'];
    $notice = $testLeadArr['note'];

    $rounded_time = "";
    if ($time != "") {
        $rounded_time = substr($time, 0, 2).":00";
    }
    $ssset = false;
    if ($e != "" && $rounded_time != "" && !$garanty_date) {
        $eng[$e][$rounded_time][] = array('id' => $id, 'time' => $time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice);
        $ssset = true;
    }
    if ($rounded_time != "" && $garanty_date) {
        if (!$garanty_time) {
            $garanty_time = "09:00";
        }
        if ($gsi == "Ганнибалов") {
            $eng['Ганнибалов Владислав'][$rounded_time][] = array('id' => $id, 'time' => $garanty_time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice);
        } else {
            if ($gsi == "Сапожников") {
                $eng['Сапожников Михаил'][$rounded_time][] = array('id' => $id, 'time' => $garanty_time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice);
            }
        }
        $ssset = true;
    }

    if ($e == "" && !$ssset) {
        $unsorted[$rounded_time][] = array('id' => $id, 'time' => $time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'multiple_device' => $multiple_device, 'model_a' => $model_a, 'ozvuch1' => $ozvuch1, 'ozvuch2' => $ozvuch2, 'problem_descr1' => $problem_descr1, 'problem_descr2' => $problem_descr2, 'model2' => $model2, 'problem2' => $problem2, 'model_features' => $model_features, 'model_features2' => $model_features2, 'notice' => $notice);
    }


}
*/
$extraLeadsQ = mysqli_query($connection, 'select * from net_zakaza_v_marshrutke');
while ($extraLeadID = mysqli_fetch_array($extraLeadsQ)) {
    $extraLead = $amo->getLeadByID($extraLeadID['orderID']);
    foreach ($extraLead['response']['leads'] as $lead) {
        if ($lead['status_id'] == 16714372 || $lead['status_id'] == 16715356 || $lead['status_id'] == 16714378 || $lead['status_id'] == 143) continue;
        $time = "";
        $e = "";
        $metro = "";
        $model = "";
        $problem = "";
        $garanty_date = "";
        $garanty_time = "";
        $is_prodolzhenie = 0;
        $id = $lead['id'];
        foreach ($lead['custom_fields'] as $cf) {
            if ($cf['id'] == 460647) {
                $metro = $cf['values'][0]['value'];
            }
            if ($cf['id'] == 29683) {
                $time = $cf['values'][0]['value'];
            }
            /*if ($cf['id'] == 26073) {
                $e = $cf['values'][0]['value'];
            }*/
            if ($cf['id'] == 485453) {
                $e = $cf['values'][0]['value'];
            }
            if ($cf['id'] == 26063) {
                $model = $cf['values'][0]['value'];
            }
            if ($cf['id'] == 26045) {
                $problem = $cf['values'][0]['value'];
            }
            if ($cf['id'] == 474565) {
                $garanty_date = $cf['values'][0]['value'];
            }
            if ($cf['id'] == 474567) {
                $garanty_time = $cf['values'][0]['value'];
            }
            if ($cf['id'] == 479325) {
                $is_prodolzhenie = $cf['values'][0]['value'];
            }
        }
        $rounded_time = "";
        if ($time != "") {
            $rounded_time = substr($time, 0, 2) . ":00";
        }
        $ssset = false;
        if ($e != "" && $rounded_time != "" && !$garanty_date) {
            $eng[$e][$rounded_time][] = array('id' => $id, 'time' => $time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'is_prodolzhenie' => $is_prodolzhenie);
            $ssset = true;
        }
        if ($rounded_time != "" && $garanty_date) {
            if (!$garanty_time) {
                $garanty_time = "09:00";
            }
            if ($gsi == "Ганнибалов") {
                $eng['Ганнибалов Владислав'][$rounded_time][] = array('id' => $id, 'time' => $garanty_time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'is_prodolzhenie' => $is_prodolzhenie);
            } else {
                if ($gsi == "Усольцев") {
                    $eng['Усольцев Иван'][$rounded_time][] = array('id' => $id, 'time' => $garanty_time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'is_prodolzhenie' => $is_prodolzhenie);
                }
            }
            $ssset = true;
        }

        if ($e == "" && !$ssset) {
            $unsorted[$rounded_time][] = array('id' => $id, 'time' => $time, 'metro' => $metro, 'model' => $model, 'problem' => $problem, 'is_prodolzhenie' => $is_prodolzhenie);
        }
    }
}

$onlineEngQ = mysqli_query($connection, 'select * from eng_statuses where status != 0 and date="'.date('Y-m-d', strtotime($date)).'" group by eng order by eng');
$onlineEngs = array();
while ($onl = mysqli_fetch_array($onlineEngQ)) {
    $onlineEngs[] = $onl['eng'];
}
?>
<?

function getDeviceByAModel($a) {
    $res = "";
    $a = str_replace('A', '', $a);
    $a = str_replace('a', '', $a);
    $a = str_replace('А', '', $a);  // RUSSKAYA!
    $a = str_replace('а', '', $a);  /// RUSSKAYA!
    switch ($a) {
        case '1428' : $res = "iPhone 5"; break;
        case '1429' : $res = "iPhone 5"; break;
        case '1442' : $res = "iPhone 5"; break;
        case '1456' : $res = "iPhone 5c"; break;
        case '1507' : $res = "iPhone 5c"; break;
        case '1516' : $res = "iPhone 5c"; break;
        case '1529' : $res = "iPhone 5c"; break;
        case '1532' : $res = "iPhone 5c"; break;
        case '1453' : $res = "iPhone 5s"; break;
        case '1457' : $res = "iPhone 5s"; break;
        case '1518' : $res = "iPhone 5s"; break;
        case '1528' : $res = "iPhone 5s"; break;
        case '1530' : $res = "iPhone 5s"; break;
        case '1533' : $res = "iPhone 5s"; break;
        case '1723' : $res = "iPhone SE"; break;
        case '1662' : $res = "iPhone SE"; break;
        case '1724' : $res = "iPhone SE"; break;
        case '1549' : $res = "iPhone 6"; break;
        case '1586' : $res = "iPhone 6"; break;
        case '1589' : $res = "iPhone 6"; break;
        case '1522' : $res = "iPhone 6 Plus"; break;
        case '1524' : $res = "iPhone 6 Plus"; break;
        case '1593' : $res = "iPhone 6 Plus"; break;
        case '1633' : $res = "iPhone 6s"; break;
        case '1688' : $res = "iPhone 6s"; break;
        case '1700' : $res = "iPhone 6s"; break;
        case '1634' : $res = "iPhone 6s Plus"; break;
        case '1687' : $res = "iPhone 6s Plus"; break;
        case '1699' : $res = "iPhone 6s Plus"; break;
        case '1660' : $res = "iPhone 7"; break;
        case '1778' : $res = "iPhone 7"; break;
        case '1779' : $res = "iPhone 7"; break;
        case '1661' : $res = "iPhone 7 Plus"; break;
        case '1784' : $res = "iPhone 7 Plus"; break;
        case '1785' : $res = "iPhone 7 Plus"; break;
        case '1863' : $res = "iPhone 8"; break;
        case '1905' : $res = "iPhone 8"; break;
        case '1906' : $res = "iPhone 8"; break;
        case '1864' : $res = "iPhone 8 Plus"; break;
        case '1897' : $res = "iPhone 8 Plus"; break;
        case '1898' : $res = "iPhone 8 Plus"; break;
        case '1865' : $res = "iPhone X"; break;
        case '1901' : $res = "iPhone X"; break;
        case '1902' : $res = "iPhone X"; break;
        case '1984' : $res = "iPhone XR"; break;
        case '2105' : $res = "iPhone XR"; break;
        case '2106' : $res = "iPhone XR"; break;
        case '2108' : $res = "iPhone XR"; break;
        case '1920' : $res = "iPhone Xs"; break;
        case '2097' : $res = "iPhone Xs"; break;
        case '2098' : $res = "iPhone Xs"; break;
        case '2100' : $res = "iPhone Xs"; break;
        case '1921' : $res = "iPhone Xs Max"; break;
        case '2101' : $res = "iPhone Xs Max"; break;
        case '2102' : $res = "iPhone Xs Max"; break;
        case '2104' : $res = "iPhone Xs Max"; break;
        case '1219' : $res = 'iPad 1';break;
        case '1337' : $res = 'iPad 1';break;
        case '1395' : $res = 'iPad 2';break;
        case '1396' : $res = 'iPad 2';break;
        case '1397' : $res = 'iPad 2';break;
        case '1416' : $res = 'iPad 3';break;
        case '1430' : $res = 'iPad 3';break;
        case '1403' : $res = 'iPad 3';break;
        case '1458' : $res = 'iPad 4';break;
        case '1459' : $res = 'iPad 4';break;
        case '1460' : $res = 'iPad 4';break;
        case '1822' : $res = 'iPad 2017';break;
        case '1823' : $res = 'iPad 2017';break;
        case '1893' : $res = 'iPad 2018';break;
        case '1954' : $res = 'iPad 2018';break;
        case '1474' : $res = 'iPad Air';break;
        case '1475' : $res = 'iPad Air';break;
        case '1476' : $res = 'iPad Air';break;
        case '1566' : $res = 'iPad Air 2';break;
        case '1567' : $res = 'iPad Air 2';break;
        case '2152' : $res = 'iPad Air 2019';break;
        case '2123' : $res = 'iPad Air 2019';break;
        case '2154' : $res = 'iPad Air 2019';break;
        case '1432' : $res = 'iPad mini';break;
        case '1454' : $res = 'iPad mini';break;
        case '1455' : $res = 'iPad mini';break;
        case '1489' : $res = 'iPad mini 2';break;
        case '1490' : $res = 'iPad mini 2';break;
        case '1491' : $res = 'iPad mini 2';break;
        case '1599' : $res = 'iPad mini 3';break;
        case '1600' : $res = 'iPad mini 3';break;
        case '1538' : $res = 'iPad mini 4';break;
        case '1550' : $res = 'iPad mini 4';break;
        case '2133' : $res = 'iPad mini 2019';break;
        case '2124' : $res = 'iPad mini 2019';break;
        case '2126' : $res = 'iPad mini 2019';break;
        case '2125' : $res = 'iPad mini 2019';break;
        case '1673' : $res = 'iPad Pro 9,7';break;
        case '1674' : $res = 'iPad Pro 9,7';break;
        case '1675' : $res = 'iPad Pro 9,7';break;
        case '1701' : $res = 'iPad Pro 10,5';break;
        case '1709' : $res = 'iPad Pro 10,5';break;
        case '1852' : $res = 'iPad Pro 10,5';break;
        case '1584' : $res = 'iPad Pro 12,9';break;
        case '1652' : $res = 'iPad Pro 12,9';break;
        case '1670' : $res = 'iPad Pro 12,9 2017';break;
        case '1671' : $res = 'iPad Pro 12,9 2017';break;
        case '1821' : $res = 'iPad Pro 12,9 2017';break;
        case '1980' : $res = 'iPad Pro 11 2018 (безрамочный)';break;
        case '2013' : $res = 'iPad Pro 11 2018 (безрамочный)';break;
        case '1934' : $res = 'iPad Pro 11 2018 (безрамочный)';break;
        case '1979' : $res = 'iPad Pro 11 2018 (безрамочный)';break;
        case '1876' : $res = 'iPad Pro 12,9 2018 (безрамочный)';break;
        case '2014' : $res = 'iPad Pro 12,9 2018 (безрамочный)';break;
        case '1895' : $res = 'iPad Pro 12,9 2018 (безрамочный)';break;
        case '1983' : $res = 'iPad Pro 12,9 2018 (безрамочный)';break;
    }
    return $res;
}

function motivaciya_srednii($curSr) {
    $result = 0.1;
    if ($curSr > 2100) {
        $result = 0.125;
    }
    if ($curSr > 2500) {
        $result = 0.15;
    }
    if ($curSr > 2900) {
        $result = 0.18;
    }
    if ($curSr > 3300) {
        $result = 0.205;
    }
    if ($curSr > 3700) {
        $result = 0.23;
    }
    if ($curSr > 4100) {
        $result = 0.255;
    }
    if ($curSr > 4500) {
        $result = 0.28;
    }
    if ($curSr > 4900) {
        $result = 0.3;
    }
    if ($curSr > 5300) {
        $result = 0.32;
    }
    if ($curSr > 5700) {
        $result = 0.36;
    }
    if ($curSr >  6100) {
        $result = 0.38;
    }
    if ($curSr > 6500) {
        $result = 0.4;
    }
    if ($curSr > 6900) {
        $result = 0.42;
    }
    if ($curSr > 7300) {
        $result = 0.44;
    }
    if ($curSr > 7712) {
        $result = 0.46;
    }
    if ($curSr > 8154) {
        $result = 0.48;
    }
    if ($curSr > 8640) {
        $result = 0.5;
    }
    if ($curSr > 9178) {
        $result = 0.52;
    }
    if ($curSr > 9904) {
        $result = 0.54;
    }
    if ($curSr > 10612) {
        $result = 0.56;
    }
    return $result;
}
function motivaciya_val($curSr) {
    $result = 0.32;
    if ($curSr > 200000) {
        $result = 0.36;
    }
    if ($curSr >  250000) {
        $result = 0.38;
    }
    if ($curSr > 300000) {
        $result = 0.4;
    }
    if ($curSr > 350000) {
        $result = 0.42;
    }
    if ($curSr > 400000) {
        $result = 0.44;
    }
    if ($curSr > 462720) {
        $result = 0.46;
    }
    if ($curSr > 530010) {
        $result = 0.48;
    }
    if ($curSr > 604800) {
        $result = 0.5;
    }
    if ($curSr > 688350) {
        $result = 0.52;
    }
    if ($curSr > 792348) {
        $result = 0.54;
    }
    if ($curSr > 902000) {
        $result = 0.56;
    }
    return $result;
}

?>
<?

$avgQA = mysqli_query($connection, 'select round(sum(a.chistaya)/sum(a.kol_vid)) as avgA from statistika_iphone_mal_30 a where a.date=CURDATE()');
$avgArrA = mysqli_fetch_array($avgQA);
$avgQB = mysqli_query($connection, 'select round(sum(b.chistaya)/sum(b.kol_vid)) as avgB from statistika_iphone_big_30 b where b.date=CURDATE()');
$avgArrB = mysqli_fetch_array($avgQB);
$avgQC = mysqli_query($connection, 'select round(sum(c.chistaya)/sum(c.kol_vid)) as avgC from statistika_ipad_30 c where c.date=CURDATE()');
$avgArrC = mysqli_fetch_array($avgQC);
$avgQD = mysqli_query($connection, 'select round(sum(d.chistaya)/sum(d.kol_vid)) as avgD from statistika_mac_30 d where d.date=CURDATE()');
$avgArrD = mysqli_fetch_array($avgQD);
$averageArr['avgA'] = $avgArrA['avgA'];
$averageArr['avgB'] = $avgArrB['avgB'];
$averageArr['avgC'] = $avgArrC['avgC'];
$averageArr['avgD'] = $avgArrD['avgD'];


$engineersResults = array();
$resultsQ = mysqli_query($connection, 'select engineer, srednaya_chistaya, kol_vid from statistika_iphone_mal_30 where date=CURDATE()');
$i = 0;
while ($res = mysqli_fetch_array($resultsQ)) {
    $i++;
    $engineersResults[$res['engineer']]['iphone_small'] = array('ind' => $i, 'sum' => $res['srednaya_chistaya'], 'kol' => $res['kol_vid']);
}
$resultsQ = mysqli_query($connection, 'select engineer, srednaya_chistaya, kol_vid from statistika_iphone_big_30 where date=CURDATE()');
$i = 0;
while ($res = mysqli_fetch_array($resultsQ)) {
    $i++;
    $engineersResults[$res['engineer']]['iphone_big'] = array('ind' => $i, 'sum' => $res['srednaya_chistaya'], 'kol' => $res['kol_vid']);
}
$resultsQ = mysqli_query($connection, 'select engineer, srednaya_chistaya, kol_vid from statistika_ipad_30 where date=CURDATE()');
$i = 0;
while ($res = mysqli_fetch_array($resultsQ)) {
    $i++;
    $engineersResults[$res['engineer']]['ipad'] = array('ind' => $i, 'sum' => $res['srednaya_chistaya'], 'kol' => $res['kol_vid']);
}
$resultsQ = mysqli_query($connection, 'select engineer, srednaya_chistaya, kol_vid from statistika_mac_30 where date=CURDATE()');
$i = 0;
while ($res = mysqli_fetch_array($resultsQ)) {
    $i++;
    $engineersResults[$res['engineer']]['mac'] = array('ind' => $i, 'sum' => $res['srednaya_chistaya'], 'kol' => $res['kol_vid']);
}
//echo microtime(true) - $start;
//echo '<br>';
?>
<html>
<head>
    <link rel="stylesheet" href="map.css?<?=mt_rand();?>">
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Маршрутка</title>
</head>
<body class="p-left">
<?
//require_once('../all_header.php');
require_once ('main_menu.php');
?>

<?
$badgeCityNA = '<span style="font-size: 8px;background-color: red; color:white; padding: 2px; vertical-align: top; border-radius: 3px; line-height:18px;" title="Нет данных по городу">НД</span>';
$badgeCitySPb = '<span style="font-size: 8px;background-color: blue; color:white; padding: 2px; vertical-align: top; border-radius: 3px; line-height:18px;" title="Город – Санкт-Петербург">СПб</span>';
$badgeCityMSK = '<span style="font-size: 8px;background-color: black; color:white; padding: 2px; vertical-align: top; border-radius: 3px; line-height:18px;" title="Город – Москва">МСК</span>';
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3>Маршрутка 2.9</h3>
        </div>
        <div class="col-6">
            Выбрать дату: <input type="date" value="<?=date('Y-m-d', strtotime($date))?>"> <button id="choose_date" class="btn btn-light">Показать</button>
        </div>
        <div class="col-5">
            <p class="h5 text-secondary">Актуальность данных: <?=date('d.m.Y, H:i:s');?></p>
        </div>
        <div class="col">
            <button class="btn btn-primary d-none" distribute>Распределить заказы</button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover table-sm">
                <tr>
                    <td>Статус</td>
                    <td>Инженер</td>
                    <td>09:00</td>
                    <td>10:00</td>
                    <td>11:00</td>
                    <td>12:00</td>
                    <td>13:00</td>
                    <td>14:00</td>
                    <td>15:00</td>
                    <td>16:00</td>
                    <td>17:00</td>
                    <td>18:00</td>
                    <td>19:00</td>
                    <td>20:00</td>
                    <td>21:00</td>
                    <td>22:00</td>
                    <td>23:00</td>
                </tr>
                <? foreach ($eng as $name => $arr) {?>

                        <tr class="<? if ($engStatuses[$name] == '0' || $engStatuses[$name] == -1) echo 'table-danger';?>">
                            <td class="<? if ($engStatuses[$name] == '0' || $engStatuses[$name] == -1) echo 'table-danger';else echo 'table-info' ?>">
                                <select>
                                    <option value="0" <? if ($engStatuses[$name] == '0') echo 'selected'?>>Не на линии</option>
                                    <option value="1" <? if ($engStatuses[$name] == '1') echo 'selected'?>>На линии 12-22</option>
                                    <option value="2" <? if ($engStatuses[$name] == '2') echo 'selected'?>>На линии 11-21</option>
                                </select>
                            </td>
                        <td>
                            <span>
                                <?
                                if ($arr['city'] === 'Санкт-Петербург') {
                                    $badgeCity = $badgeCitySPb;
                                } elseif ($arr['city'] === 'Москва') {
                                    $badgeCity = $badgeCityMSK;
                                } else {
                                    $badgeCity = $badgeCityNA;
                                }
                                ?>
                                <a class="si-name" href="https://irepairspb.amocrm.ru/leads/pipeline/?filter%5Btags_logic%5D=or&filter%5Bstatus_id%5D%5B%5D=16714381&filter%5Bstatus_id%5D%5B%5D=16715350&filter%5Bstatus_id%5D%5B%5D=16715359&filter%5Bstatus_id%5D%5B%5D=16840747&filter%5Bstatus_id%5D%5B%5D=27230560&filter%5Bstatus_id%5D%5B%5D=27230563&filter%5Bstatus_id%5D%5B%5D=27230566&filter%5Bstatus_id%5D%5B%5D=28267039&useFilter=y&term=<?=urlencode($name)?>" target="_blank">
                                    <b><?=$name?></b>
                                </a> <?=$badgeCity?>
                            </span>


                            <?

                                /*$tmpArr = $amo->getActualEngineerLeads($name);
                                $engLeads = $tmpArr['response']['leads'];
                                $engLCount = 0;
                                foreach ($engLeads as $engLead) {
                                    if (mb_strpos(mb_strtolower($engLead['name']), 'продолжение') === false) {
                                        $engLCount += 1;
                                    }
                                }*/
                                $engLeadsQ = mysqli_query($connection, 'select count(id) as c from amo_leads where eng="'.$name.'" and status in (16715350, 27230563, 27230566, 28267039, 16715359, 16840747) and actual=1 and is_prodolzhenie="Нет"');
                                $engLCount = mysqli_fetch_array($engLeadsQ)['c'];
                                $engLeadsObmenQ = mysqli_query($connection, 'select count(id) as c from amo_leads where eng="'.$name.'" and status=27230560 and actual=1');
                                $engObmenCount = mysqli_fetch_array($engLeadsObmenQ)['c'];
                                $engLeadsRaspredQ = mysqli_query($connection, 'select count(id) as c from amo_leads where eng="'.$name.'" and status=16714381 and actual=1 and is_prodolzhenie="Нет"');
                                $engRaspredCount = mysqli_fetch_array($engLeadsRaspredQ)['c'];
                                $engOrdersLimitQ = mysqli_query($connection, 'select orders_limit, total_orders_limit from engineers where name="'.$name.'"');
                                $engOrdersLimitArr = mysqli_fetch_array($engOrdersLimitQ);
                                $engOrdersLimit = $engOrdersLimitArr['orders_limit'];
                                $engOrdersTotalLimit = $engOrdersLimitArr['total_orders_limit'];
                                $engQ = mysqli_query($connection, 'select short_name from engineers where name="'.$name.'"');
                                $engArr = mysqli_fetch_array($engQ);
                                $engTotalCountQ = mysqli_query($connection, 'select count(id) as c from uchet where engineer="'.$engArr['short_name'].'" and prodolzhenie="Нет"');
                                $engTotalCount = mysqli_fetch_array($engTotalCountQ)['c'];
                            ?>
                            <div style="font-size:10px;padding-top:10px; <? if (($name == "Грицишин Александр" && $engLCount >= 1) || ($name == "Ребров Антон" && $engLCount >= 2) || $engLCount >= 7) echo 'font-weight:700;color:red'?> ">
                                Заказов: <?=$engLCount?>+<?=$engRaspredCount?> / <?=$engOrdersLimit?> <a href="http://center-apple.ru/si-info/?engineer=<?=$name?>" >[ERP]</a>
                            </div>
                            <div style="font-size:10px;">
                                На обмене: <?=$engObmenCount?>
                            </div>
                            <div style="font-size:10px;">
                                Всего: <?=$engTotalCount?> / <?=$engOrdersTotalLimit?>
                            </div>
                            <div style="font-size:12px;padding-top:10px;width: 200px;">
                                Средний чек:<br>
                                iPhone 5-6s: <span style="font-weight:600;color:<?=$engineersResults[$name]['iphone_small']['sum'] < $averageArr['avgA'] ? 'red' : 'green'?>"><?if($engineersResults[$name]['iphone_small']['sum'] > 0) echo '+'?><?=$engineersResults[$name]['iphone_small']['sum']?> ₽ </span> <span class="text-gray">(<?=$engineersResults[$name]['iphone_small']['kol']?>) (<?=$engineersResults[$name]['iphone_small']['ind']?>ый)</span><br>
                                iPhone 7-Xs: <span style="font-weight:600;color:<?=$engineersResults[$name]['iphone_big']['sum'] < $averageArr['avgB'] ? 'red' : 'green'?>"><?if($engineersResults[$name]['iphone_big']['sum'] > 0) echo '+'?><?=$engineersResults[$name]['iphone_big']['sum']?> ₽ </span> <span class="text-gray">(<?=$engineersResults[$name]['iphone_big']['kol']?>) (<?=$engineersResults[$name]['iphone_big']['ind']?>ый)</span><br>
                                iPad: <span style="font-weight:600;color:<?=$engineersResults[$name]['ipad']['sum'] < $averageArr['avgC'] ? 'red' : 'green'?>"><?if($engineersResults[$name]['ipad']['sum'] > 0) echo '+'?><?=$engineersResults[$name]['ipad']['sum']?> ₽ </span> <span class="text-gray">(<?=$engineersResults[$name]['ipad']['kol']?>) (<?=$engineersResults[$name]['ipad']['ind']?>ый)</span><br>
                                MacBook: <span style="font-weight:600;color:<?=$engineersResults[$name]['mac']['sum'] < $averageArr['avgD'] ? 'red' : 'green'?>"><?if($engineersResults[$name]['mac']['sum'] > 0) echo '+'?><?=$engineersResults[$name]['mac']['sum']?> ₽ </span> <span class="text-gray">(<?=$engineersResults[$name]['mac']['kol']?>) (<?=$engineersResults[$name]['mac']['ind']?>ый)</span><br>
                            </div>
                        </td>
                        <?
                        foreach ($arr as $time => $a) {
                            $colour = '';
                            if (!empty($a)) {
                                $colour = 'table-warning';
                                $tmpQ1 = mysqli_query($connection, 'select * from order_statuses where status=1 and order_id="'.$a[0]['id'].'"');
                                if (mysqli_num_rows($tmpQ1)) {
                                    $colour = 'table-primary';
                                }
                                $tmpQ2 = mysqli_query($connection, 'select * from order_statuses where status=2 and order_id="'.$a[0]['id'].'"');
                                if (mysqli_num_rows($tmpQ2)) {
                                    $colour = 'table-success';
                                }
                            }
                            echo '<td class="'.$colour.'">';

                            $otvozQ = mysqli_query($connection, 'select * from map_otvozi where eng="'.$name.'" and date="'.(isset($_GET['date'])?date('d.m.Y',strtotime($_GET['date'])):date('d.m.Y')).'" and time="'.$time.'" order by timestamp desc limit 0,1');
                            $otvozArr = mysqli_fetch_array($otvozQ);

                            echo '<div class="map_input" style="display:flex;margin-bottom:7px;"><input style="width: 60%;min-width:100px;" type="text" value="'.(isset($otvozArr['txt']) ? $otvozArr['txt'] : '').'" name="map_otvoz" placeholder=""><button class="otvoz_submit" data-eng="'.$name.'" data-time="'.$time.'" data-date="'.(isset($_GET['date'])?date('d.m.Y',strtotime($_GET['date'])):date('d.m.Y')).'">Oк</button><button class="otvoz_log" data-eng="'.$name.'" data-time="'.$time.'" data-date="'.(isset($_GET['date'])?date('d.m.Y',strtotime($_GET['date'])):date('d.m.Y')).'">Лог</button></div>';
                            if (!empty($a)) {
                                foreach ($a as $aa) {

                                    if ($aa['city'] === 'Санкт-Петербург') {
                                        $badgeCity = $badgeCitySPb;
                                    } elseif ($aa['city'] === 'Москва') {
                                        $badgeCity = $badgeCityMSK;
                                    } else {
                                        $badgeCity = $badgeCityNA;
                                    }

                                        $for_print = "";
                                        echo '<span style="display:none" cur_model>'.$aa['model'].'</span>';
                                        echo '<span style="display:none" cur_problem>'.$aa['problem'].'</span>';
                                        if ($aa['model'] == 'iPhone 5' || $aa['model'] == 'iPhone 5c' || $aa['model'] == 'iPhone SE' || $aa['model'] == 'iPhone 5s' || $aa['model'] == 'iPhone 6' || $aa['model'] == 'iPhone 6 Plus' || $aa['model'] == 'iPhone 6s' || $aa['model'] == 'iPhone 6s Plus') {
                                            $for_print = '<span style="float:right;font-weight:600;color:'.($engineersResults[$name]['iphone_small']['sum'] < $averageArr['avgA'] ? 'red' : 'green').'">'.($engineersResults[$name]['iphone_small']['sum'] > 0 ? '+':'') . $engineersResults[$name]['iphone_small']['sum'] . ' ₽</span>';
                                        }
                                        if ($aa['model'] == 'iPhone Xs Max' || $aa['model'] == 'iPhone 7' || $aa['model'] == 'iPhone 7 Plus' || $aa['model'] == 'iPhone 8' || $aa['model'] == 'iPhone 8 Plus' || $aa['model'] == 'iPhone X' || $aa['model'] == 'iPhone XR' || $aa['model'] == 'iPhone Xs') {
                                            $for_print = '<span style="float:right;font-weight:600;color:'.($engineersResults[$name]['iphone_big']['sum'] < $averageArr['avgB'] ? 'red' : 'green').'">'.($engineersResults[$name]['iphone_big']['sum'] > 0 ? '+' : '') . $engineersResults[$name]['iphone_big']['sum'] . ' ₽</span>';
                                        }
                                        if (strpos($aa['model'], 'iPad') !== false ) {
                                            $for_print = '<span style="float:right;font-weight:600;color:'.($engineersResults[$name]['ipad']['sum'] < $averageArr['avgC'] ? 'red' : 'green').'">'.($engineersResults[$name]['ipad']['sum'] > 0 ? '+' : '') . $engineersResults[$name]['ipad']['sum'] . ' ₽</span>';
                                        }
                                        if (strpos($aa['model'], 'Mac') !== false) {
                                            $for_print = '<span style="float:right;font-weight:600;color:'.($engineersResults[$name]['mac']['sum'] < $averageArr['avgD'] ? 'red' : 'green').'">'.($engineersResults[$name]['mac']['sum'] > 0 ? '+' : '') . $engineersResults[$name]['mac']['sum'] . ' ₽</span>';
                                        }
                                        echo '<a target="_blank" style="line-height: 18px;" href="https://irepairspb.amocrm.ru/leads/detail/' . $aa['id'] . '">' . (($aa['is_prodolzhenie'] == 1 ? '🔵' : '')) . $aa['id'] . '</a> '.$badgeCity.$for_print.'<br>';
                                        echo $aa['time'] . '<br>';
                                        echo $aa['metro'] . '<br>';
                                        echo '<div style="font-size:10px">';
                                        if ($aa['model_a'] && !getDeviceByAModel($aa['model_a']) && (strpos($aa['model'],'iPhone') !== false || strpos($aa['model'], 'iPad') !== false)) {
                                            echo $aa['model'].' ('.$aa['model_a'].')<br>';
                                            echo '<span style="color:red">Обратите внимание на модель!</span>';
                                        } else {
                                            echo (!$aa['model_a']) ? $aa['model'] . ' (со слов клиента) ' : ((strpos($aa['model'], 'iPhone') !== false || strpos($aa['model'], 'iPad') !== false) && getDeviceByAModel($aa['model_a']) != $aa['model'] ? getDeviceByAModel($aa['model_a']) . ' (' . ($aa['model_a']) . ') ' . '<br><span style="color:red">Обратите внимание на модель!</span>' : $aa['model'] . ' (' . ($aa['model_a']) . ')') . ($aa['multiple_device'] == 1 ? ' <b style="color:#f44336">Несколько устройств!</b>' : '');
                                        }
                                        echo '<br>';
                                        echo $aa['problem'] . '<br>';
                                        if ($_COOKIE['auth'] == 'Pasha' || $_COOKIE['auth'] == 'dimaneva' || $_COOKIE['auth'] == 'str1t3r' || $_COOKIE['auth'] == 'Dima') {
                                            if ($aa['ozvuch1']) {
                                                echo "<b>Озвучка:</b> ".$aa['ozvuch1'].'<br>';
                                            }
                                            if ($aa['problem_descr1']) {
                                                echo "<b>Проблема:</b> ".$aa['problem_descr1'].'<br>';
                                            }
                                            if ($aa['model_features']) {
                                                echo '<b>Особенности:</b> '.$aa['model_features'].'<br>';
                                            }
                                            if ($aa['model2']) {
                                                echo '<br>'.$aa['model2'].'<br>';
                                            }
                                            if ($aa['problem2']) {
                                                echo $aa['problem2'].'<br>';
                                            }
                                            if ($aa['ozvuch2']) {
                                                echo "<b>Озвучка:</b> ".$aa['ozvuch2'].'<br>';
                                            }
                                            if ($aa['problem_descr2']) {
                                                echo "<b>Проблема:</b> ".$aa['problem_descr2'].'<br>';
                                            }
                                            if ($aa['model_feature2']) {
                                                echo '<b>Особенности:</b> '.$aa['model_feature2'].'<br>';
                                            }
                                            if ($aa['notice']) {
                                                echo '<b>Примечание:</b>'.$aa['notice'].'<br>';
                                            }
                                        }
                                        echo '</div>';

                                    if ($_COOKIE['auth'] != 'Pasha' && $_COOKIE['auth']) {
                                        echo '<div style="font-size:10px;padding-top:15px;">';
                                        $checkViezdQuery = mysqli_query($connection2, 'select * from uchet where orderID="' . trim($aa['id']) . '"');
                                        if (!mysqli_num_rows($checkViezdQuery)) {
                                            $confirmWaitQ = mysqli_query($connection, 'select * from cron_orders_confirmation where orderID="' . trim($aa['id']) . '" and confirmed=0');
                                            if (!mysqli_num_rows($confirmWaitQ)) {
                                                //if ($name == 'Ящук Денис' || $name == "Павел Храмцов" || $name == 'Айхан Мусаев' || $name == "Вэтэмэнеску Александр" || $name == 'Ребров Антон' || $name == 'Лавров Георгий' || $name == "Иванов Артём" || $name == "Ушанги Грдзелишвили" || $name == "Алихан Калиматов" || $name == "Тимофей Савченко" || $name == "Лавров Александр" || $name == "Грицишин Александр" || $name == "Мусаев Субхан" || $name == "Федкевич Станислав" || $name == "Кучкаров Сергей" || $name == "Стороженко Сергей" || $name == "Сапожников Михаил" || $name == "Лиленков Кирилл" || $name == "Стажер" || $name == "Шевцов Андрей" || $name == "Килин Алексей" || $name == "Якуба Александр" || $name == "Якунин Антон" || $name == "Макаров Андрей" || $name == "Плошенко Алексей" || $name == "Синицын Никита" || $name == "Хусанов Шерзодбек" || $name == "Федоров Захар" || $name == "Бакланов Евгений" || $name == "Митин Артем" || $name == "Ермолин Никита" || $name == "Баренков Андрей" || $name == "Низовцев Дмитрий" || $name == "Корчагин Артем" || $name == "Долгопятов Алексей" || $name == "Матвей Щукин" || $name == "Инякин Виталий" || $name == "Терентьев Денис" || $name == "Буров Константин" || $name == "Кадач Олег" || $name == "Кутузов Игорь") {
                                                if ($name != "Ганнибалов Владислав" && $name != 'Усольцев Иван') {
                                                    echo '<button class="createButton" style="font-size:15px" data-id="' . trim($aa['id']) . '" data-eng="' . $name . '" data-device="' . $aa['model'] . '" data-problem="' . $aa['problem'] . '" data-date="' . (isset($_GET['date']) ? date('d.m', strtotime($_GET['date'])) : date('d.m')) . '" data-time="' . $aa['time'] . '">Передать заказ СИ</button>';
                                                } else {
                                                    echo '<button class="createButton" style="font-size:15px" data-id="' . trim($aa['id']) . '" data-eng="' . $name . '">Я передал заказ СИ</button>';
                                                }
                                            } else {
                                                $confirmWaitArr = mysqli_fetch_array($confirmWaitQ);
                                                echo '<span style="color:red">';
                                                echo 'Ожидает подтверждения СИ (до ' . date('H:i:s', strtotime($confirmWaitArr['timestamp']) + 60 * 60 + 60 * 5 + 60 * 5 + 60 * 3) . ')';
                                                echo '</span>';
                                            }
                                        }
                                        echo '</div>';
                                    }
                                    ?>
                                    <?
                                        if ($_COOKIE['auth'] == 'str1t3r' || $_COOKIE['auth'] == 'dimaneva' || $_COOKIE['auth'] == 'Pasha' || $_COOKIE['auth'] == 'Dima') {
                                            $checkViezdQuery = mysqli_query($connection2, 'select * from uchet where orderID="' . trim($aa['id']) . '"');
                                            if (mysqli_num_rows($checkViezdQuery)) {
                                    ?>
                                        <?
                                            $nasosQ = mysqli_query($connection, 'select * from nasos_process where orderID="'.$aa['id'].'"');
                                            $nasosArr = mysqli_fetch_array($nasosQ);
                                            $kur = $_COOKIE['auth'];
                                            $kura = '';
                                            if ($kur == "Pasha") {
                                                $kura = "Храмцов";
                                            }
                                            if ($kur == "Dima") {
                                                $kura = "Яшин";
                                            }
                                            if (mysqli_num_rows($nasosQ) > 0) {

                                        ?>
                                             <div style="font-size:13px;margin-top:10px;margin-bottom:10px;">
                                                Вы вызвали СИ в <?=date('H:i', strtotime($nasosArr['timestamp']))?>
                                                 <br>
                                                 Ответ СИ <?=$nasosArr['answer']?': '.$nasosArr['answer']:' еще не получен'?>
                                             </div>
                                                <div>
                                                    <? if ($nasosArr['answer'] && $nasosArr['answer'] == '"Мне это не нужно"') {?>
                                                        <p><b style="color:#ff0018">СИ отказался от накачки</b></p>
                                                    <?} else {?>
                                                        <? if (!$nasosArr['nasos_mark']) {?>
                                                            <p style="margin-bottom:0" class="radio_array">
                                                                <label>
                                                                    <input type="radio" name="nakachka" value="Накачка лично" <?if ($nasosArr['nasos_mark'] == "Накачка лично") echo 'checked'?>> Накачка лично
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="nakachka" value="Накачка по телефону" <?if ($nasosArr['nasos_mark'] == "Накачка по телефону") echo 'checked'?>> Накачка по телефону
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="nakachka" value="Накачка по телефону вместо личной, инициатор - СИ" <? if ($nasosArr['nasos_mark'] == "Накачка по телефону вместо личной, инициатор - СИ") echo 'checked'?>> Накачка по телефону вместо личной, инициатор - СИ
                                                                </label>
                                                                <label>
                                                                    <input type="radio" name="nakachka" value="Накачка по телефону вместо личной, инициатор - <?=$kura?>" <?if ($nasosArr['nasos_mark'] == "Накачка по телефону вместо личной, инициатор - ".$kura) echo 'checked'?>> Накачка по телефону вместо личной, инициатор - <?=$kura?>
                                                                </label>

                                                            </p>
                                                        <?} else { if ($nasosArr['nasos_result'] != "Не явился") {?>
                                                            <p style="margin-bottom:0">
                                                                <?
                                                                    if ($nasosArr['nasos_mark'] == "Накачка лично") {
                                                                        echo '<b class="text-success">Накачка лично</b>';
                                                                    }
                                                                    if ($nasosArr['nasos_mark'] == "Накачка по телефону, инициатор - куратор") {
                                                                        echo '<b style="color:#da8201">Накачка по телефону, инициатор - куратор</b>';
                                                                    }
                                                                    if ($nasosArr['nasos_mark'] == "Накачка по телефону, инициатор - СИ") {
                                                                        echo '<b style="color:#da8201">Накачка по телефону, инициатор - СИ</b>';
                                                                    }
                                                                ?>
                                                            </p>
                                                        <?} else {echo '<p style="margin-top:8px;"><b style="color:#ff0018">СИ не явился на накачку</b></p>';}}?>
                                                        <b>Вовлеченность СИ</b>:
                                                        <? if ($nasosArr['nasos_result']) {?>
                                                            <?=$nasosArr['nasos_result']?>
                                                        <?} else {?>
                                                            <br>
                                                            <button nasos_mark data-res="0" orderID="<?=$aa['id']?>" class="nasos_button">0</button>
                                                            <button nasos_mark data-res="1" orderID="<?=$aa['id']?>" class="nasos_button">1</button>
                                                            <button nasos_mark data-res="2" orderID="<?=$aa['id']?>" class="nasos_button">2</button>
                                                            <button nasos_mark data-res="3" orderID="<?=$aa['id']?>" class="nasos_button">3</button>
                                                            <button nasos_mark data-res="4" orderID="<?=$aa['id']?>" class="nasos_button">4</button>
                                                            <button nasos_mark data-res="5" orderID="<?=$aa['id']?>" class="nasos_button">5</button>
                                                            <button nasos_mark data-res="Не явился" orderID="<?=$aa['id']?>" style="margin-bottom:5px">Не явился</button>
                                                        <?}?>
                                                    <?}?>

                                                </div>
                                        <?} else {?>
                                                <?
                                                    $timeSTR = strtotime((isset($_GET['date'])?date('d.m.Y',strtotime($_GET['date'])):date('d.m.Y')).' '.str_replace('-', ':', $aa['time']).':00');
                                                    if ($timeSTR > time()) {
                                                ?>
                                                    <button orderID="<?=$aa['id']?>" nasos eng="<?=$name?>" style="margin-top: 10px;" kur="<?=$_COOKIE['auth']?>">Вызвать на накачку</button>
                                                <?} else { echo '<p style="margin-top:8px;"><b style="color:#ff0018">Накачки не было</b></p>';} ?>
                                        <?}?>
                                    <?} else {echo '<div style="margin-top: 10px;">Заказ еще не выдан СИ</div>';}} else {
                                            $timeSTR = strtotime((isset($_GET['date'])?date('d.m.Y',strtotime($_GET['date'])):date('d.m.Y')).' '.str_replace('-', ':', $aa['time']).':00');

                                                $checkViezdQuery = mysqli_query($connection2, 'select * from uchet where orderID="' . trim($aa['id']) . '"');
                                                if (mysqli_num_rows($checkViezdQuery)) {
                                                    $nasosQ = mysqli_query($connection, 'select * from nasos_process where orderID="' . $aa['id'] . '"');
                                                    $nasosArr = mysqli_fetch_array($nasosQ);
                                                    if (mysqli_num_rows($nasosQ) > 0) {
                                                        if ($nasosArr['answer'] && $nasosArr['answer'] == '"Мне это не нужно"') {?>
                                                            <p><b style="color:#ff0018">СИ отказался от накачки</b></p>
                                                        <?} else {
                                                                if ($nasosArr['nasos_result'] != "Не явился") { ?>
                                                                    <p style="margin-bottom:0">
                                                                        <?
                                                                        if ($nasosArr['nasos_mark'] == "Накачка лично") {
                                                                            echo '<b class="text-success">Накачка лично</b>';
                                                                        }
                                                                        if ($nasosArr['nasos_mark'] == "Накачка по телефону") {
                                                                            echo '<b style="color:#da8201">Накачка по телефону</b>';
                                                                        }
                                                                        if ($nasosArr['nasos_mark'] == "Накачка по телефону вместо личной, инициатор - СИ") {
                                                                            echo '<b style="color:#da8201">Накачка по телефону вместо личной, инициатор - СИ</b>';
                                                                        }
                                                                        if ($nasosArr['nasos_mark'] == "Накачка по телефону вместо личной, инициатор - Храмцов") {
                                                                            echo '<b style="color:#da8201">Накачка по телефону вместо личной, инициатор - Храмцов</b>';
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                <? } else {
                                                                    echo '<p style="margin-top:8px;"><b style="color:#ff0018">СИ не явился на накачку</b></p>';
                                                                }
                                                            } ?>
                                                            <b>Вовлеченность СИ</b>:
                                                            <? if ($nasosArr['nasos_result']) { ?>
                                                                <?= $nasosArr['nasos_result'] ?>
                                                                <?
                                                            }
                                                    } else {
                                                        if ($timeSTR < time()) {
                                                            echo '<p style="margin-top:8px;"><b style="color:#ff0018">Накачки не было</b></p>';
                                                        }
                                                    }
                                                }

                                    }?>

                                    <button style="display:none" orderID="<?=$aa['id']?>" class="open_snos_popup" time="<?=$aa['time']?>" eng="<?=$name?>" date="<?=isset($_GET['date'])?date('d.m.Y',strtotime($_GET['date'])):date('d.m.Y')?>">НЕ НАЖИМАТЬ СЮДА</button>
                                    <?
                                        if ($_COOKIE['auth'] != 'Pasha'  ) {
                                            if (false) {
                                                echo '<div><select change_eng data-id="' . $aa['id'] . '">';
                                                echo '<option value="0">Не выбрано</option>';
                                                foreach ($onlineEngs as $nn) {
                                                    echo '<option value="' . $nn . '" ' . ($nn == $name ? 'selected' : '') . '>' . $nn . '</option>';
                                                }
                                                echo '</select></div>';
                                            }
                                            ?>
                                            <?
                                                $checkConfirmQ = mysqli_query($connection, 'select * from cron_orders_confirmation where orderID="' . trim($aa['id']) . '" and confirmed=0');
                                                if (!mysqli_num_rows($checkViezdQuery) && !mysqli_num_rows($checkConfirmQ)) {
                                            ?>
                                            <form method="post" action="/raspredelenie_zakaza.php">
                                                <input type="hidden" name="orderID" value="<?=$aa['id']?>">
                                                <button>Выбрать другого СИ</button>
                                            </form>
                                            <?}?>
                                        <?
                                        }
                                }
                            }
                            echo '</td>';
                        }
                        ?>
                    </tr>
                <?}?>

                <tr>
                    <td>Статус</td>
                    <td>Инженер</td>
                    <td>09:00</td>
                    <td>10:00</td>
                    <td>11:00</td>
                    <td>12:00</td>
                    <td>13:00</td>
                    <td>14:00</td>
                    <td>15:00</td>
                    <td>16:00</td>
                    <td>17:00</td>
                    <td>18:00</td>
                    <td>19:00</td>
                    <td>20:00</td>
                    <td>21:00</td>
                    <td>22:00</td>
                    <td>23:00</td>
                </tr>
                <tr class="table-info">
                    <td></td>
                    <td>Не распределены:</td>
                    <? foreach ($unsorted as $time => $arr) {?>
                        <td unsorted_orders>
                            <?
                            foreach ($arr as $a) {
                                if (!empty($a)) {
                                    $dang = "";
                                    
                                    if ($a['city'] === 'Санкт-Петербург') {
                                        $badgeCity = $badgeCitySPb;
                                    } elseif ($a['city'] === 'Москва') {
                                        $badgeCity = $badgeCityMSK;
                                    } else {
                                        $badgeCity = $badgeCityNA;
                                    }

                                    $from = (int)substr($a['time'], 0, 2) * 60 + (int)substr($a['time'], 3, 2);
                                    $to = (int)date('H') * 60 + date('i');
                                    if ($from - $to <= 120 && (int)date('d', strtotime($date)) == date('d')) {
                                        $dang = 'bg-danger';
                                    }
                                    echo '<div class="mb-3 border border-danger '.$dang.'">';
                                    echo '<a target="_blank" href="https://irepairspb.amocrm.ru/leads/detail/'.$a['id'].'">'.$a['id'].'</a> '.$badgeCity.'<br>';
                                    echo '<div time>'.$a['time']."</div>";
                                    echo $a['metro']."<br>";
                                    echo '<div style="font-size:10px">';
                                    echo '<div model>'.$a['model'].'</div>';
                                    echo $a['problem'].'<br>';echo '</div>';

                                    if ($_COOKIE['auth'] != 'Pasha') {
                                        if (false) {
                                            echo '<div><select change_eng data-id="' . $a['id'] . '">';
                                            echo '<option value="Не выбран">Не выбрано</option>';
                                            foreach ($onlineEngs as $nn) {
                                                echo '<option value="' . $nn . '">' . $nn . '</option>';
                                            }
                                            echo '</select></div>';
                                        }
                                        $checkUchetQ = mysqli_query($connection, 'select id from uchet where orderID="'.$a['id'].'"');
                                        if (!mysqli_num_rows($checkUchetQ)) {
                                        ?>
                                        <form method="post" action="/raspredelenie_zakaza.php">
                                            <input type="hidden" name="orderID" value="<?=$a['id']?>">
                                            <button>Выбрать СИ</button>
                                        </form>
                                        <?} else {?>
                                            <span class="text-danger">Для выбора СИ необходимо откатить существующий выезд по данному номеру заказа</span>
                                        <?}?>
                            <?
                                    }
                                    echo '</div>';
                                }
                            }
                            ?>
                        </td>
                    <?}?>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="d-none">

</div>

<div class="overlay">
</div>
<div class="save_loader">
    Пожалуйста, подождите...
</div>
<div class="popup">
    <p style="font-size:1.3rem;color: #bd1230;font-weight: 600">Вы действительно хотите снести заказ по времени?</p>
    <p style="margin-bottom:0">СИ <span eng></span></p>
    <p style="margin-bottom:0">Заказ <span ord></span></p>
    <p>Текущее время: <span tim></span>, <span date></span></p>
    <div class="mb-4">
        <p style="font-size:1.3rem;font-weight: 600;margin-bottom:5px;">
            Причина сноса заказа
        </p>
        <p style="font-size: 12px;margin-bottom:5px;">
            Выберите наиболее подходящую причину переноса заказа. Если нужно, введите номер заказа, на котором, со слов СИ, он задерживается или отвоз которого, со слов СИ, он осуществляет.
        </p>
        <div>
            <select name="reasons" id="reasonss">
                <option value="Задерживаюсь на предыдущем заказе">Задерживаюсь на предыдущем заказе</option>
                <option value="Отвоз висяка">Отвоз висяка</option>
                <option value="Долго искал запчасть">Долго искал запчасть</option>
                <option value="Стою в пробке">Стою в пробке</option>
            </select>
            <input type="text" name="orderID_reason" placeholder="Номер заказа *">
        </div>
    </div>
    <p style="font-size: 12px;">Введите в поле ниже "Подтверждаю" и нажмите кнопку "Снести заказ". После нажатия на кнопку откроется новое окно и вы будете автоматически соеденены с клиентом (в течение 60 секунд на номер логиста поступит входящий звонок). В новом окне зафиксируйте результат разговора и выберите актуальное время и дату заказа.</p>
    <form action="/snos_zakaza.php" target="_blank" method="POST">
        <input name="orderID" type="hidden" value="16241641">
        <input name="eng" type="hidden">
        <input name="cur_time" type="hidden">
        <input name="podtv" type="text" placeholder="Введите сюда подтверждаю" class="form-control mb-3">
        <button class="btn btn-primary" id="snos">Снести заказ</button>
    </form>
</div>
<form action="/otvoz_log.php" target="_blank" method="POST" style="display:none" id="otvoz_form">
    <input name="eng" type="hidden">
    <input name="date" type="hidden">
    <input name="time" type="hidden">
</form>
<script>
    $(document).ready(function() {
        $('[change_eng]').change(function(e) {
           e.preventDefault();
           var id = $(this).attr('data-id');
           var eng = $(this).find(':selected').val();
           $.post('/ajax.php', {'action' : 'changeEng', 'id' : id, 'eng' : eng}, function() {
               window.location.reload();
           });
        });

        $('#reasonss').change(function() {
           var reason = $(this).find(':selected').val();
           var reasonInd = $(this).find(':selected').index();
           if (reasonInd <= 1) {
               $('input[name=orderID_reason]').show();
           } else {
               $('input[name=orderID_reason]').hide();
           }
        });


        $('.map_input input').focusout(function() {
            $(this).addClass('alertt');
        });

        $('.otvoz_submit').click(function(e) {
            e.preventDefault();
            $(this).parent().find('input').removeClass('alertt');
            var txt = $(this).parent().find('input').val();
            var date = $(this).attr('data-date');
            var time = $(this).attr('data-time');
            var acc = '<?=$_COOKIE['auth']?>';
            var eng = $(this).attr('data-eng');
            //$('.overlay, .save_loader').show();
            $.post('/ajax.php', {'action':'saveOtvoz', 'txt' : txt, 'date' : date, 'time' : time, 'acc' : acc, 'eng': eng}, function(data) {
                window.location.reload();
            });
        });

        $('.otvoz_log').click(function(e) {
           e.preventDefault();
            var date = $(this).attr('data-date');
            var time = $(this).attr('data-time');
            var eng = $(this).attr('data-eng');
            $('#otvoz_form input[name=date]').val(date);
            $('#otvoz_form input[name=time]').val(time);
            $('#otvoz_form input[name=eng]').val(eng);
            $('#otvoz_form').submit();
        });

        $('[nasos]').click(function(e) {
            e.preventDefault();
            $(this).attr('disabled', true);
            var eng = $(this).attr('eng');
            var orderID = $(this).attr('orderID');
            var kur = $(this).attr('kur');
            console.log(eng);
            console.log(orderID);
            $('.overlay, .save_loader').fadeIn(200);
            $.post('/ajax.php', {'eng' : eng, 'orderID' : orderID, 'action': 'init_nasos', 'kur' : kur}, function(data) {
                console.log(data);
                window.location.reload();
            });
        });

        $('.createButton').click(function(e) {
            $('.overlay, .save_loader').fadeIn(200);
           e.preventDefault();
           var eng = $(this).attr('data-eng');
           var id = $(this).attr('data-id');
           var device = $(this).attr('data-device');
           var problem = $(this).attr('data-problem');
           var date = $(this).attr('data-date');
            var time = $(this).attr('data-time');
           $.post('/ajax.php', {'action' : 'createViezd', 'id' :id, 'eng' : eng, 'device' : device, 'problem' : problem, 'date' : date, 'time' : time}, function(data) {
              console.log(data);
              data = JSON.parse(data);
              if (data.result == 'ok') {
                  window.location.reload();
              }
           });
        });

        $('.popup form').submit(function() {
           var pod = $('.popup input[type=text]').val();
           if (pod.toLowerCase() == 'подтверждаю') {
                $('.popup form').submit();
                window.location.reload();
           } else {
               e.preventDefault();
               alert('Вы не подтведили необходимость сноса');
           }
        });

        $('.open_snos_popup').click(function(e) {
           e.preventDefault();
           var orderID = $(this).attr('orderID');
           orderID = 16241641;
           //var eng = $(this).parent().parent().find('td:nth-child(2)').find('span').text();
           var eng = $(this).attr('eng');
           var time = $(this).attr('time');
           var date = $(this).attr('date');
           $('.popup form input[name=orderID]').val(orderID);
            $('.popup span[eng]').text(eng);
            $('.popup span[ord]').text(orderID);
            $('.popup span[tim]').text(time);
            $('.popup span[date]').text(date);
            $('.popup input[name=eng]').val(eng);
            $('.popup input[name=cur_time]').val(time+', '+date);
           $('.popup, .overlay').fadeIn(300);
        });

        /*$('.overlay').click(function(e) {
           $('.overlay, .popup').fadeOut(300);
        });*/

        $('#choose_date').click(function(e) {
           e.preventDefault();
           var d = $('input[type=date]').val().split('-');
           var formatedDate = d[2] + "." + d[1] + "." + d[0];
           console.log(formatedDate);
           window.location.href = "/map.php?date=" + formatedDate;
        });

        $('.table-info select, .table-danger select').change(function(e) {
           e.preventDefault();
           var v = $(this).find(':selected').val();
           var name = $(this).find(':selected').parent().parent().parent().find('.si-name').text().trim();
           $.post('/ajax.php', {'action' : 'add', 'name' : name, 'status' : v, 'date' : '<?=date('Y-m-d', strtotime($date))?>'}, function() {
               window.location.reload();
           });
        });

        $('[nasos_mark]').click(function(e) {
            e.preventDefault();
            $('[nasos_mark]').attr('disabled', true);
            var res = $(this).attr('data-res');
            var phone = $(this).parent().find('input[type=radio]:checked').val();
            if (phone) {
                var orderID = $(this).attr('orderID');

                $('.overlay, .save_loader').fadeIn(200);
                $.post('/ajax.php', {
                    'action': 'nasos_result',
                    'res': res,
                    'phone': phone,
                    'orderID': orderID
                }, function (data) {
                    console.log(data);
                    window.location.reload();
                });
            } else {
                $('.radio_array').addClass('error');
                $('[nasos_mark]').removeAttr('disabled');
            }
        });

        $('.radio_array input[type=radio]').change(function() {
            $('.radio_array').removeClass('error');
        });

        setTimeout(function() {
            window.location.reload();
        }, 5 * 60 * 1000);

        $('[distribute]').click(function(e) {
            e.preventDefault();
            var unsorted = $('[unsorted_orders] > div');
            var orders = [];
            var engs = [];
            <?
            foreach ($eng as $name => $arr) {
                if ($engStatuses[$name] != 0 && $engStatuses[$name] != -1) {
                    echo 'engs[engs.length] = {"'.$name.'" : [';
                    foreach ($arr as $a) {
                        foreach ($a as $aa) {
                            echo '"'.$aa['time'].'",';
                        }
                    }
                    echo ']};';
                }
            }
            ?>
            for (var i = 0; i < unsorted.length; ++i) {
                orders[orders.length] = {
                    'id' : $(unsorted[i]).find('a').text(),
                    'time' : $(unsorted[i]).find('[time]').text(),
                    'model' : $(unsorted[i]).find('[model]').text()
                };
            }
            $.post('/ajax.php', {'action' : 'order_distribution', 'orders' : orders, 'engs' : JSON.stringify(engs), 'date' : '<?=$date?>'}, function(data) {
               console.log(data);
            });
        });
    });
</script>
<?
//echo microtime(true) - $start;
//echo '<br>';
?>
</body>
</html>