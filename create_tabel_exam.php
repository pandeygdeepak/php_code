<?php
    $server_name="localhost";
    $username="root";
    $psw="";

    $conne=mysqli_connect($server_name,$username,$psw);
    if($conne){
        echo "connect to the server successfully";
    }
    else{
        echo "error in connection";
    }
    $tabel="CREATE TABLE"
?>