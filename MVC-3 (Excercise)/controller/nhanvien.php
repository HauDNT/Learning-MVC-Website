<?php
    switch ($action) {
        case '':
            require 'model/nhanvien.php';
            $result = nhanvien_index();
            require 'view/nhanvien/index.php';
            break;
        case 'insert':
            require 'model/phong.php';
            $dsPhong = phong_index();
            require 'view/nhanvien/insert.php';
            break;
        case 'store':
            $ten = $_POST['ten'];
            $maPhong = $_POST['ma_phong'];
            require 'model/nhanvien.php';
            nhanvien_insert($ten, $maPhong);
            header('location: index.php?controller=nhanvien');
            break;
        case 'edit':
            $ma = $_GET['ma'];
            require 'model/nhanvien.php';
            $each = nhanvien_edit($ma);
            require 'model/phong.php';
            $dsPhong = phong_index();
            require 'view/nhanvien/edit.php';
            break;
        case 'update':
            $ma = $_POST['ma'];
            $ten = $_POST['ten'];
            $maPhong = $_POST['ma_phong'];
            require 'model/nhanvien.php';
            nhanvien_update($ma, $ten, $maPhong);
            header('location: index.php?controller=nhanvien');
            break;
        case 'delete':
            $ma = $_GET['ma'];
            require 'model/nhanvien.php';
            nhanvien_delete($ma);
            header('location: index.php?controller=nhanvien');
            break;
    }