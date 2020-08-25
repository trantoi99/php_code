<?php 
    session_start();
?>
<?php 
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    include "connectDB.php";
    $oldPass = $newPass ="";
    $oldErr = $newErr = " ";
    $id = $_SESSION['id'];
    var_dump($id);
    if($_SERVER["REQUEST_METHOD"]=="POST"){  
        $oldPass = $_POST['oldPass'];
        $sql = "SELECT pass from user where ID='$id'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $pwd = $row['pass'];
        var_dump($pwd);
        if(!($oldPass == $pwd )){
            $oldErr = "Không đúng mật khẩu cũ";
        }
        if(empty($_POST['newPass'])){
            $newErr = "Not Required";
            }
        else
        {
            $newPass = test_input($_POST['newPass']);
            var_dump($newPass);
            $sql1 = "UPDATE user SET pass = '$newPass' where ID = '$id'";
            $kq = mysqli_query($conn,$sql1);
            var_dump($kq);
            if($kq == true){
                phpAlert("Change Password Successfully");
                header("Location:profile.php");
            }
            else{
                echo "Eror :". mysqli_error($conn);
            }
        }
    }
?>
<html>
    <head>
        <title>Change Pass</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body style="margin-left: 30%;margin-top: 10%;width: 300px;">
        <form method = "POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="pwd">Old Password:</label>
                <input type="password" name ="oldPass" class="form-control" placeholder="Enter old password" id="oPwd">
                <span class="error">* <?php echo $oldErr;?></span> 
            </div>
            <div class="form-group">
                <label for="pwd">New Password:</label>
                <input type="password" name ="newPass" class="form-control" placeholder="Enter new password" id="nPwd">
                <span class="error">* <?php echo $newErr;?></span> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</html>