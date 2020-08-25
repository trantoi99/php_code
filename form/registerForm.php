<?php 
    session_start();
?>
<?php
    include "connectDB.php";
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    $user = $psw = $email = "";
    $userErr = $pswErr =$emailErr = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST['user'])){
            $userErr = "Not Required";
        }
        else{
            $user = test_input($_POST['user']);
        }
        if(empty($_POST['psw'])){
            $pswErr = "Not Required";
        }
        else{
            $psw = test_input($_POST['psw']);
        }
        if(empty($_POST['email'])){
            $emailErr = "Not Required"; 
        }
        else{
            $email = test_input($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
       /* $query = "SELECT id,username,pass,email From user";
        $result = mysqli_query($conn,$query);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);*/
       // for($n=0;$n<$count;$n++){
           // if($row['username']== $_POST['user']){
                //var_dump($check);
              //  $userErr = "Username is existed";
            /*
            else{
                $sql = "INSERT INTO user (username,pass,email)  VALUES (?,?,?) LIMIT 1";
                $stmt = mysqli_prepare($conn,$sql);
                if($stmt){
                    mysqli_stmt_bind_param($stmt,"sss",$user,$psw,$email);
                    $user = $_POST['user'];
                    $psw = $_POST['psw'];
                    $email =$_POST['email'];           
                    mysqli_stmt_execute($stmt);
                    phpAlert("Register Successfully");
                    header("Location:loginform.php");
                }
                else{
                    echo "Eror".$sql;
                    echo "<br>";
                    echo mysqli_error($conn);
                }
        // đóng stmt
                mysqli_stmt_close($stmt);
            }*/
        //}
        
        $sql = "INSERT INTO user (username,pass,email)  VALUES (?,?,?)";
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt,"sss",$user,$psw,$email);
            $user = $_POST['user'];
            $psw = $_POST['psw'];
            $email =$_POST['email'];           
            mysqli_stmt_execute($stmt);
            phpAlert("Register Successfully");
           // header("Location:loginform.php");
        }
        else{
            echo "Eror".$sql;
            echo "<br>";
            echo mysqli_error($conn);
        }
        // đóng stmt
        mysqli_stmt_close($stmt);
        
    
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" text ="text/css" href="/form/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#user").blur (function(){
                    var username = $(this).val();
                    $.post("checkUser.php",{un : username},function(data){
                        if(data == 0){
                            $("#validateUser").html("hợp lệ");
                            $("#validateUSer").css("color","green");
                        }
                        else{
                            $("#validateUser").html("Không hợp lệ");
                            $("#validateUSer").css("color","red");
                        }
                    })
                })
            })
        </script>
</head>
<body style="margin-left: 30%;">

<form method = "POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="width:500px;height:450px">
  <div class="container" >
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <div class ="form-group">
        <label for="UserName"><b>UserName</b></label>
        <input type="text" placeholder="Enter Your UserName" name="user" id="user">
        <span class="error" id ="validateUser">* <?php echo $userErr;?></span>
    </div>
    
    <div class="form-group">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" >
        <span class="error">* <?php echo $pswErr;?></span>
    </div>
    
    <div class="form-group">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" >
        <span class="error">* <?php echo $emailErr;?></span>
    </div>
    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="loginform.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>