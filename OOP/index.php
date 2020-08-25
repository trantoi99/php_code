<?php 
    // khai báo class
    require "SinhVien.php";
    require "GoodSv.php";
    $sv = new SinhVien();
    $sv->setFullName("Nguyen Van A");
    $sv->setAge(19);
    $sv->setGrade("7A");
    echo $sv->getFullName();
    echo "<pre>";
    echo $sv->getGrade();
    echo "<pre>";
    echo $sv->getAge();
    // var_dump($sv);
    echo "<br>";
    $sv1 = new GoodSv();
    $sv1->setFullName("Nguyen Van B");
    $sv1->setAge(20);
    $sv1->setGrade("8A");
    $sv1->setPoint(8.9);
    echo $sv1->getFullName();
    echo "<pre>";
    echo $sv1->getGrade();
    echo "<pre>";
    echo $sv1->getAge();
    echo "<pre>";
    echo $sv1->getPoint();
    echo "<pre>";
    $sv1->printDanhHieu(10.6);
    echo "=))";
?>