<html>
    <head>
        <title>Request in php</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="text" name ="fname">
            <input type = "submit" value = "ok">
        </form>
        <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $name = $_REQUEST['fname'];
                if(empty($name))
                {
                    echo "No Name";
                }
                else{
                    echo ($name);
                }
            }
            echo "<pre>";
            var_dump($_SERVER['SERVER_NAME']);
            echo "<pre>";
            echo "<pre>";
            var_dump($_SERVER['REMOTE_PORT']);
        ?>
    </body>
</html>