<?php 
    class goodBye{
        const LEAVE_MESSAGE ="GoodBye";
        public function byebye(){
            echo self::LEAVE_MESSAGE;
        }
    }
    echo goodBye::LEAVE_MESSAGE;
    $gb = new goodBye();
    $gb->byebye();
?>