<?php

if (isset($_POST['sub'])) {

    $eml = $_POST['email'];
    $pwd = $_POST['pwd'];

    $con = new PDO('mysql:host=localhost;dbname=user_detail', 'root', '');

    $qry = $con->prepare("SELECT *FROM admin_tbl");

    $qry->execute();

    $users = $qry->fetchAll();

    foreach ($users as $user) {
        if ($user['email'] == $eml && $user['Password'] == $pwd) {

          // echo "<script>alert('Login Success')</script>";
            session_start();
            $_SESSION["email"] = $eml;
            header("Location:List.php");
        } else {
            echo "<script>alert('Please,Enter Valid email and password')</script>";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

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
  margin-top: 150px;
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
    <form method="POST">
      <button type="button" name="Login">Login</button>
      <button type="button" onclick="document.location='Registration.php'">Registration</button>
      
        <!-- <button type="button" onclick="document.location='Registration.html'" 
        name="Registration" class="btn btn-outline-primary">Registration</button>         -->
        <hr>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="pwd" placeholder="Password" required>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="Check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <center>
    <button type="submit" name="sub">Submit</button>
  </center>
</form>
</body>
</html>