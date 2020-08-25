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
    $sql = "UPDATE person SET email ='F@yahoo.com' Where id ='8'";
    $kq = mysqli_query($conn,$sql);
    // mysqli_num_rows : trả về số hàng
    if($kq == true){
        echo "Update Successfuly";
    }
    else{
        echo "Eror :". mysqli_error($conn);
    }
    // disconnect db
    mysqli_close($conn);
?>