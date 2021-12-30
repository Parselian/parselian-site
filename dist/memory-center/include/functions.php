<?php

function formatPhoneNumber ($phoneNumber) {
    $formatedPhoneNumber = substr($phoneNumber, 0, 1) . '&nbsp;' . substr($phoneNumber, 1, 3) . '&nbsp;' . substr($phoneNumber, 4, 3) . '&nbsp;' . substr($phoneNumber, 7, 2) . '&nbsp;' . substr($phoneNumber, 9, 2);
    return $formatedPhoneNumber;
}

function escapeEngCharacters ($string) {
    $string = str_replace(['a', 'b','c', 'd','e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
    'A', 'B','C', 'D','E', 'F', 'G', 'H', 'I', 'J', 'K', 'l', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'], 'a', $string);
    $string = addslashes($string);
    return $string;
}

function isInString ($existString, $lookingString) {
    if (stripos($existString, $lookingString) === false) {
        return false;
    } else {
        return true;
    }
}

function isCurrentUrl ($lookingString) {
    if (stripos($_SERVER['REQUEST_URI'], $lookingString) === false) {
        return false;
    } else {
        return true;
    }
}

function isCurrentGroupUrl ($currentGroup) {
    foreach ($currentGroup as $url) {
        if (isCurrentUrl($url)) {
            return true;
        }
    }
    return false;
}

function moscowTimeFromLatvian($latvianTimestamp) {
    $moscowTimestamp = strtotime($latvianTimestamp) + 10800;
    return $moscowTimestamp;
}

function getIdHttpStrFromArray ($idsArray) {
    $str = '';
    foreach ($idsArray as $id) {
        $str = $str . '&id[]=' . $id;
    }
    return substr($str, 1);
}

//  Активные СИ
function getActiveEngineers () {
    global $connection;
    $sql = "SELECT * FROM engineers WHERE active=1";
    $result = mysqli_query($connection, $sql, 1);
//      $activeEngineers = mysqli_fetch_assoc($result); запрещено на сервере
    while ($row = $result->fetch_assoc()) {
        $row ['virtual_phone_number_formated'] = formatPhoneNumber($row['virtual_phone_number']); 
        if ($row['name'] != 'ЧП СЦЭ') { // обрабатываем несуществующего СИ
            $activeEngineers [] = $row;
        }
    }
    return $activeEngineers;
}
function getAllEngineers () {
    global $connection;
    $sql = "SELECT * FROM engineers";
    $result = mysqli_query($connection, $sql, 1);
    while ($row = $result->fetch_assoc()) {
        $row ['virtual_phone_number_formated'] = formatPhoneNumber($row['virtual_phone_number']); 
        $engineers [] = $row;
    }
    return $engineers;
}

function getAllEngineersKeyName () {
    global $connection;
    $sql = "SELECT * FROM engineers";
    $result = mysqli_query($connection, $sql, 1);
    while ($row = $result->fetch_assoc()) {
        $row ['virtual_phone_number_formated'] = formatPhoneNumber($row['virtual_phone_number']); 
        $engineers [$row['name']] = $row;
    }
    return $engineers;
}
function getAllEngineersKeyID () {
    global $connection;
    $sql = "SELECT * FROM engineers";
    $result = mysqli_query($connection, $sql, 1);
    while ($row = $result->fetch_assoc()) {
        $row ['virtual_phone_number_formated'] = formatPhoneNumber($row['virtual_phone_number']); 
        $row ['phone_cleared'] = clearPhoneNumberFromCharacters($row['phone']); 
        $engineers [$row['id']] = $row;
    }
    return $engineers;
}


function makeEngReportIDListByEngID ($engineerID) {
    $reportsQ = mysqli_query($connection, 'select * from eng_reports where eng_id="'.$engineerID.'"');
    while ($row = mysqli_fetch_array($reportsQ)) {
        $reportIDList[] = $row['orderID'];
    }
    return $reportIDList;
}

//  Актуальные сделки СИ в ERP
function getActualOrdersByEngineerName ($connection, $engineerName) {
    $sql = 'select * from amo_leads where eng="'.$engineerName.'" and status in (16715350, 27230563, 27230566, 28267039, 16715359, 16840747) and actual=1 and is_prodolzhenie="Нет"';
    $result = mysqli_query($connection, $sql, 1);
    while ($row = $result->fetch_assoc()) {
        $actualOrders [] = $row;
    }
    return $actualOrders;
}

function makeERPOrdersByAmoLeads ($amoLeads, $engineer_id = null) {
    foreach ($amoLeads['response']['leads'] as $lead) { // Собираем массив актуальных сделок СИ и список контактов ВСЕХ актуальных сделок
        $leads[$lead['id']] = getLeadCustomFieldsByLead($lead);
        if (!empty($lead['main_contact_id'])) {
            $leadsNeededContacts [] = $lead['main_contact_id']; // собираем список всех актуальных контактов
        }
        $engLeads[$lead['id']] = $leads[$lead['id']];
    }
    require_once($_SERVER['DOCUMENT_ROOT'].'/amocrm/amo_api.php');
    $amo = new AmoController();
    $amoLeadsContacts = $amo->getContactsByIDSrtArr(getIdHttpStrFromArray($leadsNeededContacts)); // Получаем данные контатов ВСЕХ актуальных сделок
    foreach ($amoLeadsContacts['response']['contacts'] as $allLeadContact) { // Делаем массив c данными всех актуальных контактов
        $leadsContacts[$allLeadContact['id']] = getContactsCustomFieldsByContact($allLeadContact);
    }

    if (isset($engineer_id)) {
        $engReportIDList = makeEngReportIDListByEngID($engineer_id);
    }

    foreach ($leads as $lead) { // Добавляем дополнительные поля
        $leads[$lead['id']]['main_contact_info'] = $leadsContacts[$lead['main_contact_id']];  // Добавляем информацию контакта
        if (isset($engineer_id)) {
            if (in_array($lead['id'], $engReportIDList)) {
                $leads[$lead['id']]['have_report'] = true;     // уже есть отчет
            } else {
                $leads[$lead['id']]['have_report'] = false;    // нет отчета
            }
        } else {
            $leads[$lead['id']]['have_report'] = false; // нет данных (не знаю как обработкать)    // нет данных
        }
    }
    // foreach ($engLeads as $actualLead) { // Собираем массив для вывода в навигации
    //     $erpLeads[$actualLead['id']] = $leads[$actualLead['id']];
    // }
    return $leads;
}


//  ПРОВЕРКА СУЩЕСТВУЕТ ЛИ СДЕЛКА В ТАБЛИЦЕ AMO_LEADS
function isLeadExistInAmoLeads ($connection, $orderID) {

    $sql = "SELECT actual FROM amo_leads WHERE orderID='$orderID' ORDER BY actual DESC LIMIT 1";
    $result = mysqli_query($connection, $sql, 1);
    //$alreadyExist = mysqli_fetch_array($result);

    while ($row = $result->fetch_assoc()) {
        $alreadyExist = $row;
    }

    if ($alreadyExist['actual'] == 1) {
        return true;
    } else {
        return false;
    }

}

//  ПРОВЕРКА СУЩЕСТВУЕТ ЛИ СДЕЛКА В ТАБЛИЦЕ AMO_LEADS
function isLeadExistInAmoCRM ($orderID) {
    //return true;

    include_once('https://sca.tools/amocrm/amo_api.php');
    $amo = new AmoController();
    $amoLead = $amo->getLeadByID($orderID);

    foreach ($amoLead['response']['leads'] as $lead) {
        if ($lead['id'] == $orderID) {
            //echo '<br>Сделка есть в CRM<br>';
            return true;
        } else {
            //echo '<br>Сделки нет в CRM<br>';
            return false;
        }
    }
}

function getUserNameByAmoUserID ($amoUserID) {

    $result = 'Неизвестный аккаунт amoCRM';
    switch ($amoUserID) {
        case 1025449: $result = 'Дима Нева'; break;
        case 1796599: $result = 'СЦЭ Бот'; break;
        case 2494411: $result = 'Артур Оператор №2'; break;
        case 2583154: $result = 'Кирилл'; break;
        case 2597784: $result = 'Матвей'; break;
        case 3394351: $result = 'Виктор Оператор №3'; break;
        case 3483754: $result = 'Михаил Оператор №4'; break;
        case 3581464: $result = 'Андрей Рыжов'; break;
        case 3619537: $result = 'Павел Куратор'; break;
        case 3866413: $result = 'Алексей Кузнецов'; break;            
        case 3440728: $result = 'Егор / Александр ОКК'; break;
    }
    return $result;
/*
    if ($amoUserID == 1796599) {
        return 'СЦЭ Бот';
    } elseif ($amoUserID == 2583154) {
        return 'Кирилл';
    } else {
        return 'Неизвестный аккаунт AMO';
    }
*/

}

// ЗВОНКИ
function makeCallByScenarioIDToPhoneNumber ($scenarioID, $phoneNumber, $workPhoneNumber = null) {
    if (isset($workPhoneNumber)) {
        // все ок, показываем номер, который нам дали
    } else {
        $workPhoneNumber = '78126026293'; // показываем "заглушку", ведет на КЦ АГ
    }
    $param = array(
        'access_token' => 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
        'virtual_phone_number' => $workPhoneNumber,
        'contact' => $phoneNumber,
        'first_call' => 'employee',
        'scenario_id' => $scenarioID
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
    return $response;
}

function getStatusNameByAmoStatusID ($amoStatusID) {
    $result = 'Неизвестный статус amoCRM';
    switch ($amoStatusID) {
        case 16714372: $result = 'Первичный контакт'; break;
        case 16715356: $result = 'Перезвонить'; break;
        case 16714378: $result = 'Клиент думает'; break;
        case 16714381: $result = 'Организация ремонта'; break;
        case 16715350: $result = 'Ожидается ремонт'; break;
        case 27230560: $result = 'На обмене'; break;
        case 27230563: $result = 'На пайке'; break;
        case 27230566: $result = 'Рассрочка'; break;
        case 28267039: $result = 'Безнал / терминал'; break;
        case 32916553: $result = 'Обмен'; break;
        case 16715359: $result = 'Ожидается отчет'; break;
        case 16840747: $result = 'Ожидается выручка'; break;
        case 16840750: $result = 'Ожидается расчет с мастером'; break;
        case 16715500: $result = 'Обращение по гарантии'; break;
        case 28120579: $result = 'Гарантия в работе у Егора'; break;
        case 28117837: $result = 'Ожидается выезд ГСИ'; break;
        case 28120993: $result = 'Ожидается отчет ГСИ'; break;
        case 28806052: $result = 'Претензия - ожидает ответа'; break;
        case 28806055: $result = 'Претензия - ответ отправлен'; break;
        case 142: $result = 'Успешно реализовано'; break;
        case 143: $result = 'Закрыто и нереализовано'; break;
    }
    return $result;
}

function isLeadStatusIDInWork ($status_id) {
    $workStatusIDs = [16715350, 27230560, 27230563, 27230566, 28267039, 16715359, 16840747];
    if (in_array($status_id,$workStatusIDs)) {
        return true;
    } else {
        return false;
    }
}

function getLeadCustomFieldsByLead($lead) {
    $id = $lead['id'];
    $name = $lead['name'];
    $mainContactId = $lead['main_contact_id'];
    $statusId = $lead['status_id'];
    $statusName = getStatusNameByAmoStatusID ($statusId);
    $responsibleUserId = $lead['responsible_user_id'];
    $responsibleUserName = getUserNameByAmoUserID($responsibleUserId);
    $cf = $lead['custom_fields'];
    $from = ''; $color = ''; $device = ''; $model = ''; $problem = ''; $services = ''; $address = ''; $time = ''; $metro = '';$dat = "";
    foreach ($cf as $arr) {
        if ($arr['id'] == 475581) {
            $from = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 26143) {
            $color = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 477995) {
            $buttonColor = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 26069) {
            $dat = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 26063) {
            $device = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 475583) {
            $model = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 476893) {
            $features = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 26045) {
            $problem = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 475585) {
            $services = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 476895) {
            $descriptionProblem = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 26071) {
            $address = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 476897) {
            $addressShort = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 29683) {
            $time = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 460647) {
            $metro = $arr['values'][0]['value'];
        }
        if ($arr['id'] == 29649) {
            $remark = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 485453 ) {
            $engineer = $arr['values'][0]['value']; // new
        }

        //  ГАРАНТИЯ
        if ($arr['id'] == 474563 ) {
            $warranyStatus = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 474565 ) {
            $warranyDate = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 474567 ) {
            $warranyTime = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 474569 ) {
            $warranyEngineer = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 484779 ) {
            $warranyConflict = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 485189 ) {
            $warranyDescription = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 485191 ) {
            $warranyAdvice = $arr['values'][0]['value']; // new
        }
        /*
            474563 статус гарантии СЕЛЕКТ
            474565 дата гарантии
            474567 время гарантии
            474569 ГСИ СЕЛЕКТ
            484779 претензия ЧЕКБОКС
            485189 описание гарантии
            485191 совет для ГСИ
        */

        // Продолжение
        if ($arr['id'] == 479325 ) {
            $isContinuation = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 485147 ) {
            $continuationReason = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 479327 ) {
            $mainLeadId = $arr['values'][0]['value']; // new
        }
        /*
            479325 продолжение ЧЕКБОКС
            485147 основание продолжения
            479327 номер основного заказа
        */

        //  Обмены
        if ($arr['id'] == 488551 ) {
            $swapIMEI = $arr['values'][0]['value']; // swap imei
        }
        if ($arr['id'] == 488577 ) {
            $swapDevice = $arr['values'][0]['value']; // swap device
        }
        if ($arr['id'] == 488573 ) {
            $swapLeadID = $arr['values'][0]['value']; // swap lead id
        }
        if ($arr['id'] == 488557 ) {
            $swapEngineerName = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 488553 ) {
            $swapDateReceipt = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 488559 ) {
            $swapIsGoingToMoscow = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 488565 ) {
            $swapYear = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 488563 ) {
            $swapCountry = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 488567 ) { // Дефекты
            if (count($arr['values']) > 1) {
                $defectsStr = '';
                foreach ($arr['values'] as $arrValue) {
                    $defectsStr = $defectsStr . ', '. $arrValue['value'];
                }
                $swapDefects = substr($defectsStr, 2);
            } else {
                $swapDefects = $arr['values'][0]['value']; // new
            }
        }
        if ($arr['id'] == 488571 ) {
            $swapCosts = $arr['values'][0]['value']; // издержки
        }
        if ($arr['id'] == 488569 ) {
            $swapPrice = $arr['values'][0]['value']; // озвучка
        }
        if ($arr['id'] == 488561 ) {
            $swapDateDeparture = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 488555 ) {
            $swapDateArrival = $arr['values'][0]['value']; // new
        }
        if ($arr['id'] == 488575 ) {
            $swapCurrentLocation = $arr['values'][0]['value']; // new
        }
        
        /*
            488551 IMEI
            488577 Устройство
            488573 Номер заказа СИ
            488557 Кто сдал устройство
            488553 Дата приема устройства (дата)
            488559 Поедет в Москву (селект да/нет)
            488565 Год устройства (селект)
            488563 Страна-производитель (селект ...)
            488567 Проблемы устройства (мультиселект)
            488571 Стоймость работ АСЦ, руб.
            488569 Озвученая стоимость, руб.
            488561 Дата отправки в обмен (дата)
            488555 Ожидаемая дата возврата (дата)
            488575 Текущее местонахождение
        */ 
    }
    $result = array(
        'id' => $id,
        'name' => $name,
        'status_id' => $statusId,
        'status_name' => $statusName,
        'responsible_user_id' => $responsibleUserId,
        'responsible_user_name' => $responsibleUserName,
        'from' => $from,
        'color' => $color,
        'button_color' => $buttonColor, // buttonColor изменил
        'device' => $device,
        'model' => $model,
        'features' => $features,
        'problem' => $problem,
        'services' => $services,
        'description_problem' => $descriptionProblem, // descriptionProblem изменил
        'address' => $address,
        'address_short' => $addressShort, // addressShort изменил
        'time' => $time,
        'metro' => $metro,
        'date' => $dat,
        'remark' => $remark,
        'main_contact_id' => $mainContactId,
        'engineer' => $engineer,
        'is_continuation' => $isContinuation,
        'continuation_reason' => $continuationReason,
        'continuation_main_lead_id' => $mainLeadId,
        'warranty_status' => $warranyStatus,
        'warranty_date' => $warranyDate,
        'warranty_time' => $warranyTime,
        'warranty_engineer' => $warranyEngineer,
        'warranty_conflict' => $warranyConflict,
        'warranty_description' => $warranyDescription,
        'warranty_advice' => $warranyAdvice,
        'swap_imei' => $swapIMEI,
        'swap_device' => $swapDevice,
        'swap_lead_id' => $swapLeadID,
        'swap_engineer_name' => $swapEngineerName,
        'swap_date_receipt' => $swapDateReceipt,
        'swap_is_going_to_moscow' => $swapIsGoingToMoscow,
        'swap_year' => $swapYear,
        'swap_country' => $swapCountry,
        'swap_defects' => $swapDefects,
        'swap_costs' => $swapCosts,
        'swap_price' => $swapPrice,
        'swap_date_departure' => $swapDateDeparture,
        'swap_date_arrival' => $swapDateArrival,
        'swap_current_location' => $swapCurrentLocation
    );
    return $result;
}

function clearContactNameFromPhoneNumber ($name) {
    $characters = ['0','1','2','3','4','5','6','7','8','9','(',')',' ','+'];
    $clearName = str_replace($characters, '', $name);
    return $clearName;
}
function clearPhoneNumberFromCharacters ($phoneNumber) {
    $characters = [' ', '+', '(', ')'];
    $clearPhone = str_replace($characters, '', $phoneNumber);
    return $clearPhone;
}

function getContactsCustomFieldsByContact($contact) {
    // $contact = $contact['response']['contacts'];
    $id = $contact['id'];
    $name = clearContactNameFromPhoneNumber($contact['name']);
    $linked_leads_id = $contact['linked_leads_id'];
    // $phone = $contact['custom_fields'][0]['values'][0]['value'];
    foreach ($contact['custom_fields'][0]['values'] as $phone) {
        $phones[] = clearPhoneNumberFromCharacters($phone['value']);
    }
    $result = array(
        'id' => $id,
        'name' => $name,
        'phone_numbers' => $phones,
        'linked_leads_id' => $linked_leads_id
    );
    return $result;
}

function addLeadInAmoLeadsByOrderID ($connection, $orderID, $showLog) {

    if ($showLog == true) {
        // выводим лог
    } else {
        $showLog = false;
    }

    date_default_timezone_set('Europe/Moscow');

    include_once('https://sca.tools/amocrm/amo_api.php');
    $amo = new AmoController();
    $amoLead = $amo->getLeadByID($orderID);

    foreach ($amoLead['response']['leads'] as $lead) {
    //    echo $lead['id'];
    }

    $json = print_r($lead, true);

    $src = ""; $neskolko_ustroistv = ""; $model1 = ""; $cvet1 = ""; $cvet_home1 = ""; $model_a1 = ""; $model_feature1 = ""; $problem1 = ""; $uslugi1 = ""; $problem_description1 = "";
    $note = ""; $full_address = ""; $short_address = ""; $metro = ""; $service_date = ""; $time = ""; $model2 = ""; $cvet2 = ""; $cvet_home2 = ""; $model_a2 = "";
    $model_feature2 = ""; $problem2 = ""; $uslugi2 = ""; $problem_description2 = ""; $is_prodolzhenie = "Нет"; $nomer_prodolzheniya = ""; $pretensiya = ""; $gsi = "";
    $eng = ""; $garanty_date = ""; $garanty_time = ""; $city = "";

    foreach ($lead['custom_fields'] as $cf) {
        if ($cf['id'] == 475581) {
            $src = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479181) {
            $neskolko_ustroistv = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 26063) {
            $model1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 26143) {
            $cvet1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 477995) {
            $cvet_home1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 475583) {
            $model_a1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 476893) {
            $model_feature1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 26045) {
            $problem1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 475585) {
            $uslugi1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 476895) {
            $problem_description1 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 29649) {
            $note = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 26071) {
            $full_address = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 476897) {
            $short_address = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 460647) {
            $metro = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 26069) {
            // $service_date = date("Y-m-d H:i:s", $cf['values'][0]); Строка Саши
            $service_date = $cf['values'][0]['value']; // Моя строка
        }
        if ($cf['id'] == 29683) {
            $time = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479307) {
            $model2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479309) {
            $cvet2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479311) {
            $cvet_home2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479313) {
            $model_a2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479315) {
            $model_feature2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479317) {
            $problem2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479401) {
            $uslugi2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479403) {
            $problem_description2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479403) {
            $problem_description2 = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479327) {
            $nomer_prodolzheniya = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 484779) {
            $pretensiya = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 474569) {
            $gsi = $cf['values'][0]['value'];
        }
        /*if ($cf['id'] == 26073) {
            $eng = $cf['values'][0]['value'];
        }*/
        if ($cf['id'] == 485453) {
            $eng = $cf['values'][0]['value'];
        }

        if ($cf['id'] == 474567) {
            $garanty_time = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 474565) {
            $garanty_date = $cf['values'][0]['value'];
        }
        if ($cf['id'] == 479325) {
            if ($cf['values'][0]['value'] == 1) {
                $is_prodolzhenie = 'Да';
            }
        }
        if ($cf['id'] == 487265) {  // 487265 city
            $city = $cf['values'][0]['value'];
        }
    }

    if (strpos(strtolower($lead['name']), "родол") !== false) {
        $is_prodolzhenie = "Да";
    }

    $status = "";
    $status = $lead['status_id'];
    $orderID = $lead['id'];

    $stmt = mysqli_prepare($connection, 'insert into amo_leads(timestamp, txt, orderID, src, status, neskolko_ustroistv, model1, cvet1, cvet_home1, model_a1, model_feature1, problem1, uslugi1, problem_description1, note, full_address, short_address, metro, service_date, time, model2, cvet2, cvet_home2, model_a2, model_feature2, problem2, uslugi2, problem_description2, is_prodolzhenie, nomer_prodolzheniya, pretensiya, gsi, eng, garanty_date, garanty_time, city) values(NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    if ( false===$stmt ) {
        // and since all the following operations need a valid/ready statement object
        // it doesn't make sense to go on
        // you might want to use a more sophisticated mechanism than die()
        // but's it's only an example
        // die('> Не удалось выполнить prepare(). Ошибка: ' . htmlspecialchars($mysqli->error));
        if ($showLog) {
            echo '> Не удалось выполнить prepare(). Ошибка: ' . htmlspecialchars($mysqli->error);
        }
        return false;
    }
    
    $stmt->bind_param('sssssssssssssssssssssssssssssssssss', $json, $orderID, $src, $status, $neskolko_ustroistv, $model1, $cvet1, $cvet_home1, $model_a1, $model_feature1, $problem1, $uslugi1, $problem_description1, $note, $full_address, $short_address, $metro, $service_date, $time, $model2, $cvet2, $cvet_home2, $model_a2, $model_feature2, $problem2, $uslugi2, $problem_description2, $is_prodolzhenie, $nomer_prodolzheniya, $pretensiya, $gsi, $eng, $garanty_date, $garanty_time, $city);
    if ( false===$stmt ) {
        // again execute() is useless if you can't bind the parameters. Bail out somehow.
        if ($showLog) {
            echo '> Не удалось выполнить bind_param(). Ошибка: ' . htmlspecialchars($stmt->error);
        }
        return false;
    }

    $stmt->execute(); // нужно
    // execute() can fail for various reasons. And may it be as stupid as someone tripping over the network cable
    // 2006 "server gone away" is always an option
    if ( false===$stmt ) {
        if ($showLog) {
            echo '> Не удалось выполнить execute(). Ошибка: ' . htmlspecialchars($stmt->error);
        }
        return false;
    }
    $stmt->close();   // нужно
    if ($showLog) {
        echo '> Автоматический импорт сделки успешно выполнен ...<br>';
    }
    return true;
}

function getUisCallsByTimestamp ($lookingTimestampStart, $lookingTimestampFinish = null) {
    if (isset($lookingTimestampFinish)) {
        // все ок
    } else {
        $lookingTimestampFinish = date('Y-m-d H:i:s', strtotime('tomorrow'));
    }
    $param = array(
        'access_token' => 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
        'date_from' => $lookingTimestampStart,
        'date_till' => $lookingTimestampFinish
    );
    $parameters = array(
        'id' => intval(rand(0, 9999)),
        'jsonrpc' => '2.0',
        'method' => 'get.calls_report',
        'params' => $param
    );
    $ch = curl_init('https://dataapi.uiscom.ru/v2.0');
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Authorization: ' . 'wo55e0ka3civyfk6bg1h3j6lwlze396hidzqmo05',
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($parameters)
    ));
    $response = curl_exec($ch); // Send the request
    
    if ($response === FALSE) { // Check for errors
        die(curl_error($ch));
    }

    // Decode the response
    $calls = json_decode($response, TRUE);
    return $calls['result']['data'];
}
function getProcessedUisCallsByTimestamp ($lookingTimestampStart) {
    global $connection;
    $processedCallsQuery = mysqli_query($connection, 'select * from uis_processed_engineer_calls where timestamp>"'.$lookingTimestampStart.'"');
    while ($processedCallFetch = mysqli_fetch_assoc($processedCallsQuery)) {
        $processedCalls[] = $processedCallFetch;
    };
    return $processedCalls;
}
function getCountUisCallsByContactPhoneNumber ($contact_phone_number, $virtual_phone_number = null) {
    if (isset($virtual_phone_number)) {
        global $connection;
        $callsCountQ = mysqli_query($connection, 'select count(*) as c from uis_processed_engineer_calls where contact_phone_number="' . $contact_phone_number . '" AND virtual_phone_number="' . $virtual_phone_number . '"');
        $callsCountArr = mysqli_fetch_assoc($callsCountQ);
        return $callsCountArr['c'];
    }
}
function getTelegramCallsByTimestamp ($lookingTimestampStart) {
    global $connection;
    $telegramCallsQuery = mysqli_query($connection, 'select * from telegram_calls where timestamp>"'.$lookingTimestampStart.'"');
    while ($telegramCallFetch = mysqli_fetch_assoc($telegramCallsQuery)) {
        $telegramCalls[$telegramCallFetch['communication_id']] = $telegramCallFetch;
    };
    return $telegramCalls;
}
function makeNotificationLeadStatByLead ($lead) {
    if ($lead['device'] != '') {
        $notificationDevice = $lead['device'];
    } else {
        $notificationDevice = 'Не заполнено в CRM';
    }
    if ($lead['problem'] != '') {
        $notificationProblem = $lead['problem'];
    } else {
        $notificationProblem = 'Не заполнено в CRM';
    }
    if ($lead['date'] != '') {
        $notificationServiceDate = date('d.m', strtotime($lead['date']));
    } else {
        $notificationServiceDate = 'Не заполнено в CRM';
    }
    if ($lead['time'] != '') {
        $notificationTime = $lead['time'];
    } else {
        $notificationTime = 'Не заполнено в CRM';
    }
    $notificationLeadStat = $notificationDevice . ' / ' . $notificationProblem . ' / ' . $notificationServiceDate . ' <b>' . $notificationTime . '</b>';
    return $notificationLeadStat;
}

function saveProcessedEngineerCall ($communication_id, $contact_phone_number, $virtual_phone_number) {
    global $connection;
    $stmt = mysqli_prepare($connection, 'insert into uis_processed_engineer_calls (communication_id, contact_phone_number, virtual_phone_number) values(?,?,?)');
    $stmt->bind_param('sss', $communication_id, $contact_phone_number, $virtual_phone_number);
    $stmt->execute();
    $stmt->close();
    return true;
}

function getNextOrderDecisionPendingID () {
    global $connection;
    $sql = "SELECT MAX(decision_id) as max_decision_id FROM order_decision_pending_queue";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $max_decision_id = $row['max_decision_id'];
    $next_decision_id = $max_decision_id + 1;
    return $next_decision_id;
}

function getChatIDsByEngineerID ($engineerID) {
    $action = 'get_chat_ids_by_engineer_id';
    if (is_numeric($engineerID)) {
        // все ок
    } else {
        return 0;
    }
    $myCurl = curl_init();
    curl_setopt_array($myCurl, array(
        CURLOPT_URL => 'https://center-mercedes.ru/bots/telegram-sca-engineer-bot/bot-api-1-0.php?action='.$action.'&engineer_id='.$engineerID,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query(array(
            // Пустой массив поста //
    ))));
    $response = curl_exec($myCurl);
    curl_close($myCurl);
    $decoded = json_decode($response, true);
    return $decoded;
}

?>