<?php

    $connection = mysqli_connect('localhost','user10054_dbuser','A7y0T2n7','user10054_db');
    $connection -> set_charset("utf8");

    if (mysqli_connect_errno()) {
        echo 'Ошибка в подключении к базе данных (' . mysqli_connect_errno() . '): ' . mysqli_connect_error();
        exit();
    }
