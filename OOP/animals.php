<?php 
    class animals{
        private $name;
        private $fee;

        public function getName()
        {
            return $this->name;
        }
        public function getFee()
        {
            return $this->fee;
        }
        public function setName($name)
        {
            $this->name=$name;
        }
        public function setFee($fee)
        {
            $this->fee =$fee;
        }
    }
?>