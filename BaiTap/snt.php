<?php 
    function ktra($n){
		 for($x = 2; $x < $n; $x++)  
		   {  
			  if($n % $x ==0)  
				{  
				  return 0;  
				}  
		   }  
		  return 1;  
		}  
		$a = ktra(3);  
		if ($a==0)  
		  echo 'Đây không phải là số nguyên tố'."<br>";  
		else  
		  echo 'Đây là số nguyên tố'."<br>";
    
?>