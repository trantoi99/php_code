<?php 
    //require "work.txt";
    //echo readfile("work.txt");
    // doc file
    $open = fopen('work.txt','r');

    $read = fread($open,filesize('work.txt'));
    echo $read;
?>