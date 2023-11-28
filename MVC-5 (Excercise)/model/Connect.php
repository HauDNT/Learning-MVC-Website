<?php
    class Connect {
        private $server;
        private $username;
        private $password;
        private $database;

        public function __construct() {
            $this->server = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->database = "j2school";
        }

        private function connect() {
            $connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
            mysqli_set_charset($connect, 'utf8');

            return $connect;
        }

        public function select($sql) {
            $connect = $this->connect();
            $result = mysqli_query($connect, $sql);
            mysqli_close($connect);
            return $result;
        }

        public function execute($sql) {
            $connect = $this->connect();
            mysqli_query($connect, $sql);
            mysqli_close($connect);
        }
    }
