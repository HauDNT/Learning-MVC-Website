<?php
    class LopObject
    {
        public $ma;
        public $ten;
        public $siso;

        public function __construct($row)
        {
            $this -> ma = $row['ma'] ?? '';
            $this -> ten = $row['ten'];
            $this -> siso = $row['siso'];
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

        public function get_siso()
        {
        	return $this->siso;
        }

        public function set_siso($var)
        {
        	$this->siso = $var;
        }

        public function get_lop_siso()
        {
            return $this->ten . ' - ' . $this->siso;
        }
    }