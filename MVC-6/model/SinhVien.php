<?php
    require_once 'model/Connect.php';
    require 'model/SinhVienObject.php';
    class SinhVien {
        private string $table = 'sinh_vien';

        public function all():array {
            $sql = "SELECT t.*, lop.ten as ten_lop 
                    FROM $this->table as t 
                    JOIN lop on lop.ma = t.malop";

            $result = (new Connect())->select($sql);
            $array = [];

            foreach ($result as $row) {
                $object = new SinhVienObject($row);
                $array[] = $object;
            }

            return $array;
        }

        public function create(array $params)
        {
            $object = new SinhVienObject($params);
            $sql = "INSERT INTO $this->table (ten, malop) VALUES ('" .
                $object -> get_ten() . "', '" .
                $object -> get_malop() . "')";
            (new Connect()) -> execute($sql);
        }

        public function find($ma):object
        {
            $sql = "select * from $this->table where ma = $ma";
            $result = (new Connect()) -> select($sql);
            $each = mysqli_fetch_array($result);

            return new SinhVienObject($each);
        }

        public function update($params)
        {
            $object = new SinhVienObject($params);
            $sql = "update $this->table 
                    set ten = '" . $object -> get_ten() . "', 
                        malop = '" . $object -> get_malop() . "' 
                    where ma = '" . $object -> get_ma() . "'";

            (new Connect()) -> execute($sql);
        }

        public function delete($ma)
        {
            $sql = "delete from $this->table where ma = $ma";
            (new Connect()) -> execute($sql);
        }
    }