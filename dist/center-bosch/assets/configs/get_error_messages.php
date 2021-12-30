<?php

    require_once (__DIR__ . '/db-cfg.php');

    $error_messages = [];

    $get_error_messages = mysqli_query($connect, 'SELECT * FROM error_descriptions');

    while ($message = $get_error_messages -> fetch_assoc())
    {
        array_push($error_messages, $message);
    }

    print_r(json_encode($error_messages));