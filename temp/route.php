<?php

require_once(__DIR__.'/configs/db-cfg.php');
require_once(__DIR__.'/functions/get_device_group_data.php');

$_GET['url'] = strtr($_GET['url'],['.php'=>'']);

$link = mysqli_connect($host, $username, $password, $database)
    or die('Error! ' . mysqli_error($link));
$query = "SELECT * FROM DEVICE_GROUP";
$mysql_device_group_data = mysqli_query($link, $query)
    or die('Error! ' . mysqli_error($link));
mysqli_close($link);

if ($mysql_device_group_data)
{
    for ($i = 0; $i < mysqli_num_rows($mysql_device_group_data); ++$i)
    {
        $mysql_device_group = mysqli_fetch_row($mysql_device_group_data);
        /*
          * $mysql_device_group[0] - device_group_id
          * $mysql_device_group[1] - device_group_url
          * $mysql_device_group[2] - device_group_name
         */

        if ($_GET['url'] == $mysql_device_group[1])
        {
            $_GET['device_group_id'] = $mysql_device_group[0];
            require_once(__DIR__.'/device.php');
        }
    }
}

