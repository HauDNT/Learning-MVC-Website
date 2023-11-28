<?php
    require 'model/Connect.php';
    class Lop {
        private int $ma;
        private string $ten;
        private string $siso;

        public function get_ma()
        {
            return $this->ma;
        }

        public function set_ma($var)
        {
            $this->ma = $var;
        }

        public function get_ten()
        {
            return $this->ten;
        }

        public function set_ten($var)
        {
            $this->ten = $var;
        }

        public function get_siso()
        {
            return $this->siso;
        }

        public function set_siso($var)
        {
            $this->siso = $var;
        }

        public function get_siso_lop() {
            return $this -> ten . ' - ' . $this -> siso;
        }

        public function all() {
            $sql = "SELECT * FROM lop";
            $result = (new Connect()) -> selectToSQL($sql);
            $array = [];
            foreach ($result as $row) {
                $object = new self();
                $object -> set_ma($row['ma']);
                $object -> set_ten($row['ten']);
                $object -> set_siso($row['siso']);

                $array[] = $object;
            }

            return $array;
        }

        public function create($ten, $siso): void {
            $object = new self();
            $object -> set_ten($ten);
            $object -> set_siso($siso);

            $sql = "INSERT INTO lop(ten, siso) VALUES ('{$object->ten}', '{$object->siso}')";
            (new Connect()) -> excute($sql);
        }

        public function find($ma) {
            $sql = "SELECT * FROM lop WHERE ma = '$ma'";
            $result = (new Connect()) -> selectToSQL($sql);
            $row = mysqli_fetch_array($result);

            $object = new self();
            $object -> set_ma($row['ma']);
            $object -> set_ten($row['ten']);
            $object -> set_siso($row['siso']);

            return $object;
        }

        public function update($ma, $ten, $siso): void {
            $object = new self();
            $object -> set_ma($ma);
            $object -> set_ten($ten);
            $object -> set_siso($siso);

            $sql = "UPDATE lop SET ten = '{$object -> ten}', siso = '{$object -> siso}' WHERE ma = '{$object -> ma}'";
            (new Connect()) -> excute($sql);
        }

        public function destroy($ma): void {
            $object = new self();
            $object -> set_ma($ma);

            $sql = "DELETE FROM lop WHERE ma = '{$object -> ma}'";
            (new Connect()) -> excute($sql);
        }
    }


