<?php 
    class hocsinh{
        public $id;
        public $name;
        public $grade;
        public $age;

        public function __construct($id,$name,$grade,$age)
        {
             $this->id = $id;
             $this->name = $name;
             $this->grade =$grade;
             $this->age = $age;
        }
       /* public function __destruct()
        {
            echo "Hoc sinh thứ {$this->id}.".
            " Tên là :{$this->name}"." Lớp :{$this->grade}"." Tuổi :{$this->age} ";
            echo "<br>";
        }
        */
    }
    function convertToArr($arr){
        $jsontype = json_encode($arr);
        return json_decode($jsontype,true);
    }
    $hs1 = new hocsinh(1,"An",7,15);
    
    $arr = array();   
    // $arr1 = convertToArr($hs1);
    // convert object to array
    $arr1 = (array)$hs1;
    $hs2 = new hocsinh(2,"Bình",7,15);
    $arr2 = convertToArr($hs2);
    $arr = array_merge_recursive($arr1,$arr2);
    var_dump($arr);
    echo "<br>";
    $id = $arr["id"];
    var_dump($id);
    echo "<br>";
    for ($n=0;$n<count($id);$n++)
    {
        if($id[0]==1){
            echo "a";
        }
    }
    
?>