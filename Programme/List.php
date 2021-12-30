<?php

session_start();
// echo $_SESSION['email'];


if (isset($_SESSION['email'])) {
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location:Login.php");
    }

    if (isset($_POST['adduser'])) {
        header("Location:Registration.php");
    }

    // if(isset($_POST['dlt'])){
    //     header("Location:delete.php");
    // }



    $con = new PDO('mysql:host=localhost;dbname=user_detail', 'root', '');

    $qry = $con->query("select *from reg_table");

    //echo "<br>";

    // echo "First Name: ".$row['First_Name'];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form method="POST">
            <table border="2">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Birth Date</th>
                    <th>Photo</th>
                    <th>Gender</th>
                    <th>Hobby</th>
                    <th>checkbox</th>
                    <th>Update</th>
                </tr>

                <tr>
                    <?php while ($row = $qry->fetch(PDO::FETCH_ASSOC)) : ?>
                        <td><?php echo $row['First_Name']; ?></td>
                        <td><?php echo $row['Last_Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Pass']; ?></td>
                        <td><?php echo $row['Dob']; ?></td>
                        <td><img src="<?php echo $row['Photo']; ?>" width="100px" height="100px"></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td><?php echo $row['Hobby']; ?></td>
                        <td><input type="checkbox" name="delete[]" value="<?php echo $row['id']; ?>"></td>
                        <!-- <td><a href="delete.php?id=<?php echo $row['id']; ?>">Deldete</a></td> -->
                        <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                </tr>

            <?php endwhile ?>
            </table>

            <br>
            <input type="submit" name="adduser" value="Add User">
            <br><br>
            <input type="submit" name="logout" value="logout">
            <br><br>
            <input type="submit" name="dlt" value="Delete">

        </form>


        <?php

        $con = new PDO('mysql:host=localhost;dbname=user_detail', 'root', '');
        // var_dump($con);

        if (isset($_POST["dlt"])) {


            foreach ($_POST['delete'] as $ab) {
                $qry = $con->query("DELETE FROM `reg_table` WHERE `id`=" . $ab);
            }

            if ($qry) {
                echo "Deleted";
                header("location:List.php");
            } else {
                echo "not deleted";
            }
        }
        ?>
    </body>

    </html>
<?php
} else {
    header("location:Login.php");
}

?>