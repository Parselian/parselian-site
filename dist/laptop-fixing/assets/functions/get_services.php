<?php
    require_once(__DIR__ . '/../configs/db-cfg.php');

    $selected_model = $_GET['selected_model'];
    $services_arr = [];

    $get_services = mysqli_query($connect, 'SELECT * FROM services WHERE MODEL_URL = "'.$selected_model.'"')
        or die('GET services data failed.' . mysqli_error($connect));

    for ($services_index = 0; $services_index < mysqli_num_rows($get_services); $services_index++)
    {
        array_push($services_arr, mysqli_fetch_row($get_services));
    }

    print_r(json_encode($services_arr));
    die();