<?php
    $controller = $_GET['controller'] ?? '';
    $action = $_GET['action'] ?? '';

    switch ($controller) {
        case '':
            require 'controller\root.php';
            break;
        case 'lop':
            require 'controller\lop.php';
            break;
        case 'sinhvien':
            require 'controller\sinhvien.php';
            break;
        default:
            echo 'Not found controller!';
            break;
    }
