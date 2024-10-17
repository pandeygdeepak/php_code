<?php
    session_start();

    $_SESSION["firstname"]="Deepak";
    $_SESSION["lastname"]="Pandey";

    // Accessing session data
    echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];

    // remove session
       if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
        }

    session_destroy();
?>
