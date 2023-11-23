<?php
    // Với $controller = 'phong' và giá trị $action mà ta vừa lấy được thì tại đây ta sẽ dựa vào
    // $action để xem hành động nào được phép thực thi dựa trên giá trị của $action
    switch ($action) {
        case '':
            // Nếu ta không có hành động gì (chỉ click vào mục "Phòng ban" thì ta đưa toàn bộ danh sách từ bảng Phong cho người dùng xem
            // Để làm được điều đó, ta sẽ điều hướng đến model/phong.php để thực thi thao tác này.
            require 'model/phong.php';
            // require model/phong.php với $action = '' - ta sẽ gọi tới hàm phong_index():
            $result = phong_index();
            // Sau đó ta gọi đến view/phong/index.php để xuất ra giao diện cho người dùng nhìn thấy thông tin:
            require 'view/phong/index.php';
            break;
        case 'insert':
            // Ta require view/phong/insert.php để xuất ra giao diện thêm phòng:
            require 'view/phong/insert.php';
            break;
        case 'store':
            // Lấy thông tin tên phòng từ phương thức POST của view/phong/insert.php
            $ten = $_POST['ten'];
            // require model/phong.php để gọi hàm phong_insert():
            require 'model/phong.php';
            phong_insert($ten);
            // Sau khi thêm xong thì điều hướng quay về giao diện chính:
            header('location: index.php?controller=phong');
            break;
        case 'edit':
            // Ta lấy mã phòng từ hàng mà mình chọn sửa:
            $ma = $_GET['ma'];
            // Sau đó vào model/phong.php để gọi hàm phong_edit():
            require 'model/phong.php';
            $each = phong_edit($ma);
            // Sau đó ta vào giao diện chỉnh sửa view/phong/edit.php:
            require 'view/phong/edit.php';
            break;
        case 'update':
            // Ta lấy mã và tên phòng từ POST (đã ẩn nên nhìn trên thanh link sẽ không thấy):
            $ma = $_POST['ma'];
            $ten = $_POST['ten'];
            // Sau đó ta require model/phong.php để gọi ra hàm phong_update():
            require 'model/phong.php';
            phong_update($ma, $ten);
            // Sau khi cập nhật xong, ta quay về trang index để xem sự thay đổi:
            header('location: index.php?controller=phong');
            break;
        case 'delete':
            // Lấy mã phòng từ GET:
            $ma = $_GET['ma'];
            // require model/phong.php để gọi hàm phong_delete():
            require 'model/phong.php';
            phong_delete($ma);
            header('location: index.php?controller=phong');
            break;
        default:
            echo 'Invalid operation!';
            break;
    }






