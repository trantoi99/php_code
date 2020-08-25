<?php 
    include "connectDB.php";
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $email ="";
        $emailErr ="";
        if(empty($_POST['email'])){
            $emailErr = "email không được để trống";
        }
        else{
            $email = test_input($_POST["email"]);
            // so sánh xem có là email ko
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        $query = "SELECT email,keyWord From user";
        $result = mysqli_query($conn,$query);
    }
?>
<html>
    <head>
        <title>Forgot Password</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <h2>Forgot PassWord</h2>
        <form method = "POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" >
                <span class="error">* <?php echo $emailErr;?></span>
            </div>     
            <a href="#"><i class = "fa fa-paper-plane"></i>Send Mail</a>       
        </form>
    </body>
</html>