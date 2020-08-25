<html>
   
   <head>
      <title>Giải thuật sắp xếp nhanh (Quick Sort) trong PHP</title>
   </head>
   <body>
   
       <?php
        function quick_sort($my_array)  
		{  
			$loe = $gt = array();  
			if(count($my_array) < 2)  
			{  
				return $my_array;  
			}  
			$pivot_key = key($my_array);  
			$pivot = array_shift($my_array);  
			foreach($my_array as $val)  
			{  
				if($val <= $pivot)  
				{  
					$loe[] = $val;  
				} elseif ($val > $pivot)  
				{  
					$gt[] = $val;  
				}  
			}  
			return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));  
		}  
		   
		$my_array = array(3, 0, 2, 5, -1, 4, 1);  
		echo 'Mảng ban đầu: '.implode(',',$my_array).'<br>';  
		$my_array = quick_sort($my_array);  
		echo 'Mảng sau khi được sắp xếp: '.implode(',',$my_array);
       ?>
       
   </body>
</html>
