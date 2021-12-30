<?php
    $host = 'localhost';
    $user = 'd73238_dbuser';
    $password = 'RK2IMyV*@qQd~GBJ';
    $db = 'd73238_db';

    $connect = mysqli_connect($host, $user, $password, $db)
        or die('MySQL connection fail. ' . mysqli_error($connect));
mysqli_set_charset($connect, "utf8mb4");