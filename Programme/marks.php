<?php
    $stu = array(
        array("Sagar",40,45,48),
        array("Harsh",42,46,38),
        array("Ankit",30,35,41),
        array("Jaxay",43,45,48),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentMarksTable</title>
</head>
<body>
    <form method="post">
    <table border="3">
        <tr>
            <th>Checkbox</th>
            <th>Name</th>
            <th>PHP</th>
            <th>Android</th>
            <th>Java</th>
            <th>Total</th>
            <th>%</th>
        </tr>
        <tr>
            <?php foreach ($stu as $v): ?>
            <td><center><input type="checkbox" name="cb"></center></td>
            <td><?php echo $v[0] ?></td>
            <td><?php echo $v[1] ?></td>
            <td><?php echo $v[2] ?></td>
            <td><?php echo $v[3] ?></td>
            <td>
                <?php 
            if(isset($_POST['genarate'])){
                if(isset($_POST['cb'])){
                    echo $num=$v[1]+$v[2]+$v[3];
                } 
            }else echo "-"; 
                ?>
            </td>
            <td>
                <?php 
            if(isset($_POST['genarate'])){
                echo $num/300*100;
            }else echo "-"; 
                ?>
            </td>
        </tr>

        <?php endforeach ?>

    </table>
    <br>
    <input type="submit" name="genarate" value="genarate">
            
</form>
</body>
</html>