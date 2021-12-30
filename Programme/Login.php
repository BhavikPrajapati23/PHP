<?php

if (isset($_POST['login'])) {

    $eml = $_POST['email'];
    $pwd = $_POST['pwd'];

    $con = new PDO('mysql:host=localhost;dbname=user_detail', 'root', '');

    $qry = $con->prepare("SELECT *FROM admin_tbl");

    $qry->execute();

    $users = $qry->fetchAll();

    foreach ($users as $user) {
        if ($user['email'] == $eml && $user['Password'] == $pwd) {
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Form</title>
</head>

<body>
    <h3>USER LOGIN FORM</h3>

    <form method="post">

        <p>Email:</p>
        <input type="email" name="email" required>

        <p>Password:</p>
        <input type="password" name="pwd" required>

        <br><br>

        <input type="submit" name="login" value="Login">

    </form>
</body>

</html>