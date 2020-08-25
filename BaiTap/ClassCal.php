<?php
    class MyCalculator {  
	    private $_fval, $_sval;  
		  
		public function __construct( $fval, $sval ) {  
		    $this->_fval = $fval;  
		    $this->_sval = $sval;  
		}  
		  
		public function add() {  
		    return $this->_fval + $this->_sval;  
		}  
		  
		public function subtract() {  
		    return $this->_fval - $this->_sval;  
		}  
		  
		public function multiply() {  
		    return $this->_fval * $this->_sval;  
		}  
		
		public function divide($fval,$sval) {  
		    if($sval == 0){
				throw new Exception(" ko đc chia cho 0");
			}
			return $fval / $sval;
		  }  
	}  
	$mycalc = new MyCalculator(12, 6);   
	echo $mycalc-> add(); 
	echo "<br>";
	echo $mycalc-> multiply(); 
	echo "<br>";
	echo $mycalc-> subtract(); 
	echo "<br>";
	try {
		echo $mycalc -> divide(5, 0);
	  } catch(Exception $e) {
		echo "Unable to divide.";
	  }
?>
       