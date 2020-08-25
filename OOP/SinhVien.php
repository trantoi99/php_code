<?php 
    class SinhVien {
        private $FullName;
        private $Age;
        private $Grade;

        public function getFullName(){
            return $this->FullName;
        }
        public function getAge(){
            return $this->Age;
        }
        public function getGrade()
        {
            return $this->Grade;
        }

        public function setFullName($val){
            $this->FullName = $val;
        }
        public function setAge($age){
            $this->Age =$age;
        }
        public function setGrade($grade)
        {
            $this->Grade = $grade;
        }
    }
    
?>