<?php
require 'model/Connect.php';
require 'model/LopObject.php';
    class Lop
    {
        // Hàm all() dùng để xuất tất cả thông tin lớp ra:
        public function all():array
        {
            $sql = "select * from lop";
            $result = (new Connect())->select($sql);

            $array = [];
            foreach ($result as $row) {
                $object = new LopObject($row);
                $array[] = $object;
            }

            return $array;
        }

        // Biến params là biến chứa tất cả thông tin mà người dùng đã gửi:
        public function create($params):void
        {
            // Tạo một đối tượng LopObject với thông tin là $params (Xem kỹ hàm __construct($row))
            $object = new LopObject($params);
            // Gọi câu lệnh sql. Lấy tên và sỉ số từ các phương thức get_ten() & get_siso():
            $sql = "insert into lop(ten, siso) values ('" . $object -> get_ten() . "', '" . $object -> get_siso() . "')";
            // Tạo đối tượng mới từ class Connect()
            // Sau đó gọi tới hàm excute($sql) để thực thi câu lệnh $sql:
            (new Connect()) -> execute($sql);
        }

        // Hàm tìm kiếm thông tin lớp từ mã lớp:
        public function find($ma):object
        {
            $sql = "select * from lop where ma = $ma";
            $result = (new Connect()) -> select($sql);
            $each = mysqli_fetch_array($result);

            return new LopObject($each);
        }

        // Hàm cập nhật thông tin mới:
        public function update(array $params)
        {
            $object = new LopObject($params);
            $sql = "update lop 
                    set ten = '" . $object -> get_ten() . "', 
                        siso = '" . $object -> get_siso() . "' 
                    where ma = '" . $object -> get_ma() . "'";
            // Tạo một đối tượng Connect() mới hàm gọi tới hàm execute() để thực thi câu lệnh $sql:
            (new Connect()) -> execute($sql);
        }

        // Hàm xóa thông tin lớp:
        public function delete($ma)
        {
            $sql = "delete from lop where ma = $ma";
            (new Connect()) -> execute($sql);
        }
    }