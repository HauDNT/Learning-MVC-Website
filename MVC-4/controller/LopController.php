<?php
    class LopController {
        public function index() {
            // Trả về toàn bộ danh sách lớp:
            require 'model/Lop.php';
            $array = (new Lop()) -> all();
            require 'view/lop/index.php';
        }

        public function create() {
            require 'view/lop/create.php';
        }

        public function store() {
            $ten = $_POST['ten'];
            $siso = $_POST['siso'];

            require 'model/Lop.php';
            (new Lop()) -> create($ten, $siso);

            header('location: ?controller=lop');
        }

        public function edit() {
            $ma = $_GET['ma'];

            require 'model/Lop.php';
            $each = (new Lop()) -> find($ma);
            require 'view/lop/edit.php';
        }

        public function update() {
            $ma = $_POST['ma'];
            $ten = $_POST['ten'];
            $siso = $_POST['siso'];

            require 'model/Lop.php';
            (new Lop()) -> update($ma, $ten, $siso);

            header('location: ?controller=lop');
        }

        public function delete() {
            $ma = $_GET['ma'];
            require 'model/Lop.php';
            (new Lop()) -> destroy($ma);

            header('location: ?controller=lop');
        }
    }