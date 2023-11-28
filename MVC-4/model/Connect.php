<?php
    class Connect {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $database = 'j2school';

        private function connect() {
            $connect = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
            mysqli_set_charset($connect, 'utf8');

            return $connect;
        }

        public function selectToSQL($sql) {
            $connect = $this->connect();
            $result = mysqli_query($connect, $sql);

            mysqli_close($connect);

            return $result;
        }

        public function excute($sql) {
            $connect = $this->connect();
            mysqli_query($connect, $sql);

            mysqli_close($connect);
        }
    }