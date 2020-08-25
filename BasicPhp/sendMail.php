<?php 
    $to = "thotang19@gmail.com";// địa chỉ mail nhận
    $subject = "Hello"; // chủ đề
    $message = "Your keyword to change your password :";
    $from = "tranhungtoi308@gmail.com";

    //sending mail
    if(mail($to,$subject,$message)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
?>