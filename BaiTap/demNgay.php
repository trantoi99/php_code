<?php 
    $next_birthday = mktime(0,0,0,8,30,2021);
    $today = time();
    $hieu = $next_birthday-$today;
    $convertTodate = (int)($hieu/86400);
    echo "So ngay la : $convertTodate";
?>