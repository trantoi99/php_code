<?php 
    class Cat extends animals{
        private $color;

        public function getColor()
        {
            return $this->color;
        }
        public function setColor($color)
        {
            $this->color=$color;
        }
    }
?>