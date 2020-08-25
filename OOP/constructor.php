<?php 
    class fruit{
        public $name;
        public $color;
        // can doi so truyen vao
        function __construct($name){
            $this->name =$name;
        }
        
        function getName(){
            return $this->name;
        }
    }

    $apple = new fruit("Apple   ");
    echo $apple->getName();
?>