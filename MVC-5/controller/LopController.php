<?php
    class LopController
    {
        // Hàm hiển thị danh sách lớp (mặc định):
        public function index()
        {
            // Gửi yêu cầu đến Lop.php để gọi đến hàm all():
            require 'model/Lop.php';
            $array = (new Lop()) -> all();

            require 'view/lop/index.php';
        }

        // Hàm tạo mới thông tin 1 lớp:
        public function create()
        {
            // Gửi yêu cầu tới create.php:
            require 'view/lop/create.php';
        }

        // Bạn đã thực hiện gửi đi thông tin muốn tạo trong create.php.
        // Lúc này action=store nên ta tiếp tục thực hiện hàm dưới đây để thêm thông tin mới:
        public function store()
        {
            // Gửi yêu cầu đến Lop.php và gọi tới hàm create với thông tin truyền vào là những thông tin
            // đã được gửi đến $_POST:
            require 'model/Lop.php';
            (new Lop()) -> create($_POST);
        }

        // Hàm lấy thông tin của lớp cần chỉnh sửa:
        public function edit()
        {
            // Gửi yêu cầu đến Lop.php và gọi tới hàm find():
            require 'model/Lop.php';
            // Biến $each dùng để chứa thông tin mà hàm find() lấy được:
            $each = (new Lop()) -> find($_GET['ma']);

            // Gửi yêu cầu đến view/lop/edit.php - Mở giao diện chỉnh sửa thông tin:
            require 'view/lop/edit.php';
        }

        // Hàm thực hiện cập nhật thông tin:
        public function update()
        {
            // Gửi yêu cầu đến Lop.php:
            require 'model/Lop.php';
            // Tạo một đối tượng Lop() và gọi tới hàm update() với thông tin đã được đưa vào $_POST:
            (new Lop()) -> update($_POST);
        }

        public function delete()
        {
            require'model/Lop.php';
            (new Lop()) -> delete($_GET['ma']);
        }
    }







