<?php 
    $username = $_POST['user'];
    $password = $_POST['password'];

    if(empty($username)&&empty($password))
    {
        echo "vui long nhap";
    }
?>