<?php
    // File model/phong.php là nơi xử lý tất cả thao tác, còn file controller/phong.php là file điều hướng.
    // Ta cần kết nối với cơ sở dữ liệu từ laragon:
    require 'model/connect.php';

    // Ta viết các hàm để thực thi chương trình:
    // Hàm xuất ra thông tin từ bảng 'phong':
    function phong_index() {
        global $connect;    // Gọi kiểu global cho phép chúng ta sử dụng biến kết nối $connect từ bên trong hàm.
        $sql = "SELECT * FROM phong";
        $result = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    // Hàm thêm thông tin vào bảng:
    function phong_insert($ten) {
        global $connect;
        $sql = "INSERT INTO phong(ten) VALUES ('$ten')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

    // Hàm này dùng để xuất ra giao diện mỗi thông tin của người mà ta chọn để sửa:
    function phong_edit($ma) {
        global $connect;
        $sql = "SELECT * FROM phong WHERE ma = $ma";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);    // Vì giá trị $result là một đối tượng nên ta cần chuyển nó về dạng mảng.
        mysqli_close($connect);

        return $each;
    }

    // Hàm này dùng để cập nhật thông tin mới. Việc cập nhật chỉ cho phép thay đổi tên phòng:
    function phong_update($ma, $ten) {
        global $connect;
        $sql = "UPDATE phong SET ten = '$ten' WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

    // Hàm dùng để xóa thông tin:
    function phong_delete($ma) {
        global $connect;
        $sql = "DELETE FROM phong WHERE ma = '$ma'";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
    }

