<?php 
    class Fruit{
        public $name;
        public $color;

        function __construct($name)
        {
            return $this->name =$name;
        }
        function __destruct()
        {
            echo "This is the {$this->name}";
        }
    }

    $apple = new fruit("Apple");
?>