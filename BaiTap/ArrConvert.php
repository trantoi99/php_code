<?php 
    function convert($input,$ucase)
    {
        $case = $ucase;
        $narray = array();
        // ktra xem inout la mang ko
        if(!is_array($input))
        {
            return $narray;
        }
        foreach($input as $key => $value){
            if(is_array($value)){
                $narray[$key] = convert($value,$case);
                continue;
            }
            $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));  
        }
        return $narray;

    }

    $input = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    echo "Mang ban dau : <br>";
    print_r($input);
    $output1 = convert($input,CASE_LOWER);
    $output2 = convert($input,CASE_UPPER);
?>