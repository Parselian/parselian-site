<?php
    require_once(__DIR__ . '/../configs/db-cfg.php');

    $devices_data_arr = [];

    $get_devices = mysqli_query($connect, 'SELECT * FROM devices')
        or die('GET devices data failed. ' . mysqli_error($connect));

    for ($deviceIndex = 0; $deviceIndex < mysqli_num_rows($get_devices); $deviceIndex++)
    {
        array_push($devices_data_arr, mysqli_fetch_row($get_devices));
        /*
         * $device_data[0] - ID
         * $device_data[1] - device_name
         * $device_data[2] - device_url
         * */
    }

    print_r(json_encode($devices_data_arr));
    die();