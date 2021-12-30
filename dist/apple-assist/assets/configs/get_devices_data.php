<?php

require_once(__DIR__ . '/db-cfg.php');

$devices_arr = [];

$get_devices_data = mysqli_query($connect, 'SELECT * FROM devices ORDER BY ID DESC')
    or die('GET devices data Error! ' . mysqli_error($connect));

while ($device = $get_devices_data-> fetch_assoc()) {
    array_push($devices_arr, $device);
};

print_r(json_encode($devices_arr));
return;

