<?php
    $controller = $_GET['controller'] ?? '';
    $action = $_GET['action'] ?? '';
    // Ta tạo ra hai biến action & controller để xác định xem
    // Người dùng đang thực hiện hành động gì (CRUD) thì sẽ đưa vào biến $action
    // Người dùng thực hiện hành động này đối với đối tượng/bảng nào? Sinh viên hay lớp thì sẽ đưa vào biến $controller để điều hướng.

    switch ($controller) {
        // Lúc mới vào trang web, $controller chưa có giá trị thì ta gọi controller root để đưa ra menu thao tác:
        case '':
            require 'controller/root.php';
            break;
        // Khi ta click chọn mục "Phòng" trong menu.php thì lúc này biến $controller mang giá trị = 'phong'
        // Nên quay lại trang index.php ta sẽ lấy được giá trị này và điều hướng nó với $controller = 'phong'.
        // Đầu tiên ta require nó đến controller/phong.php để điều khiển các thao tác của nó đối với bảng phong.
        case 'phong':
            require 'controller/phong.php';
            break;
        case 'nhanvien':
            require 'controller/nhanvien.php';
            break;
        default:
            echo "NOT FOUND!";
            break;
    }
