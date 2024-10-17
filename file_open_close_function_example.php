<?php
     $handel=fopen("data.txt","r") or die("Error: file cant open..........");
     if($handel){
        echo"file open successfully...";
        fclose($handel);
     }

     $ab="data.txt";
    if(file_exists($ab)){
        echo"the $ab is exist ";
        $abc=fopen($ab,"r") or die("Error : file can't open..");
        if($abc){
            echo"file open successfully....";
        
        }
        if(fclose($abc)){
            echo"<br>file closed sucesfully";
        }
        else{
            echo"file does not exist";
        }

    }
    else{
        echo"File does not exist";
    }
?>