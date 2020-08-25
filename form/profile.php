<?php 
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" text ="text/css" href="/form/style1.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="E:/Anh/a.jpg" alt="...">
  <h1>John Doe</h1>
  <p class="title">Welcome <?php  echo $_SESSION['username']?></p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i></a>  
    <a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> 
  </div>
  <a class ="btn-btn-warning" href="logout.php"><i class = "fa fa-sign-out">Log Out</i></a>
  <a class ="btn-btn-warning" href="changePass.php"><i class = "fa fa-key"></i>Change Password</a>

</div>

</body>
</html>
