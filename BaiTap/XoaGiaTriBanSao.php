<html>
   
   <head>
      <title>Xóa bản sao giá trị trong mảng PHP</title>
   </head>
   <body>
   
       <?php
        $colors = array(   
	    0 => 'Red',   
	    1 => 'Green',   
	    2 => 'White',   
	    3 => 'Black',   
	    4 => 'Red',   
		);   
		  
		$numbers = array(   
		  0 => 100,   
		  1 => 200,   
		  2 => 100,   
		  3 => -10,   
		  4 => -10,   
		  5 => 0,   
        );   
        //Hàm array_keys() sẽ trả về một hoặc một tập hợp các khóa của mảng.
        //Hàm array_flip()__ trả về một mảng mà có các key từ input sẽ trở 
        //thành các value và các value từ input trở thành các key.
		$uniq_colors = array_keys(array_flip($colors));   
		$uniq_numbers = array_keys(array_flip($numbers));   
		print_r($uniq_colors);  
		echo "<br>";
		print_r($uniq_numbers);
       ?>
       
   </body>
</html>