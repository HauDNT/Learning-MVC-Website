<?php
    // Yêu cầu đến LopController.php để tạo đối tượng và gọi đến các hàm của nó để xử lý
    require 'controller/LopController.php';

    // Lấy action hiện tại để thực hiện hành động:
    $action = $_GET['action'] ?? 'index';       // Nếu action bằng rỗng thì gán cho nó giá trị là 'index'
                                                // Nếu action khác rỗng thì thực thi tiếp tục.
    switch ($action) {
        // Sử dụng Switch-case để gọi tới các hàm xử lý trong class LopController():
        case 'index':
            (new LopController()) -> index();
            break;
        case 'create':
            (new LopController()) -> create();
            break;
        case 'store':
            (new LopController()) -> store();
            break;
        case 'edit':
            (new LopController()) -> edit();
            break;
        case 'update':
            (new LopController()) -> update();
            break;
        case 'delete':
            (new LopController()) -> delete();
            break;
        default:
            echo 'Not found!';
            break;
    }