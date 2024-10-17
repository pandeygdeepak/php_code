<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file_upload_exam.php" method="post"  enctype="multipart/form-data">
        <label for="abc">upload file</label>
        <input type="file" id="abc" name="photo">
        <input type="submit" name="submit" value="upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to
        a maxsize of 5 MB.</p>
    </form>

<?php
    if($_server["REQUEST_METHOD"]=="POST"){
        if(isset($_FILES["photo"]) && $_FILES["fhoto"]["error"]==0){
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["photo"]["name"];
            $filetype = $_FILES["photo"]["type"];
            $filesize = $_FILES["photo"]["size"];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
        }
    }
?>
</body>
</html>