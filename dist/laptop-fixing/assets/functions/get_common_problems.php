<?php
    require_once(__DIR__ . '/../configs/db-cfg.php');

    $selected_model = $_GET['selected_model'];
    $common_problems_arr = [];

    $get_common_problems_data = mysqli_query($connect, 'SELECT * FROM common_services WHERE MODEL_URL = "'.$selected_model.'"')
        or die('GET common problems data failed.' . mysqli_error($connect));

    for ($common_problems_index = 0; $common_problems_index < mysqli_num_rows($get_common_problems_data); $common_problems_index++)
    {
        array_push($common_problems_arr, mysqli_fetch_row($get_common_problems_data));
    }

    print_r(json_encode($common_problems_arr));
    die();