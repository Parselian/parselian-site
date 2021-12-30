<?php

    $host = 'localhost';
    $username = 'vyach392_admin';
    $pwd = 'XmZcuLqdKUKmjf6804iC';
    $db = 'vyach392_apple-assist';

    $connect = mysqli_connect($host, $username, $pwd, $db)
        or die('MySQL connect failed! ' . mysqli_error($connect));

$connect->set_charset('utf8');