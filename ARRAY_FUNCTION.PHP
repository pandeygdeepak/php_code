<?php
    // sorting for indexed array
    echo"sortion method for indexed array<br>";
    $arr1=array(10,26,2,3,4,63,4,67,6,5,566,00.19);
    sort($arr1);
    print_r($arr1);
    echo("<br>reverse sorting for indexed array<br>");
    rsort($arr1);
    print_r($arr1);
    // sortion method for assosiation array
    echo"sorting method for association array<br>";
    
    $arr2=array("name:"=>"deepak","age:"=>"11","education"=>"IAS officer");
    asort($arr2);
    print_r($arr2);
    echo("<br>reverse sorting for association array<br>");

    arsort($arr2);
    print_r($arr2);

    
    echo"<br>sorting method for association array for key<br>";
    
    $arr2=array("name:"=>"deepak","age:"=>"11","education"=>"IAS officer");
    ksort($arr2);
    print_r($arr2);
    echo("<br>reverse sorting for association array for key<br>");

    krsort($arr2);
    
    print_r($arr2);

    

?>