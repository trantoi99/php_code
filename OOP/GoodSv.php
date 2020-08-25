<?php 
    class GoodSv extends SinhVien{
        private $point;

        public function getPoint()
        {
            return $this->point;
        }
       
        public function setPoint($value)
        {
            $this->point = $value;
        }
        public function printDanhHieu($val)
        {
            if($val <= 6.49){
                echo "Hoc sinh trung binh";
            }
            elseif($val >= 6.5 && $val <= 8.49)
            {
                echo "hoc sinh kha";
            }
            elseif($val >= 8.5 && $val<=10){
                echo "Hoc sinh gioi";
            }
            else{
                die("diem phai nho hon 10");
            }
        }
    }
?>