<html>
    <head>
        <title>If..........Else</title>
    </head>
    <body>
        <?php 
            $t = date('D');
            if($t<=7)
            {
                echo "Firt";   
            }
            elseif($t<=20){
                echo "Mid";
            }
            else{
                echo "Last";
            }
        ?>
    </body>
</html>