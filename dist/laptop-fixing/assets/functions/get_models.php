<?php
    require_once(__DIR__ . '/../configs/db-cfg.php');
    $selected_device = $_GET['selected_device'] ? $_GET['selected_device'] : 'laptops';

    $models_arr = [];

    $get_models = mysqli_query($connect, 'SELECT * FROM models WHERE device_url = "'.$selected_device.'"')
        or die('GET models data error' . mysqli_error($connect));

    for ($model_index = 0; $model_index < mysqli_num_rows($get_models); $model_index++)
    {
        $model_data = mysqli_fetch_row($get_models);
        array_push($models_arr, $model_data);
    }
    print_r(json_encode($models_arr));
    return;
    die();

