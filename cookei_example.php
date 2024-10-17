<?php
    // setcookie("username","Pandey Deepak",time()+30*24*60*60);
    echo $_COOKIE["username"];

    // check cookie
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"];
        } else{
        echo "Welcome Guest!";
        }

        // remove cookie
        setcookie("username", "", time()-3600); 
?>