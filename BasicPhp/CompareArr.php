<html>
   
   <head>
      <title>So sánh mảng đa chiều trong PHP</title>
   </head>
   <body>
   
       <?php
        function so_sanh_key($a,$b)  
		{  
			if($a===$b)          
			return 0;  
			return($a > $b)? 1: -1;  
		}  
		function ham_so_sanh_mang($arr1, $arr2)  
		{  
		  return array_diff_uassoc($arr1['c'], $arr2['c'],"so_sanh_key");  
		}  
		//khai báo các mảng đa chiều
		$color1=array('a'=>'White','b'=>'Red','c'=>array('a'=>'Green','b'=>'Blue','c'=>'Yellow'));  
		$color2=array('a'=>'White','b'=>'Red','c'=>array('a'=>'White','b'=>'Red','c'=>'Yellow'));  
		print_r(ham_so_sanh_mang($color1, $color2));
       ?>
       
   </body>
</html>