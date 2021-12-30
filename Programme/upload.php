<?php

if(isset($_POST['submit'])){
        if($_FILES['Photo']['name'] || $_FILES['Photo']['size'] >= 2097152){
            move_uploaded_file($_FILES['Photo']['tmp_name'],"images/".$_FILES['Photo']['name']);
            $img = "images/".$_FILES['Photo']['name'];

            echo "<script>alert('Upload Successfulyy..')</script>";
    }else{
        echo "<script>alert('Something Went Wrong..')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Photo</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">

    <p>Upload Photo:</p>
    <input type="file" name="Photo" value="Choose File.." required>

    <p><input type="submit" name="submit" value="Upload"></p>

    </form>
</body>
</html>