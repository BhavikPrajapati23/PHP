<?php
                if(isset($_POST['genarate'])){
                    if(isset($_POST['len'])){
                        $string=$_POST['string'];
                        $ans=strlen($string);
                    }
                }else
                $ans="<center>-</center>";

            // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            // echo "clicked.. ";

            if(isset($_POST['rev'])){
                if(isset($_POST['genarate'])){
                    $string=$_POST['string'];
                    $ans1=strrev($string);
                }
            }else
            $ans1="<center>-</center>";

            if(isset($_POST['ucw'])){
                if(isset($_POST['genarate'])){
                    $string=$_POST['string'];
                    $ans2=ucwords($string);
                }
            }else
            $ans2="<center>-</center>";

            if(isset($_POST['strup'])){
                if(isset($_POST['genarate'])){
                    $string=$_POST['string'];
                    $ans3=strtoupper($string);
                }
            }else
            $ans3="<center>-</center>";

            if(isset($_POST['strlw'])){
                if(isset($_POST['genarate'])){
                    $string=$_POST['string'];
                    $ans4=strtolower($string);
                }
            }else
            $ans4="<center>-</center>";

            if(isset($_POST['strwc'])){
                if(isset($_POST['genarate'])){
                    $string=$_POST['string'];
                    $ans5=str_word_count($string);
                }
            }else
            $ans5="<center>-</center>";
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
</head>
<body>
    <h1><center>String Function</center></h1>

    <form method="post">
    Enter your String=<input type="text" name="string" placeholder="Enter your string here.."><br><br>

    <?php
        $orstr = $_POST['string'];
    ?>

    <table border="">
        <tr>
            <th>Checkbox</th>
            <th>Name</th>
            <th>Description</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>Origenal Text</td>
            <td>This Is Orignal Text.</td>
            <td><?php echo $orstr; ?></td>
        </tr>
        <tr>
            <td><center><input type="checkbox" name="len"></center></td>
            <td>strlen ($str)</td>
            <td>This function returns the length of the string or the number of characters in the string including whitespaces.</td>
            <td><?php echo $ans; ?></td>
        </tr>
        <tr>
            <td><center><input type="checkbox" name="rev"></center></td>
            <td>strrev($str)</td>
            <td>This function is used to reverse a string.</td>
            <td><?php echo $ans1; ?></td>
        </tr>
        <tr>
            <td><center><input type="checkbox" name="ucw"></center></td>
            <td>ucwords($str)</td>
            <td>This function is used for formatting the string. This function converts first letter/character of every word in the string to uppercase.</td>
            <td><?php echo $ans2; ?></td>
        </tr>
        <tr>
            <td><center><input type="checkbox" name="strup"></center></td>
            <td>strtoupper($str)</td>
            <td>To convert every letter/character of every word of the string to uppercase, one can use strtoupper() method.</td>
            <td><?php echo $ans3; ?></td>
        </tr>
        <tr>
            <td><center><input type="checkbox" name="strlw"></center></td>
            <td>strtolower($str)</td>
            <td>This function is used to convert every letter/character of a string to lowercase.</td>
            <td><?php echo $ans4; ?></td>
        </tr>
        <tr>
            <td><center><input type="checkbox" name="strwc"></center></td>
            <td>str_word_count($str)</td>
            <td>This function returns the number of words in the string. This function comes in handly in form field validation for some simple validations.</td>
            <td><?php echo $ans5; ?></td>
        </tr>
    </table>
    <br>
        <input type="submit" name="genarate" value="genarate">

</form>
</body>
</html>