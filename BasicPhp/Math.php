<html>
    <head>
        <title>Math</title>
    </head>
    <body>
        <?php 
            // min
            $int = array(0,1,2,3,4);
            var_dump($int);
            echo (min($int));
            echo "<br>";
            $Min = min(10,20,30,40);
            echo "min la : "." ".$Min;
            //max 
            echo "<br>";
            echo "Max la : "." ".max(1,2,3,4,5,6,7,8,9);
            // lam tron so 
            echo "<br>";
            // lam tron xuong
            echo (round(0.49));
            echo "<br>";
            //lam tron len
            echo (round(1.5));
            echo "<br>";
            //random number abs sqrt
            echo rand(10,100);
            echo "<br>";
            echo abs(9-10000000);
            echo "<br>";
            echo sqrt(3);
            echo "<br>";
            // so pi
            echo pi();
        ?>
    </body>
</html>