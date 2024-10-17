<?php
    $arr=array("jai","shree","ram");
    foreach($arr as $a){
        echo "the arrays element is $a<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "example no 2:<br>";
    $abc=array("kay1"=>"deepak",
    "key3"=>"pravin",
    "key2"=>"saurabh");
    foreach($abc as $key=>$element){
        echo $key . " : " . $element;
        echo "</br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "example no 3:<br>";
    
    foreach(array( "D", "e", "e", "p", "a", "k", "p", "a", "n", "d","e","y") as $elements) {
        echo "$elements\n";
        }
?>