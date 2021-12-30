<?php

if(isset($_POST['submit'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $count = count($_FILES["file"]["name"]);
    $f1 = array();

    for ($i = 0 ; $i < $count ; $i++){

        move_uploaded_file ($_FILES["file"]["tmp_name"][$i],
	                        "images/".$_FILES["file"]["name"][$i]);

	    $f1[$i]= "images/" . $_FILES["file"]["name"][$i];
    }

    $con = new PDO('mysql:host=localhost;dbname=sales', 'root', '');
    var_dump($con);

    if ($con){
        $qry = $con->exec("INSERT INTO product VALUES('$pid','$pname','$f1[0]','$f1[1]','$f1[2]')");
        
                        if($qry){
                            echo "<script>alert('Upload Successfully..')</script>";
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
    <title>MultiPle File Upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        
        <p>Product Id:</p>
        <input type="text" name="pid">

        <p>Product Name:</p>
        <input type="text" name="pname">

        <p>Product Images:</p>
        <input type="file" name="file[]" multiple id="file" />

        <br /> <br>

        <input type="submit" name="submit" value="submit" />

    </form>
</body>
</html>