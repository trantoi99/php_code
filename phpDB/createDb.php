<?php
// procedural
    $servername = "localhost";
    $username = "root";
    $password = "";
// Create connection
    $conn = mysqli_connect($servername, $username, $password);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
// close connect
//    if(mysqli_close($conn) == true)
//    {
//        echo " disconnect";
//    }

// create table
    $sql = "CREATE DATABASE myDb";
    if(mysqli_query($conn,$sql)){
        echo "Create database successfuly";
    }
    else{
        echo "Eror creating database : ". mysqli_error($conn);
    }
    mysqli_close($conn);
?>
