<?php
    class SinhVienObject
    {
        private $ma;
        private $ten;
        private $malop;
        private $tenlop;

        public function __construct($row)
        {
            $this -> ma = $row['ma'] ?? '';
            $this -> ten = $row['ten'] ?? '';
            $this -> malop = $row['malop'] ?? '';;
            $this -> tenlop = $row['ten_lop'] ?? '';
        }
        
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

        public function get_malop()
        {
        	return $this->malop;
        }
        
        public function set_malop($var)
        {
        	$this->malop = $var;
        }
        
        public function get_tenlop()
        {
        	return $this->tenlop;
        }
    }