<?php
    $content=" hii its a extra content";
    $file="data.txt";
    $file2=fopen($file,"r") or die("error file can't open");
    fwrite($file2,$content);
    echo "<br>Data added sucsessfully..<br>";
    fclose($file2);
    
?>