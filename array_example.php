<!-- index array -->
 <?php
    $arr=array(10,12,14,16,17,886);
   print_r($arr);
   
   $colors[0]="red";
   $colors[1]="green";
   $colors[2]="yellow";
   print_r($colors);
    foreach ($arr as $a) {
        echo$a."<br>";
    }

    $size=array("Big","Medium","Short");
    echo count($size);
    // association array
    echo"<br>association array example.<br>";

    $a=array("name"=>"Saurabh",
    "harkato se"=>"dog",
    "age"=>"budha ho gaya",
    "qualification"=>"gawar he");
    foreach($a as $b=>$c){
        echo$b.":".$c."<br>";
    }

    // multidaimention array

    $emp =array
     (
     array(1,"sohan",400000),
     array(2,"john",500000),
     array(3,"rahul",300000)
     );
     for ($row = 0; $row < 3; $row++) {
     for ($col = 0; $col < 3; $col++) {
     echo $emp[$row][$col]." ";
     }
     echo "<br/>";
     }

     
 ?>