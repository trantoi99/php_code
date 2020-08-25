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
    $sql = "SELECT id,firstName,middleName,lastName,email FROM person Where id ='2'";
    $kq = mysqli_query($conn,$sql);
    // mysqli_num_rows : trả về số hàng
    if(mysqli_num_rows($kq)>0){
        // mysqli_fetch_assoc : lấy kết quả của hàng trả vè mang liên hợp
        while($row =mysqli_fetch_assoc($kq)){
            echo "id: " . $row["id"]. " - Name: " .
             $row["firstName"]. " " . $row["middleName"]." ".$row["lastName"]."- Email :"
             .$row["email"] ."<br>";
        }
    }
    else{
        echo "No Results";
    }
    // disconnect db
    mysqli_close($conn);
?>