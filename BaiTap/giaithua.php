<?php 
    function tinhgiaithua($n){
        if($n==0)
        {
            return 1;
        }
        else{
            return $n * tinhgiaithua($n-1);
        }
    }
    echo tinhgiaithua(6);
?>