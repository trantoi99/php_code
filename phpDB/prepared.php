<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connected Failed !".mysqli_error($conn));
    }
    else {
        echo "Connected Successfully";
    }

    $sql = "INSERT INTO user (username,pass,email)
        VALUES (?,?,?)";
    // khai báo mysql prepare
    $statement = mysqli_prepare($conn,$sql);
    if($statement){
        // liên kết tham số với câu sql
        // "ssss" là datatypes
        mysqli_stmt_bind_param($statement,"sss",$username,$pass,$email);
        //  thực hiện statement prepare
        $username = "Admin";
        $pass = "1";
        $email = "admin@ex.com";
        mysqli_stmt_execute($statement);

        $username = "Mod";
        $pass = "123";
        $email = "mod@ex.com";
        mysqli_stmt_execute($statement);

        $firstName = "user";
        $pass = "password";
        $email = "user@ex.com";
        mysqli_stmt_execute($statement);

        echo "Inserted Successfully";
    }
    else{
        echo "Eror".$sql;
        echo "<br>";
        echo mysqli_error($conn);
    }
    // đóng stmt
    mysqli_stmt_close($statement);
    
    // đóng kết nối
    mysqli_close($conn);
?>