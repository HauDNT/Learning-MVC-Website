<?php
    // Đầu bếp (model) mở tủ lạnh (kết nối với databse)
    $connect = mysqli_connect('localhost', 'root', '', 'nhahang');
    mysqli_set_charset($connect, 'utf8');

    // để lấy nguyên liệu làm món ăn (thông tin từ database)
    $sql = "SELECT * FROM mon_an WHERE ten = '$monan'";
    mysqli_query($connect, $sql);

    // Làm xong thì thu được món ăn hoàn hảo:
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
?>




