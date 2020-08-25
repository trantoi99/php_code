<?php 
    class e{
        public static $value = 2.78;
        public function staticValue(){
            return self :: $value;
        }
    }
    class x extends e {
        public function xStatic(){
            return parent::$value;
        }
    }
    echo x::$value;
    $x = new x();
    echo $x->xStatic();
    //echo e :: $value;
    $e = new e();
    echo $e->staticValue();
?>