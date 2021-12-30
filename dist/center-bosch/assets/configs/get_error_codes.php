<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once (__DIR__ . '/db-cfg.php');

    $error_codes = [];

    $get_error_codes = mysqli_query($connect, 'SELECT * FROM error_codes ORDER BY ID ASC');

    while ($code = $get_error_codes -> fetch_assoc())
    {
        array_push($error_codes, $code);
    };

    print_r(json_encode($error_codes));
