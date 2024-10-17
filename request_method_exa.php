<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_REQUEST["name"])){
        echo "hii ".$_REQUEST["name"]."<br>";
    }
?>
    <form action="" method="post">
        <label for="inputname">Name:</label>
        <input type="text" id="inputname" name="name" placeholder="enter your name">
        <input type="submit" value="submit">
    </form>
    
</body>
</html>