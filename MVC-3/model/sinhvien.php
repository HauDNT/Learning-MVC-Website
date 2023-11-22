<?php
    require 'model/connect.php';

    function sinh_vien_index() {
        global $connect;
        $sql = "SELECT sinh_vien.*, lop.ten AS ten_lop 
                FROM sinh_vien 
                LEFT JOIN lop ON sinh_vien.malop = lop.ma";
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    function sinh_vien_store($ten, $ma_lop) {
        global $connect;
        $sql = "INSERT INTO sinh_vien(ten, malop) VALUES ('$ten', '$ma_lop')";
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    function sinh_vien_edit($ma) {
        global $connect;
        $sql = "SELECT * FROM sinh_vien WHERE ma = '$ma'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        mysqli_close($connect);

        return $each;
    }

    function sinh_vien_update($ma, $ten, $ma_lop) {
        global $connect;
        $sql = "UPDATE sinh_vien SET ten = '$ten', malop = '$ma_lop' WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

    function sinh_vien_delete($ma) {
        global $connect;
        $sql = "DELETE FROM sinh_vien WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }