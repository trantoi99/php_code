<?php 
  trait message1 {
    public function msg1() {
      echo "OOP is boring! ";
    }
    public function msg2(){
      echo "<br>";
      echo "OOP is too difficult";
    }
  }      
  class Welcome {
    use message1;
  }
  $obj = new Welcome();
  $obj->msg1();
  $obj->msg2();
?>