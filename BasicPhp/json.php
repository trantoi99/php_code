<?php 
    //ecncode : convert về kiểu json
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    echo json_encode($age);

    //decode : convert từ kiểu json sang mảng liên hợp hoặc đối tượng
    // true chả về mảng
    // false về php object
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj, true));
?>