<?php 
   get_header();
   $post = $_POST['header'];

   echo "<pre>";
   echo $_POST['username'];
   echo "<br>";
   echo $_POST['password'];
   echo "<br>";
   echo $_POST['isChecked']; 
   echo "<br>";
   var_dump($post);
   echo "<br>";
   ?>
<?php
   get_footer( ); 
?>