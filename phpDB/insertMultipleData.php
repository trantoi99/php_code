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
        echo "<br>";
    }

    $sql = "INSERT INTO person (firstName,middleName,lastName,email)
        VALUES ('Tran','Van','A','tranhungtoi308@gmail.com');";
    $sql .= "INSERT INTO person (firstName,middleName,lastname,email)
        VALUES ('Tran','Van','B','C@yahoo.com');";
    $sql .= "INSERT INTO person (firstName,middleName,lastName,email)
        VALUES ('Tran','Van','C','')";
    // nhiều query thì multi_query
    if(mysqli_multi_query($conn,$sql)){
        echo "Inserted Data SuccessFully";
    }
    else{
        echo "Eror :".$sql;
        echo "<br>";
        echo "Inserted Data Failed ". mysqli_error($conn); 
    }
?>