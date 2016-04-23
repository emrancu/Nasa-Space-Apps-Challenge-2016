<?php
	
include '../config/dbconfig.php';
  $a=$_POST['lati'];
  $b=$_POST['lang'];
  $c=$_POST['addr'];
  if($a==NULL || $b==NULL || $c==NULL){}else {
    mysqli_query($con, "delete from userlocation");
    mysqli_query($con, "insert into userlocation(latitude,langitude,address) values('$a','$b','$c')");

  }

?>