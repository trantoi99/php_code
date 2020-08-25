<html>
    <head>
        <title>Array</title>
    </head>
    <body>
        <!--Create index array  -->
        <?php
            $games = array("Leauge Of Lengends","Valorant","PUBG","PUBG");
            echo "I like : $games[0] <br> I don't know : $games[1] <br> I am chicken in : $games[2]";
            echo "<br>";
            // loai bo phan tu lap trong mang
            $ss = array_unique($games);
            print_r($games);
            echo "<br>";
            $result = array_pop($games)."<br>";
            print_r($games);
        ?>
        <br>
        <?php 
            // mang lien ket
            $class = array("Lop 1"=>"A1","lop 2"=>"A2","Lop 3"=>"A3");
            foreach($class as $i=>$i_value)
            {
                echo "$i => $i_value <br>";
            }
            // mang da chieu
            $array = array(
                array("a",1,1),
                array("b",2,2),
                array("c",3,3),
                array("d",4,4),
                array("e",5,5)
            );// mang 5 nhan 3 
            //list 
            list($a,$b,$c) = $array;
            echo "I have several animals, a $a, a $b and a $c.";
            array_push($array,array("f",6,6));
            print_r($array);
            unset($array[0]);
            for($row=1;$row<6;$row++)
            {
                echo "<p><b>hang thu $row</b></p>";
                echo "<ul>";
                for($col=0;$col<3;$col++)
                {
                    echo "<li>".$array[$row][$col]."</li>";
                }   
                echo "</ul>";
            }
            // lay phan tu cuoi cua mang
            echo "<br>";
            // tim kiem trong mang
            function filter($var)
            {
                return ($var & "Lop 1");
            }
            print_r (array_filter($class,"filter"));
            // Tìm key lớn nhất trong mảng PHP
            $mang_lien_hop = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",  
		        "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  
		        "Finland"=>"Helsinki", "France" => "Paris",  
		        "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",  
		        "Germany" => "Berlin", "Greece" => "Athens",  
		        "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
		        "Austria" => "Vienna", "Poland"=>"Warsaw");
		    $max_key = max( array_keys($mang_lien_hop) );   
            echo $max_key."<br>"; 
        ?>
    </body>
</html>