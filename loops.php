<?php

// while loop
$a=1;
echo "While loop example<br>";
while($a<=10){
    echo $a."<br>";
    $a++;
}

$b=0;
echo "While loop example<br>";
while($b<=100){
    echo $b."<br>";
    $b+=10;
}


// do while loop

// echo "Do while loop <br>"
// $c=1;
// do {
//     echo $c;
//     $c++;
// } while ($c <= 10);

// for loop

echo "for loop example<br>";

for ($i=0; $i<5 ; $i++) { 
    for($j=0; $j<5; $j++){
        echo "*";
    }
    print("<br>");
}

echo"<br>";
for($i = 0; $i <5; $i++) {
    for($j = 0; $j < 5; $j++) {
    if($i === 0 || $i === 4) {
    echo "*";
    }
    else {
    if($j === 0 || $j === 4) {
    echo "*";
    }
    else {
    echo "&nbsp;&nbsp;";
    }
    }
    }
    echo "<br>";
   }
?>