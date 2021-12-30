<?php

if (empty($_POST)) {
    die();
}
include_once 'amocrm/amo_api.php';

$amo = new AmoController();
$host = 'localhost';
$username = 'user10054_dbuser';
$password = 'A7y0T2n7';
$db = 'user10054_db';
date_default_timezone_set("Europe/Moscow");

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
function uisChangeEmployeesAvailability($groupID, $firstEID, $firstA, $secondEID, $secondA) {
    $param = array(
        'access_token' => 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
        'id' => (int)$groupID,
        "phone_numbers" => array(
            array(
                "employee_phone_number_id"=> (int)$firstEID,
                "available"=> $firstA
            ),
            array(
                "employee_phone_number_id"=> (int)$secondEID,
                "available"=> $secondA
            )
        )
    );

    $parameters = array(
        'id' => intval(rand(0,9999)),
        'jsonrpc' => '2.0',
        'method' => 'update.group_employees_numbers',
        'params' => $param
    );

    $ch = curl_init('https://dataapi.uiscom.ru/v2.0');
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Authorization: '.'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($parameters)
    ));


    $responseData = json_decode(curl_exec($ch), true);
    return $responseData;
}

$connection = mysqli_connect($host, $username, $password, $db);
function sendMessageViaTg($orderID, $chatID, $message_id, $light = false) {
    global $amo;
    $lead = $amo->getLeadByID($orderID);
    $leadContact = $lead['response']['leads'][0]['main_contact_id'];
//print_r($lead);
    $contact = $amo->getContactByID($leadContact);
//print_r($contact);
    $name = $contact['response']['contacts'][0]['name'];
    $phone = $contact['response']['contacts'][0]['custom_fields'][0]['values'][0]['value'];
    $cf = $lead['response']['leads'][0]['custom_fields'];
    $from = ''; $color = ''; $device = ''; $model = ''; $problem = ''; $services = ''; $address = ''; $time = ''; $metro = ''; $model_features = ""; $problem_descr = ""; $address_short = "";
    $service_date = ""; $home_color = '';
    foreach ($cf as $arr) {
        if ($arr['id'] == 475581) {
            $from = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 26143) {
            $color = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 26063) {
            $device = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 475583) {
            $model = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 26045) {
            $problem = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 475585) {
            $services = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 26071) {
            $address = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 29683) {
            $time = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 460647) {
            $metro = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 476893) {
            $model_features = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 476895) {
            $problem_descr = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 476897) {
            $address_short = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 26069) {
            $service_date = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 477995) {
            $home_color = $arr['values'][0]['value'];
        }
    }

    if (!$light) {
        /*$text = '<b>Вам выдан новый заказ</b>:' . PHP_EOL .
            $orderID . PHP_EOL .
            $from . PHP_EOL .
            $phone . PHP_EOL .
            $name . PHP_EOL .
            $device . ' ' . $color . ' ' . $model . ($model_features?$model_features:'') . PHP_EOL .
            ($home_color?'Цвет кнопки Home:'.$home_color.PHP_EOL:'') .
            $problem . PHP_EOL .
            $problem_descr . PHP_EOL .
            $services . PHP_EOL .
            $address . PHP_EOL .
            date("d.m.Y", strtotime($service_date)) . ' ' . $time . PHP_EOL .
            $metro;*/
            $text = '<b>Вы приняли заказ </b>'.$orderID;
            $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/editMessageText');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $post = array(
                'chat_id' => $chatID,
                'message_id' => $message_id,
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
                'text' => 'Вам выдан заказ '.$orderID
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            // execute!
            $response = curl_exec($ch);
            curl_close($ch);
    } else {
        $text = '<b>Вам выдан новый заказ</b>:'.PHP_EOL.
            $orderID. PHP_EOL .
            date("d.m.Y", strtotime($service_date)) . ' ' . $time. PHP_EOL .
            ($model?'A'.$model:$device). ($model_features?$model_features:'') . PHP_EOL .
            $address_short. PHP_EOL .
            $metro;
    }

    $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    if ($light) {
        $inline_button1 = array(
            'text' => 'Принять',
            'callback_data' => 'accept_order'
        );
        $inline_button2 = array(
            'text' => 'Отказаться',
            'callback_data' => 'decline_order'
        );
        $inline_keyboard = [[$inline_button1, $inline_button2]];
        $kb = array(
            'inline_keyboard' => $inline_keyboard
        );

        $post = array(
            'chat_id' => $chatID,
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
            'text' => $text,
            'reply_markup' => json_encode($kb),
            'parse_mode' => 'html'
        );
    } else{
        $post = array(
            'chat_id' => $chatID,
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
            'text' => $text,
            'parse_mode' => 'html'
        );
    }
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
    $response = curl_exec($ch);
    curl_close($ch);
    $js = json_decode($response);
    return array($js->result->message_id, $text);
    //print_r($response);
}

function toLog($text) {
    global $connection;
    $stmt = mysqli_prepare($connection, 'insert into logs(log, timestamp) values(?,NOW())');
    $stmt->bind_param('s', $text);
    $stmt->execute();
    $stmt->close();
}

function sendCuratorMessage($orderID, $eng, $device, $problem, $date, $time) {
    global $connection;

    $curatorsQ = mysqli_query($connection, 'select * from curators');
    $text = '⚠️ <b>Ожидается</b> подтверждение <b>СИ '.$eng.'</b> принятия заказа '.$orderID;

    $engQ = mysqli_query($connection, 'select * from engineers where name_for_bot="'.$eng.'"');
    $engArr = mysqli_fetch_array($engQ);

    $fromDate = date('Y-m').'-01 00:00:00';

    $valQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE()');
    $valArr = mysqli_fetch_array($valQ);
    $val = $valArr['s'];
    $avQ = mysqli_query($connection, 'select count(*) as c from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE() and prodolzhenie="Нет" ');
    $avArr = mysqli_fetch_array($avQ);
    $avg = $avArr['c'];
    if ($avg == 0) $avg = 1;
    $val30Q = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
    $val30Arr = mysqli_fetch_array($val30Q);
    $val30 = $val30Arr['s'];

    $avg30Q = mysqli_query($connection, 'select count(*) as c from eng_reports where (eng_id="'.$engArr['id'].'") and prodolzhenie!="Да" and timestamp>=curdate() - interval 30 day and timestamp <= curdate()');
    $avg30Arr = mysqli_fetch_array($avg30Q);
    $avg30 = $avg30Arr['c'];
    $avg_for_mot = round($val30 / $avg30);

    $srednii_po_otchetam = round($val / $avg);

    $valDev = 0;
    $viezdCount = 0;
    $viezdArr = array();
    if ($device == 'iPhone 5' || $device == 'iPhone 5c' || $device == 'iPhone SE' || $device == 'iPhone 5s' || $device == 'iPhone 6' || $device == 'iPhone 6 Plus' || $device == 'iPhone 6s' || $device == 'iPhone 6s Plus') {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 5%" or device like "%iphone 5c%" or device like "%iphone 5s%" or device like "%iphone se%" or device like "%iphone 6%" or device like "%iphone 6 plus%" or device like "%iphone 6s%" or device like "%iphone 6s plus%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 5%" or amo_device like "%iphone 5c%" or amo_device like "%iphone 5s%" or amo_device like "%iphone se%" or amo_device like "%iphone 6%" or amo_device like "%iphone 6 plus%" or amo_device like "%iphone 6s%" or amo_device like "%iphone 6s plus%") and (engineer="' . $engArr['short_name'] . '") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }
    if ($device == 'iPhone Xs Max' || $device == 'iPhone 7' || $device == 'iPhone 7 Plus' || $device == 'iPhone 8' || $device == 'iPhone 8 Plus' || $device == 'iPhone X' || $device == 'iPhone XR' || $device == 'iPhone Xs') {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 7%" or device like "%iphone 7 plus%" or device like "%iphone 8%" or device like "%iphone 8 plus%" or device like "%iphone x%" or device like "%iphone xr%" or device like "%iphone xs%" or device like "%iphone xs max%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 7%" or amo_device like "%iphone 7 plus%" or amo_device like "%iphone 8%" or amo_device like "%iphone 8 plus%" or amo_device like "%iphone x%" or amo_device like "%iphone xr%" or amo_device like "%iphone xs%" or amo_device like "%iphone xs max%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }
    if (strpos($device, 'iPad') !== false ) {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%ipad%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%ipad%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }
    if (strpos($device, 'Mac') !== false) {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%mac%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%mac%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }

    $motV = motivaciya_val($val30);
    $motS = motivaciya_srednii($avg_for_mot);
    $motiv = min($motV, $motS);

    $sebes_vidannih = 2353 * $viezdCount;
    $ZP = $motiv * $valDev;
    $chistaya = $valDev - $ZP - $sebes_vidannih;
    $sred_chistaya = round($chistaya / $viezdCount);

    $text .= ( ' <b>('.($sred_chistaya > 0 ? '+' : '').$sred_chistaya.' руб.)</b>').PHP_EOL.'<b>'.$device.'</b> / '.$problem.' / СВД: '.$srednii_po_otchetam.' руб.'.' / ФАКТ: '.(round($valDev / $viezdCount)).' руб. / '.$date.' '.$time;
    while ($curatorsArr = mysqli_fetch_array($curatorsQ)) {
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => $curatorsArr['chat_id'],
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
            'text' => $text,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);
        curl_close($ch);
    }
    return;
    //print_r($response);
}

function sendCuratorsRejectReasonMessage($chat_id, $message_id, $reason) {
    global $connection;

    $curatorsQ = mysqli_query($connection, 'select * from curators');
    $cronQ = mysqli_query($connection, 'select * from cron_orders_confirmation where reject_reason_message_id="'.$message_id.'" and chat_id="'.$chat_id.'"' );
    $cronArr = mysqli_fetch_array($cronQ);
    $orderID = $cronArr['orderID'];
    $engQ = mysqli_query($connection, 'select * from engineers where chat_id="'.$chat_id.'"');
    $engArr = mysqli_fetch_array($engQ);
    $eng  = $engArr['name_for_bot'];
    $text = '❌  <b>СИ '.$eng.' </b>отказался от заказа '.$orderID.PHP_EOL.'Причина: '.$reason.'.'.PHP_EOL.'Номер телефона СИ: '.$engArr['phone'];
    while ($curatorsArr = mysqli_fetch_array($curatorsQ)) {
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => $curatorsArr['chat_id'],
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
            'text' => $text,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);
        curl_close($ch);
    }
    return;
}
function sendAcceptCuratorMessage($orderID, $eng, $device, $problem, $date, $time) {
    global $connection;

    $engQ = mysqli_query($connection, 'select * from engineers where name_for_bot="'.$eng.'"');
    $engArr = mysqli_fetch_array($engQ);

    $fromDate = date('Y-m').'-01 00:00:00';

    $valQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE()');
    $valArr = mysqli_fetch_array($valQ);
    $val = $valArr['s'];
    $avQ = mysqli_query($connection, 'select count(*) as c from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE() and prodolzhenie="Нет" ');
    $avArr = mysqli_fetch_array($avQ);
    $avg = $avArr['c'];
    $val30Q = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
    $val30Arr = mysqli_fetch_array($val30Q);
    $val30 = $val30Arr['s'];
    if ($avg == 0) $avg = 1;
    $srednii_po_otchetam = round($val / $avg);

    $avg30Q = mysqli_query($connection, 'select count(*) as c from eng_reports where (eng_id="'.$engArr['id'].'") and prodolzhenie!="Да" and timestamp>=curdate() - interval 30 day and timestamp <= curdate()');
    $avg30Arr = mysqli_fetch_array($avg30Q);
    $avg30 = $avg30Arr['c'];
    $avg_for_mot = round($val30 / $avg30);

    $valDev = 0;
    $viezdCount = 0;
    $viezdArr = array();
    if ($device == 'iPhone 5' || $device == 'iPhone 5c' || $device == 'iPhone SE' || $device == 'iPhone 5s' || $device == 'iPhone 6' || $device == 'iPhone 6 Plus' || $device == 'iPhone 6s' || $device == 'iPhone 6s Plus') {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 5%" or device like "%iphone 5c%" or device like "%iphone 5s%" or device like "%iphone se%" or device like "%iphone 6%" or device like "%iphone 6 plus%" or device like "%iphone 6s%" or device like "%iphone 6s plus%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 5%" or amo_device like "%iphone 5c%" or amo_device like "%iphone 5s%" or amo_device like "%iphone se%" or amo_device like "%iphone 6%" or amo_device like "%iphone 6 plus%" or amo_device like "%iphone 6s%" or amo_device like "%iphone 6s plus%") and (engineer="' . $engArr['short_name'] . '") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp>= curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }
    if ($device == 'iPhone Xs Max' || $device == 'iPhone 7' || $device == 'iPhone 7 Plus' || $device == 'iPhone 8' || $device == 'iPhone 8 Plus' || $device == 'iPhone X' || $device == 'iPhone XR' || $device == 'iPhone Xs') {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 7%" or device like "%iphone 7 plus%" or device like "%iphone 8%" or device like "%iphone 8 plus%" or device like "%iphone x%" or device like "%iphone xr%" or device like "%iphone xs%" or device like "%iphone xs max%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 7%" or amo_device like "%iphone 7 plus%" or amo_device like "%iphone 8%" or amo_device like "%iphone 8 plus%" or amo_device like "%iphone x%" or amo_device like "%iphone xr%" or amo_device like "%iphone xs%" or amo_device like "%iphone xs max%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }
    if (strpos($device, 'iPad') !== false ) {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%ipad%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%ipad%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }
    if (strpos($device, 'Mac') !== false) {
        $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%mac%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
        $valDevArr = mysqli_fetch_array($valDevQ);
        $valDev = $valDevArr['s'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%mac%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $viezdArr = mysqli_fetch_array($viezdQ);
        $viezdCount = mysqli_num_rows($viezdQ);
    }

    $motV = motivaciya_val($val30);
    $motS = motivaciya_srednii($avg_for_mot);
    $motiv = min($motV, $motS);

    $sebes_vidannih = 2353 * $viezdCount;
    $ZP = $motiv * $valDev;
    $chistaya = $valDev - $ZP - $sebes_vidannih;
    $sred_chistaya = round($chistaya / $viezdCount);

    $curatorsQ = mysqli_query($connection, 'select * from curators');
    $text = '✅ <b>СИ '.$eng.' </b>принял заказ '.$orderID;
    $text .= ( ' <b>('.($sred_chistaya > 0 ? '+' : '').$sred_chistaya.' руб.)</b>').PHP_EOL.'<b>'.$device.'</b> / '.$problem.' / СВД: '.$srednii_po_otchetam.' руб.'.' / ФАКТ: '.(round($valDev / $viezdCount)).' руб. / '.$date.' '.$time;

    while ($curatorsArr = mysqli_fetch_array($curatorsQ)) {
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => $curatorsArr['chat_id'],
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
            'text' => $text,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);
        curl_close($ch);
    }
    return;
    //print_r($response);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// ДОПИСЫВАЮ ФУНКЦИИ

function getEngineerNameByID ($engineerID) {
    global $connection;
    $engQ = mysqli_query($connection, 'select short_name from engineers where id="'.$engineerID.'"');
    $engArr = mysqli_fetch_array($engQ);
    return $engArr['short_name'];
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




if ($connection) {
    mysqli_set_charset($connection,"utf8");
    if ($_POST['action'] == 'add') {
        $name = $_POST['name'];
        $status = $_POST['status'];
        $date = $_POST['date'];
        mysqli_query($connection, 'insert into eng_statuses(eng, status, date) values("'.$name.'", "'.$status.'", "'.$date.'")');
    }

    if ($_POST['action'] == 'order_status') {
        $id = $_POST['id'];
        $status = $_POST['status'];
        if ($_POST['status'] == '0') {
            mysqli_query($connection, 'delete from order_statuses where order_id="'.$id.'"');
        } else {
            mysqli_query($connection, 'insert into order_statuses(order_id, status) values(' . $id . ', ' . $status . ')');
        }
        header('Location: /zakaz?success=Y');
    }

    if ($_POST['action'] == 'login') {
        $login = $_POST['name'];
        $password = $_POST['password'];
        if ($login == 'admin' && $password == '12345') {
            setcookie('auth', 'abacaba', 60*60*24);
            $arr = array(
                'result' => 'ok'
            );
            echo json_encode($arr);
        } else {
            $arr = array('result' => 'error');
            echo json_encode($arr);
        }
    }

    if ($_POST['action'] == 'createViezd') {
        if ($_POST['eng'] != 'Ганнибалов Владислав' && $_POST['eng'] != "Сапожников Михаил") {
            // создать "ожидание подтверждения" - метка времени, ордер ид, чат ид,
            
            ///////////////////////////////////////////////////////////////////////////
            ////////////////////////////// ВЫДАЧА ЧП СЦЭ //////////////////////////////
            // Если это ЧП СЦЭ или ЧП СЦЭ МСК, то не отправляем ничего в чат – сразу
            // назначаем заказ на виртуального СИ. На 90% копирую код из confirm_order.

            if ($_POST['eng'] === 'ЧП СЦЭ' || $_POST['eng'] === 'ЧП СЦЭ МСК') {
                $lastRow = 0;

                ///// Получаем short_name СИ – оно вставляется в таблицу Учет /////
                $eng = $_POST['eng'];
                $engQ = mysqli_query($connection, 'select * from engineers where name="'.$eng.'"');
                $engArr = mysqli_fetch_array($engQ);
                $passingEng = $engArr['short_name'];
                ///////////////////////////////////////////////////////////////////

                $orderID = $_POST['id'];

                global $amo;
                $amo->changeOrderStatus($orderID, 16715350);
                $lead = $amo->getLeadByID($orderID);
                $leadContact = $lead['response']['leads'][0]['main_contact_id'];
                $name = '';
                $phone = array();
                if ($leadContact) {
                    $contact = $amo->getContactByID($leadContact);
                    $name = $contact['response']['contacts'][0]['name'];
                    $phone = $contact['response']['contacts'][0]['custom_fields'][0]['values'][0]['value'];
                    $phone = array();
                    foreach ($contact['response']['contacts'][0]['custom_fields'][0]['values'] as $phones) {
                        $phone[] = $phones['value'];
                    }
                }
                $phhh = implode('; ', $phone);
                $cf = $lead['response']['leads'][0]['custom_fields'];
                $lead_name = $lead['response']['leads'][0]['name'];
                $prodolzhenie = "Нет";
                if (strpos($lead_name, 'продолжение') !== false || strpos($lead_name, "Продолжение") !== false) {
                    $prodolzhenie = "Да";
                }
                $from = ''; $color = ''; $device = ''; $model = ''; $problem = ''; $services = ''; $address = ''; $time = ''; $metro = ''; $model_features = ""; $problem_descr = ""; $address_short = ""; $service_date = ""; $home_color = ''; $notice = "";
                
                foreach ($cf as $arr) {
                    if ($arr['id'] == 475581) {
                        $from = $arr['values'][0]['value'];
                    } if ($arr['id'] == 26143) {
                        $color = $arr['values'][0]['value'];
                    } if ($arr['id'] == 26063) {
                        $device = $arr['values'][0]['value'];
                    } if ($arr['id'] == 475583) {
                        $model = $arr['values'][0]['value'];
                    } if ($arr['id'] == 26045) {
                        $problem = $arr['values'][0]['value'];
                    } if ($arr['id'] == 475585) {
                        $services = $arr['values'][0]['value'];
                    } if ($arr['id'] == 26071) {
                        $address = $arr['values'][0]['value'];
                    } if ($arr['id'] == 29683) {
                        $time = $arr['values'][0]['value'];
                    } if ($arr['id'] == 460647) {
                        $metro = $arr['values'][0]['value'];
                    } if ($arr['id'] == 476893) {
                        $model_features = $arr['values'][0]['value'];
                    } if ($arr['id'] == 476895) {
                        $problem_descr = $arr['values'][0]['value'];
                    } if ($arr['id'] == 476897) {
                        $address_short = $arr['values'][0]['value'];
                    } if ($arr['id'] == 26069) {
                        $service_date = $arr['values'][0]['value'];
                    } if ($arr['id'] == 477995) {
                        $home_color = $arr['values'][0]['value'];
                    } if ($arr['id'] == 29649) {
                        $notice = $arr['values'][0]['value'];
                    }
                }
                $vremya_remonta = date('Y-m-d', strtotime($service_date)).' '.str_replace('-', ':', $time).':00';

                $stmt = mysqli_prepare($connection, 'insert into uchet(timestamp,orderID, row_number, engineer,amo_src,amo_device,amo_color,amo_home,amo_a,amo_model_feature,amo_problem,amo_uslugi,amo_problem_description,amo_note,amo_address_full,amo_address_short,amo_metro,amo_date,amo_time,amo_contact_name,amo_phones, prodolzhenie, vremya_remonta) values(NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bind_param('ssssssssssssssssssssss', $orderID, $lastRow, $passingEng, $from, $device, $color, $home_color, $model, $model_features, $problem, $services, $problem_descr, $notice, $address, $address_short, $metro, $service_date, $time, $name, $phhh, $prodolzhenie, $vremya_remonta);
                $stmt->execute();
                $stmt->close();

                ///// РАССЫЛАЕМ УВЕДОМЛЕНИЕ О ТОМ, ЧТО ЗАКАЗ ПРИНЯТ /////
                $notificationServiceDate = date('d.m', strtotime($service_date));
                $curatorsQ = mysqli_query($connection, 'select * from curators');
                $text = '✅ <b>СИ '.$passingEng.' </b>принял заказ '.$orderID.PHP_EOL.'<b>'.$device.'</b> / '.$problem.' / '.$notificationServiceDate.' '.$time;
                while ($curatorsArr = mysqli_fetch_array($curatorsQ)) {
                    $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    $post = array(
                        'chat_id' => $curatorsArr['chat_id'],
                        'text' => $text,
                        'parse_mode' => 'html'
                    );
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                    $response = curl_exec($ch);
                    curl_close($ch);
                }
                //////////////////////////////////////////////////////////

                echo json_encode(array(
                    'result' => 'ok'
                ));
                return;
            }
            ///////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////

            $orderID = $_POST['id'];
            $eng = $_POST['eng'];
            $passingEng = "";
            $cQ = mysqli_query($connection, 'select * from engineers where name="'.$eng.'"');
            $hhhh = mysqli_fetch_array($cQ);
            $chat_id = $hhhh['chat_id'];
            $engNameForBot = $hhhh['name_for_bot'];
            $device = $_POST['device'];
            $problem = $_POST['problem'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $smm = sendMessageViaTg($orderID, $chat_id, 123, true); // это, похоже, ВАМ ВЫДАН НОВЫЙ ЗАКАЗ
            sendCuratorMessage($orderID, $engNameForBot, $device, $problem, $date, $time);
            $mID = $smm[0];
            $ttt = $smm[1];
            //mysqli_query($connection, 'insert into cron_orders_confirmation(orderID, chat_id,messageID,src_msg) values("'.$orderID.'","'.$chat_id.'","'.$mID.'","'.$ttt.'")');
            $stmt = mysqli_prepare($connection, 'insert into cron_orders_confirmation(orderID, chat_id, messageID, src_msg) values(?,?,?,?)');
            $stmt->bind_param('ssss', $orderID, $chat_id, $mID, $ttt);
            $stmt->execute();
            echo json_encode(array(
                'result' => 'ok'
            ));
            return;
        }
        $orderID = $_POST['id'];
        $eng = $_POST['eng'];
        $passingEng = "";
        switch ($eng) {
            case 'Павел Храмцов' : $passingEng = 'Храмцов'; break;
            case 'Айхан Мусаев' : $passingEng = 'Мусаев'; break;
            case 'Кучкаров Сергей' : $passingEng = 'Кучкаров'; break;
            case 'Ганнибалов Владислав' : $passingEng = 'Ганнибалов'; break;
            case 'Алихан Калиматов' : $passingEng = 'Калиматов'; break;
            case 'Ребров Антон' : $passingEng = 'Ребров'; break;
            case 'Федкевич Станислав' : $passingEng = 'Федкевич'; break;
            case 'Разгуляев Валентин' : $passingEng = 'Разгуляев'; break;
            case 'Владислав Журавлёв' : $passingEng = 'Журавлев'; break;
            case 'Ушанги Грдзелишвили' : $passingEng = 'Грдзелишвили'; break;
            case 'Тимофей Савченко' : $passingEng = 'Савченко'; break;
            case 'Иванов Артём' : $passingEng = 'Иванов'; break;
            case 'Стороженко Сергей' : $passingEng = 'Стороженко'; break;
            case 'Вэтэмэнеску Александр' : $passingEng = 'Вэтэмэнеску'; break;
            case 'Сапожников Михаил' : $passingEng = 'Сапожников'; break;
            case 'Любимов Павел' : $passingEng = 'Любимов'; break;
            case 'Лавров Александр' : $passingEng = 'Лавров Александр'; break;
            case 'Лавров Георгий' : $passingEng = 'Лавров Георгий'; break;
            case 'Слиш Василий' : $passingEng = 'Слиш'; break;
            case 'Ящук Денис' : $passingEng = 'Ящук'; break;
            case 'Грицишин Александр': $passingEng = 'Грицишин';break;
            case 'Шевцов Андрей': $passingEng = 'Шевцов';break;
            case 'Мусаев Субхан': $passingEng = 'Мусаев Субхан';break;
            case 'Лиленков Кирилл':$passingEng = 'Лиленков';break;
            case 'Стажер': $passingEng = 'Стажер';break;
        }

        $lastRowNumQuery = mysqli_query($connection, 'select * from cfg where setting="last_imported_row"');
        $lastRow = 0;
        if ($arr = mysqli_fetch_assoc($lastRowNumQuery)) {
            $lastRow = $arr['value'];
        }
        mysqli_query($connection, 'insert into uchet(orderID, row_number, engineer) values("' . $orderID . '", "' . ($lastRow + 1) . '", "' . $passingEng . '")');
        mysqli_query($connection, 'update cfg set value=' . ((int)($lastRow + 1)) . ' where setting="last_imported_row"');

        $ch = curl_init('https://script.google.com/macros/s/AKfycbzL2DAvQYD2OvZmSzhCsNgWU07Qo934xxM2rxajYxkYXHZQZM9g/exec?id=' . $orderID . '&eng=' . urlencode($passingEng));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);
        print_r($response);
        $redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }
// close the connection, release resources used
        curl_close($ch);
        //print_r(file_get_contents($redirect_url));

        $result = json_decode(file_get_contents($redirect_url));
    }

    if ($_POST['action'] == 'confirm_order') {
        $chat_id = $_POST['chat_id'];
        $message_id = $_POST['message_id'];
        $cronQ = mysqli_query($connection, 'select * from cron_orders_confirmation where messageID="'.$message_id.'" and chat_id="'.$chat_id.'"');
        $boo = false;
        if (!mysqli_num_rows($cronQ)) {
            $cronQ = mysqli_query($connection, 'select * from cron_orders_confirmation where reject_reason_message_id="'.$message_id.'" and chat_id="'.$chat_id.'"');
            mysqli_query($connection, 'update cron_orders_confirmation set confirmed=1 where chat_id="'.$chat_id.'" and reject_reason_message_id="'.$message_id.'"');
            $boo = true;
        }
        if (!$boo) {
            mysqli_query($connection, 'update cron_orders_confirmation set confirmed=1 where chat_id="' . $chat_id . '" and messageID="' . $message_id . '"');
        }
        if (mysqli_num_rows($cronQ) > 0) {
            $cronArr = mysqli_fetch_array($cronQ);
            $engQ = mysqli_query($connection, 'select * from engineers where chat_id="' . $chat_id . '"');
            $engArr = mysqli_fetch_array($engQ);
            $smm = sendMessageViaTg($cronArr['orderID'], $chat_id, $message_id);

            $orderID = $cronArr['orderID'];
            $passingEng = $engArr['short_name'];
            $lastRowNumQuery = mysqli_query($connection, 'select * from cfg where setting="last_imported_row"');
            $lastRow = 0;
            if ($arr = mysqli_fetch_assoc($lastRowNumQuery)) {
                $lastRow = $arr['value'];
            }

            global $amo;
            $amo->changeOrderStatus($orderID, 16715350);
            $lead = $amo->getLeadByID($orderID);
            $leadContact = $lead['response']['leads'][0]['main_contact_id'];
            $name = '';
            $phone = array();
            if ($leadContact) {
                $contact = $amo->getContactByID($leadContact);
                $name = $contact['response']['contacts'][0]['name'];
                $phone = $contact['response']['contacts'][0]['custom_fields'][0]['values'][0]['value'];
                $phone = array();
                foreach ($contact['response']['contacts'][0]['custom_fields'][0]['values'] as $phones) {
                    $phone[] = $phones['value'];
                }
            }
            $phhh = implode('; ', $phone);
            $cf = $lead['response']['leads'][0]['custom_fields'];

            $lead_name = $lead['response']['leads'][0]['name'];
            $prodolzhenie = "Нет";
            if (strpos($lead_name, 'продолжение') !== false || strpos($lead_name, "Продолжение") !== false) {
                $prodolzhenie = "Да";
            }

            $from = '';
            $color = '';
            $device = '';
            $model = '';
            $problem = '';
            $services = '';
            $address = '';
            $time = '';
            $metro = '';
            $model_features = "";
            $problem_descr = "";
            $address_short = "";
            $service_date = "";
            $home_color = '';
            $notice = "";
            foreach ($cf as $arr) {
                if ($arr['id'] == 475581) {
                    $from = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 26143) {
                    $color = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 26063) {
                    $device = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 475583) {
                    $model = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 26045) {
                    $problem = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 475585) {
                    $services = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 26071) {
                    $address = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 29683) {
                    $time = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 460647) {
                    $metro = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 476893) {
                    $model_features = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 476895) {
                    $problem_descr = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 476897) {
                    $address_short = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 26069) {
                    $service_date = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 477995) {
                    $home_color = $arr['values'][0]['value'];
                }
                if ($arr['id'] == 29649) {
                    $notice = $arr['values'][0]['value'];
                }
            }
            $lastRow = (int)($lastRow + 1);
            $vremya_remonta = date('Y-m-d', strtotime($service_date)).' '.str_replace('-', ':', $time).':00';

            $stmt = mysqli_prepare($connection, 'insert into uchet(timestamp,orderID, row_number, engineer,amo_src,amo_device,amo_color,amo_home,amo_a,amo_model_feature,amo_problem,amo_uslugi,amo_problem_description,amo_note,amo_address_full,amo_address_short,amo_metro,amo_date,amo_time,amo_contact_name,amo_phones, prodolzhenie, vremya_remonta) values(NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $stmt->bind_param('ssssssssssssssssssssss', $orderID, $lastRow, $passingEng, $from, $device, $color, $home_color, $model, $model_features, $problem, $services, $problem_descr, $notice, $address, $address_short, $metro, $service_date, $time, $name, $phhh, $prodolzhenie, $vremya_remonta);
            $stmt->execute();
            $stmt->close();
            //mysqli_query($connection, 'insert into uchet(orderID, row_number, engineer) values("' . $orderID . '", "' . ($lastRow + 1) . '", "' . $passingEng . '")');

            $vremya_kontrolya = date('Y-m-d H:i:s', strtotime($vremya_remonta) + 60*60);
            $curDatetime = date('Y-m-d H:i:s');
            $stmt = mysqli_prepare($connection, 'insert into kontrol_kuratora(timestamp, next_time, orderID, eng) values(?,?,?,?)');
            $stmt->bind_param('ssss', $curDatetime, $vremya_kontrolya, $orderID, $passingEng);
            $stmt->execute();

            sendAcceptCuratorMessage($cronArr['orderID'], $engArr['name_for_bot'], $device, $problem, date('d.m', strtotime($service_date)), $time);
            mysqli_query($connection, 'update cfg set value=' . ($lastRow) . ' where setting="last_imported_row"');

            $ch = curl_init('https://script.google.com/macros/s/AKfycbzL2DAvQYD2OvZmSzhCsNgWU07Qo934xxM2rxajYxkYXHZQZM9g/exec?id=' . $orderID . '&eng=' . urlencode($passingEng));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            $response = curl_exec($ch);

            $redirect_url = curl_getinfo($ch)['redirect_url'];

            if (curl_error($ch)) {
                $error_msg = curl_error($ch);
            }
            // close the connection, release resources used
            curl_close($ch);
            //print_r(file_get_contents($redirect_url));

            $result = json_decode(file_get_contents($redirect_url));
            //print_r($result);
        } else {
            $curatorsQ = mysqli_query($connection, 'select * from curators');
            while ($curatorsArr = mysqli_fetch_array($curatorsQ)) {
                $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                $post = array(
                    'chat_id' => $curatorsArr['chat_id'],
                    //'chat_id' => 167998391,
                    //'chat_id' => 230672596,
                    'text' => "❌❌❌❌❌❌❌❌❌❌ ПРОИЗОШЛА ОШИБКА ПРИ ПРИЕМЕ ЗАКАЗА. СРОЧНО ОБРАТИТЕСЬ К @str1t3r ",
                    'parse_mode' => 'html'
                );
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
                $response = curl_exec($ch);
                curl_close($ch);
            }
        }
    }

    if ($_POST['action'] == 'reject_order') {
        $chat_id = $_POST['chat_id'];
        $message_id = $_POST['message_id'];
        $rmid = $_POST['reason_message_id'];
        echo mysqli_query($connection, 'update cron_orders_confirmation set confirmed=2, reject_reason_message_id="'.$rmid.'" where chat_id="'.$chat_id.'" and messageID="'.$message_id.'"');
    }

    if ($_POST['action'] == 'reject_order_reason') {
        $chat_id = $_POST['chat_id'];
        $message_id = $_POST['message_id'];
        $reason = $_POST['reason'];
        mysqli_query($connection, 'update cron_orders_confirmation set reject_reason="'.$reason.'" where reject_reason_message_id="'.$message_id.'" and chat_id="'.$chat_id.'"');

            $messageIdQ = mysqli_query($connection, 'select * from cron_orders_confirmation where reject_reason_message_id="'.$message_id.'" and chat_id="'.$chat_id.'"');
            $message_id = mysqli_fetch_array($messageIdQ);
            $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/editMessageText');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $post = array(
                'chat_id' => $chat_id,
                'message_id' => $message_id['messageID'],
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
                'text' => 'Вам выдан заказ '.$message_id['orderID']
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            // execute!
            $response = curl_exec($ch);
            curl_close($ch);

        sendCuratorsRejectReasonMessage($chat_id, $message_id, $reason);
    }

    if ($_POST['action'] == 'checkName') {
        $name = $_POST['name'];
        $password = $_POST['password'];

        $tryQ = mysqli_query($connection, 'select * from auth where login="'.$name.'" and password="'.$password.'"');
        if (mysqli_num_rows($tryQ)) {
            if (($name == "Irina" || $name == "Olga") && !isset($_COOKIE['auth-comp'])) {
                echo json_encode(['result' => 'error']);
            } else {
                $result = array(
                    'result' => 'ok',
                    'name' => $name
                );
                echo json_encode($result);
            }
        } else{
            $result = array(
                'result' => 'error'
            );
            echo json_encode($result);
        }
    }

    if ($_POST['action'] == 'changeEng') {
        $orderID = $_POST['id'];
        $existsViezdQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        if (!mysqli_num_rows($existsViezdQ)) {
            $eng = $_POST['eng'];
            $res = $amo->updateEngineerField($orderID, $eng);
            echo json_encode([
                'result' => 'ok',
            ]);
        } else {
            echo json_encode([
                'result' => 'error',
                'desc' => 'another_eng'
            ]);
        }
    }

    /* if ($_POST['action'] == 'updateEngReports') {
        $processQuery = mysqli_query($connection, 'select * from cfg where setting="is_in_importing"');
        $proc = mysqli_fetch_array($processQuery);
        if ($proc['value']) {
            echo json_encode(array('result' => 'error'));
        } else {
            mysqli_query($connection, 'update cfg set value=1 where setting="is_in_importing"');
            $engQ = mysqli_query($connection, 'select * from engineers');
            $engIds = array();
            $str = '';
            $engOrdersSum = array();
            $engOrdersName = array();
            $engOrdersPaika = array();
            while ($eng = mysqli_fetch_array($engQ)) {
                $str .= $eng['short_name'] . ';';
                $engIds[$eng['short_name']] = $eng['id'];
            }
            $str = rtrim($str, ';');
            $ch = curl_init('https://script.google.com/macros/s/AKfycbzcu5whUBBGJPx9twxARmyc3oQgKTkKYshzBiI7Kwus6FqCc6o/exec?engNames=' . urlencode($str));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
            $response = curl_exec($ch);

            $redirect_url = curl_getinfo($ch)['redirect_url'];

            if (curl_error($ch)) {
                $error_msg = curl_error($ch);
            }
// close the connection, release resources used
            curl_close($ch);

            $result = json_decode(file_get_contents($redirect_url));
            mysqli_query($connection, 'delete from eng_reports');
            if ($result->data) {
                foreach ($result->data as $nn => $arrr) {
                    foreach ($arrr as $arr) {
                        $time = $arr[0];
                        $photo_dogovora = $arr[1];
                        $nomer_dogovora = $arr[2];
                        $phone = $arr[3];
                        $name = $arr[4];
                        $device = $arr[5];
                        $sum = $arr[6];
                        $zap = $arr[7];
                        $pribil = $arr[8];
                        $prodol = $arr[9];
                        $orderID = $arr[12];
                        $kur = $arr[13];
                        $paika = $arr[17];
                        if (strtotime($time) > strtotime('1 Jan 2019') and $sum != 0 and $kur != '') {
                            $engOrders[] = array(
                                'eng' => $nn,
                                'orderID' => $orderID,
                                'sum' => $pribil
                            );
                            $engOrdersSum[$orderID] += $pribil;
                            $engOrdersName[$orderID] = $nn;
                            $engOrdersPaika[$orderID] += $paika;
                        }


                        if ($name != "") {
                            mysqli_query($connection, 'insert into eng_reports(eng_id,timestamp,photo_dogovora,nomer_dogovora,phone,name,device,total_sum,zapchasti,pribil,prodolzhenie,orderID,otmetka_kuratora,paika) values("' . $engIds[$nn] . '","' . $time . '","' . $photo_dogovora . '","' . $nomer_dogovora . '","' . $phone . '","' . $name . '","' . $device . '","' . $sum . '","' . $zap . '","' . $pribil . '","' . $prodol . '","' . $orderID . '","' . $kur . '","' . $paika . '")');
                        }
                    }
                }
            }
            mysqli_query($connection, 'update cfg set value=0 where setting="is_in_importing"');
            echo json_encode(array('result' => 'ok'));
        }
    } */

    /* if ($_POST['action'] == 'updateCashTable') {
        $ch = curl_init('https://script.google.com/macros/s/AKfycby5ZeCDENt7Z9wT2y1exU4CW6LjM3MbFn2UVjeW5Irgw1OXYdQ/exec');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);
        $redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }
// close the connection, release resources used
        curl_close($ch);

        $result = json_decode(file_get_contents($redirect_url));
        if ($result->data) {
            mysqli_query($connection, 'delete from cash_register');
            foreach ($result->data as $arr) {
                $time = $arr[0];
                $eng = $arr[1];
                $sum = $arr[4];
                $orderID = $arr[5];
                mysqli_query($connection, 'insert into cash_register(timestamp,eng,sum,orderID) values("' . $time . '","' . $eng . '","' . $sum . '","' . $orderID . '")');
            }
        }
        echo json_encode(array('result' => 'ok'));
    } */

    if ($_POST['action'] == 'priemDeneg') {
        $orderID = $_POST['orderID'];
        $sum = $_POST['sum'];
        
        $responsible = $_POST['responsible'];
        $responsibleCity = $_POST['responsible_city'];

        $kassir = $_POST['kassir'];
        $kassir = "Кристина";
        $eng = $_POST['eng'];
        $engCity = $_POST['eng_city'];

        $ch = curl_init('https://script.google.com/macros/s/AKfycbwzhM6n4ywmRRkci2SECWDNbPDSjSQWqbjpaBSuLmJ78RK2gWEM/exec?order=' . $orderID . '&eng=' . urlencode($eng).'&sum='.$sum.'&kassir='.urlencode($kassir));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);

        $redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }
// close the connection, release resources used
        curl_close($ch);
        //print_r(file_get_contents($redirect_url));

        $result = json_decode(file_get_contents($redirect_url));

        mysqli_query($connection, 'insert into cash_register(timestamp,eng,sum,orderID, eng_city, responsible, responsible_city) values(NOW(), "'.$eng.'", "'.$sum.'", "'.$orderID.'", "'.$engCity.'", "'.$responsible.'", "'.$responsibleCity.'")');

        $tryQ = mysqli_query($connection, 'select * from eng_reports where orderID="'.$orderID.'"');
        $rep = mysqli_fetch_array($tryQ);
        $total_sum = $rep['total_sum'];
        $pribil = $rep['pribil'];
        $amo->closeOrder($orderID,$total_sum,$pribil);


        $notificationOrderID = $orderID;
        $notificationSumma = number_format($sum, 0, '', ',');
        $notificationPerson = $eng; // Фамилия СИ
        $notificationDevice = $rep['device'];
        $notificationNow = date('d.m.y (H:i:s)');
        if (isset($_POST['auth'])) {
            $notificationAuthor = $_POST['auth']; // Кассир
        } else {
            $notificationAuthor = "";
        }

        /* УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */

        $cashbox_chat_id = -1001357231681; // Касса СПб (по умолчанию)
        if ($responsibleCity == "Москва") {
            $cashbox_chat_id = -1001489136772;
        }
        
        $text = "<b>💰 СИ " . $notificationPerson . "</b> сдал деньги по заказу " . $notificationOrderID . PHP_EOL . "<b>" . $notificationSumma . " руб.</b> / " . $notificationDevice . PHP_EOL . "Кассир " . $notificationAuthor . " / " . $notificationNow;
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => $cashbox_chat_id,
            'text' => $text,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_exec($ch);
        curl_close($ch);
    
        /* КОНЕЦ УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */


        echo 'ok';
    }

    if ($_POST['action'] == "otmetkaKuratora") {
        $orderID = $_POST['orderID'];
        $eng = $_POST['eng'];
        $kur = $_POST['kur'];

        mysqli_query($connection, 'update eng_reports set otmetka_kuratora="'.$kur.'" where orderID="'.$orderID.'"');
        echo json_encode(array('result' => 'ok'));
        //flush();
        mysqli_query($connection, 'insert into otmetka_kuratora_log(kurator,orderID,timestamp) values("'.$kur.'", "'.$orderID.'", NOW())');

        $ch = curl_init('https://script.google.com/macros/s/AKfycbx5K-8LQ3RKLw47lQEMmfyl93IsVjI3ZSymepqK7Q7RPQ1bLHxZ/exec?id=' . $orderID . '&eng=' . urlencode($eng).'&kur='.urlencode($kur));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!

        $response = curl_exec($ch);
        /*$redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }*/
        curl_close($ch);
        //$result = json_decode(file_get_contents($redirect_url));

        $sumQ = mysqli_query($connection, 'select * from eng_reports where orderID="'.$orderID.'"');
        $sumArr = mysqli_fetch_array($sumQ);
        if ($sumArr['pribil'] != 0) {
            $curLead = $amo->getLeadByID($orderID);
            if ($curLead['response']['leads'][0]['status_id'] != 142 && $curLead['response']['leads'][0]['status_id'] != 143) {
                $amo->changeOrderStatus($orderID, 16840747);
            }
        } else {
            $amo->closeOrderWithReason($orderID);
        }

        // BRIDGE //
        $order_id = $orderID;
        $curator_name = $kur;
        $myCurl = curl_init();
        curl_setopt_array($myCurl, array(
            CURLOPT_URL => 'https://sca.tools/api/bridge-erp-api.php',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query(array(
                'secret' => 'fegbf4as',
                'action' => 'bridge_make_order_id_checked_by_curator_name',
                'order_id' => $order_id,
                'curator_name' => $curator_name,
        ))));
        $response = curl_exec($myCurl);
        curl_close($myCurl);
        // /BRIDGE //

    }

    if ($_POST['action'] == "logout") {
        unset($_COOKIE['auth']);
        setcookie('auth', '', time() - 3600, '/');
        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'otchet_okk') {
        $stmt = mysqli_prepare($connection, 'insert into okk(timestamp, account, orderID, priehal_vovremya, perenosil_vremya_zakaza, summa_sovpadaet, ostavili_dogovor, comment, neobhodim_kontrol, eng, report_timestamp,prodolzhenie,photo_dogovora,client_phone_number,client_name,device,total_sum) values(NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('ssssssssssssssss', $_POST['account'], $_POST['orderID'], $_POST['vovremya'], $_POST['perenos'], $_POST['summa'], $_POST['dogovor'], $_POST['comment'], $_POST['kurator'], $_POST['eng'], $_POST['timestamp'], $_POST['prodolzhenie'],$_POST['photo'],$_POST['cPhone'],$_POST['cName'],$_POST['device'],$_POST['total_sum']);
        $stmt->execute();
        $stmt->close();
        $amo->setOKKReport($_POST['orderID'], $_POST['vovremya'], $_POST['perenos'],$_POST['summa'],$_POST['dogovor'],$_POST['comment'],$_POST['kurator']);
        $amo->addNote($_POST['orderID'], 'Добавлен комментарий ОКК: '.$_POST['comment']);
        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'updateOrderComments') {
        /*$ch = curl_init('https://script.google.com/macros/s/AKfycbxvqhK3_njMe34-licM6iIcAPUmhnvwGOeXOKWybbtN93VEFcZn/exec');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);
        $redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }
// close the connection, release resources used
        curl_close($ch);
        $result = json_decode(file_get_contents($redirect_url));
        if ($result->data) {
            mysqli_query($connection, 'delete from opisaniya_zakazov');
            foreach ($result->data as $arr) {
                $stmt = mysqli_prepare($connection, 'insert into opisaniya_zakazov(timestamp,orderID,description) values(?,?,?)');
                $stmt->bind_param('sss', $arr[0],$arr[1], $arr[2]);
                $stmt->execute();
                $stmt->close();
            }
        }*/

        $ch = curl_init('https://script.google.com/macros/s/AKfycbxxjFOh-0BX66EU75GOhaBOP4Lmdbhh7wG3kvzeh2DZE0cZsjk/exec');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!

        $response = curl_exec($ch);
        //$mailSMTP->send('str1t3r@gmail.com', 'cron', print_r($response, true), $from);
        $redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }
// close the connection, release resources used
        curl_close($ch);
        $result = json_decode(file_get_contents($redirect_url));

        if ($result->data) {
            mysqli_query($connection, 'delete from curator_comments');
            foreach ($result->data as $arr) {
                $time = $arr[0];
                $orderID = $arr[1];
                $comment = $arr[2];
                $otmetka = $arr[3];
                $stmt = mysqli_prepare($connection, 'insert into curator_comments(timestamp,orderID,comment,otmetka) values(?,?,?,?)');
                $stmt->bind_param("ssss",$time, $orderID, $comment, $otmetka);
                $stmt->execute();
                $stmt->close();
            }
        }

        echo json_encode(array('result' => 'ok'));

    }

    if ($_POST['action'] == 'savePostavshiki') {
        $data = $_POST['data'];
        mysqli_query($connection, 'delete from postavshiki');
        foreach ($data as $arr) {
            $actual = $arr['actual'];
            $name = $arr['name'];
            $phone = $arr['phone'];
            $bu = $arr['bu'];
            $china = $arr['china'];
            $obmen = $arr['obmen'];
            $stmt = mysqli_prepare($connection, 'insert into postavshiki(actual,name,phone,bu,china,obmen) values(?,?,?,?,?,?)');
            $stmt->bind_param('ssssss', $actual, $name, $phone, $bu, $china, $obmen);
            $stmt->execute();
        }
        echo json_encode(array('result'=>'ok'));
    }

    if ($_POST['action'] == 'updateZch') {
        $ch = curl_init('https://script.google.com/macros/s/AKfycbxgKn2EZAysoZ9AiiDozbc3AgNeDru8kqCdv_veF4lzTawHELYS/exec');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);
        $redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }
// close the connection, release resources used
        curl_close($ch);
        $result = json_decode(file_get_contents($redirect_url));
        print_r($result);
        if ($result->data) {
            mysqli_query($connection, 'delete from zch');
            foreach ($result->data as $arr) {
                if ($arr[1] != '') {
                    $stmt = mysqli_prepare($connection, 'insert into zch(timestamp,orderID,device,modelA,color,serial,exact_name,state,photo) values(?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('sssssssss', $arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5], $arr[6], $arr[7], $arr[8]);
                    $stmt->execute();
                    $stmt->close();
                }
            }
        }
        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'saveOKKComment') {
        $opt = $_POST['option'];
        $comment = $_POST['txt'];
        $orderID = $_POST['orderID'];
        $stmt = mysqli_prepare($connection, 'insert into okk_comments(result, comment, orderID) values(?,?,?)');
        $stmt->bind_param('sss', $opt, $comment, $orderID);
        $stmt->execute();
        $stmt->close();
        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'save_rating') {
        $data = $_POST['data'];
        foreach ($data as $name => $arr) {
            $stmt = mysqli_prepare($connection, 'update eng_stat_rating set rating_proc=?, rating_por=? where eng=? and ustroistvo="mac"');
            $stmt->bind_param('sss', $arr[0], $arr[1], $name);
            $stmt->execute();
        }
    }

    if ($_POST['action'] == 'save_snos_zakaza') {
        $orderID = $_POST['orderID'];
        $h = $_POST['h'];
        $m = $_POST['m'];
        $account = $_POST['account'];
        $res = $_POST['res'];
        $stmt = mysqli_prepare($connection, 'insert into snosi_comments(orderID, comment,timestamp,new_date, new_time,account) values(?,?,NOW(),?,?,?)');
        $stmt->bind_param('sssss', $orderID, $res, $h, $m, $account);
        $stmt->execute();
        $stmt->close();

        $amo->updateOrderCustomField($orderID, 29683, $h.'-'.$m);
        echo json_encode(array('result' => 'ok'));


    }

    if ($_POST['action'] == 'saveOtvoz') {
        $txt = $_POST['txt'];
        $time = $_POST['time'];
        $date = $_POST['date'];
        $acc = $_POST['acc'];
        $eng = $_POST['eng'];
        print_r($_POST);
        $stmt = mysqli_prepare($connection, 'insert into map_otvozi(eng,date,time,txt,timestamp,account) values(?,?,?,?,NOW(),?)');
        $stmt->bind_param('sssss', $eng, $date, $time, $txt, $acc);
        $stmt->execute();
        $stmt->close();
        echo mysqli_error($connection);
        echo json_encode(array('result'=>'ok'));
    }

    if ($_POST['action'] == 'new_curator_comment') {
        $comment = $_POST['comment'];
        $orderID = $_POST['orderID'];
        $cur = $_POST['curator'];

        $authQ = mysqli_query($connection, 'select * from auth where login="'.$cur.'"');
        $authArr = mysqli_fetch_array($authQ);
        $curator = $authArr['position'].' '.$authArr['surname'];

        $stmt = mysqli_prepare($connection, 'insert into curator_comments(timestamp,orderID,comment,otmetka) values(NOW(),?,?,?)');
        $stmt->bind_param('sss',$orderID,$comment,$curator);
        $stmt->execute();
        $stmt->close();
        $ch = curl_init('https://script.google.com/macros/s/AKfycbyTtmljZxTK6-04lAzZ0Yd_wxdpnVhL38fxrzgRCYBlNitl_CeJ/exec?orderID=' . $orderID . '&curator=' . urlencode($curator) . '&comment='. urlencode($comment));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);
        print_r($response);
        $redirect_url = curl_getinfo($ch)['redirect_url'];

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }
        curl_close($ch);

        $result = json_decode(file_get_contents($redirect_url));

        $amo->addNote($orderID, $curator.' отправил комментарий к заказу:'.PHP_EOL.$comment);

        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $orderQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        $orderArr = mysqli_fetch_array($orderQ);
        $device = $orderArr['amo_device'];
        $problem = $orderArr['amo_problem'];
        $date = date('d.m', strtotime($orderArr['amo_date']));
        $time = $orderArr['amo_time'];
        $eng = $orderArr['engineer'];

        $text = '💬 <b>'.$curator.'</b> добавил комментарий к заказу '.$orderID.':'.PHP_EOL.$comment.PHP_EOL;
        $text .= '<b>'.$device.'</b> / СИ '.$eng.' / '.$problem.' / '.$date.' '.$time;
        $post = array(
            //'chat_id' => -1001462354257,
            //'chat_id' => -1001463552228,  -- чат "Кураторская"
            'chat_id' => -1001396069022,  // -- чат "Контроль куратора"
            'text' => $text,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $response = curl_exec($ch);
        curl_close($ch);

        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'get_viezd_info') {
        $orderID = $_POST['orderID'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        if ($orderArr = mysqli_fetch_array($viezdQ)) {
            echo json_encode($orderArr);
        } else {
            echo json_encode(array('result' => 'error'));
        }
    }

    if ($_POST['action'] == 'get_viezd_info_with_chat_id') {
        $orderID = $_POST['orderID'];
        $viezdQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        if ($orderArr = mysqli_fetch_array($viezdQ)) {
            $eng = $orderArr['engineer'];
            $engQ = mysqli_query($connection, 'select * from engineers where short_name="'.$eng.'"');
            $engArr = mysqli_fetch_array($engQ);
            $orderArr['chat_id'] = $engArr['chat_id'];
            echo json_encode($orderArr);
        } else {
            echo json_encode(array('result' => 'error'));
        }
    }

    if ($_POST['action'] == 'otkat_zakaza') {
        $orderID = $_POST['orderID'];
        $cur = $_POST['curator'];
        $reason = $_POST['reason'];

        $lead = $amo->getLeadByID($orderID);
        $leadContact = $lead['response']['leads'][0]['main_contact_id'];
        $name = '';
        $phone = array();
        if ($leadContact) {
            $contact = $amo->getContactByID($leadContact);
            $name = $contact['response']['contacts'][0]['name'];
            $phone = $contact['response']['contacts'][0]['custom_fields'][0]['values'][0]['value'];
            $phone = array();
            foreach ($contact['response']['contacts'][0]['custom_fields'][0]['values'] as $phones) {
                $phone[] = $phones['value'];
            }
        }
        $phhh = implode('; ', $phone);
        $cf = $lead['response']['leads'][0]['custom_fields'];
        $from = ''; $color = ''; $device = ''; $model = ''; $problem = ''; $services = ''; $address = ''; $time = ''; $metro = ''; $model_features = ""; $problem_descr = ""; $address_short = "";
        $service_date = ""; $home_color = '';$notice = "";
        foreach ($cf as $arr) {
            if ($arr['id'] == 475581) {
                $from = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 26143) {
                $color = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 26063) {
                $device = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 475583) {
                $model = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 26045) {
                $problem = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 475585) {
                $services = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 26071) {
                $address = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 29683) {
                $time = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 460647) {
                $metro = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 476893) {
                $model_features = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 476895) {
                $problem_descr = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 476897) {
                $address_short = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 26069) {
                $service_date = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 477995) {
                $home_color = $arr['values'][0]['value'];
            }
            if ($arr['id'] == 29649) {
                $notice = $arr['values'][0]['value'];
            }
        }

        $prevViezdQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        if (mysqli_num_rows($prevViezdQ)) {
            $prevViezdArr = mysqli_fetch_array($prevViezdQ);
            $rowID = $prevViezdArr['id'];
            $viezd_timestamp = $prevViezdArr['timestamp'];
            $engineer = $prevViezdArr['engineer'];
            $pribil_otchet = $prevViezdArr['pribil_otchet'];
            $deneg_polucheno = $prevViezdArr['deneg_polucheno'];
            $paika = $prevViezdArr['paika'];
            $prodolzhenie = $prevViezdArr['prodolzhenie'];

            $amo_comments = $amo->getLeadNotes($orderID);
            $stmt = mysqli_prepare($connection, 'insert into otkati_zakazov(viezd_timestamp,snos_timestamp,orderID,engineer,pribil_otchet,deneg_polucheno,paika,amo_src, amo_device,amo_color,amo_home,amo_a,amo_model_feature,amo_problem,amo_uslugi,amo_problem_description,amo_note,amo_address_full,amo_address_short,amo_metro,amo_date,amo_time,amo_contact_name,amo_phones,prodolzhenie,amo_comments,curator,reason) values(?,NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $stmt->bind_param('sssssssssssssssssssssssssss', $viezd_timestamp, $orderID, $engineer, $pribil_otchet, $deneg_polucheno, $paika, $from, $device, $color, $home_color, $model, $model_features, $problem, $services, $problem_descr, $notice, $address, $address_short, $metro, $service_date, $time, $name, $phhh, $prodolzhenie, $amo_comments, $cur, $reason);
            $insert_result = $stmt->execute();
            $stmt->close();
            if ($insert_result == 1) {
                mysqli_query($connection, 'delete from uchet where id="'.$rowID.'"');

                $eng = "Не выбрано";
                $res = $amo->updateEngineerField2($orderID, $eng);

                echo json_encode(array('result' => 'ok'));
            } else {
                echo json_encode(array('result' => 'error'));
            }
        } else {
            echo json_encode(array('result' => 'error'));
        }

    }

    if ($_POST['action'] == 'zapisi_ats_comment') {
        $phone = $_POST['phone'];
        $cur = $_POST['curator'];
        $comment = $_POST['comment'];
        $stmt = mysqli_prepare($connection, 'insert into zapisi_ats_comments(timestamp, phone, cur, comment) values(NOW(),?,?,?)');
        $stmt->bind_param('sss', $phone, $cur, $comment);
        $res = $stmt->execute();
        $stmt->close();
        if ($res == 1) {
            echo json_encode(array('result' => 'ok'));
        } else {
            echo json_encode(array('result' => 'error'));
        }
    }

    if ($_POST['action'] == 'new_garanty') {
        $orderID = $_POST['orderID'];
        $oper = $_POST['oper'];
        $comment = $_POST['comment'];
        $stmt = mysqli_prepare($connection, 'insert into obrasheniya_po_garantii(timestamp, operator, comment, orderID) values(NOW(), ?,?,?)');
        $stmt->bind_param('sss', $oper, $comment, $orderID);
        $res = $stmt->execute();
        $stmt->close();
        if ($res == 1) {
            echo json_encode(array('result' => 'ok'));
        } else {
            echo json_encode(array('result' => 'error'));
        }
    }


    if ($_POST['action'] == 'garanty_call') {
        $orderID = $_POST['orderID'];
        $phoneNumber = $_POST['phoneNumber'];
        $lead = $amo->getLeadByID($orderID);
        $leadContact = $lead['response']['leads'][0]['main_contact_id'];
        if ($leadContact) {
            $contact = $amo->getContactByID($leadContact);
            $name = $contact['response']['contacts'][0]['name'];
            $phone = $contact['response']['contacts'][0]['custom_fields'][0]['values'][0]['value'];
            $phone = array();
            foreach ($contact['response']['contacts'][0]['custom_fields'][0]['values'] as $phones) {
                $phone[] = $phones['value'];
            }
        }
        if ($phone[(int)$phoneNumber - 1]) {
            $param = array(
                'access_token' => 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
                'virtual_phone_number' => '78126043154',
                'contact' => $phone[(int)$phoneNumber - 1],
                'first_call' => 'employee',
                'scenario_id' => 159346
            );
            $parameters = array(
                'id' => intval(rand(0, 9999)),
                'jsonrpc' => '2.0',
                'method' => 'start.scenario_call',
                'params' => $param
            );
            $ch = curl_init('https://callapi.uiscom.ru/v4.0');
            curl_setopt_array($ch, array(
                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_HTTPHEADER => array(
                    'Authorization: ' . 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
                    'Content-Type: application/json'
                ),
                CURLOPT_POSTFIELDS => json_encode($parameters)
            ));

            $response = curl_exec($ch);
            if ($response === FALSE) {
                die(curl_error($ch));
            }
            $responseData = json_decode($response, TRUE);

            echo json_encode(array('result' => 'ok'));
        } else {
            echo json_encode(array('result' => 'error'));
        }

    }

    if ($_POST['action'] == 'new_garanty_comment') {
        $orderID = $_POST['orderID'];
        $cur = $_POST['cur'];
        $comment = $_POST['comment'];
        $stmt = mysqli_prepare($connection, 'insert into kommentarii_po_garantii(timestamp,curator,orderID,comment) values(NOW(),?,?,?)');
        $stmt->bind_param('sss', $cur, $orderID, $comment);
        $stmt->execute();
        $stmt->close();
        $amo->addNote($orderID, "Новый комментарий от Егора к обращению по гарантии:".PHP_EOL.$comment);
        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'close_garanty') {
        $orderID = $_POST['orderID'];
        $cur = $_POST['cur'];
        $reason = $_POST['reason'];
        $stmt = mysqli_prepare($connection, 'update obrasheniya_po_garantii set closed=1, close_reason=?, close_time=NOW(),close_curator=? where orderID=?');
        $stmt->bind_param('sss', $reason, $cur, $orderID);
        $stmt->execute();
        $stmt->close();
        $amo->addNote($orderID, "Обращение по гарантии закрыто по причине:".PHP_EOL.$reason);

        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'init_nasos') {
        $orderID = $_POST['orderID'];
        $eng = $_POST['eng'];
        $engQ = mysqli_query($connection, 'select * from engineers where name="'.$eng.'"');
        $engArr = mysqli_fetch_array($engQ);
        $chat_id = $engArr['chat_id'];
        $kur = $_POST['kur'];
        echo $kur;
        $kurRP = '';
        $kurator = '';
        if ($kur == "Pasha") {
            $kurator = "Храмцов";
            $kurRP = "Храмцова";
        }
        if ($kur == "Dima") {
            $kurator = "Яшин";
            $kurRP = "Яшина";
        }
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $inline_button1 = array(
            'text' => 'Буду через 1 мин',
            'callback_data' => 'nasos_1'
        );
        $inline_button2 = array(
            'text' => 'Буду через 5 мин',
            'callback_data' => 'nasos_2'
        );
        $inline_button3 = array(
            'text' => 'Обсужу по телефону',
            'callback_data' => 'nasos_3'
        );
        $inline_button4 = array(
            'text' => 'Мне это не нужно',
            'callback_data' => 'nasos_4'
        );
        $inline_keyboard = [[$inline_button1], [$inline_button2], [$inline_button3], [$inline_button4]];
        $kb = array(
            'inline_keyboard' => $inline_keyboard
        );

        $txt = '<b>Вас вызывает</b> куратор '.$kurator.' для подготовки к заказу '.$orderID;

        $post = array(
            'chat_id' => $chat_id,
            //'chat_id' => 167998391,
            //'chat_id' => 230672596,
            'text' => $txt,
            'reply_markup' => json_encode($kb),
            'parse_mode' => 'html'
        );

        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
// execute!
        $response = curl_exec($ch);

        curl_close($ch);
        $js = json_decode($response);
        print_r($js);
        $message_id = $js->result->message_id;
        $message = $js->result->text;
        $stmt = mysqli_prepare($connection, 'insert into nasos_process(timestamp, orderID, engineer,chat_id, message_id, message, kur) values(NOW(),?,?,?,?,?,?)');
        $stmt->bind_param('ssssss', $orderID, $eng, $chat_id, $message_id, $message, $kur);
        $stmt->execute();
        $stmt->close();


        $fromDate = date('Y-m').'-01 00:00:00';

        $valQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE()');
        $valArr = mysqli_fetch_array($valQ);
        $val = $valArr['s'];
        $avQ = mysqli_query($connection, 'select count(*) as c from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE() and prodolzhenie="Нет" ');
        $avArr = mysqli_fetch_array($avQ);
        $avg = $avArr['c'];
        $val30Q = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $val30Arr = mysqli_fetch_array($val30Q);
        $val30 = $val30Arr['s'];
        if ($avg == 0) $avg = 1;
        $srednii_po_otchetam = round($val / $avg);

        $avg30Q = mysqli_query($connection, 'select count(*) as c from eng_reports where (eng_id="'.$engArr['id'].'") and prodolzhenie!="Да" and timestamp>=curdate() - interval 30 day and timestamp <= curdate()');
        $avg30Arr = mysqli_fetch_array($avg30Q);
        $avg30 = $avg30Arr['c'];
        $avg_for_mot = round($val30 / $avg30);

        $valDev = 0;
        $viezdCount = 0;
        $viezdArr = array();
        $uchetQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        $uchetArr = mysqli_fetch_array($uchetQ);
        $device = $uchetArr['amo_device'];
        $problem = $uchetArr['amo_problem'];
        $date = date('d.m', strtotime($uchetArr['amo_date']));
        $time = $uchetArr['amo_time'];
        if ($device == 'iPhone 5' || $device == 'iPhone 5c' || $device == 'iPhone SE' || $device == 'iPhone 5s' || $device == 'iPhone 6' || $device == 'iPhone 6 Plus' || $device == 'iPhone 6s' || $device == 'iPhone 6s Plus') {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 5%" or device like "%iphone 5c%" or device like "%iphone 5s%" or device like "%iphone se%" or device like "%iphone 6%" or device like "%iphone 6 plus%" or device like "%iphone 6s%" or device like "%iphone 6s plus%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 5%" or amo_device like "%iphone 5c%" or amo_device like "%iphone 5s%" or amo_device like "%iphone se%" or amo_device like "%iphone 6%" or amo_device like "%iphone 6 plus%" or amo_device like "%iphone 6s%" or amo_device like "%iphone 6s plus%") and (engineer="' . $engArr['short_name'] . '") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }
        if ($device == 'iPhone Xs Max' || $device == 'iPhone 7' || $device == 'iPhone 7 Plus' || $device == 'iPhone 8' || $device == 'iPhone 8 Plus' || $device == 'iPhone X' || $device == 'iPhone XR' || $device == 'iPhone Xs') {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 7%" or device like "%iphone 7 plus%" or device like "%iphone 8%" or device like "%iphone 8 plus%" or device like "%iphone x%" or device like "%iphone xr%" or device like "%iphone xs%" or device like "%iphone xs max%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 7%" or amo_device like "%iphone 7 plus%" or amo_device like "%iphone 8%" or amo_device like "%iphone 8 plus%" or amo_device like "%iphone x%" or amo_device like "%iphone xr%" or amo_device like "%iphone xs%" or amo_device like "%iphone xs max%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }
        if (strpos($device, 'iPad') !== false ) {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%ipad%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%ipad%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }
        if (strpos($device, 'Mac') !== false) {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%mac%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%mac%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }

        $motV = motivaciya_val($val30);
        $motS = motivaciya_srednii($avg_for_mot);
        $motiv = min($motV, $motS);

        $sebes_vidannih = 2353 * $viezdCount;
        $ZP = $motiv * $valDev;
        $chistaya = $valDev - $ZP - $sebes_vidannih;
        $sred_chistaya = round($chistaya / $viezdCount);

        $text .= ( ' <b>('.($sred_chistaya > 0 ? '+' : '').$sred_chistaya.' руб.)</b>').PHP_EOL.'<b>'.$device.'</b> / '.$problem.' / СВД: '.$srednii_po_otchetam.' руб.'.' / ФАКТ: '.(round($valDev / $viezdCount)).' руб. / '.$date.' '.$time;


        $curQ = mysqli_query($connection, 'select * from curators');
        while ($curatorsArr = mysqli_fetch_array($curQ)) {

            $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $post = array(
                'chat_id' => $curatorsArr['chat_id'],
                //'chat_id' => 167998391,
                //'chat_id' => 230672596,
                'text' => '🗣⚠️ <b>Ожидается</b> ответ <b>СИ '.$eng.'</b> на вызов <b>Куратора '.$kurRP.'</b> для подготовки к заказу '.$orderID.$text,
                'parse_mode' => 'html'
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $response = curl_exec($ch);
            curl_close($ch);
        }
    }

    if ($_POST['action'] == 'nasos_result') {
        $res = $_POST['res'];
        $by_phone = $_POST['phone'];
        $orderID = $_POST['orderID'];
        $stmt = mysqli_prepare($connection, 'update nasos_process set nasos_result_timestamp=NOW(), nasos_result=?, nasos_mark=? where orderID=?');
        $stmt->bind_param('sss', $res, $by_phone, $orderID);
        $stmt->execute();
        $stmt->close();

        $nasosQ = mysqli_query($connection, 'select * from nasos_process where orderID="'.$orderID.'"');
        $nasosArr = mysqli_fetch_array($nasosQ);

        $engQ = mysqli_query($connection, 'select * from engineers where chat_id="'.$nasosArr['chat_id'].'"');
        $engArr = mysqli_fetch_array($engQ);

        $fromDate = date('Y-m').'-01 00:00:00';

        $valQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE()');
        $valArr = mysqli_fetch_array($valQ);
        $val = $valArr['s'];
        $avQ = mysqli_query($connection, 'select count(*) as c from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>="'.$fromDate.'" and timestamp <= CURDATE() and prodolzhenie="Нет" ');
        $avArr = mysqli_fetch_array($avQ);
        $avg = $avArr['c'];
        $val30Q = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and timestamp>=curdate() - interval 30 day and timestamp <= CURDATE()');
        $val30Arr = mysqli_fetch_array($val30Q);
        $val30 = $val30Arr['s'];
        if ($avg == 0) $avg = 1;
        $srednii_po_otchetam = round($val / $avg);

        $avg30Q = mysqli_query($connection, 'select count(*) as c from eng_reports where (eng_id="'.$engArr['id'].'") and prodolzhenie!="Да" and timestamp>=curdate() - interval 30 day and timestamp <= curdate()');
        $avg30Arr = mysqli_fetch_array($avg30Q);
        $avg30 = $avg30Arr['c'];
        $avg_for_mot = round($val30 / $avg30);

        $valDev = 0;
        $viezdCount = 0;
        $viezdArr = array();
        $uchetQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        $uchetArr = mysqli_fetch_array($uchetQ);
        $device = $uchetArr['amo_device'];
        $problem = $uchetArr['amo_problem'];
        $date = date('d.m', strtotime($uchetArr['amo_date']));
        $time = $uchetArr['amo_time'];
        if ($device == 'iPhone 5' || $device == 'iPhone 5c' || $device == 'iPhone SE' || $device == 'iPhone 5s' || $device == 'iPhone 6' || $device == 'iPhone 6 Plus' || $device == 'iPhone 6s' || $device == 'iPhone 6s Plus') {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 5%" or device like "%iphone 5c%" or device like "%iphone 5s%" or device like "%iphone se%" or device like "%iphone 6%" or device like "%iphone 6 plus%" or device like "%iphone 6s%" or device like "%iphone 6s plus%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 5%" or amo_device like "%iphone 5c%" or amo_device like "%iphone 5s%" or amo_device like "%iphone se%" or amo_device like "%iphone 6%" or amo_device like "%iphone 6 plus%" or amo_device like "%iphone 6s%" or amo_device like "%iphone 6s plus%") and (engineer="' . $engArr['short_name'] . '") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }
        if ($device == 'iPhone Xs Max' || $device == 'iPhone 7' || $device == 'iPhone 7 Plus' || $device == 'iPhone 8' || $device == 'iPhone 8 Plus' || $device == 'iPhone X' || $device == 'iPhone XR' || $device == 'iPhone Xs') {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%iphone 7%" or device like "%iphone 7 plus%" or device like "%iphone 8%" or device like "%iphone 8 plus%" or device like "%iphone x%" or device like "%iphone xr%" or device like "%iphone xs%" or device like "%iphone xs max%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%iphone 7%" or amo_device like "%iphone 7 plus%" or amo_device like "%iphone 8%" or amo_device like "%iphone 8 plus%" or amo_device like "%iphone x%" or amo_device like "%iphone xr%" or amo_device like "%iphone xs%" or amo_device like "%iphone xs max%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }
        if (strpos($device, 'iPad') !== false ) {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%ipad%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%ipad%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie!="Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }
        if (strpos($device, 'Mac') !== false) {
            $valDevQ = mysqli_query($connection, 'select sum(pribil) as s from eng_reports where eng_id="'.$engArr['id'].'" and (device like "%mac%") and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $valDevArr = mysqli_fetch_array($valDevQ);
            $valDev = $valDevArr['s'];
            $viezdQ = mysqli_query($connection, 'select * from uchet where (amo_device like "%mac%") and (engineer="'.$engArr['short_name'].'") and (prodolzhenie != "Да" or prodolzhenie is null) and timestamp >= curdate() - interval 30 day and timestamp <= curdate()');
            $viezdArr = mysqli_fetch_array($viezdQ);
            $viezdCount = mysqli_num_rows($viezdQ);
        }

        $motV = motivaciya_val($val30);
        $motS = motivaciya_srednii($avg_for_mot);
        $motiv = min($motV, $motS);

        $sebes_vidannih = 2353 * $viezdCount;
        $ZP = $motiv * $valDev;
        $chistaya = $valDev - $ZP - $sebes_vidannih;
        $sred_chistaya = round($chistaya / $viezdCount);

        $text .= ( ' <b>('.($sred_chistaya > 0 ? '+' : '').$sred_chistaya.' руб.)</b>').PHP_EOL.'<b>'.$device.'</b> / '.$problem.' / СВД: '.$srednii_po_otchetam.' руб.'.' / ФАКТ: '.(round($valDev / $viezdCount)).' руб. / '.$date.' '.$time;

        if (strpos($res, "явил") !== false) {
            $txt = '🗣⭕️ <b>СИ ' . $engArr['name'] . '</b> не явился на подготовку к заказу ' . $orderID . $text;
        } else {
            $txt_phone = "";
            if ($nasosArr['nasos_mark'] == "true") {
                $txt_phone = "по телефону ";
            }
            $txt = '🗣✅ <b>СИ ' . $engArr['name'] . '</b> прошел подготовку '.$txt_phone.'на <b>' . $res . '/5</b> к заказу ' . $orderID . $text;
        }

        $curQ = mysqli_query($connection, 'select * from curators');
        while ($curatorsArr = mysqli_fetch_array($curQ)) {
            $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $post = array(
                'chat_id' => $curatorsArr['chat_id'],
                //'chat_id' => 167998391,
                //'chat_id' => 230672596,
                'text' => $txt,
                'parse_mode' => 'html'
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $response = curl_exec($ch);
            curl_close($ch);
        }

        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == 'save_sobes_info') {
        $name = $_POST['name'];
        $sobes = $_POST['sobes'];
        $phone = $_POST['phone'];
        $pos = $_POST['pos'];

        $stmt = mysqli_prepare($connection, 'insert into soiskateli(timestamp, phone, name, pos, date_sobes) values(NOW(),?,?,?,?)');
        $stmt->bind_param('ssss', $phone, $name, $pos, $sobes);
        $stmt->execute();
        $stmt->close();
    }

    if ($_POST['action'] == 'call_sobes_client') {
        $param = array(
            'access_token' => 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
            'virtual_phone_number' => '78126047604',
            'contact' => $_POST['phone'],
            'first_call' => 'employee',
            'scenario_id' => 161888
        );

        $parameters = array(
            'id' => intval(rand(0,9999)),
            'jsonrpc' => '2.0',
            'method' => 'start.scenario_call',
            'params' => $param
        );

        $ch = curl_init('https://callapi.uiscom.ru/v4.0');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($parameters)
        ));


        $response = curl_exec($ch);
        // echo $response; // была эта строчка

        echo json_encode([ // это добавил я
            'result' => 'ok'
        ]);
    }

    if ($_POST['action'] == "kontrol_aleksei") {
        $engNumber = $_POST['phone'];
        $orderID = $_POST['orderID'];

        $stmt = mysqli_prepare($connection, 'insert into zvonki_kuratora_log(timestamp, orderID, eng) values(NOW(),?,?)');
        $stmt->bind_param('ss',$orderID, $engNumber);
        $stmt->execute();

        $lastInsertID = $stmt->insert_id;

        echo $lastInsertID;

        $param = array(
            'access_token' => 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
            'virtual_phone_number' => '78126046554',
            'contact' => $engNumber,
            'first_call' => 'employee',
            'scenario_id' => 159346
        );

        $parameters = array(
            'id' => intval(rand(0,9999)),
            'jsonrpc' => '2.0',
            'method' => 'start.scenario_call',
            'params' => $param
        );

        $ch = curl_init('https://callapi.uiscom.ru/v4.0');
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => array(
                'Authorization: '.'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS => json_encode($parameters)
        ));


        $response = curl_exec($ch);
        $uisAnswer = json_decode($response, true);
        $call_session_id = $uisAnswer['result']['data']['call_session_id'];
        
        $stmt = mysqli_prepare($connection, 'update zvonki_kuratora_log set uis_ans=?, call_session_id=? where id=?');
        $stmt->bind_param('sss', $response,$call_session_id, $lastInsertID);
        $stmt->execute();

        echo $response;
    }
    
    if ($_POST['action'] == "save_sobes_result") {
        $res = $_POST['sobes'];
        $phone = $_POST['phone'];
        $comment = $_POST['comment'];
        $stmt = mysqli_prepare($connection, 'update soiskateli set sobes_result=?, comment=? where phone=?');
        $stmt->bind_param('sss', $res, $comment, $phone);
        $stmt->execute();
        $stmt->close();

        $stmt = mysqli_prepare($connection, 'insert into soiskateli_sobes(timestamp,phone,result) values(NOW(),?,?)');
        $stmt->bind_param('ss', $phone, $res);
        $stmt->execute();
        $stmt->close();
        echo json_encode(array('result' => 'ok'));
    }

    if ($_POST['action'] == "save_obuch_pred_result") {
        $res = $_POST['sobes'];
        $phone = $_POST['phone'];
        $stmt = mysqli_prepare($connection, 'update soiskateli set obuchenie_pred_result=? where phone=?');
        $stmt->bind_param('ss', $res, $phone);
        $stmt->execute();
        $stmt->close();
        
        echo json_encode(array('result' => 'ok'));
    }


    if ($_POST['action'] == 'order_distribution') {
        $date = $_POST['date'];
        $bigIphoneQ = mysqli_query($connection, 'select * from statistika_iphone_big_30 where date=curdate()');
        $smallIphoneQ = mysqli_query($connection, 'select * from statistika_iphone_mal_30 where date=curdate()');
        $ipadQ = mysqli_query($connection, 'select * from statistika_ipad_30 where date=curdate()');
        $macQ = mysqli_query($connection, 'select * from statistika_mac_30 where date=curdate()');

        $bigIphone = array();
        while ($res = mysqli_fetch_array($bigIphoneQ)) {
            $bigIphone[$res['engineer']] = $res;
        }
        $smallIphone = array();
        while ($res = mysqli_fetch_array($smallIphoneQ)) {
            $smallIphone[$res['engineer']] = $res;
        }
        $ipad = array();
        while ($res = mysqli_fetch_array($ipadQ)) {
            $ipad[$res['engineer']] = $res;
        }
        $mac = array();
        while ($res = mysqli_fetch_array($macQ)) {
            $mac[$res['engineer']] = $res;
        }

        $idealSchedule = array();
        $maxSum = -99999;
        $sch = array();
        $onlineEngs = json_decode($_POST['engs'], true);
        foreach ($onlineEngs as $arr) {
            foreach ($arr as $name => $times) {
                foreach ($times as $t) {
                    $sch[$name][] = [strtotime(date('Y-m-d', strtotime($date)) . ' ' . str_replace('-', ':', $t) . ':00'), ''];
                }
                if (empty($times)) {
                    $sch[$name] = array();
                }
            }
        }

        function distribute($orders, $schedule, $sum) {
            if (!count($orders)) {
                return $sum;
            }
            $curOrder = $orders[0];
            $orderTime = $orders[0]['time'];
            global $date;
            $orderTimestamp = strtotime(date('Y-m-d', strtotime($date)).' '.str_replace('-',':', $orderTime).':00');
            global $smallIphone;
            global $bigIphone;
            global $ipad;
            global $mac;
            global $maxSum;
            global $idealSchedule;
            foreach ($schedule as $name => $times) {
                $newSchedule = $schedule;
                $newSum = $sum;
                $canInsert = true;
                for ($i = 0; $i < count($times); $i++) {
                    if (($orderTimestamp > $times[$i][0] - 60*60*2) && ($orderTimestamp < $times[$i][0] + 60*60*2)) {
                        $canInsert = false;
                        break;
                    }
                }
                if ($canInsert) {
                    $newSchedule[$name][] = [strtotime(date('Y-m-d', strtotime($date)) . ' ' . str_replace('-', ':', $orderTime) . ':00'), $curOrder['id']];
                    if ($curOrder['model'] == 'iPhone 5' || $curOrder['model'] == 'iPhone 5c' || $curOrder['model'] == 'iPhone SE' || $curOrder['model'] == 'iPhone 5s' || $curOrder['model'] == 'iPhone 6' || $curOrder['model'] == 'iPhone 6 Plus' || $curOrder['model'] == 'iPhone 6s' || $curOrder['model'] == 'iPhone 6s Plus') {
                        $newSum += $smallIphone[$name]['srednaya_chistaya'];
                    }
                    if ($curOrder['model'] == 'iPhone Xs Max' || $curOrder['model'] == 'iPhone 7' || $curOrder['model'] == 'iPhone 7 Plus' || $curOrder['model'] == 'iPhone 8' || $curOrder['model'] == 'iPhone 8 Plus' || $curOrder['model'] == 'iPhone X' || $curOrder['model'] == 'iPhone XR' || $curOrder['model'] == 'iPhone Xs') {
                        $newSum += $bigIphone[$name]['srednaya_chistaya'];
                    }
                    if (strpos($curOrder['model'], 'iPad') !== false) {
                        $newSum += $ipad[$name]['srednaya_chistaya'];
                    }
                    if (strpos($curOrder['model'], 'Mac') !== false) {
                        $newSum += $mac[$name]['srednaya_chistaya'];
                    }
                    $newOrders = array_slice($orders, 1);
                    $calcSum = distribute($newOrders, $newSchedule, $newSum);
                    if ($calcSum > $maxSum) {
                        $maxSum = $calcSum;
                        $idealSchedule = $newSchedule;
                    }
                }
            }
        }

        distribute($_POST['orders'], $sch, 0);
        $tmpResult = array();
        foreach ($idealSchedule as $name => $orders) {
            foreach ($orders as $orderArr) {
                if (isset($orderArr[1]) && !empty($orderArr[1])) {
                    $tmpResult[$orderArr[1]] = $name;
                }
            }
        }
        print_r($tmpResult);
    }

    if ($_POST['action'] == 'kontrol_kuratora_net_otveta') {
        $result = $_POST['result'];
        $comment = $_POST['comment'];
        $orderID = $_POST['orderID'];
        $eng = $_POST['eng'];
        $kur = $_POST['kur'];

        $stmt = mysqli_prepare($connection, 'insert into kontrol_kuratora(timestamp,kurator,orderID,eng,resultat_kontrolya,kurator_comment,next_time) values(NOW(), ?,?,?,?,?, NOW() + interval 15 minute)');
        $stmt->bind_param('sssss', $orderID, $kur, $eng, $result, $comment);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'kontrol_kuratora_vzyal_dengi') {
        $result = $_POST['result'];
        $comment = $_POST['comment'];
        $orderID = $_POST['orderID'];
        $eng = $_POST['eng'];
        $pribil = $_POST['pribil'];
        $nextTime = $_POST['next_time'];
        $kur = $_POST['kur'];

        $stmt = mysqli_prepare($connection, 'insert into kontrol_kuratora(timestamp, kurator, orderID, eng, resultat_kontrolya, kurator_comment, vzyal_dengi_pribil, next_time) values(NOW(),?,?,?,?,?,?,?)');
        $stmt->bind_param('sssssss', $orderID, $kur, $eng, $result, $comment, $pribil, $nextTime);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'kontrol_kuratora_uehal_bez_deneg') {
        $result = $_POST['result'];
        $comment = $_POST['comment'];
        $orderID = $_POST['orderID'];
        $eng = $_POST['eng'];
        $remont = $_POST['remont'];
        $ceni = $_POST['ceni'];
        $nextTime = $_POST['next_time'];
        $kur = $_POST['kur'];

        $stmt = mysqli_prepare($connection, 'insert into kontrol_kuratora(timestamp, kurator, orderID, eng, resultat_kontrolya, kurator_comment, uehal_bez_deneg_remont, uehal_bez_deneg_ceni, next_time) values(NOW(),?,?,?,?,?,?,?,?)');
        $stmt->bind_param('ssssssss', $orderID, $kur, $eng, $result, $comment, $remont, $ceni, $nextTime);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));

    }

    if ($_POST['action'] == 'set_flood_mode') {
        $site = $_POST['site'];
        if ($site == 'garage') {
            $auth = $_POST['auth'];
            $checkQ = mysqli_query($connection, 'select * from flood_logs where site="'.$site.'" and timestamp >= now() - interval 10 minute');
            if (mysqli_num_rows($checkQ)) {
                echo json_encode(array(
                    'result' => 'error',
                    'desc' => 'Номер менялся в течение 10 минут'
                ));
            } else {
                $checkQ = mysqli_query($connection, 'select * from garage_phones where active=0 and spam=0');
                if (!mysqli_num_rows($checkQ)) {
                    echo json_encode(array(
                        'result' => 'error',
                        'desc' => 'Не осталось свободных номеров. Срочно обратитесь к @str1t3r'
                    ));
                } else {
                    $curQ = mysqli_query($connection, 'select * from garage_phones where active=1');
                    $curArr = mysqli_fetch_array($curQ);
                    $curID = $curArr['id'];
                    $curPhone = $curArr['phone_full'];

                    $firstTryQ = mysqli_query($connection, 'select * from garage_phones where id>"'.$curID.'" and active=0 and spam=0 limit 0,1');
                    if (mysqli_num_rows($firstTryQ)) {
                        $stmt = mysqli_prepare($connection, 'update garage_phones set spam=1, active=0 where id=?');
                        $stmt->bind_param('s', $curID);
                        $r1 = $stmt->execute();
                        $stmt->close();
                        //  uis flajki pomenyat
                        uisChangeEmployeesAvailability($curArr['uis_group_id'], $curArr['uis_employee_phone_number_id_1'], false, $curArr['uis_employee_phone_number_id_2'], true);

                        $newArr = mysqli_fetch_array($firstTryQ);
                        $newID = $newArr['id'];
                        $stmt = mysqli_prepare($connection ,'update garage_phones set active=1, prev_active=? where id=?');
                        $stmt->bind_param('ss', $curID, $newID);
                        $r2 = $stmt->execute();
                        $stmt->close();

                        //uis
                        uisChangeEmployeesAvailability($newArr['uis_group_id'], $newArr['uis_employee_phone_number_id_1'], true, $newArr['uis_employee_phone_number_id_2'], false);

                        $stmt = mysqli_prepare($connection, 'insert into flood_logs(timestamp, auth, site, was_active_phone, new_active_phone) values(NOW(),?,?,?,?)');
                        $stmt->bind_param('ssss', $auth, $site, $curArr['phone_full'], $newArr['phone_full']);
                        $r3 = $stmt->execute();
                        $stmt->close();

                        if (true) {
                            echo json_encode(array(
                                'result' => 'ok',
                                'desc' => 'Номер изменен. Страница будет перезагружена через 5 секунд'
                            ));
                        } else {
                            echo json_encode(array(
                                'result' => 'error',
                                'desc' => 'Непредвиденная ошибка. Срочно обратитесь к @str1t3r'
                            ));
                        }
                    } else {
                        $secondTryQ = mysqli_query($connection, 'select * from garage_phones where id<"'.$curID.'" and active=0 and spam=0 limit 0,1');
                        if (mysqli_num_rows($secondTryQ)) {
                            $stmt = mysqli_prepare($connection, 'update garage_phones set spam=1, active=0 where id=?');
                            $stmt->bind_param('s', $curID);
                            $r1 = $stmt->execute();
                            $stmt->close();
                            //  uis flajki pomenyat
                            uisChangeEmployeesAvailability($curArr['uis_group_id'], $curArr['uis_employee_phone_number_id_1'], false, $curArr['uis_employee_phone_number_id_2'], true);

                            $newArr = mysqli_fetch_array($firstTryQ);
                            $newID = $newArr['id'];
                            $stmt = mysqli_prepare($connection ,'update garage_phones set active=1, prev_active=? where id=?');
                            $stmt->bind_param('ss', $curID, $newID);
                            $r2 = $stmt->execute();
                            $stmt->close();

                            //uis
                        uisChangeEmployeesAvailability($newArr['uis_group_id'], $newArr['uis_employee_phone_number_id_1'], true, $newArr['uis_employee_phone_number_id_2'], false);

                            $stmt = mysqli_prepare($connection, 'insert into flood_logs(timestamp, auth, site, was_active_phone, new_active_phone) values(NOW(),?,?,?,?)');
                            $stmt->bind_param('ssss', $auth, $site, $curArr['phone_full'], $newArr['phone_full']);
                            $r3 = $stmt->execute();
                            $stmt->close();

                            if ($r1 && $r2 && $r3) {
                                echo json_encode(array(
                                    'result' => 'ok',
                                    'desc' => 'Номер изменен. Страница будет перезагружена через 5 секунд'
                                ));
                            } else {
                                echo json_encode(array(
                                    'result' => 'error',
                                    'desc' => 'Непредвиденная ошибка. Срочно обратитесь к @str1t3r'
                                ));
                            }
                        } else {
                            echo json_encode(array(
                                'result' => 'error',
                                'desc' => 'Непредвиденная ошибка. Срочно обратитесь к @str1t3r'
                            ));
                        }
                    }
                }
            }

        }

        if ($site == 'ca') {
            $auth = $_POST['auth'];
            $checkQ = mysqli_query($connection, 'select * from flood_logs where site="'.$site.'" and timestamp >= now() - interval 10 minute');
            if (mysqli_num_rows($checkQ)) {
                echo json_encode(array(
                    'result' => 'error',
                    'desc' => 'Номер менялся в течение 10 минут'
                ));
            } else {
                $checkQ = mysqli_query($connection, 'select * from ca_phones where active=0 and spam=0');
                if (!mysqli_num_rows($checkQ)) {
                    echo json_encode(array(
                        'result' => 'error',
                        'desc' => 'Не осталось свободных номеров. Срочно обратитесь к @str1t3r'
                    ));
                } else {
                    $curQ = mysqli_query($connection, 'select * from ca_phones where active=1');
                    $curArr = mysqli_fetch_array($curQ);
                    $curID = $curArr['id'];
                    $curPhone = $curArr['phone_full'];

                    $firstTryQ = mysqli_query($connection, 'select * from ca_phones where id>"'.$curID.'" and active=0 and spam=0 limit 0,1');
                    if (mysqli_num_rows($firstTryQ)) {
                        $stmt = mysqli_prepare($connection, 'update ca_phones set spam=1, active=0 where id=?');
                        $stmt->bind_param('s', $curID);
                        //$r1 = $stmt->execute();
                        $stmt->close();
                        //  uis flajki pomenyat

                        uisChangeEmployeesAvailability($curArr['uis_group_id'], $curArr['uis_employee_phone_number_id_1'], false, $curArr['uis_employee_phone_number_id_2'], true);

                        $newArr = mysqli_fetch_array($firstTryQ);
                        $newID = $newArr['id'];
                        $stmt = mysqli_prepare($connection ,'update ca_phones set active=1, prev_active=? where id=?');
                        $stmt->bind_param('ss', $curID, $newID);
                        //$r2 = $stmt->execute();
                        $stmt->close();

                        //uis
                        uisChangeEmployeesAvailability($newArr['uis_group_id'], $newArr['uis_employee_phone_number_id_1'], true, $newArr['uis_employee_phone_number_id_2'], false);

                        $stmt = mysqli_prepare($connection, 'insert into flood_logs(timestamp, auth, site, was_active_phone, new_active_phone) values(NOW(),?,?,?,?)');
                        $stmt->bind_param('ssss', $auth, $site, $curArr['phone_full'], $newArr['phone_full']);
                        //$r3 = $stmt->execute();
                        $stmt->close();

                        if (true) {
                            echo json_encode(array(
                                'result' => 'ok',
                                'desc' => 'Номер изменен. Страница будет перезагружена через 5 секунд'
                            ));
                        } else {
                            echo json_encode(array(
                                'result' => 'error',
                                'desc' => 'Непредвиденная ошибка. Срочно обратитесь к @str1t3r'
                            ));
                        }
                    } else {
                        $secondTryQ = mysqli_query($connection, 'select * from ca_phones where id<"'.$curID.'" and active=0 and spam=0 limit 0,1');
                        if (mysqli_num_rows($secondTryQ)) {
                            $stmt = mysqli_prepare($connection, 'update ca_phones set spam=1, active=0 where id=?');
                            $stmt->bind_param('s', $curID);
                            $r1 = $stmt->execute();
                            $stmt->close();
                            //  uis flajki pomenyat
                            uisChangeEmployeesAvailability($curArr['uis_group_id'], $curArr['uis_employee_phone_number_id_1'], false, $curArr['uis_employee_phone_number_id_2'], true);

                            $newArr = mysqli_fetch_array($firstTryQ);
                            $newID = $newArr['id'];
                            $stmt = mysqli_prepare($connection ,'update ca_phones set active=1, prev_active=? where id=?');
                            $stmt->bind_param('ss', $curID, $newID);
                            $r2 = $stmt->execute();
                            $stmt->close();

                            //uis
                            uisChangeEmployeesAvailability($newArr['uis_group_id'], $newArr['uis_employee_phone_number_id_1'], true, $newArr['uis_employee_phone_number_id_2'], false);

                            $stmt = mysqli_prepare($connection, 'insert into flood_logs(timestamp, auth, site, was_active_phone, new_active_phone) values(NOW(),?,?,?,?)');
                            $stmt->bind_param('ssss', $auth, $site, $curArr['phone_full'], $newArr['phone_full']);
                            $r3 = $stmt->execute();
                            $stmt->close();

                            if ($r1 && $r2 && $r3) {
                                echo json_encode(array(
                                    'result' => 'ok',
                                    'desc' => 'Номер изменен. Страница будет перезагружена через 5 секунд'
                                ));
                            } else {
                                echo json_encode(array(
                                    'result' => 'error',
                                    'desc' => 'Непредвиденная ошибка. Срочно обратитесь к @str1t3r'
                                ));
                            }
                        } else {
                            echo json_encode(array(
                                'result' => 'error',
                                'desc' => 'Непредвиденная ошибка. Срочно обратитесь к @str1t3r'
                            ));
                        }
                    }
                }
            }

        }
    }

    if ($_POST['action'] == 'stop_flood_mode') {
        $site = $_POST['site'];
        $auth = $_POST['auth'];
        $phone = $_POST['phone'];

        if ($site == "garage") {
            $phoneQ = mysqli_query($connection, 'select * from garage_phones where phone_full="'.$phone.'"');
            $phoneArr = mysqli_fetch_array($phoneQ);
            uisChangeEmployeesAvailability($phoneArr['uis_group_id'], $phoneArr['uis_employee_phone_number_id_1'], true, $phoneArr['uis_employee_phone_number_id_2'], false);

            $stmt = mysqli_prepare($connection, 'update garage_phones set spam=0 where id=?');
            $stmt->bind_param('s', $phoneArr['id']);
            $r1 = $stmt->execute();
            $stmt->close();

            $new_active_phone = "Stop flood-mode";
            $stmt = mysqli_prepare($connection, 'insert into flood_logs(timestamp, auth, site, was_active_phone, new_active_phone) values(NOW(), ?,?,?,?)');
            $stmt->bind_param('ssss', $auth, $site, $phoneArr['phone_full'], $new_active_phone);
            $r2 = $stmt->execute();
            $stmt->close();

            if ($r1 && $r2) {
                echo json_encode(array(
                   'result' => 'ok',
                   'desc' => 'Успешно выполнено. Страница перезагрузится через 5 секунд.'
                ));
            } else {
                echo json_encode(array(
                   'result' => 'error',
                   'desc' => 'Произошла непредвиденная ошибка. Обратитесь к @str1t3r'
                ));
            }
        }

        if ($site == "ca") {
            $phoneQ = mysqli_query($connection, 'select * from ca_phones where phone_full="'.$phone.'"');
            $phoneArr = mysqli_fetch_array($phoneQ);
            uisChangeEmployeesAvailability($phoneArr['uis_group_id'], $phoneArr['uis_employee_phone_number_id_1'], true, $phoneArr['uis_employee_phone_number_id_2'], false);

            $stmt = mysqli_prepare($connection, 'update ca_phones set spam=0 where id=?');
            $stmt->bind_param('s', $phoneArr['id']);
            $r1 = $stmt->execute();
            $stmt->close();

            $new_active_phone = "Stop flood-mode";
            $stmt = mysqli_prepare($connection, 'insert into flood_logs(timestamp, auth, site, was_active_phone, new_active_phone) values(NOW(), ?,?,?,?)');
            $stmt->bind_param('ssss', $auth, $site, $phoneArr['phone_full'], $new_active_phone);
            $r2 = $stmt->execute();
            $stmt->close();

            if ($r1 && $r2) {
                echo json_encode(array(
                    'result' => 'ok',
                    'desc' => 'Успешно выполнено. Страница перезагрузится через 5 секунд.'
                ));
            } else {
                echo json_encode(array(
                    'result' => 'error',
                    'desc' => 'Произошла непредвиденная ошибка. Обратитесь к @str1t3r'
                ));
            }
        }
    }


    if ($_POST['action'] == 'edit_eng_report') {
        $auth = $_POST['auth'];
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $canEdit = $authArr['can_edit_eng_report'];
            $id = $_POST['id'];
            if ($canEdit == 2) {
                $repQ = mysqli_query($connection, 'select * from eng_reports where id="'.$id.'"');
                if (mysqli_num_rows($repQ)) {
                    $repArr = mysqli_fetch_array($repQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newPhotoDogovora = $_POST['photo_dogovora'];
                    $newNomerDogovora = $_POST['nomer_dogovora'];
                    $newPhone = $_POST['phone'];
                    $newName = $_POST['name'];
                    $newDevice = $_POST['device'];
                    $newTotalSum = $_POST['total_sum'];
                    $newZapchasti = $_POST['zapchasti'];
                    $newPribil = $_POST['pribil'];
                    $newProdolzhenie = $_POST['prodolzhenie'];
                    $newOrderID = $_POST['orderID'];

                    $oldTimestamp = $repArr['timestamp'];
                    $oldPhotoDogovora = $repArr['photo_dogovora'];
                    $oldNomerDogovora = $repArr['nomer_dogovora'];
                    $oldPhone = $repArr['phone'];
                    $oldName = $repArr['name'];
                    $oldDevice = $repArr['device'];
                    $oldTotalSum = $repArr['total_sum'];
                    $oldZapchasti = $repArr['zapchasti'];
                    $oldPribil = $repArr['pribil'];
                    $oldProdolzhenie = $repArr['prodolzhenie'];
                    $oldOrderID = $repArr['orderID'];
                    $whoAccepted = $auth;
                    $accepted = 1;

                    $stmt = mysqli_prepare($connection, 'insert into eng_reports_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_photo_dogovora, old_nomer_dogovora, old_phone, old_name, old_device, old_total_sum, old_zapchasti, old_pribil, old_prodolzhenie, old_orderID, new_timestamp, new_photo_dogovora, new_nomer_dogovora, new_phone, new_name, new_device, new_total_sum, new_zapchasti, new_pribil, new_prodolzhenie, new_orderID) values(NOW(), ?,?,?,?,NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('ssisssssssssssssssssssssss', $id, $auth, $accepted, $whoAccepted, $oldTimestamp, $oldPhotoDogovora, $oldNomerDogovora, $oldPhone, $oldName, $oldDevice, $oldTotalSum, $oldZapchasti, $oldPribil, $oldProdolzhenie, $oldOrderID, $newTimestamp, $newPhotoDogovora, $newNomerDogovora, $newPhone, $newName, $newDevice, $newTotalSum, $newZapchasti, $newPribil, $newProdolzhenie, $newOrderID);
                    $stmt->execute();
                    $stmt->close();

                    $stmt = mysqli_prepare($connection, 'update eng_reports set timestamp=?, photo_dogovora=?, nomer_dogovora=?, phone=?, name=?, device=?, total_sum=?, zapchasti=?, pribil=?, prodolzhenie=?, orderID=? where id=?');
                    $stmt->bind_param('ssssssssssss', $newTimestamp, $newPhotoDogovora, $newNomerDogovora, $newPhone, $newName, $newDevice, $newTotalSum, $newZapchasti, $newPribil, $newProdolzhenie, $newOrderID, $id);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                        'result' => 'ok',
                        'text' => 'Отчет успешно изменен'
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            } else {
                $repQ = mysqli_query($connection, 'select * from eng_reports where id="'.$id.'"');
                if (mysqli_num_rows($repQ)) {
                    $repArr = mysqli_fetch_array($repQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newPhotoDogovora = $_POST['photo_dogovora'];
                    $newNomerDogovora = $_POST['nomer_dogovora'];
                    $newPhone = $_POST['phone'];
                    $newName = $_POST['name'];
                    $newDevice = $_POST['device'];
                    $newTotalSum = $_POST['total_sum'];
                    $newZapchasti = $_POST['zapchasti'];
                    $newPribil = $_POST['pribil'];
                    $newProdolzhenie = $_POST['prodolzhenie'];
                    $newOrderID = $_POST['orderID'];

                    $oldTimestamp = $repArr['timestamp'];
                    $oldPhotoDogovora = $repArr['photo_dogovora'];
                    $oldNomerDogovora = $repArr['nomer_dogovora'];
                    $oldPhone = $repArr['phone'];
                    $oldName = $repArr['name'];
                    $oldDevice = $repArr['device'];
                    $oldTotalSum = $repArr['total_sum'];
                    $oldZapchasti = $repArr['zapchasti'];
                    $oldPribil = $repArr['pribil'];
                    $oldProdolzhenie = $repArr['prodolzhenie'];
                    $oldOrderID = $repArr['orderID'];
                    $whoAccepted = "";
                    $accepted = 0;
                    $whenAccepted = "0000-00-00 00:00:00";

                    $stmt = mysqli_prepare($connection, 'insert into eng_reports_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_photo_dogovora, old_nomer_dogovora, old_phone, old_name, old_device, old_total_sum, old_zapchasti, old_pribil, old_prodolzhenie, old_orderID, new_timestamp, new_photo_dogovora, new_nomer_dogovora, new_phone, new_name, new_device, new_total_sum, new_zapchasti, new_pribil, new_prodolzhenie, new_orderID) values(NOW(), ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('ssissssssssssssssssssssssss', $id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldPhotoDogovora, $oldNomerDogovora, $oldPhone, $oldName, $oldDevice, $oldTotalSum, $oldZapchasti, $oldPribil, $oldProdolzhenie, $oldOrderID, $newTimestamp, $newPhotoDogovora, $newNomerDogovora, $newPhone, $newName, $newDevice, $newTotalSum, $newZapchasti, $newPribil, $newProdolzhenie, $newOrderID);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                       'result' => 'ok',
                       'text' => 'Запрос на изменение отчета отправлен'
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            }

        } else {
            echo json_encode(array(
                'error' => 'Вы не авторизованы'
            ));
        }
    }

    if ($_POST['action'] == 'delete_eng_report_request') {
        $auth = $_POST['auth'];
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $id = $_POST['id'];
            $repQ = mysqli_query($connection, 'select * from eng_reports where id="' . $id . '"');
            if (mysqli_num_rows($repQ)) {
                $repArr = mysqli_fetch_array($repQ);

                $oldTimestamp = $repArr['timestamp'];
                $oldPhotoDogovora = $repArr['photo_dogovora'];
                $oldNomerDogovora = $repArr['nomer_dogovora'];
                $oldPhone = $repArr['phone'];
                $oldName = $repArr['name'];
                $oldDevice = $repArr['device'];
                $oldTotalSum = $repArr['total_sum'];
                $oldZapchasti = $repArr['zapchasti'];
                $oldPribil = $repArr['pribil'];
                $oldProdolzhenie = $repArr['prodolzhenie'];
                $oldOrderID = $repArr['orderID'];
                $whoAccepted = "";
                $accepted = 0;
                $whenAccepted = "0000-00-00 00:00:00";
                $deleted = 1;

                $stmt = mysqli_prepare($connection, 'insert into eng_reports_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_photo_dogovora, old_nomer_dogovora, old_phone, old_name, old_device, old_total_sum, old_zapchasti, old_pribil, old_prodolzhenie, old_orderID, deleted) values(NOW(), ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bind_param('ssisssssssssssssi', $id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldPhotoDogovora, $oldNomerDogovora, $oldPhone, $oldName, $oldDevice, $oldTotalSum, $oldZapchasti, $oldPribil, $oldProdolzhenie, $oldOrderID, $deleted);
                $stmt->execute();
                print_r($stmt->error);
                $stmt->close();

                echo json_encode(array(
                    'result' => 'ok',
                    'text' => 'Запрос на удаление отчета отправлен'
                ));
            } else {
                echo json_encode(array(
                    'error' => 'Неизвестная ошибка'
                ));
            }
        }
    }

    if ($_POST['action'] == 'delete_ot_request') {
        $auth = $_POST['auth'];
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        $now = date("Y-m-d H:i:s");
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $id = $_POST['id'];
            $repQ = mysqli_query($connection, 'select * from operativnie_trati where id="' . $id . '"');
            if (mysqli_num_rows($repQ)) {
                $repArr = mysqli_fetch_array($repQ);
                $oldTimestamp = $repArr['timestamp'];
                $oldTip = $repArr['tip'];
                $oldSumma = $repArr['summa'];
                $oldEng = $repArr['eng'];
                $oldDescription = $repArr['description'];
                $oldOrderID = $repArr['orderID'];
                $oldResponsible = $repArr['responsible'];
                $whoAccepted = "";
                $accepted = 0;
                $whenAccepted = "0000-00-00 00:00:00";
                $deleted = 1;

                $stmt = mysqli_prepare($connection, 'insert into operativnie_trati_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_tip, old_summa, old_eng, old_description, old_orderID, old_responsible, new_timestamp, new_tip, new_summa, new_eng, new_description, new_orderID, new_responsible, deleted) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bind_param('sssissssssssssssssssi', $now, $id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldTip, $oldSumma, $oldEng, $oldDescription, $oldOrderID, $oldResponsible, $oldTimestamp, $oldTip, $oldSumma, $oldEng, $oldDescription, $oldOrderID, $oldResponsible, $deleted);
                $stmt->execute();
                print_r($stmt->error);
                $stmt->close();

                echo json_encode(array(
                    'result' => 'ok',
                    'text' => 'Запрос на удаление оперативной траты отправлен'
                ));
            } else {
                echo json_encode(array(
                    'error' => 'Неизвестная ошибка'
                ));
            }
        }
    }

    if ($_POST['action'] == 'delete_rashodi_request') {
        $auth = $_POST['auth'];
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        $now = date("Y-m-d H:i:s");
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $id = $_POST['id'];
            $repQ = mysqli_query($connection, 'select * from rashodi where id="' . $id . '"');
            if (mysqli_num_rows($repQ)) {
                $repArr = mysqli_fetch_array($repQ);
                $oldTimestamp = $repArr['timestamp'];
                $oldSumma = $repArr['summa'];
                $oldDescription = $repArr['description'];
                $oldResponsible = $repArr['responsible'];
                $whoAccepted = "";
                $accepted = 0;
                $whenAccepted = "0000-00-00 00:00:00";
                $deleted = 1;

                $stmt = mysqli_prepare($connection, 'insert into rashodi_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_description, old_responsible, new_timestamp, new_summa, new_description, new_responsible, deleted) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bind_param('sssissssssssssi', $now, $id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldSumma, $oldDescription, $oldResponsible, $oldTimestamp, $oldSumma, $oldDescription, $oldResponsible, $deleted);
                $stmt->execute();
                print_r($stmt->error);
                $stmt->close();

                echo json_encode(array(
                    'result' => 'ok',
                    'text' => 'Запрос на удаление расхода отправлен'
                ));
            } else {
                echo json_encode(array(
                    'error' => 'Неизвестная ошибка'
                ));
            }
        }
    }

    if ($_POST['action'] == 'delete_dannie_kassi_request') {
        $auth = $_POST['auth'];
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        $now = date("Y-m-d H:i:s");
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $id = $_POST['id'];
            $repQ = mysqli_query($connection, 'select * from dannie_kassi where id="' . $id . '"');
            if (mysqli_num_rows($repQ)) {
                $repArr = mysqli_fetch_array($repQ);
                $oldTimestamp = $repArr['timestamp'];
                $oldSumma = $repArr['summa'];
                $oldVremya = $repArr['vremya'];
                $oldResponsible = $repArr['responsible'];
                $whoAccepted = "";
                $accepted = 0;
                $whenAccepted = "0000-00-00 00:00:00";
                $deleted = 1;

                $stmt = mysqli_prepare($connection, 'insert into dannie_kassi_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_vremya, old_responsible, new_timestamp, new_summa, new_vremya, new_responsible, deleted) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bind_param('sssissssssssssi', $now, $id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldSumma, $oldVremya, $oldResponsible, $oldTimestamp, $oldSumma, $oldVremya, $oldResponsible, $deleted);
                $stmt->execute();
                print_r($stmt->error);
                $stmt->close();

                echo json_encode(array(
                    'result' => 'ok',
                    'text' => 'Запрос на удаление данных кассы отправлен'
                ));
            } else {
                echo json_encode(array(
                    'error' => 'Неизвестная ошибка'
                ));
            }
        }
    }

    if ($_POST['action'] == 'delete_cash_register_request') {
        $auth = $_POST['auth'];
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        $now = date("Y-m-d H:i:s");
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $id = $_POST['id'];
            $repQ = mysqli_query($connection, 'select * from cash_register where id="' . $id . '"');
            if (mysqli_num_rows($repQ)) {
                $repArr = mysqli_fetch_array($repQ);
                $oldTimestamp = $repArr['timestamp'];
                $oldSumma = $repArr['sum'];
                $oldEng = $repArr['eng'];
                $oldOrderID = $repArr['orderID'];
                $whoAccepted = "";
                $accepted = 0;
                $whenAccepted = "0000-00-00 00:00:00";
                $deleted = 1;

                $stmt = mysqli_prepare($connection, 'insert into cash_register_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_orderID, old_eng, new_timestamp, new_summa, new_orderID, new_eng, deleted) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bind_param('sssissssssssssi', $now, $id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldSumma, $oldOrderID, $oldEng, $oldTimestamp, $oldSumma, $oldOrderID, $oldEng, $deleted);
                $stmt->execute();
                print_r($stmt->error);
                $stmt->close();

                echo json_encode(array(
                    'result' => 'ok',
                    'text' => 'Запрос на удаление принятых денег отправлен'
                ));
            } else {
                echo json_encode(array(
                    'error' => 'Неизвестная ошибка'
                ));
            }
        }
    }

    if ($_POST['action'] == 'decline_eng_report_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];

        $stmt = mysqli_prepare($connection, 'update eng_reports_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=NOW() where id=?');
        $stmt->bind_param('ss', $auth, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
           'result' => 'ok'
        ));
    }


    if ($_POST['action'] == 'accept_eng_report_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];

        $stmt = mysqli_prepare($connection, 'update eng_reports_change_requests set accepted=1,who_accepted=?, accepted_timestamp=NOW() where id=?');
        $stmt->bind_param('ss', $auth, $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from eng_reports_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'update eng_reports set timestamp=?, photo_dogovora=?, nomer_dogovora=?, phone=?, name=?, device=?, total_sum=?, zapchasti=?, pribil=?, prodolzhenie=?, orderID=? where id=?');
        $stmt->bind_param('ssssssssssss', $reqArr['new_timestamp'], $reqArr['new_photo_dogovora'], $reqArr['new_nomer_dogovora'], $reqArr['new_phone'], $reqArr['new_name'], $reqArr['new_device'], $reqArr['new_total_sum'], $reqArr['new_zapchasti'], $reqArr['new_pribil'], $reqArr['new_prodolzhenie'], $reqArr['new_orderID'], $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_eng_report_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];

        $stmt = mysqli_prepare($connection, 'update eng_reports_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=NOW() where id=?');
        $stmt->bind_param('ss', $auth, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_ot_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update operativnie_trati_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_cash_register_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update cash_register_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_rashodi_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update rashodi_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_dannie_kassi_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update dannie_kassi_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'accept_eng_report_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];

        $stmt = mysqli_prepare($connection, 'update eng_reports_change_requests set accepted=1,who_accepted=?, accepted_timestamp=NOW() where id=?');
        $stmt->bind_param('ss', $auth, $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from eng_reports_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'delete from eng_reports where id=?');
        $stmt->bind_param('s', $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'accept_ot_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update operativnie_trati_change_requests set accepted=1,who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now,  $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from operativnie_trati_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'delete from operativnie_trati where id=?');
        $stmt->bind_param('s', $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'accept_cash_register_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update cash_register_change_requests set accepted=1,who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now,  $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from cash_register_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'delete from cash_register where id=?');
        $stmt->bind_param('s', $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'accept_rashodi_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update rashodi_change_requests set accepted=1,who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now,  $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from rashodi_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'delete from rashodi where id=?');
        $stmt->bind_param('s', $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'accept_dannie_kassi_delete_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update dannie_kassi_change_requests set accepted=1,who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now,  $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from dannie_kassi_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'delete from dannie_kassi where id=?');
        $stmt->bind_param('s', $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }


    if ($_POST['action'] == 'edit_ot') {
        $auth = $_POST['auth'];
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $canEdit = $authArr['can_edit_ot'];
            $id = $_POST['id'];
            if ($canEdit == 2) {
                $otQ = mysqli_query($connection, 'select * from operativnie_trati where id="'.$id.'"');
                if (mysqli_num_rows($otQ)) {
                    $otArr = mysqli_fetch_array($otQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newTip = $_POST['tip'];
                    $newSumma = $_POST['summa'];
                    $newEng = $_POST['eng'];
                    $newDesc = $_POST['description'];
                    $newOrderID = $_POST['orderID'];
                    $newResponsible = $_POST['responsible'];

                    $oldTimestamp = $otArr['timestamp'];
                    $oldTip = $otArr['tip'];
                    $oldSumma = $otArr['summa'];
                    $oldEng = $otArr['eng'];
                    $oldDesc = $otArr['description'];
                    $oldOrderID = $otArr['orderID'];
                    $oldResponsible = $otArr['responsible'];

                    $whoAccepted = $auth;
                    $accepted = 1;

                    $stmt = mysqli_prepare($connection, 'insert into operativnie_trati_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_tip, old_summa, old_eng, old_description, old_orderID, old_responsible, new_timestamp, new_tip, new_summa, new_eng, new_description, new_orderID, new_responsible) values(NOW(), ?,?,?,?,NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('ssisssssssssssssss', $id, $whoAccepted, $accepted, $whoAccepted, $oldTimestamp, $oldTip, $oldSumma, $oldEng, $oldDesc, $oldOrderID, $oldResponsible, $newTimestamp, $newTip, $newSumma, $newEng, $newDesc, $newOrderID, $newResponsible);
                    $stmt->execute();
                    $stmt->close();

                    $stmt = mysqli_prepare($connection, 'update operativnie_trati set timestamp=?, tip=?, summa=?, eng=?, description=?, orderID=?, responsible=? where id=?');
                    $stmt->bind_param('ssssssss', $newTimestamp, $newTip, $newSumma, $newEng, $newDesc, $newOrderID, $newResponsible, $id);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                        'result' => 'ok',
                        'text' => 'Оперативная трата успешно изменена',
                        'timestamp' => $_POST['timestamp'],
                        'newTimestamp' => $newTimestamp
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            } else {
                $otQ = mysqli_query($connection, 'select * from operativnie_trati where id="'.$id.'"');
                if (mysqli_num_rows($otQ)) {
                    $otArr = mysqli_fetch_array($otQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newTip = $_POST['tip'];
                    $newSumma = $_POST['summa'];
                    $newEng = $_POST['eng'];
                    $newDesc = $_POST['description'];
                    $newOrderID = $_POST['orderID'];
                    $newResponsible = $_POST['responsible'];

                    $oldTimestamp = $otArr['timestamp'];
                    $oldTip = $otArr['tip'];
                    $oldSumma = $otArr['summa'];
                    $oldEng = $otArr['eng'];
                    $oldDesc = $otArr['description'];
                    $oldOrderID = $otArr['orderID'];
                    $oldResponsible = $otArr['responsible'];

                    $whoAccepted = "";
                    $accepted = 0;
                    $whenAccepted = "0000-00-00 00:00:00";

                    $stmt = mysqli_prepare($connection, 'insert into operativnie_trati_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_tip, old_summa, old_eng, old_description, old_orderID, old_responsible, new_timestamp, new_tip, new_summa, new_eng, new_description, new_orderID, new_responsible) values(NOW(), ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('ssissssssssssssssss', $id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldTip, $oldSumma, $oldEng, $oldDesc, $oldOrderID, $oldResponsible, $newTimestamp, $newTip, $newSumma, $newEng, $newDesc, $newOrderID, $newResponsible);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                        'result' => 'ok',
                        'text' => 'Запрос на изменение оперативной траты отправлен',
                        'timestamp' => $_POST['timestamp'],
                        'newTimestamp' => $newTimestamp
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            }

        } else {
            echo json_encode(array(
                'error' => 'Вы не авторизованы'
            ));
        }
    }

    if ($_POST['action'] == 'edit_cash_register') {
        $auth = $_POST['auth'];
        $now = date('Y-m-d H:i:s');
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $canEdit = $authArr['can_edit_priem_deneg_ot_si'];
            $id = $_POST['id'];
            if ($canEdit == 2) {
                $otQ = mysqli_query($connection, 'select * from cash_register where id="'.$id.'"');
                if (mysqli_num_rows($otQ)) {
                    $otArr = mysqli_fetch_array($otQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newSum = $_POST['sum'];
                    $newEng = $_POST['eng'];
                    $newOrderID = $_POST['orderID'];

                    $oldTimestamp = $otArr['timestamp'];
                    $oldSum = $otArr['sum'];
                    $oldEng = $otArr['eng'];
                    $oldOrderID = $otArr['orderID'];;

                    $whoAccepted = $auth;
                    $accepted = 1;

                    $stmt = mysqli_prepare($connection, 'insert into cash_register_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_eng, old_orderID, new_timestamp, new_summa, new_eng, new_orderID) values(?, ?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('sssissssssssss', $now,$id, $whoAccepted, $accepted, $whoAccepted, $now, $oldTimestamp, $oldSum, $oldEng, $oldOrderID, $newTimestamp, $newSum, $newEng, $newOrderID);
                    $stmt->execute();
                    $stmt->close();

                    $stmt = mysqli_prepare($connection, 'update cash_register set timestamp=?, sum=?, eng=?, orderID=? where id=?');
                    $stmt->bind_param('sssss', $newTimestamp,  $newSum, $newEng, $newOrderID, $id);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                        'result' => 'ok',
                        'text' => 'Принятые деньги успешно изменены',
                        'timestamp' => $_POST['timestamp'],
                        'newTimestamp' => $newTimestamp
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            } else {
                $otQ = mysqli_query($connection, 'select * from cash_register where id="'.$id.'"');
                if (mysqli_num_rows($otQ)) {
                    $otArr = mysqli_fetch_array($otQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newSum = $_POST['sum'];
                    $newEng = $_POST['eng'];
                    $newOrderID = $_POST['orderID'];

                    $oldTimestamp = $otArr['timestamp'];
                    $oldSum = $otArr['sum'];
                    $oldEng = $otArr['eng'];
                    $oldOrderID = $otArr['orderID'];

                    $whoAccepted = "";
                    $accepted = 0;
                    $whenAccepted = "0000-00-00 00:00:00";

                    $stmt = mysqli_prepare($connection, 'insert into cash_register_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_eng, old_orderID, new_timestamp, new_summa, new_eng, new_orderID) values(?, ?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('sssissssssssss', $now,$id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldSum, $oldEng, $oldOrderID, $newTimestamp, $newSum, $newEng, $newOrderID);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                        'result' => 'ok',
                        'text' => 'Запрос на изменение принятых денег отправлен',
                        'timestamp' => $_POST['timestamp'],
                        'newTimestamp' => $newTimestamp
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            }

        } else {
            echo json_encode(array(
                'error' => 'Вы не авторизованы'
            ));
        }
    }

    if ($_POST['action'] == 'edit_rashodi') {
        $auth = $_POST['auth'];
        $now = date('Y-m-d H:i:s');
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $canEdit = $authArr['can_edit_rashodi'];
            $id = $_POST['id'];
            if ($canEdit == 2) {
                $otQ = mysqli_query($connection, 'select * from rashodi where id="'.$id.'"');
                if (mysqli_num_rows($otQ)) {
                    $otArr = mysqli_fetch_array($otQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newSumma = $_POST['summa'];
                    $newDesc = $_POST['description'];
                    $newResponsible = $_POST['responsible'];

                    $oldTimestamp = $otArr['timestamp'];
                    $oldSumma = $otArr['summa'];
                    $oldDesc = $otArr['description'];
                    $oldResponsible = $otArr['responsible'];

                    $whoAccepted = $auth;
                    $accepted = 1;

                    $stmt = mysqli_prepare($connection, 'insert into rashodi_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_description, old_responsible, new_timestamp, new_summa, new_description, new_responsible) values(?, ?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('sssissssssssss', $now, $id, $whoAccepted, $accepted, $whoAccepted, $now, $oldTimestamp, $oldSumma, $oldDesc, $oldResponsible, $newTimestamp, $newSumma, $newDesc, $newResponsible);
                    $stmt->execute();
                    $stmt->close();

                    $stmt = mysqli_prepare($connection, 'update rashodi set timestamp=?, summa=?, description=?, responsible=? where id=?');
                    $stmt->bind_param('sssss', $newTimestamp, $newSumma, $newDesc, $newResponsible, $id);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                        'result' => 'ok',
                        'text' => 'Расход успешно изменен',
                        'timestamp' => $_POST['timestamp'],
                        'newTimestamp' => $newTimestamp
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            } else {
                $otQ = mysqli_query($connection, 'select * from rashodi where id="'.$id.'"');
                if (mysqli_num_rows($otQ)) {
                    $otArr = mysqli_fetch_array($otQ);
                    $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                    $newSumma = $_POST['summa'];
                    $newDesc = $_POST['description'];
                    $newResponsible = $_POST['responsible'];

                    $oldTimestamp = $otArr['timestamp'];
                    $oldSumma = $otArr['summa'];
                    $oldDesc = $otArr['description'];
                    $oldResponsible = $otArr['responsible'];

                    $whoAccepted = "";
                    $accepted = 0;
                    $whenAccepted = "0000-00-00 00:00:00";

                    $stmt = mysqli_prepare($connection, 'insert into rashodi_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_description, old_responsible, new_timestamp, new_summa, new_description, new_responsible) values(?, ?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $stmt->bind_param('sssissssssssss', $now,$id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldSumma, $oldDesc, $oldResponsible, $newTimestamp, $newSumma, $newDesc, $newResponsible);
                    $stmt->execute();
                    $stmt->close();

                    echo json_encode(array(
                        'result' => 'ok',
                        'text' => 'Запрос на изменение расхода отправлен',
                        'timestamp' => $_POST['timestamp'],
                        'newTimestamp' => $newTimestamp
                    ));
                } else {
                    echo json_encode(array(
                        'error' => 'Неизвестная ошибка'
                    ));
                }
            }

        } else {
            echo json_encode(array(
                'error' => 'Вы не авторизованы'
            ));
        }
    }

    if ($_POST['action'] == 'edit_dannie_kassi') {
        $auth = $_POST['auth'];
        $now = date('Y-m-d H:i:s');
        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        if (mysqli_num_rows($authQ)) {
            $authArr = mysqli_fetch_array($authQ);
            $canEdit = $authArr['can_edit_rashodi'];
            $id = $_POST['id'];
            $otQ = mysqli_query($connection, 'select * from dannie_kassi where id="'.$id.'"');
            if (mysqli_num_rows($otQ)) {
                $otArr = mysqli_fetch_array($otQ);
                $newTimestamp = date('Y-m-d H:i:s', strtotime($_POST['timestamp']));
                $newSumma = $_POST['summa'];
                $newVremya = $_POST['vremya'];
                $newResponsible = $_POST['responsible'];

                $oldTimestamp = $otArr['timestamp'];
                $oldSumma = $otArr['summa'];
                $oldVremya = $otArr['vremya'];
                $oldResponsible = $otArr['responsible'];

                $whoAccepted = "";
                $accepted = 0;
                $whenAccepted = "0000-00-00 00:00:00";

                $stmt = mysqli_prepare($connection, 'insert into dannie_kassi_change_requests(timestamp, row, auth, accepted, who_accepted, accepted_timestamp, old_timestamp, old_summa, old_vremya, old_responsible, new_timestamp, new_summa, new_vremya, new_responsible) values(?, ?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $stmt->bind_param('sssissssssssss', $now,$id, $auth, $accepted, $whoAccepted, $whenAccepted, $oldTimestamp, $oldSumma, $oldVremya, $oldResponsible, $newTimestamp, $newSumma, $newVremya, $newResponsible);
                $stmt->execute();
                $stmt->close();

                echo json_encode(array(
                    'result' => 'ok',
                    'text' => 'Запрос на изменение данных кассы отправлен',
                    'timestamp' => $_POST['timestamp'],
                    'newTimestamp' => $newTimestamp
                ));
            } else {
                echo json_encode(array(
                    'error' => 'Неизвестная ошибка'
                ));
            }
        } else {
            echo json_encode(array(
                'error' => 'Вы не авторизованы'
            ));
        }
    }

    if ($_POST['action'] == 'decline_ot_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];

        $stmt = mysqli_prepare($connection, 'update operativnie_trati_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=NOW() where id=?');
        $stmt->bind_param('ss', $auth, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_dannie_kassi_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update dannie_kassi_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_rashod_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update rashodi_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'decline_priem_deneg_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update cash_register_change_requests set accepted=-1, who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok'
        ));
    }


    if ($_POST['action'] == 'accept_ot_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];

        $stmt = mysqli_prepare($connection, 'update operativnie_trati_change_requests set accepted=1,who_accepted=?, accepted_timestamp=NOW() where id=?');
        $stmt->bind_param('ss', $auth, $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from operativnie_trati_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'update operativnie_trati set timestamp=?, tip=?, summa=?, eng=?, description=?, orderID=?, responsible=? where id=?');
        $stmt->bind_param('ssssssss', $reqArr['new_timestamp'], $reqArr['new_tip'], $reqArr['new_summa'], $reqArr['new_eng'], $reqArr['new_description'], $reqArr['new_orderID'], $reqArr['new_responsible'], $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok',
            'timestamp' => $_POST['timestamp'],
            'newTimestamp' => $newTimestamp
        ));
    }

    if ($_POST['action'] == 'accept_dannie_kassi_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date("Y-m-d H:i:s");

        $stmt = mysqli_prepare($connection, 'update dannie_kassi_change_requests set accepted=1,who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from dannie_kassi_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'update dannie_kassi set timestamp=?, summa=?, vremya=?, responsible=? where id=?');
        $stmt->bind_param('sssss', $reqArr['new_timestamp'], $reqArr['new_summa'], $reqArr['new_vremya'],  $reqArr['new_responsible'], $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok',
            'timestamp' => $_POST['timestamp'],
            'newTimestamp' => $newTimestamp
        ));
    }

    if ($_POST['action'] == 'accept_priem_deneg_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'update cash_register_change_requests set accepted=1,who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from cash_register_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'update cash_register set timestamp=?, sum=?, eng=?, orderID=? where id=?');
        $stmt->bind_param('sssss', $reqArr['new_timestamp'],  $reqArr['new_summa'], $reqArr['new_eng'], $reqArr['new_orderID'], $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok',
            'timestamp' => $_POST['timestamp'],
            'newTimestamp' => $newTimestamp
        ));
    }

    if ($_POST['action'] == 'accept_rashod_change_request') {
        $auth = $_POST['auth'];
        $id = $_POST['id'];
        $now = date("Y-m-d H:i:s");

        $stmt = mysqli_prepare($connection, 'update rashodi_change_requests set accepted=1,who_accepted=?, accepted_timestamp=? where id=?');
        $stmt->bind_param('sss', $auth, $now, $id);
        $stmt->execute();
        $stmt->close();

        $reqQ = mysqli_query($connection, 'select * from rashodi_change_requests where id="'.$id.'"');
        $reqArr = mysqli_fetch_array($reqQ);

        $stmt = mysqli_prepare($connection, 'update rashodi set timestamp=?, summa=?, description=?, responsible=? where id=?');
        $stmt->bind_param('sssss', $reqArr['new_timestamp'], $reqArr['new_summa'], $reqArr['new_description'], $reqArr['new_responsible'], $reqArr['row']);
        $stmt->execute();
        $stmt->close();

        echo json_encode(array(
            'result' => 'ok',
            'timestamp' => $_POST['timestamp'],
            'newTimestamp' => $newTimestamp
        ));
    }

    if ($_POST['action'] == 'save_kontrol_kuratora_full_result') {
        print_r($_POST);
        $resultat_kontrolya = $_POST['resultat_kontrolya'];
        $ozhidaemaya_chistaya_pribil = $_POST['ozhidaemaya_chistaya_pribil'];
        $kakaya_polomka_3 = $_POST['kakaya_polomka_3'];
        $kakie_stoimosti_ozvuchival_klientu_4 = $_POST['kakie_stoimosti_ozvuchival_klientu_4'];
        $kakaya_polomka_7 = $_POST['kakaya_polomka_7'];
        $kakaya_cel_zabora = $_POST['kakaya_cel_zabora'];
        $pochemy_ne_vipolnil_na_meste = join(';', $_POST['pochemy_ne_vipolnil_na_meste']);
        print_r($pochemy_ne_vipolnil_na_meste);
        $cena_obmena = $_POST['cena_obmena'];
        $skolko_soglasovanno_s_klientom = $_POST['skolko_soglasovanno_s_klientom'];
        $gde_seichas_ustroistvo_12 = $_POST['gde_seichas_ustroistvo_12'];
        $kuda_nesesh_obmenivat = $_POST['kuda_nesesh_obmenivat'];
        $vo_skolko_ti_tam_budesh_14 = $_POST['vo_skolko_ti_tam_budesh_14'];
        $u_kogo_na_obmene = $_POST['u_kogo_na_obmene'];
        $primernaya_data_prihoda_obmena = $_POST['primernaya_data_prihoda_obmena'];
        $kogda_budesh_zvonit_19 = $_POST['kogda_budesh_zvonit_19'];
        $kogda_zaplanirovan_otvoz_20 = $_POST['kogda_zaplanirovan_otvoz_20'];
        $kakie_stoimosti_ozvuchival_klientu_21 = $_POST['kakie_stoimosti_ozvuchival_klientu_21'];
        $kuda_ponesesh = $_POST['kuda_ponesesh'];
        $vo_skolko_ti_tam_budesh_24 = $_POST['vo_skolko_ti_tam_budesh_24'];
        $gde_na_paike = $_POST['gde_na_paike'];
        $kogda_budet_izvestna_problema = $_POST['kogda_budet_izvestna_problema'];
        $tochnaya_neispravnost = $_POST['tochnaya_neispravnost'];
        $cena_paiki = $_POST['cena_paiki'];
        $kogda_zvonish_soglasovivat = $_POST['kogda_zvonish_soglasovivat'];
        $skolko_soglasovanno = $_POST['skolko_soglasovanno'];
        $primernaya_data_gotovnosti_paiki = $_POST['primernaya_data_gotovnosti_paiki'];
        $kogda_budesh_zvonit_36 = $_POST['kogda_budesh_zvonit_36'];
        $kogda_zaplanirovan_otvoz_37 = $_POST['kogda_zaplanirovan_otvoz_37'];
        $kakoi_status_obmena = $_POST['kakoi_status_obmena'];
        $soglasoval_datu_otvoza_18 = $_POST['soglasoval_datu_otvoza_18'];
        $gde_seichas_ustroistvo_22 = $_POST['gde_seichas_ustroistvo_22'];
        $izvestno_chto_seichas_s_ustroistvom = $_POST['izvestno_chto_seichas_s_ustroistvom'];
        $soglasoval_cenu_s_klientom = $_POST['soglasoval_cenu_s_klientom'];
        $paika_vipolnena = $_POST['paika_vipolnena'];
        $next_time = date('Y-m-d H:i:s', strtotime($_POST['next_time']));
        $soglasoval_datu_otvoza_35 = $_POST['soglasoval_datu_otvoza_35'];
        $id = $_POST['id'];
        $kontrol_kuratora_time = date('Y-m-d H:i:s');
        $pochemy_ne_vstretilsya = $_POST['pochemy_ne_vstretilsya'];
        $na_kogda_perenesen_zakaz = $_POST['na_kogda_perenesen_zakaz'];

        $curTimeQ = mysqli_query($connection, 'select * from kontrol_kuratora where id="'.$id.'" order by id desc limit 0,1');
        $curTimeArr = mysqli_fetch_array($curTimeQ);
        $vremya_do_perenosa = $curTimeArr['vremya_do_perenosa'];
        $vremya_posle_perenosa = $curTimeArr['vremya_posle_perenosa'];
        $eng = $curTimeArr['eng'];
        $orderID = $curTimeArr['orderID'];
        $active = 0;

        $stmt = mysqli_prepare($connection, 'update kontrol_kuratora set active=?,resultat_kontrolya=?,kontrol_kuratora_time=?,ozhidaemaya_chistaya_pribil=?,kakaya_polomka_3=?,	kakie_stoimosti_ozvuchival_klientu_4=?,	kakaya_polomka_7=?,kakaya_cel_zabora=?,pochemy_ne_vipolnil_na_meste=?,cena_obmena=?,skolko_soglasovanno_s_klientom=?,gde_seichas_ustroistvo_12=?,kuda_nesesh_obmenivat=?,vo_skolko_ti_tam_budesh_14=?,u_kogo_na_obmene=?,kakoi_status_obmena=?,primernaya_data_prihoda_obmena=?,	soglasoval_datu_otvoza_18=?,kogda_budesh_zvonit_19=?,kogda_zaplanirovan_otvoz_20=?,	kakie_stoimosti_ozvuchival_klientu_21=?,gde_seichas_ustroistvo_22=?,kuda_ponesesh=?,vo_skolko_ti_tam_budesh_24=?,gde_na_paike=?,izvestno_chto_seichas_s_ustroistvom=?,kogda_budet_izvestna_problema=?,tochnaya_neispravnost=?,cena_paiki=?,	soglasoval_cenu_s_klientom=?,kogda_zvonish_soglasovivat=?,skolko_soglasovanno=?,paika_vipolnena=?,	primernaya_data_gotovnosti_paiki=?,soglasoval_datu_otvoza_35=?,kogda_budesh_zvonit_36=?,kogda_zaplanirovan_otvoz_37=?, pochemy_ne_vstretilsya=?, na_kogda_perenesen_zakaz=? where id=?');
        $stmt->bind_param('isssssssssssssssssssssssssssssssssssssss', $active,$resultat_kontrolya, $kontrol_kuratora_time, $ozhidaemaya_chistaya_pribil, $kakaya_polomka_3, $kakie_stoimosti_ozvuchival_klientu_4, $kakaya_polomka_7, $kakaya_cel_zabora, $pochemy_ne_vipolnil_na_meste, $cena_obmena, $skolko_soglasovanno_s_klientom, $gde_seichas_ustroistvo_12, $kuda_nesesh_obmenivat, $vo_skolko_ti_tam_budesh_14, $u_kogo_na_obmene, $kakoi_status_obmena, $primernaya_data_prihoda_obmena, $soglasoval_datu_otvoza_18, $kogda_budesh_zvonit_19, $kogda_zaplanirovan_otvoz_20, $kakie_stoimosti_ozvuchival_klientu_21, $gde_seichas_ustroistvo_22, $kuda_ponesesh, $vo_skolko_ti_tam_budesh_24, $gde_na_paike, $izvestno_chto_seichas_s_ustroistvom, $kogda_budet_izvestna_problema, $tochnaya_neispravnost, $cena_paiki, $soglasoval_cenu_s_klientom, $kogda_zvonish_soglasovivat, $skolko_soglasovanno, $paika_vipolnena, $primernaya_data_gotovnosti_paiki, $soglasoval_datu_otvoza_35, $kogda_budesh_zvonit_36, $kogda_zaplanirovan_otvoz_37, $pochemy_ne_vstretilsya, $na_kogda_perenesen_zakaz, $id);
        $stmt->execute();
        //print_r($stmt->error);
        $stmt->close();

        $stmt = mysqli_prepare($connection, 'insert into kontrol_kuratora(timestamp, next_time, orderID, eng) values(?, ?, ?, ?)');
        $stmt->bind_param('ssss', $kontrol_kuratora_time, $next_time, $orderID, $eng);
        $stmt->execute();
        //print_r($stmt->error);
        $stmt->close();

        echo json_encode(array(
           'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'net_zakaza_v_marshrutke') {
        $order1 = $_POST['orderID_1'];
        $order2 = $_POST['orderID_2'];
        $order3 = $_POST['orderID_3'];
        $order4 = $_POST['orderID_4'];
        $order5 = $_POST['orderID_5'];
        $order6 = $_POST['orderID_6'];
        $order7 = $_POST['orderID_7'];
        $order8 = $_POST['orderID_8'];
        $order9 = $_POST['orderID_9'];
        $order10 = $_POST['orderID_10'];
        mysqli_query($connection, 'delete from net_zakaza_v_marshrutke');
        if ($order1) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order1);
            $stmt->execute();
            $stmt->close();
        }
        if ($order2) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order2);
            $stmt->execute();
            $stmt->close();
        }
        if ($order3) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order3);
            $stmt->execute();
            $stmt->close();
        }
        if ($order4) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order4);
            $stmt->execute();
            $stmt->close();
        }
        if ($order5) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order5);
            $stmt->execute();
            $stmt->close();
        }
        if ($order6) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order6);
            $stmt->execute();
            $stmt->close();
        }
        if ($order7) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order7);
            $stmt->execute();
            $stmt->close();
        }
        if ($order8) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order8);
            $stmt->execute();
            $stmt->close();
        }
        if ($order9) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order9);
            $stmt->execute();
            $stmt->close();
        }
        if ($order10) {
            $stmt = mysqli_prepare($connection, 'insert into net_zakaza_v_marshrutke(orderID) values(?)');
            $stmt->bind_param('i', $order10);
            $stmt->execute();
            $stmt->close();
        }
        echo json_encode(array(
            'result' => 'ok'
        ));
    }

    if ($_POST['action'] == 'create_prodolzhenie') {
        $eng = $_POST['eng'];
        $orderID = $_POST['orderID'];
        $reason = $_POST['reason'];
        $date = date('Y-m-d', strtotime($_POST['date']));
        $hour = $_POST['hour'];
        $minute = $_POST['minute'];
        $time = $hour.'-'.$minute;
        $auth = $_POST['auth'];
        $device = $_POST['device'];
        $problem = $_POST['problem'];
        $clientName = $_POST['clientName'];
        $clientPhone = $_POST['clientPhone'];
        $sellBuyPrice = $_POST['sellBuyPrice'];
        $sellState = $_POST['sellState'];
        $sellIMEI = $_POST['sellIMEI'];
        $sellCharge = $_POST['sellCharge'];
        $sellPrice = $_POST['sellPrice'];
        $sellDate = $_POST['sellDate'];
        if ($sellDate) {
            $sellDate = date('Y-m-d', strtotime($sellDate));
        }

        $stmt = mysqli_prepare($connection, 'insert into prodolzheniya(timestamp, auth, eng, orderID, reason, device, problem, date, time, clientName, clientPhone, sellBuyPrice, sellState, sellIMEI, sellCharge, sellPrice, sellDate) values(NOW(), ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('ssssssssssssssss', $auth, $eng, $orderID, $reason, $device, $problem, $date, $time, $clientName, $clientPhone, $sellBuyPrice, $sellState, $sellIMEI, $sellCharge, $sellPrice, $sellDate);
        $stmt->execute();
        $lastInsertID = $stmt->insert_id;
        $stmt->close();

        //print_r($_POST);

        $orderQ = mysqli_query($connection, 'select * from amo_leads order by id desc limit 0,1');
        $orderArr = mysqli_fetch_array($orderQ);

        $parentLead = $amo->getLeadByID($orderID);
        $resultCF = [];
        $parentCF = $parentLead['response']['leads'][0]['custom_fields'];
        $parentNeskolkoUstroistv = ""; $parentDevice1 = ""; $parentColor1 = ""; $parentHome1 = "";
        $parentModelA1 = ""; $parentModelFeatures1 = ""; $parentProblem1 = ""; $parentServices1 = ""; $parentProblemDescription1 = "";
        $parentDevice2 = ""; $parentColor2 = ""; $parentHome2 = "";
        $parentModelA2 = ""; $parentModelFeatures2 = ""; $parentProblem2 = ""; $parentServices2 = ""; $parentProblemDescription2 = "";
        $parentSrc = "";
        $parentNote = "";
        $parentFullAddress = "";
        $parentShortAddress = "";
        $parentMetro = "";
        foreach ($parentCF as $arr) {
            if ($arr['id'] == 475581 || $arr['id'] == 29649 || $arr['id'] == 26071 || $arr['id'] == 476897 || $arr['id'] == 460647) {
                $resultCF[] = $arr;
            }

            if (!($device && $problem)) {
                // device 1
                if ($arr['id'] == 26063) {
                    $device = $arr['values'][0]['value'];
                }

                if ($arr['id'] == 479181 || $arr['id'] == 26063 || $arr['id'] == 26143 || $arr['id'] == 477995 || $arr['id'] == 475583 || $arr['id'] == 476893 || $arr['id'] == 26045 || $arr['id'] == 475585 || $arr['id'] == 476895) {
                    $resultCF[] = $arr;
                }

                // device 2
                if ($arr['id'] == 479307 || $arr['id'] == 479309 || $arr['id'] == 479311 || $arr['id'] == 479313 || $arr['id'] == 479315 || $arr['id'] == 479317 || $arr['id'] == 479401 || $arr['id'] == 479403) {
                    $resultCF[] = $arr;
                }
            } else {
                if ($arr['id'] == 26063) {
                    $parentDevice1 = $arr['values'][0]['value'];
                    $arr['values'][0]['value'] = $device;
                    $resultCF[] = $arr;
                }
                if ($arr['id'] == 26045) {
                    $parentProblem1 = $arr['values'][0]['value'];
                    $problemID = $arr['values'][0]['enum'];
                    switch ($problem) {
                        case 'Замена стекла' : $problemID = 56599; break;
                        case 'Замена АКБ' : $problemID = 778015; break;
                        case 'Не заряжается' : $problemID = 56601; break;
                        case 'Не включается' : $problemID = 56603; break;
                        case 'Попала вода' : $problemID = 56605; break;
                        case 'Нет звука' : $problemID = 56607; break;
                        case 'Не работает камера' : $problemID = 56609; break;
                        case 'Не ловит сеть' : $problemID = 56611; break;
                        case 'Не работают кнопки' : $problemID = 56613; break;
                        case 'Замена дисплейного модуля' : $problemID = 865247; break;
                        case 'Замена контроллера питания' : $problemID = 880153; break;
                        case 'Микрофон' : $problemID = 922985; break;
                        case 'Кнопка HOME / Touch ID' : $problemID = 922987; break;
                    }
                    $arr['values'][0]['enum'] = $problemID;
                    $resultCF[] = $arr;
                }
            }
        }

        $resultCF[] = [
            'id' => 479325,
            'values' => [
                [
                    'value' => 1
                ]
            ]
        ];
        $resultCF[] = [
            'id' => 485147,
            'values' => [
                [
                    'value' => $reason
                ]
            ]
        ];
        $resultCF[] = [
            'id' => 479327,
            'values' => [
                [
                    'value' => $orderID
                ]
            ]
        ];
        $resultCF[] = [
            'id' => 26069,
            'values' => [
                [
                    'value' => date('Y-m-d', strtotime($date))
                ]
            ]
        ];
        $resultCF[] = [
            'id' => 29683,
            'values' => [
                [
                    'value' => $time
                ]
            ]
        ];
        if ($device && $sellBuyPrice) {
            $resultCF[] = [
                'id' => 485245,
                'values' => [
                    [
                        'value' => $device
                    ]
                ]
            ];
        }
        if ($sellBuyPrice) {
            $resultCF[] = [
                'id' => 485247,
                'values' => [
                    [
                        'value' => $sellBuyPrice
                    ]
                ]
            ];
        }
        if ($sellState) {
            $resultCF[] = [
                'id' => 485249,
                'values' => [
                    [
                        'value' => $sellState
                    ]
                ]
            ];
        }
        if ($sellIMEI) {
            $resultCF[] = [
                'id' => 485251,
                'values' => [
                    [
                        'value' => $sellIMEI
                    ]
                ]
            ];
        }
        if ($sellCharge) {
            $resultCF[] = [
                'id' => 485253,
                'values' => [
                    [
                        'value' => $sellCharge
                    ]
                ]
            ];
        }
        if ($sellPrice) {
            $resultCF[] = [
                'id' => 485257,
                'values' => [
                    [
                        'value' => $sellPrice
                    ]
                ]
            ];
        }
        if ($sellDate) {
            $resultCF[] = [
                'id' => 485255,
                'values' => [
                    [
                        'value' => date('Y-m-d', strtotime($sellDate))
                    ]
                ]
            ];
        }
        //print_r($resultCF);

        $parentMainContactID = $parentLead['response']['leads'][0]['main_contact_id'];
        $reasonAbbr = "";
        switch ($reason) {
            case 'Дополнительное устройство' : $reasonAbbr = "ДУ"; break;
            case 'Завершение заказа прежнего СИ' : $reasonAbbr = "ЗЗПС"; break;
            case 'Выполнение заказа прежнего СИ' : $reasonAbbr = "ВЗПС"; break;
            case 'Продолжение ГСИ' : $reasonAbbr = "ПГСИ"; break;
            case 'Заказ с улицы' : $reasonAbbr = "ЗСУ"; break;
            case 'Завершение своего заказа' : $reasonAbbr = "ЗСЗ"; break;
            case 'Продажа устройства' : $reasonAbbr = "ПУ"; break;
        }
        $engQ = mysqli_query($connection, 'select * from engineers where name="'.$eng.'"');
        $engArr = mysqli_fetch_array($engQ);

        $newLead = $amo->createLead($orderID, "ПРОД ".$reasonAbbr." ".$engArr['short_name'].' '.$device, $parentMainContactID, 16715359, $resultCF);

        //print_r($newLead);
        $newOrderID = $newLead['_embedded']['items'][0]['id'];
        $amo->updateEngineerField3($newOrderID, $eng, 16715359);
        if ($clientName && $clientPhone) {
            $amo->createContact($newOrderID, $clientName, $clientPhone);
        }

        $stmt = mysqli_prepare($connection, 'update prodolzheniya set newOrderID=? where id=?');
        $stmt->bind_param('si', $newOrderID, $lastInsertID);
        $stmt->execute();
        $stmt->close();

        // создать новую запись в uchet
        $stmt = mysqli_prepare($connection, 'insert into uchet(timestamp, orderID, row_number, engineer, amo_device, amo_problem, prodolzhenie, vremya_remonta) values(NOW(), ?,?,?,?,?,?,?)');
        $prodolzhenie = "Да";
        $fullServiceDate = $date.' '.$hour.':'.$minute.':00';
        $stmt->bind_param('sssssss', $newOrderID, $newOrderID, $engArr['short_name'], $device, $problem, $prodolzhenie, $fullServiceDate);
        $stmt->execute();
        $stmt->close();

        // cоздать новую запись в cron_orders_confirmation
        $stmt = mysqli_prepare($connection, 'insert into cron_orders_confirmation(timestamp, orderID, chat_id, messageID, src_msg, confirmed) values(NOW(),?,?,?,?,?)');
        $confirmed = 1;
        $chat_id = $engArr['chat_id'];
        $msg = "<b>Вам создано новое продолжение</b>:".PHP_EOL.$newOrderID.PHP_EOL.date('d.m.Y', strtotime($date)).' '.$time.PHP_EOL.$device;
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => $chat_id,
            'text' => $msg,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $response = json_decode(curl_exec($ch), true);
        $messageID = $response['result']['message_id'];
        curl_close($ch);
        $stmt->bind_param('sssss', $newOrderID, $chat_id, $messageID, $msg, $confirmed);
        $stmt->execute();
        $stmt->close();

        $authQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        $authArr = mysqli_fetch_array($authQ);
        $person = $authArr['position'].' '.$authArr['surname'];

        $msg = "<b>".$person."</b> создал продолжение ".$newOrderID.' по заказу '.$orderID.PHP_EOL.
            $reason.' '.PHP_EOL.
            '<b>'.$device.'</b> / СИ '.$engArr['short_name'].' / '.$problem.' / '.date('d.m.Y', strtotime($date)).' '.$time;
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => -1001436362605,
            'text' => $msg,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $response = json_decode(curl_exec($ch), true);
        curl_close($ch);
        $amo->addNote($orderID, str_replace("</b>", "", str_replace("<b>", "", $msg)));
        $amo->addNote($newOrderID, str_replace("</b>", "", str_replace("<b>", "", $msg)));

        echo json_encode([
           'result' => 'ok',
           'newOrderID' => $newOrderID,
            'orderID' => $orderID,
            'eng' => $engArr['short_name']
        ]);
    }

    if ($_POST['action'] == 'order_info_for_prodolzhenie_create') {
        $orderID = $_POST['orderID'];
        $orderQ = mysqli_query($connection, 'select * from uchet where orderID="'.$orderID.'"');
        $orderArr = mysqli_fetch_array($orderQ);
        $device = $orderArr['amo_device'];
        $eng = $orderArr['engineer'];
        $date = date('d.m', strtotime($orderArr['amo_date']));
        $time = $orderArr['amo_time'];
        echo json_encode([
           'device' => $device,
           'eng' => $eng,
           'date' => $date,
           'time' => $time
        ]);
    }

    if ($_POST['action'] == 'order_info_for_ot') {
        $orderID = $_POST['orderID'];
        $type = $_POST['type'];
        $orderQ = mysqli_query($connection, 'select * from amo_leads where orderID="'.$orderID.'" order by timestamp desc limit 0,1');
        if (!mysqli_num_rows($orderQ)) {
            if ($type == "Расход ( - )") {
                echo json_encode([
                    'result' => 'error',
                    'desc' => '<b>Срочно сообщите куратору</b>: СИ пытается взять оперативные траты на несуществующий заказ!'
                ]);
            } else {
                if ($type == "Приход ( + )") {
                    echo json_encode([
                        'result' => 'error',
                        'desc' => '<b>Срочно сообщите куратору</b>: СИ пытается сдать оперативные траты по несуществующему заказу!'
                    ]);
                } else {
                    echo json_encode([
                        'result' => 'error',
                        'desc' => '<b>Срочно сообщите куратору</b>: СИ пытается осуществить операцию с оперативным тратами по несуществующему номеру заказу!'
                    ]);
                }
            }
        } else {
            $orderArr = mysqli_fetch_array($orderQ);
            if ($orderArr['status'] == 143 || $orderArr['status'] == 142) {
                if ($type == "Расход ( - )") {
                    echo json_encode([
                        'result' => 'error',
                        'desc' => '<b>Срочно сообщите куратору</b>: СИ пытается взять оперативные траты на закрытый заказ!'
                    ]);
                } else {
                    if ($type == "Приход ( + )") {
                        echo json_encode([
                            'result' => 'error',
                            'desc' => '<b>Срочно сообщите куратору</b>: СИ пытается сдать оперативные траты по закрытому заказу!'
                        ]);
                    } else {
                        echo json_encode([
                            'result' => 'error',
                            'desc' => '<b>Срочно сообщите куратору</b>: СИ пытается осуществить операцию с оперативным тратами по закрытому заказу!'
                        ]);
                    }
                }
            } else {

                 
                // Проверка были ли уже выданы КАКИЕ-ЛИБО оперативные траты по этому заказу
                $otQ = mysqli_query($connection, 'select * from operativnie_trati where orderID="'.$orderID.'" order by timestamp desc limit 0,1');
                    if (!mysqli_num_rows($otQ)) {
                        echo json_encode([
                            'result' => 'ok',
                            'desc' => 'Заказ существует и находится в рабочем статусе.'
                        ]);
                    } else {
                        if ($type == "Расход ( - )") {
                            echo json_encode([
                                'result' => 'error',
                                'desc' => '<b>Срочно сообщите куратору</b>: СИ пытается взять оперативные траты на заказ, по которому уже выдавались оперативные траты!'
                            ]);
                        } else {
                            echo json_encode([
                                'result' => 'ok',
                                'desc' => 'Заказ существует и находится в рабочем статусе.'
                            ]);
                        }
                    }
            }
        }
    }


    if ($_POST['action'] == 'change_si_order_limit') {
        $engID = (int)$_POST['id'];
        $limit = (int)$_POST['limit'];
        $intern = $_POST['intern'];
        $auth = $_POST['auth'];
        $total_limit = (int)$_POST['total_limit'];

        $engQ = mysqli_query($connection, 'select * from engineers where id="'.$engID.'"');
        $engArr = mysqli_fetch_array($engQ);


        $stmt = mysqli_prepare($connection, 'update engineers set orders_limit=?, intern_status=?, total_orders_limit=? where id=?');
        $stmt->bind_param('isii', $limit, $intern, $total_limit, $engID);
        $stmt->execute();
        $stmt->close();

        $stmt = mysqli_prepare($connection, 'insert into eng_order_limits_log(timestamp, eng, old_intern, old_limit, new_intern, new_limit, auth) values(now(), ?,?,?,?,?,?)');
        $stmt->bind_param('ssisis', $engArr['name'], $engArr['intern_status'], $engArr['orders_limit'], $intern, $limit, $auth);
        $stmt->execute();
        $stmt->close();

        $authArrQ = mysqli_query($connection, 'select * from auth where login="'.$auth.'"');
        $authArr = mysqli_fetch_array($authArrQ);

        $txt = '<b>'.$authArr['position'].' '.$authArr['surname'].'</b> изменил лимит заказов <b>СИ '.$engArr['short_name'].'</b>'.PHP_EOL;
        $txt .= "Было: ".$engArr['orders_limit'].' актуальных, '.$engArr['total_orders_limit'].' всего, '.$engArr['intern_status'].PHP_EOL;
        $txt .= "Стало: ".$limit.' актуальных, '.$total_limit.' всего, '.$intern;

        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            //'chat_id' => $chat_id,
            //'chat_id' => 167998391,
            'chat_id' => -1001421134172,
            'text' => $txt,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $response = curl_exec($ch);
        print_r($response);
        curl_close($ch);



        echo json_encode([
            'result' => 'ok'
        ]);
    }

    if ($_POST['action'] == 'save_new_eng_report') {
        $engID = $_POST['engID'];
        $orderID = $_POST['orderID'];
        $nomer_dogovora = $_POST['nomer_dogovora'];
        $name = $_POST['name'];
        $device = $_POST['model'];
        $total_sum = $_POST['total_sum'];
        $zapchasti = $_POST['zapchasti'];
        $pribil = $_POST['pribil'];
        $prodolzhenie = $_POST['prodolzhenie'];
        $now = date('Y-m-d H:i:s');
        $otmetka_kuratora = "";
        $sender = 'engineer';

        if (isset($_POST['sender'])) $sender = $_POST['sender'];

        /*if ( 0 < $_FILES['file']['error'] ) {
            echo 'Error: ' . $_FILES['file']['error'] . '<br>';
        }
        else {
            $dest = '/var/www/user10054/data/www/center-apple.ru/uploads/' . time().'_'.$_POST['orderID'].'.jpg';
            move_uploaded_file($_FILES['file']['tmp_name'], $dest);
            $image = imagecreatefromjpeg($dest);
            unlink($dest);
            imagejpeg($image,$dest,15);
        }*/

        $stmt = mysqli_prepare($connection, 'insert into eng_reports(eng_id, timestamp, nomer_dogovora, name, device, total_sum, zapchasti, pribil, prodolzhenie, orderID, otmetka_kuratora, sender) values(?, ?, ?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('ssssssssssss', $engID, $now, $nomer_dogovora, $name, $device, $total_sum, $zapchasti, $pribil, $prodolzhenie, $orderID, $otmetka_kuratora, $sender);
        $res = $stmt->execute();
        $stmt->close();

        $stmt = mysqli_prepare($connection, 'insert into eng_reports_source(eng_id, timestamp, nomer_dogovora, name, device, total_sum, zapchasti, pribil, prodolzhenie, orderID, otmetka_kuratora, sender) values(?, ?, ?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('ssssssssssss', $engID, $now, $nomer_dogovora, $name, $device, $total_sum, $zapchasti, $pribil, $prodolzhenie, $orderID, $otmetka_kuratora, $sender);
        $res = $stmt->execute();
        $stmt->close();

        $res = 1;
        if ($res == 1) {
            echo json_encode([
               'result' => 'ok'
            ]);
        } else {
            echo json_encode([
               'result' => 'error'
            ]);
        }
    }

    if ($_POST['action'] == 'save_new_eng_report_2') {
        $engID = $_POST['engID'];
        $orderID = $_POST['orderID'];
        $nomer_dogovora = $_POST['nomer_dogovora'];
        $name = $_POST['name'];
        $device = $_POST['model'];
        $total_sum = $_POST['total_sum'];
        $zapchasti = $_POST['zapchasti'];
        $pribil = $_POST['pribil'];
        $prodolzhenie = $_POST['prodolzhenie'];
        $city = $_POST['city']; // Добавляю город в отчет СИ
        $now = date('Y-m-d H:i:s');
        $otmetka_kuratora = "";
        $sender = 'engineer';
        if (isset($_POST['sender'])) $sender = $_POST['sender'];
        $ostavil_dogovor = $_POST['ostavil_bso'];

        $photo_dogovora = "";
        if (count($_FILES)) {
            if (0 < $_FILES['file']['error']) {
                echo json_encode([
                    'result' => 'error'
                ]);
            } else {
                $photo_dogovora = '/uploads/' . $orderID . '_' . time() . '.jpg';
                $dest = '/var/www/user10054/data/www/center-apple.ru' . $photo_dogovora;
                move_uploaded_file($_FILES['file']['tmp_name'], $dest);
                $image = imagecreatefromjpeg($dest);
                unlink($dest);
                imagejpeg($image, $dest, 15);
                $photo_dogovora = 'https://center-apple.ru' . $photo_dogovora;
            }
        }

        $stmt = mysqli_prepare($connection, 'insert into eng_reports(eng_id, timestamp, ostavil_dogovor, photo_dogovora, nomer_dogovora, name, device, total_sum, zapchasti, pribil, prodolzhenie, orderID, otmetka_kuratora, sender, city) values(?, ?,?,?, ?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('sssssssssssssss', $engID, $now, $ostavil_dogovor, $photo_dogovora, $nomer_dogovora, $name, $device, $total_sum, $zapchasti, $pribil, $prodolzhenie, $orderID, $otmetka_kuratora, $sender, $city);
        $res = $stmt->execute();
        $stmt->close();

        $stmt = mysqli_prepare($connection, 'insert into eng_reports_source(eng_id, timestamp, ostavil_dogovor, photo_dogovora, nomer_dogovora, name, device, total_sum, zapchasti, pribil, prodolzhenie, orderID, otmetka_kuratora, sender, city) values(?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('sssssssssssssss', $engID, $now, $ostavil_dogovor, $photo_dogovora, $nomer_dogovora, $name, $device, $total_sum, $zapchasti, $pribil, $prodolzhenie, $orderID, $otmetka_kuratora, $sender, $city);
        $res = $stmt->execute();
        $stmt->close();

        $res = 1;
        if ($res == 1) {

            /* УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */

            $notificationPerson = getEngineerNameByID($engID);
            $notificationOrderID = $orderID;
            $notificationPribil = number_format($pribil, 0, '', ',');
            $notificationDevice = $device;
            $notificationTotalSum = number_format($total_sum, 0, '', ',');
            $notificationZapchasti = $zapchasti;

            $notificationProdolzhenie = ''; //  по умолчанию индикатора продолжения нет
            if ($prodolzhenie == "Да") {
                $notificationProdolzhenie = '🔵';
            }

            $reports_chat_id = -1001380611190; // Отчеты СИ
            $text = "<b>📬 СИ " . $notificationPerson . "</b> прислал отчёт по заказу " . $notificationProdolzhenie . $notificationOrderID . PHP_EOL . "<b>ЧП: " . $notificationPribil . " руб.</b> / " . $notificationDevice . PHP_EOL . "Общая: " . $notificationTotalSum . " руб." . PHP_EOL . "ЗЧ: " . $notificationZapchasti;
            $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $post = array(
                'chat_id' => $reports_chat_id,
                'text' => $text,
                'parse_mode' => 'html'
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_exec($ch);
            curl_close($ch);
    
            /* КОНЕЦ УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */

            /* КОММЕНТАРИЙ В АМО */
            $amoText = "СИ " . $notificationPerson . " прислал отчёт по заказу " . $notificationProdolzhenie . $notificationOrderID . PHP_EOL . "ЧП: " . $notificationPribil . " руб. / " . $notificationDevice . PHP_EOL . "Общая: " . $notificationTotalSum . " руб." . PHP_EOL . "ЗЧ: " . $notificationZapchasti;
            $amo->addNote($orderID, $amoText);
            /* КОНЕЦ КОММЕНТАРИЯ В АМО */

            echo json_encode([
               'result' => 'ok'
            ]);
        } else {
            echo json_encode([
               'result' => 'error'
            ]);
        }
    }

    if ($_POST['action'] == 'tmp_save_new_eng_report_2') {
        $engID = $_POST['engID'];
        $orderID = $_POST['orderID'];
        $nomer_dogovora = $_POST['nomer_dogovora'];
        $name = $_POST['name'];
        $device = $_POST['model'];
        $total_sum = $_POST['total_sum'];
        $zapchasti = $_POST['zapchasti'];
        $pribil = $_POST['pribil'];
        $prodolzhenie = $_POST['prodolzhenie'];
        $now = date('Y-m-d H:i:s');
        $otmetka_kuratora = "";
        $sender = 'engineer';
        $ostavil_dogovor = $_POST['ostavil_bso'];

        if (isset($_POST['sender'])) $sender = $_POST['sender'];

        $stmt = mysqli_prepare($connection, 'insert into tmp_eng_reports(eng_id, timestamp, ostavil_dogovor, nomer_dogovora, name, device, total_sum, zapchasti, pribil, prodolzhenie, orderID, otmetka_kuratora, sender) values(?, ?, ?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('sssssssssssss', $engID, $now, $ostavil_dogovor, $nomer_dogovora, $name, $device, $total_sum, $zapchasti, $pribil, $prodolzhenie, $orderID, $otmetka_kuratora, $sender);
        $res = $stmt->execute();
        $stmt->close();

        if ($res == 1) {
            echo json_encode([
                'result' => 'ok'
            ]);
        } else {
            echo json_encode([
                'result' => 'error'
            ]);
        }
    }

    if ($_POST['action'] == 'create_new_eng') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $fullName = $surname.' '.$name;

        $phone = $_POST['phone'];
        $telegram = $_POST['telegram'];

        $active = 1;
        $internStatus = "Стажер";
        $ordersLimit = 1;
        $city = "Санкт-Петербург";


        $stmt = mysqli_prepare($connection, 'insert into engineers(name, short_name, name_for_bot, telegram, phone, orders_limit, intern_status, active, first_name_from_form, last_name_from_form, city) values(?,?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('sssssssssss', $fullName, $surname, $surname, $telegram, $phone, $ordersLimit, $internStatus, $active, $name, $surname, $city);
        $res = $stmt->execute();
        $stmt->close();

        $ch = curl_init('http://irepair.spb.ru/si_telegram.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'name' => $name,
            'telegram' => str_replace('@', '', $telegram)
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        // execute!
        $response = curl_exec($ch);

        curl_close($ch);
        $resArr = json_decode($response, true);

        $res2 = $resArr['result'] == 'ok' ? 1 : 0;

        echo json_encode(['result' => ($res && $res2) ? 'ok' : 'error']);
    }

    if ($_POST['action'] == 'new_ot') {
        $type = $_POST['tip_operacii'];
        $sum = $_POST['sum'];
        $person = $_POST['person'];
        $orderID = $_POST['orderID'];
        $desc = $_POST['desc'];
        $now = date('Y-m-d H:i:s');
        $notificationNow = date('d.m.y (H:i:s)');
        $auth = $_POST['auth'];
        $responsibleCity = $_POST['responsible_city'];

        $engCity = $_POST['eng_city'];
        

        $stmt = mysqli_prepare($connection, 'insert into operativnie_trati(timestamp, tip, summa, eng, description, orderID, responsible, responsible_city, eng_city) values(?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('sssssssss', $now, $type, $sum, $person, $desc, $orderID, $auth, $responsibleCity, $engCity);
        $res = $stmt->execute();
        $stmt->close();

        $notificationSumma = number_format($sum, 0, '', ',');
        $notificationDesc = $desc;
        $notificationPerson = $person; // Фамилия
        $notificationPersonType = ""; // СИ, не СИ
        $notificationOrderID = $orderID;
        $notificationAuthor = $auth; // Кассир
        $notificationOperationType = "что-то сделал с ОТ по заказу";
        $notificationEmoji = "💳";
        
        if ($notificationPerson === "Яшин" || $notificationPerson === "Кузнецов Егор" || $notificationPerson === "Кузнецов Алексей"  || $notificationPerson === "Рыжов" || $notificationPerson === "Храмцов" || $notificationPerson === "Нева") {
            $notificationPersonType = "";
        } else {
            $notificationPersonType = "СИ";
        }

        if ($type === "Расход ( - )") {
            $notificationOperationType = "взял ОТ на заказ";
            $notificationEmoji = "📕";
        } elseif ($type === "Приход ( + )") {
            $notificationOperationType = "вернул ОТ по заказу";
            $notificationEmoji = "📗";
        } else {
            $notificationOperationType = "что-то сделал с ОТ по заказу";
            $notificationEmoji = "💳";
        }

        if ($sum > 0) {
            $notificationSummaPlusSymbol = "+";
        } else {
            $notificationSummaPlusSymbol = "";
        }

        if ($res == 1) {

        /* УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */

            $cashbox_chat_id = -1001357231681; // Касса СПб (по умолчанию)
            if ($responsibleCity == "Москва") {
                $cashbox_chat_id = -1001489136772;
            }

            $text = $notificationEmoji . " <b>" . $notificationPersonType ." " . $notificationPerson . "</b> " . $notificationOperationType . " " . $notificationOrderID . PHP_EOL . "<b>" . $notificationSummaPlusSymbol . $notificationSumma . " руб.</b> / " . $notificationDesc . PHP_EOL . "Кассир " . $notificationAuthor . " / " . $notificationNow;
            $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $post = array(
                'chat_id' => $cashbox_chat_id,
                'text' => $text,
                'parse_mode' => 'html'
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_exec($ch);
            curl_close($ch);

            /* КОНЕЦ УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */

            echo json_encode([
                'result' => 'ok'
            ]);
        } else {
            echo json_encode([
                'result' => 'error'
            ]);
        }
    }

    if ($_POST['action'] == 'new_rashod') {
        $sum = $_POST['sum'];
        $desc = $_POST['desc'];
        $now = date('Y-m-d H:i:s');
        $auth = $_POST['auth'];
        $notificationNow = date('d.m.y (H:i:s)');

        $responsibleCity = $_POST['responsible_city'];

        $stmt = mysqli_prepare($connection, 'insert into rashodi(timestamp, summa, description, responsible, responsible_city) values(?,?,?,?,?)');
        $stmt->bind_param('sssss', $now, $sum, $desc, $auth, $responsibleCity);
        $res = $stmt->execute();
        $stmt->close();

        $notificationSumma = number_format($sum, 0, '', ',');
        $notificationDesc = $desc;
        $notificationAuthor = $auth;

        if ($res == 1) {


            /* УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */

            $cashbox_chat_id = -1001357231681; // Касса СПб (по умолчанию)
            if ($responsibleCity == "Москва") {
                $cashbox_chat_id = -1001489136772;
            }

            $text = "<b>💸 Расход из кассы:</b>" . PHP_EOL . "<b>-" . $notificationSumma . " руб.</b> / " . $notificationDesc . PHP_EOL . "Кассир " . $notificationAuthor . " / " . $notificationNow;
            $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $post = array(
                'chat_id' => $cashbox_chat_id,
                'text' => $text,
                'parse_mode' => 'html'
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            curl_exec($ch);
            curl_close($ch);

            /* КОНЕЦ УВЕДОМЛЕНИЯ В ТЕЛЕГРАМЕ */


            echo json_encode([
                'result' => 'ok'
            ]);
        } else {
            echo json_encode([
                'result' => 'error'
            ]);
        }
    }

    if ($_POST['action'] == 'create_swap') {
        $lead_id = $_POST['orderID'];
        $engineerFullName = $_POST['engineerFullName'];
        $engineerShortName = $_POST['engineerShortName'];
        $deviceName = $_POST['device'];
        $imeiNumber = $_POST['imei'];

        $name = 'ОБМ КУЗ ' . $engineerShortName  . ' ' . $deviceName . ' ' . $lead_id;
        $newSwapCustomFields[] = [
            'id' => 488551,
            'values' => [
                [
                    'value' => $imeiNumber
                ]
            ]
        ];
        $newSwapCustomFields[] = [
            'id' => 488573,
            'values' => [
                [
                    'value' => $lead_id
                ]
            ]
        ];
        $newSwapCustomFields[] = [
            'id' => 488577,
            'values' => [
                [
                    'value' => $deviceName
                ]
            ]
        ];
        $newSwapCustomFields[] = [
            'id' => 488557,
            'values' => [
                [
                    'value' => $engineerShortName
                ]
            ]
        ];
        
        $newLead = $amo->createSwap($name, $newSwapCustomFields);
        $newLeadID = intval($newLead['_embedded']['items'][0]['id']);

        mysqli_query ($connection, 'insert into uchet (timestamp, orderID, row_number, engineer) values ("'.date('Y-m-d H-i-s',time()).'" ,'.$newLeadID.', '.$newLeadID.', "Кузнецов")');

        $text = '<b>Обменщик Кузнецов</b> создал новый обмен 🔶'. $newLeadID . ' по заказу ' . $lead_id . PHP_EOL . '<b>'.$deviceName.'</b> / ' . $imeiNumber . ' / СИ '.$engineerShortName; 

        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage'); // TOKEN SCA SI ENGINEER BOT
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $post = array(
            'chat_id' => -1001179519937, // ОБМЕНЫ
            'text' => $text,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $response = curl_exec($ch);

        echo json_encode([
            'result' => 'ok'
        ]);
    }

    if ($_POST['action'] == 'new_obr_from_external_source') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $device = $_POST['model'];
        $problem = $_POST['problem'];
        $modelA = $_POST['modelA'];
        $from = $_POST['from'];
        $auth = $_POST['auth'];
        $ozvuch = $_POST['ozvuch'];
        $comment = $_POST['comment'];
        $now = date('Y-m-d H:i:s');

        $stmt = mysqli_prepare($connection, 'insert into obrasheniya_external(timestamp, name, phone, device, modelA, problem, ozvuch, comment, src, auth) values(?,?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param('ssssssssss', $now, $name, $phone, $device, $modelA, $problem, $ozvuch, $comment, $from, $auth);
        $res = $stmt->execute();
        $stmt->close();

        $fromID = 485549;
        $authID = 485551;

        $resultCF = [];

        $resultCF[] = [
            'id' => 485549,
            'values' => [
                [
                    'value' => $from
                ]
            ]
        ];
        $resultCF[] = [
            'id' => 485551,
            'values' => [
                [
                    'value' => $auth
                ]
            ]
        ];

        $resultCF[] = [
            'id' => 476893,
            'values' => [
                [
                    'value' => $device
                ]
            ]
        ];

        $resultCF[] = [
            'id' => 26063,
            'values' => [
                [
                    'value' => $device
                ]
            ]
        ];

        $resultCF[] = [
            'id' => 476895,
            'values' => [
                [
                    'value' => $problem
                ]
            ]
        ];

        $resultCF[] = [
            'id' => 475585,
            'values' => [
                [
                    'value' => $ozvuch
                ]
            ]
        ];

        $resultCF[] = [
            'id' => 29649,
            'values' => [
                [
                    'value' => $comment
                ]
            ]
        ];

        $resultCF[] = [
            'id' => 475581,
            'values' => [
                [
                    'value' => "ПАРТНЕР"
                ]
            ]
        ];

        if ($modelA) {
            $resultCF[] = [
                'id' => 475583,
                'values' => [
                    [
                        'value' => $modelA
                    ]
                ]
            ];
        }

        $newLead = $amo->createLead(123456, "ОБРАЩЕНИЕ ОТ ПАРТНЕРА", -1, 16714372, $resultCF);
        $newOrderID = $newLead['_embedded']['items'][0]['id'];
        if ($name && $phone) {
            $amo->createContact($newOrderID, $name, $phone);
        }

        require_once "Mail.php";
        $message = "ЗАЯВКА ОТ ПАРТНЕРА (особая обработка)<br>".$from." ".$auth.'<br>'.'<br>';
        $message .= "Имя: ".$name.'<br>'."Номер телефона: ".$phone.'<br>'."Модель: ".$device.'<br>'."Проблема: ".$problem.'<br>'."Озвученные услуги: ".$ozvuch.'<br>'."Комментарий: ".$comment.'<br>'."Источник: ПАРТНЕР<br>";
        if ($modelA) {
            $message .= "Модель А:".$modelA.'<br>';
        }
        $message .= '<br>';
        $message .= 'Сделка уже создана в АМО: <a href="https://irepairspb.amocrm.ru/leads/detail/'.$newOrderID.'" target="_blank">https://irepairspb.amocrm.ru/leads/detail/'.$newOrderID.'</a><br>';
        $message .= "Не забудьте заполнить модель и проблему – сейчас модель и проблема в примечаниях<br>";
        $message .= "Не забудьте зафиксировать обращение в чате Обращения в телеграме";

        $to = 'leads@irepair.spb.ru';
        $mailSMTP = new SendMailSmtpClass('applecare.spb@yandex.ru', 'berkas123321', 'ssl://smtp.yandex.ru', 465, 'UTF-8');
        $subject = "Новая заявка от партнера";
        $from = array('Center Apple', 'applecare.spb@yandex.ru');
        $result = $mailSMTP->send($to, $subject, $message, $from);


        if ($res == 1) {
            echo json_encode([
                'result' => 'ok'
            ]);
        } else {
            echo json_encode([
                'result' => 'error'
            ]);
        }
    }


    if ($_POST['action'] == 'new_dannie_kassi') {
        $vremya = $_POST['vremya'];
        $summa = $_POST['sum'];
        $auth = $_POST['auth'];
        $responsibleCity = $_POST['responsible_city'];
        $now = date('Y-m-d H:i:s');
        $notificationNow = date('d.m.y (H:i:s)');
        $notificationNowDate = date('d.m.y');
        
        $stmt = mysqli_prepare($connection, 'insert into dannie_kassi(timestamp, vremya, summa, responsible, responsible_city) values(?,?,?,?,?)');
        $stmt->bind_param('sssss', $now, $vremya, $summa, $auth, $responsibleCity);
        $res = $stmt->execute();
        $stmt->close();
        

        /* ПОПЫТКИ СДЕЛАТЬ УВЕДОМЛЕНИЯ */

        $notificationSumma = number_format($summa, 0, '', ',');
        $notificationAuthor = $auth;
        if ($vremya === "Утро") {
            $notificationEmoji = "☀️";
        } elseif ($vremya === "Вечер") {
            $notificationEmoji = "🌙";
        } else {
            $notificationEmoji = "❓";
        }

        $cashbox_chat_id = -1001357231681; // Касса СПб (по умолчанию)
        if ($responsibleCity == "Москва") {
            $cashbox_chat_id = -1001489136772;
        }

        $text = $notificationEmoji . "🗄 <b>ОТЧЁТ КАССЫ</b>" . PHP_EOL . $vremya . " " . $notificationNowDate . ": " . "<b>" . $notificationSumma . " руб.</b>" . PHP_EOL . "Кассир " . $notificationAuthor . " / " . $notificationNow;
        $ch = curl_init('https://api.telegram.org/bot718811290:AAEBilLtDwIjwjQHrFXa3f52rqkZlcNojKg/sendMessage');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => $cashbox_chat_id,
            'text' => $text,
            'parse_mode' => 'html'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_exec($ch);
        curl_close($ch);

        /* КОНЕЦ ПОПЫТОК СДЕЛАТЬ УВЕДОМЛЕНИЯ */

        echo json_encode($res == 1 ? ['result' => 'ok'] : ['result' => 'error']);
    }

    if ($_POST['action'] == 'save_eng_chat_id') {
        $chat_id = $_POST['chat_id'];
        $telegram = '@'.$_POST['telegram'];
        
        $stmt = mysqli_prepare($connection, 'update engineers set chat_id=? where telegram=?');
        $stmt->bind_param('ss', $chat_id, $telegram);
        $stmt->execute();
        $stmt->close();
    }

    if ($_POST['action'] == 'edit_si') {

        $id = $_POST['id'];

        $oldQ = mysqli_query($connection, 'select * from engineers where id="'.$id.'"');
        $oldArr = mysqli_fetch_array($oldQ);

        $telegram = $_POST['telegram'];
        $phone = $_POST['phone'];
        $active = (int)$_POST['active'];


        $stmt = mysqli_prepare($connection, 'update engineers set active=?, telegram=?, phone=? where id=?');
        $stmt->bind_param('isss', $active, $telegram, $phone, $id);
        $stmt->execute();
        $stmt->close();

        $ch = curl_init('http://irepair.spb.ru/si_telegram_edit.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'oldTelegram' => str_replace('@', '', $oldArr['telegram']),
            'telegram' => str_replace('@', '', $telegram)
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        // execute!
        $response = curl_exec($ch);

        echo json_encode(['result' => 'ok']);
    }

    if ($_POST['action'] == 'delete_si_bot_tg') {
        $id = $_POST['id'];
        $engQ = mysqli_query($connection, 'select * from engineers where id="'.$id.'"');
        $engArr = mysqli_fetch_array($engQ);

        $chat_id = $engArr['chat_id'];
        $telegram = $engArr['telegram'];

        mysqli_query($connection, 'update engineers set chat_id=NULL, telegram=NULL where id="'.$id.'"');

        $ch = curl_init('http://irepair.spb.ru/si_telegram_delete.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $post = array(
            'chat_id' => $chat_id,
            'telegram' => str_replace('@', '', $telegram)
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        // execute!
        $response = curl_exec($ch);

        echo json_encode(['result' => 'ok']);
    }

    if ($_POST['action'] == 'delete_si_from_telefon') {
        $id = (int)$_POST['id'];
        if ($id) {
            $stmt = mysqli_prepare($connection, 'update engineers set virtual_phone_number=NULL, call_scenario_id=NULL, telefoniya_status=0 where id=?');
            $stmt->bind_param('i', $id);
            $res = $stmt->execute();
            $stmt->close();

            echo json_encode(['result' => $res == 1 ? 'ok' : 'error']);
        }
    }

    if ($_POST['action'] == 'privyazat_si_k_telefonu') {
        $id = (int)$_POST['id'];
        $virtual_phone_number = $_POST['virtual_phone_number'];
        $call_scenario_id = $_POST['call_scenario_id'];

        $stmt = mysqli_prepare($connection, 'update engineers set virtual_phone_number=?, call_scenario_id=?, telefoniya_status=1 where id=?');
        $stmt->bind_param('sss', $virtual_phone_number, $call_scenario_id, $id);
        $res = $stmt->execute();
        $stmt->close();

        echo json_encode(['result' => $res == 1 ? 'ok' : 'error']);
    }
}

