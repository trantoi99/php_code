<?php 
    session_start();

    // xóa session
    if(session_destroy()){
        header("Location:loginform.php");
    }
?>