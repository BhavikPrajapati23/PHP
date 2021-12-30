<?php

if(isset($_post['reg'])){
	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$eml =  $_POST['email'];
$pass = $_POST['pwd'];
$dob = $_POST['Dob'];
$gen = $_POST['gen'];
$hb = implode($_POST['hobby']);
	
$con = new PDO('mysql:host=localhost;dbname=detail','root','');

if($_FILES['Photo']['name'])
{
    move_uploaded_file($_FILES['Photo']['tmp_name'],"images/".$_FILES['Photo']['name']);
    $img = "images/".$_FILES['Photo']['name'];
}

$qry = $con->exec("INSERT INTO reg_table(First_Name,Last_Name,Email,Pass,Dob,Photo,Gender,Hobby) 
                            VALUES('$fname','$lname','$email','$pwd','$bdate','$img','$gen','$hob')");


if($qry)
{
    echo "<script>alert('Register Successfully..')</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration-page</title>
</head>
<style>
    body{
        background-color: #FFCC00;
    }
    form {
  border: 2px solid #f1f1f1;
  padding: 20px;
  width: 35%;
  height: 50%;
  margin: auto;
  margin-top: 20px;
  background-color: #fff;
  color: #555;
     }
     button
{
  background-color: rgb(255, 255, 253);
  border-color: #534d4d;
  border-width: 1px;
  border-radius: 3px;
  padding: 6px;
  /* font-family: "Lucida Console", Courier, monospace; */
}

button:hover{
  color: rgb(0, 0, 0);
  background-color: rgb(240, 205, 8);
} 
</style>
<body>
    <form method="post" enctype="multipart/form-data">
            <button type="button" onclick="document.location='Login.html'" 
            name="Login">Login</button>

            <button type="button" name="Registration">Registration</button>
        <hr>
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter First Name" name="fname" required>

    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Last Name" name="lname" required>

    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="pwd" required>
    </div>

    <label for="exampleInputBirthDate">BirthDate</label>
    <input type="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter BirthDate" name="Dob" required>

    <label for="exampleInputFile">Choose File</label>
    <input type="file" class="form-control" aria-describedby="emailHelp" name="file" required>

    Gender:  <input type="radio" name="gen" value="Male"/> Male   <input type="radio" name="gen" value="Female"/> Female
    
    <br><br>

    <label for="hobby">Hobby:</label>
    <input type="checkbox" name="hobby" value="racing"/> Racing
    <input type="checkbox" name="hobby" value="swiming"/> Swiming
    <input type="checkbox" name="hobby" value="reading"/> Reading

  </div>
  
  
  <center>
    <button name="reg">Register</button>
  </center>
  
  
</form>
</body>
</html>