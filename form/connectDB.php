<?php
// procedural
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";
// Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully"."<br>";
// close connect
 //   if(mysqli_close($conn) == true)
//    {
//        echo " disconnect";
//    }
?>
