<?php 
    include "connectDB.php";
    $qr = "SELECT *FROM user WHERE username = '$un'";
    $un = $_POST["un"];
    $u = mysqli_query($conn,$qr);
    $dong = mysqli_num_rows($u);
    echo $dong;
?>