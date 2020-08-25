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
        echo "Connect Successfully";
    }

    $sql = "INSERT INTO person (firstname,middlename,lastname,email)
        VALUES ('Tran','Hung','Toi','tranhungtoi308@gmail.com')";
    if(mysqli_query($conn,$sql)){
        echo "Inserted Data SuccessFully";
    }
    else{
        echo "Inserted Data Failed ". mysqli_error($conn); 
    }
    mysqli_close($conn);
?>