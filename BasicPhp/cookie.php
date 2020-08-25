<?php 
    $cookieName = "admin";
    $cookiePass = "123456";
    setcookie($cookieName,$cookiePass,time()+(864000*30),"/");
?>
<html>
    <head>
        <title>Cookie</title>
    </head>
    <body>
        <?php 
            if(isset($_COOKIE[$cookieName])&&isset($_COOKIE[$cookiePass]))
            {
                echo "Cookie Name :" .$cookieName;
                echo "<br>";
                echo "Cookie Password : ".$cookiePass;
            }
            else{
                echo "No cookie";
            }
        ?>
    </body>
</html>