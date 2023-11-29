<?php
    class SinhVienController {
        public function index() {
            require 'model/SinhVien.php';
            $array = (new SinhVien())->all();

            require 'view/sinhvien/index.php';
        }

        public function create()
        {
            require 'model/Lop.php';
            $lops = (new Lop())->all();

            require 'view/sinhvien/create.php';
        }

        public function store()
        {
            require 'model/SinhVien.php';
            (new SinhVien()) -> create($_POST);
            header('Location: index.php?controller=sinh_vien');
        }

        public function edit()
        {
            require 'model/SinhVien.php';
            $each = (new SinhVien()) -> find($_GET['ma']);
            require 'model/Lop.php';
            $lops = (new Lop())->all();

            require 'view/sinhvien/edit.php';
        }

        public function update()
        {
            require 'model/SinhVien.php';
            (new SinhVien()) -> update($_POST);
            header('Location: index.php?controller=sinh_vien');
        }

        public function delete()
        {
            require'model/SinhVien.php';
            (new SinhVien()) -> delete($_GET['ma']);
            header('Location: index.php?controller=sinh_vien');
        }
    }