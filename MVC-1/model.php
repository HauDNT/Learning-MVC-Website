<?php
    $connect = mysqli_connect('localhost', 'root', '', 'webmvc');
    mysqli_set_charset($connect, 'utf8');

    $sql = "SELECT * FROM mon_an WHERE ten = '$monan'";
    mysqli_query($connect, $sql);

    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);





