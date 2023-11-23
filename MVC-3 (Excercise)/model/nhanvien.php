<?php
    require 'model/connect.php';

    function nhanvien_index() {
        global $connect;
        $sql = "SELECT nhanvien.ma as manv, nhanvien.ten as tennv, phong.ten as tenphong, phong.ma
                FROM nhanvien LEFT JOIN phong ON nhanvien.maphong = phong.ma";
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    function nhanvien_insert($ten, $maPhong) {
        global $connect;
        $sql = "INSERT INTO nhanvien(ten, maphong) VALUES ('$ten', '$maPhong')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

    function nhanvien_edit($ma) {
        global $connect;
        $sql = "SELECT * FROM nhanvien WHERE ma = '$ma'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        mysqli_close($connect);

        return $each;
    }

    function nhanvien_update($ma, $ten, $maPhong) {
        global $connect;
        $sql = "UPDATE nhanvien SET ten = '$ten', maphong = '$maPhong' WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

    function nhanvien_delete($ma) {
        global $connect;
        $sql = "DELETE FROM nhanvien WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }