<?php 
    $string = "Helloeeee";
    $current = "e";
    $count = 0;
    for($x=0;$x<strlen($string);$x++)
    {
        if(substr($string,$x,1)=="e")
        {
            $count++;
        }
    }
    echo $count;
?>