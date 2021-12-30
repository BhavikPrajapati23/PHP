<?php

session_start();

if(isset($_POST['registernow'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $bdate = $_POST['bdate']; 
        // $Photo = $_FILES($_POST['Photo']);
    
        // $targetDir = "images/";
        // $fileName = basename($_FILES['photo']['name']);
        // $targetFilePath = $targetDir . $fileName;
        // $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    
    
        $gen = $_POST['gender'];
        $hob = implode(',',$_POST['hobby']);
    
        setcookie('email',$email,time()+3600);
        setcookie('pass',$pwd,time()+3600);
    
        $con = new PDO('mysql:host=localhost;dbname=user_detail','root','');
        // var_dump($con); 
    
        if($_FILES['Photo']['name']){
            move_uploaded_file($_FILES['Photo']['tmp_name'],"images/".$_FILES['Photo']['name']);
            $img = "images/".$_FILES['Photo']['name'];
        }
    
        $qry = $con->exec("INSERT INTO reg_table(First_Name,Last_Name,Email,Pass,Dob,Photo,Gender,Hobby) 
                            VALUES('$fname','$lname','$email','$pwd','$bdate','$img','$gen','$hob')");
    
                            if($qry){
                                echo "<script>alert('Register Successfully..')</script>";
                            }
                            
        // var_dump($qry);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration-Form</title>
</head>
<body>
    <h3>USER REGISTRATION FORM</h3>

    <form method="post" enctype="multipart/form-data">
    
    <P>First Name:</P>
    <input type="text" name="fname" required>

    <p>Last Name:</p>
    <input type="text" name="lname" required>

    <p>Email:</p>
    <input type="email" name="email" required>

    <p>Password:</p>
    <input type="password" name="pwd" required>

    <p>Date of Birth:</p>
    <input type="date" name="bdate" required>

    <p>Upload Photo:</p>
    <input type="file" name="Photo" value="Choose File.." required>

    <br><br>

    Gender<input type="radio" name="gender" value="male"/>Male <input type="radio" name="gender" value="female"/>Female <br><br>

    Hobby<input type="checkbox" name="hobby[]" value="playing"/>Playing <input type="checkbox" name="hobby[]" value="swiming"/>Swiming
    <input type="checkbox" name="hobby[]" value="racing"/>Racing <br><br>

    <input type="submit" name="registernow" value="Register Now">

    <!-- <button><a href="List.php">List</a></button> -->

    <!-- <button><a href="Login.php">Register Now</a></button> -->
    <!-- <input type="submit" name="login" value="Login"> -->

    <button><a href="Login.php">Login</a></button>

    </form>
</body>
</html>