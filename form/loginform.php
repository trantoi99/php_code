<?php 
    session_start();
?>
<?php 
    include "connectDB.php";
    //use ssesion
   // session_start();
   function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){             
        //mysqli_escape_string : ép dữ liệu đầu vào là string 
        // tránh lộ sql query
        /*$usernameErr = $passErr ="";
        $username = $pass = "";
        
        if(empty($_POST['username'])){
            $usernameErr ="Not Required";
        }
        else {
            $username =test_input($_POST['username']);
           // if(!preg_match('/^ [a-zA-Z0-9 ._-]/',$username)){
           //     $usernameErr = "Validate Error";
           // }
        }
        if(empty($_POST['password'])){
            $passErr = "Not Required";
        }
        else{
            $pass =test_input($_POST['password']);            
        }*/
        $username = mysqli_escape_string($conn,$_POST['username']);
        $pass = mysqli_escape_string($conn,$_POST['password']);
        
        $sql = "SELECT ID FROM user Where username ='$username' and pass = '$pass'";
        $result = mysqli_query($conn,$sql);
        // trả về mảng liên hợp
        $row = mysqli_fetch_assoc($result);
        //$active = $row['active'];
        //var_dump($row);
        $id = $row['ID'];
        //var_dump($id);
        $count = mysqli_num_rows($result);      
        if($count != 0){
            phpAlert("Login Successfully");
            $_SESSION['username'] = $username;
            $_SESSION['pass'] = $pass;
            $_SESSION['id']=$id;
            header("Location:profile.php"); 
        }
        else{
            echo "login failed";
        }
    }
?>
<html>
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
    </head>
    <style>
      .error {color :red};
    </style>
    <body style ="width : 500px ; margin-left :30% ;margin-top:10%">
        <h2>Login Form</h2>
        <form method = "POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="username">UserName</label>
                <input type="user" name = "username" class="form-control" placeholder="Enter User" id="user">
                <span class="error" id = "validateUser" >* <?php echo $usernameErr;?></span>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" name ="password" class="form-control" placeholder="Enter password" id="pwd">
               <!-- <span class="error">* <?php echo $passErr;?></span> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class ="btn-btn-warning" href="forgotPass.php"><i class = "fa fa-paper-plane"></i>Forgot PassWord</a>
            <p>if you don't have an account. You can <a href="registerForm.php">resign here.</a></p>
        </form>       
    </body>
</html>