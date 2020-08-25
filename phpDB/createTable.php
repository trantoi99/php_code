<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die ("Connection false".mysqli_error($conn));
    }
    else{
        echo "Connected Successfully";
    }
    echo "<br>";

    $sql = "CREATE TABLE user(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        pass VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if(mysqli_query($conn,$sql)){
        echo "Create table successfully";
    }
    else{
        die("Eror creating table :".mysqli_error($conn));
    }

    // close connection
    mysqli_close($conn);
?>