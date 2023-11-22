<?php
    // Nếu người dùng chưa chọn món thì đưa/đưa lại Menu:
    if (empty($_GET["monan"])) {
        include "menu.php";
    }
    // Ngược lại:
    else {
        // Nhớ món ăn người dùng gọi:
        $monan = $_GET["monan"];
        // Nói với đầu bếp:
        include "model.php";
        // Đầu bếp làm xong (thu được kết quả) thì đem ra dĩa (hiển thị kết quả):
        include "place.php";
    }
?>


