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
    <title>String-Function</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1><b><center>String-Function</center></b></h1>

        <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
            <form class="form-inline" method="post">
                <input class="form-control mr-sm-2" name="string" type="search" placeholder="enter string here.." aria-label="Search">
            
                <br><br>
                
                <hr>

                <table class="table table-striped table-dark text-white table-hover">
            <thead>
                <tr>
                    <th class="text-center">CheckBox</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Output</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><input type="checkbox" name="len"></td>
                    <td>strlen ($str)</td>
                    <td>This function returns the length of the string or the number of characters in the string including whitespaces.</td>
                    <td><?php echo $ans; ?></td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox" name="rev"></td>
                    <td>strrev($str)</td>
                    <td>This function is used to reverse a string.</td>
                    <td><?php echo $ans1; ?></td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox" name="ucw"></td>
                    <td>ucwords($str)</td>
                    <td>This function is used for formatting the string. This function converts first letter/character of every word in the string to uppercase.</td>
                    <td><?php echo $ans2; ?></td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox" name="strup"></td>
                    <td>strtoupper($str)</td>
                    <td>To convert every letter/character of every word of the string to uppercase, one can use strtoupper() method.</td>
                    <td><?php echo $ans3; ?></td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox" name="strlw"></td>
                    <td>strtolower($str)</td>
                    <td>This function is used to convert every letter/character of a string to lowercase.</td>
                    <td><?php echo $ans4; ?></td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox" name="strwc"></td>
                    <td>str_word_count($str)</td>
                    <td>This function returns the number of words in the string. This function comes in handly in form field validation for some simple validations.</td>
                    <td><?php echo $ans5; ?></td>
                </tr>
            </tbody>
        </table>
        
        <center><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="genarate">Generate</button></center>
        <!-- <input type="submit" name="genarate" value="genarate"> -->
              </form>
          </nav>
    
        <!-- <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
              <div class="searchbar">
                <input class="search_input" type="text" name="" placeholder="Search...">
                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
              </div>
            </div>
          </div> -->
    
    
        <!-- <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
              Your String=<input class="form-control mr-sm-2" type="search" placeholder="enter string here.." aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav> -->
        <br>
</body>
</html>