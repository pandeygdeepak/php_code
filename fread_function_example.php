<?php
    $abc=fopen("data.txt","r") or die("error file cant open");
    $file_content=fread($abc,"10");
    fclose($abc);
    echo $file_content;
?>