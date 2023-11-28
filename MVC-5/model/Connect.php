<?php

    class Connect
    {
        private $server;
        private $username;
        private $password;
        private $database;

        // Hàm khởi tạo thông tin database:
        public function __construct()
        {
            $this->server = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->database = 'j2school';
        }

        // Hàm chứa lệnh kết nối:
        private function connect()
        {
            $connect = mysqli_connect('localhost', 'root', '', 'j2school');
            mysqli_set_charset($connect, 'utf8');

            return $connect;
        }

        // Hàm select:
        public function select($sql)
        {
            $connect = $this->connect();
            $result = mysqli_query($connect, $sql);
            mysqli_close($connect);

            return $result;
        }

        // Hàm execute:
        public function execute($sql):void
        {
            $connect = $this->connect();
            $result = mysqli_query($connect, $sql);
            mysqli_close($connect);
        }
    }