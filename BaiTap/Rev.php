<?php 
    function daoday($str1){
        $n = strlen($str1);
        if($n==1){
            return $str1;
        }
        else{
            $n--;
            return daoday(substr($str1,1,$n)).substr($str1,0,1);
        }
    }
?>