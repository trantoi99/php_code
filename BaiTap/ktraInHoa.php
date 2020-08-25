<?php 
    function ktra($str){
        $count = 0;
        for($sc = 0 ;$sc<strlen($str);$sc++){
            if(ord($str[$sc])>='A'&&ord($str[$sc])<='Z'){
                return false;
            }
            return true;
        }
    }
    var_dump(ktra("sssF"));

?>