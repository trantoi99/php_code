<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
    </head>
    <body>
        <form method="POST">
            <input type="text" name ="user">
            <input type = "submit" name = "Login" value="Login">
        </form>
        <?php
            // lay user tu chuoi luu vao bien cuc bo
            $user_name = $_POST['user'];
            echo "<h2>Login Successfully !</h2>"
        ?>
    </body>
</html>