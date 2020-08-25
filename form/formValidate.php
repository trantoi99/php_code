<?php 
    function test_input($data){
        $data = trim($data);
        //Hàm stripslashes() sẽ loại bỏ các dấu backslashes
        // ( \ ) có trong chuỗi. ( \ ' sẽ trở thành ' , \\ sẽ trở thành \) 
        $data =stripslashes($data);
        //Hàm này chuyển các thể html trong chuỗi $str sang  dạng thực thể của chúng 
        //(html sẽ ko còn tác dụng nên bạn có thể echo ra bên ngoài).
        $data = htmlspecialchars($data);
        return $data;
    }
    $addrErr ="";
    $emailErr ="";
    $passErr ="";
    $zipErr ="";
    $email = $addr = $pass =$zip ="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
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
        if(empty($_POST['addr'])){
            $addrErr = "Địa chỉ không được bỏ trống";
        }
        else{
            $addr = test_input($_POST['addr']);
        }
        if(empty($_POST['pass'])){
            $passErr = "mật khẩu không đc để trống";
        }
        else{
            $pass = test_input($_POST['pass']);         
        }
        if(empty($_POST['zip'])){
            $zipErr = "zip ko đc bỏ trống";
        }
        else{
            $zip = test_input($_POST['zip']);
            if (!preg_match('/^[0-9]*$/', $zip)){
                $zipErr = "Only Numbers";
            }
        }
    }
?>
<html>
    <head>
        <title>Validate form</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <style>
        .error {color :red};
    </style>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name = "email">
                    <span class="error">* <?php echo $emailErr;?></span>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name = "pass">   
                    <span class="error">* <?php echo $passErr;?></span>
                </div>
                
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "addr">
                <span class="error">* <?php echo $addrErr;?></span>
            </div>
           
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name = "addr2">
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" name = "city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip" name ="zip">
                        <span class="error">* <?php echo $zipErr;?></span>
                    </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </body>
</html>