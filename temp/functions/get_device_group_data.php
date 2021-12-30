<?php
function get_device_group_data()
{

    $link = mysqli_connect($host, $username, $password, $database)
        or die('Error! ' . mysqli_error($link));
    $query = "SELECT * FROM DEVICE_GROUP";
    $result = mysqli_query($link, $query)
        or die('Error! ' . mysqli_error($link));

    mysqli_close($link);
    return $result;
}
