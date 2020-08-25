<?php
interface CanFly {
  public function fly();
}

interface CanSwim {
  public function swim();
}

class Bird {
  public function info() {
    echo "I am a {$this->name}\n";
    echo "I am an bird\n";
  }
  public function eat()
  {
      echo "Eating";
  }
}

class Fish{
    public function info() {
        echo "I am a {$this->name}\n";
        echo "I am an fish\n";
      }
}

class Shark extends Fish implements CanSwim{
    var $name = "Shark";
    public function swim()
    {
        echo "I swim";
    }
}

class Dove extends Bird implements CanFly {
  var $name = "Dove";
  public function fly() {
    echo "I fly\n";
  }
  public function Intro(){
      parent::eat();
  }
}

class Penguin extends Bird implements CanSwim {
  var $name = "Penguin";
  public function swim() {
    echo "I swim\n";
  }
}

class Duck extends Bird implements CanFly, CanSwim {
  var $name = "Duck";
  public function fly() {
    echo "I fly\n";
  }
  public function swim() {
    echo "I swim\n";
  }
}

function describe($val) {
  if ($val instanceof Bird) {
    $val->info();
    if ($val instanceof CanFly) {
      $val->fly();
    }
    if ($val instanceof CanSwim) {
      $val->swim();
    }
  }
   else {
    die("This is not a bird. I cannot describe it.");
  }
}

// describe these birds please
describe(new Penguin);
echo "<br>";
describe(new Dove);
echo "<br>";
describe(new Duck);
echo "<br>";
describe(new Shark);
echo "<br>";
$dove = new Dove();
$dove->Intro();
?>