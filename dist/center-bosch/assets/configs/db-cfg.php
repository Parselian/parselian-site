<?php
    $host = 'localhost';
    $user = 'user10792_dbuser';
    $pwd = 'nV4sE7mO7cjW5b';
    $db = 'user10792_center-bosch';

    $connect = mysqli_connect($host, $user, $pwd, $db)
        or die('MySQL connect failed!' . mysqli_error($connect));

    $connect->set_charset('utf8');