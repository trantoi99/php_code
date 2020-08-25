<<?php 
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
$sql = "DELETE  FROM person Where id ='2'";
$kq = mysqli_query($conn,$sql);
// mysqli_num_rows : trả về số hàng
if($kq == true){
        echo "Delete Successfully";
    }
else{
    echo "Eror :". mysqli_error($conn);
}
// disconnect db
mysqli_close($conn);
?>