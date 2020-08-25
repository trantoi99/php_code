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
        VALUES ('Tran','Anh','Tu','tranhungtoi308@gmail.com')";
    if(mysqli_query($conn,$sql)){
        $last_id = mysqli_insert_id($conn);
        echo "Inserted Data SuccessFully"."<br>";
        echo "Last ID is ".$last_id;
    }
    else{
        echo "Eror :".$sql."<br>";
        echo "Inserted Data Failed ". mysqli_error($conn); 
    }
?>