<?php

if(isset($_POST['registernow'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $bdate = $_POST['bdate'];
    $gen = $_POST['gender'];

    echo $fname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $pwd;
    echo "<br>";
    echo $bdate;
    echo "<br>";
    echo $gen;
    echo "<br>";
    echo "<br>";


    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
}

?>