<?php

if(isset($_POST['upload'])){
    $Files = array_filter($_FILES['files']['name']);

    $total_count = count($_FILES['files']['name']);

    for( $i=0 ; $i < $total_count ; $i++ ){
        $tmpFilePath = $_FILES['files']['tmp_name'][$i];

        if ($tmpFilePath != ""){
            $newFilePath = "images/" . $_FILES['files']['name'][$i];

            if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<script>alert('Upload Succcessfully..')</script>";
             }
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple File Upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    
        <p>Upload Photo:</p>
        <input type="file" name="files[]" value="Choose File.." multiple>
    
        <br><br>

        <input type="submit" name="upload" value="Upload">
    
        </form>
</body>
</html>