<?php
// left tringle pattern
$i=0;
for ($i=0; $i<5; $i++) { 
    for($j=0; $j<=$i; $j++){
        echo "*";
    }
    echo"<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

// right tringle pattern
for($k = 0; $k <5; $k++){
    // print spaces
    for($j = 1; $j <5- $k; $j++) {
    echo "&nbsp;&nbsp;";
    }
    // print stars
    for($l = 0; $l <= $k; $l++) {
    echo "*";
    }
    echo "<br>";
    }
   
    echo "<br>";
    echo "<br>";
    echo "<br>";

  for($i=5; $i>0; $i--){
    for($j=0; $j<$i; $j++){
        echo"*";
    }
    echo"<br>";
}  

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// HOLLO TRINGLE PATTERN
$size = 5;
for($i = 1; $i <= $size; $i++) {
    for($j = 0; $j < $i; $j++) {
// not last row
        if($i != $size) {
            if($j == 0 || $j == $i- 1) {
                echo $i;
                        }
            else {
                echo "&nbsp;&nbsp;";
                }
            }
// last row
        else {
            echo $i;
        }
    }
    echo "<br>";
}


echo"<br>";
echo"<br>";
echo"<br>";

// piramid traingle

for ($i=0; $i <5 ; $i++) { 
    for ($j=0; $j <5-$i-1 ; $j++) { 
        # code...
        echo "&nbsp;&nbsp;";
    }
    for ($k=0; $k <2*$i+1 ; $k++) { 
        # code...
        echo"*";
    }
    echo"<br>";
}

echo"<br>";
echo"<br>";
echo"<br>";

// piramid traingle

for ($i=0; $i <5 ; $i++) { 
    for ($j=0; $j <$i ; $j++) { 
        # code...
        echo "&nbsp;&nbsp;";
    }
    for ($k=0; $k <2 * ($size- $i)- 1 ; $k++) { 
        # code...
        echo $i;
    }
    echo"<br>";
}



?>