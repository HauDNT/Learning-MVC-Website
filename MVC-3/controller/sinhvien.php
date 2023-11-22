<?php
switch ($action) {
    case '':
        require 'model/sinhvien.php';
        $result = sinh_vien_index();
        require 'view/sinhvien/index.php';
        break;
    case 'create':
        require 'model/lop.php';
        $dsLop = lop_index();
        require 'view/sinhvien/create.php';
        break;
    case 'store':
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require 'model/sinhvien.php';
        sinh_vien_store($ten, $ma_lop);
        header('location: index.php?controller=sinhvien');
        break;
    case 'edit':
        $ma = $_GET['ma'];
        require 'model/sinhvien.php';
        $each = sinh_vien_edit($ma);
        require 'model/lop.php';
        $dsLop = lop_index();
        require 'view/sinhvien/edit.php';
        break;
    case 'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require 'model/sinhvien.php';
        sinh_vien_update($ma, $ten, $ma_lop);
        require 'view/sinhvien/edit.php';
        header('location: index.php?controller=sinhvien');
        break;
    case 'delete':
        $ma = $_GET['ma'];
        require 'model/sinhvien.php';
        sinh_vien_delete($ma);
        header('location: index.php?controller=sinhvien');
        break;
    default:
        echo 'Not found!';
        break;
}


