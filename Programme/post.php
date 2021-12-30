<?php
$name=$_GET['name'];

$bdate=$_GET['bdate'];


$d=strtotime($bdate);

$bdatenew=date('$bdate',$d);
$cdate=date('$bdate');
$age=$cdate-$bdatenew;

/*$bdatenew1=date('m',$d);
$cdate1=date('m');
$month=$cdate1-$bdatenew1;

$bdatenew2=date('d',$d);
$cdate2=date('d');
$day=$cdate2-$bdatenew2;*/

echo"<br>hello $name , your are $age old";
?>