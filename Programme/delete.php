<?php

$con = new PDO('mysql:host=localhost;dbname=user_detail', 'root', '');
var_dump($con);

$Id = $_GET['id'];

if ($_POST["delete"]) {

    $all = implode(",", $_POST['delete']);
    echo $all;
    $qry = $con->query("delete from reg_table where id='$id'");

    if ($qry) {
        echo "<string>Deleted</string>";
        // header("location:List.php");
    } else {
        // var_dump($qry);
        echo "<string>not deleted</string>";
    }
}
