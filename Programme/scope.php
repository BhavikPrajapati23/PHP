<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope of Variable</title>
</head>
<body>
    <h2>Local Variable</h2>
    <span><h3>A variable declared within a function has a LOCAL SCOPE and can only be 
accessed within that function</h3></span>

    <?php
    function summation()
    {
      $a=10;
      $b=20;
      $sum; // Local Variables.
      $sum=$a+$b;      // Used inside the functions only    
      echo "Sum=$sum";                    
    }
    summation();
    echo $sum;  // Error because $sum is local variable.
    ?>

    <hr><hr>

    <h2>Global Varible</h2>
    <span><h3>A variable declared outside a function has a GLOBAL SCOPE and can only be 
accessed outside a function</h3></span>

    <?php
    $x = 5; // global scope
 
    function myTest() {
      // using x inside this function will generate an error
      echo "<p>Variable x inside function is: $x</p>";
    } 
    myTest();
    
    echo "<p>Variable x outside function is: $x</p>";
    ?>

    <hr><hr>

    <h2>Static Variable</h2>
    <span><h3>Normally, when a function is completed/executed, all of its variables are deleted. 
However, sometimes we want a local variable NOT to be deleted. We need it for 
a further job. To do this, use the static keyword when we first declare the 
variable.</h3></span>

    <?php
    function myStatic() {
        static $x = 0;
        echo $x;
        $x++;
      }
      
      myStatic();
      echo "<br>";
      myStatic();
      echo "<br>";
      myStatic();
    ?>

    <hr><hr>

    <p><h2>Can we access the global variables inside the function (in local scope)?</h2></p>
    <p>Yes. We can access the global variables inside the function either with “global” keyword before 
variable or using array “$GLOBALS[‘index’]. (Here, index is name of variable without $ sign.</p>

      <?php
      $x = 5;
      $y = 10;
      function myglobal() {
      global $y;
       $y = $GLOBALS['x'] + $y;
      }
      myglobal();
      echo $y; // outputs 15
      ?>
</body>
</html>