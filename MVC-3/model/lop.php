<?php
    require 'model/connect.php';

    function lop_index() {
        global $connect;
        $sql = "SELECT * FROM lop";
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    function lop_store($ten) {
        global $connect;
        $sql = "INSERT INTO lop(ten) VALUES ('$ten')";
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    function lop_edit($ma) {
        global $connect;
        $sql = "SELECT * FROM lop WHERE ma = '$ma'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        mysqli_close($connect);

        return $each;
    }

    function lop_update($ma, $ten) {
        global $connect;
        $sql = "UPDATE lop SET ten = '$ten' WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

    function lop_delete($ma) {
        global $connect;
        $sql = "DELETE FROM lop WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }