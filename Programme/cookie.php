<?php

if(isset($_POST['submit'])){
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    setcookie('username',$uname,time()+3600);
    setcookie('password',$pwd,time()+3600);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <form method="post">
        <P>User Name:</P>
        <input type="text" name="uname" required>

        <p>Password:</p>
        <input type="password" name="pwd" required><br><br>

        <input type="submit" name="submit" value="Submit">


        <a href="list1.php" name="list">List</a>
        <!-- <button><a href="list1.php" name="list">List</a></button> -->

        <!-- <a href="list1.php"><input type="submit" name="list" value="List"></a> -->
    </form>
</body>
</html>