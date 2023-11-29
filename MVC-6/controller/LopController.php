<?php
    class LopController {
        public function index() {
            require 'model/Lop.php';
            $array = (new Lop())->all();

            require 'view/lop/index.php';
        }

        public function create()
        {
            require 'view/lop/create.php';
        }

        public function store()
        {
            require 'model/Lop.php';
            (new Lop()) -> create($_POST);
            header('Location: index.php?controller=lop');
        }

        public function edit()
        {
            require 'model/Lop.php';
            $each = (new Lop()) -> find($_GET['ma']);
            require 'view/lop/edit.php';
        }

        public function update()
        {
            require 'model/lop.php';
            (new Lop()) -> update($_POST);
            header('Location: index.php?controller=lop');
        }

        public function delete()
        {
            require'model/Lop.php';
            (new Lop()) -> delete($_GET['ma']);
            header('Location: index.php?controller=lop');
        }
    }


