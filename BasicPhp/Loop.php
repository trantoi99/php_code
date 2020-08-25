<html>
    <head>
        <title>
            Loop in PHP
        </title>
    </head>
    <body>
        <?php 
            //for
            $n = 0;
            $m = 12;
            for($n;$n<=10;$n++)
                {
                    echo "Gia tri : $n <br>";
                }
            //while 
            while($m <20)
            {
                echo "Gia tri :$m <br>";
                $m++;
            }
            // do while 
            $o = 21;
            do{
                $o++;
                echo "Gia tri : $o <br>";
            }
            while($o < 30);
            //foreach
            //example 1
            $ex1 = array("red","yellow","black");
            foreach($ex1 as $i)
                {
                    echo "Color is : $i <br>";
                }
            $ex2 = array ("A1"=>"1","A2"=>2,"A3"=>"3","A4"=>"4","A5"=>"5");
            foreach($ex2 as $j=>$n)
            {
                echo "$j => $n <br>";
            }
            // break 
            for($d=0;$d<10;$d++)
            {
                if($d==4)
                {
                    break;
                }
                echo "This value is : $d <br>";
            }
            // continue 
            for($s=1;$s<5;$s++)
            {
                if($s==4)
                {
                    continue;
                }
                echo "Value is : $s<br>";
            }
        ?>
    </body>
</html>