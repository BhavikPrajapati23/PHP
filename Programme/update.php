<?php

if(isset($_POST['update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $con = new PDO('mysql:host=localhost;dbname=user_detail','root','');
    var_dump($con); 

    $Id = $_GET['id'];

    if($_FILES['Photo']['name']){

        unlink($img.$row['Photo']);

        move_uploaded_file($_FILES['Photo']['tmp_name'],"images/".$_FILES['Photo']['name']);
        $img = "images/".$_FILES['Photo']['name'];
    }

    $qry = $con->query("UPDATE reg_table SET First_Name='$fname',Last_Name='$lname',Email='$email',Pass='$pwd',Photo='$img' where id = '$Id'");

    if($qry){
        header("location:List.php");
    }else{
        var_dump($qry);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-page</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">

        <P>First Name:</P>
        <input type="text" name="fname">

        <p>Last Name:</p>
        <input type="text" name="lname">

        <p>Email:</p>
        <input type="email" name="email">

        <p>Password:</p>
        <input type="password" name="pwd">

        <p>Upload Photo:</p>
        <input type="file" name="Photo" value="Choose File..">

        <br><br>

        <input type="submit" name="update" value="Update">

    </form>
    
</body>
</html>