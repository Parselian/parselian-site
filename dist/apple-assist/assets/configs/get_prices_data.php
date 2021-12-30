<?php

    require_once(__DIR__ . '/db-cfg.php');

    $selected_device = $_GET['selected_device'];
//    $selected_device = 'iphone 4';
    $prices_data_arr = [];

    $get_prices_data = mysqli_query($connect, "SELECT * FROM device_problems WHERE DEVICE_NAME='".$selected_device."'")
        or die('Get prices data failed! ' . mysqli_error($connect));


   /* foreach (mysqli_fetch_all($get_prices_data) as $item) {
        array_push($prices_data_arr, $item);
    }*/

    while ($device = $get_prices_data-> fetch_assoc()) {
        array_push($prices_data_arr, $device);
    };

    print_r(json_encode($prices_data_arr));
    return;