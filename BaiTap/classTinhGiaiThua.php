<?php 
    class giaithua{
        public $n;
        public function __construct($n)
        {
            if (!is_int($n))  
            {  
               throw new InvalidArgumentException('Không phải tham số!');  
            }  
            $this->n = $n;  
        }
        public function result(){
            $giai_thua =1;
            for($i=0;$i<$this->n;$i++){
                $giai_thua *= $i;
            }
            return $giai_thua;        
        }
    }
    $kq = new giaithua(6);
    echo $kq->result();
?>