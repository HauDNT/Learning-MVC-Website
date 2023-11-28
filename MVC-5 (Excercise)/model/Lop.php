<?php
    require 'model/Connect.php';
    require 'model/LopObject.php';
    class Lop {
        public function all():array {
            $sql = "SELECT * FROM Lop";
            $result = (new Connect())->select($sql);
            $array = [];

            foreach ($result as $row) {
                $object = new LopObject($row);
                $array[] = $object;
            }

            return $array;
        }

        public function create(array $params)
        {
            $object = new LopObject($params);
            $sql = "INSERT INTO Lop(ten, siso) VALUES ('" .
                $object -> get_ten() . "', '" .
                $object -> get_siso() . "')";
            (new Connect()) -> execute($sql);
        }

        public function find($ma):object
        {
            $sql = "select * from lop where ma = $ma";
            $result = (new Connect()) -> select($sql);
            $each = mysqli_fetch_array($result);

            return new LopObject($each);
        }

        public function update($params)
        {
            $object = new LopObject($params);
            $sql = "update lop 
                    set ten = '" . $object -> get_ten() . "', 
                        siso = '" . $object -> get_siso() . "' 
                    where ma = '" . $object -> get_ma() . "'";

            (new Connect()) -> execute($sql);
        }

        public function delete($ma)
        {
            $sql = "delete from lop where ma = $ma";
            (new Connect()) -> execute($sql);
        }
    }