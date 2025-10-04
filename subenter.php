<?php 
$v=$_POST['txtbx'];
include("Connectionstring.php");
$sq="Insert into sub (email) values ('$v');";
$ret=mysqli_query($connection,$sq);
if ($ret)
{
	header('location:Home.php');
}

 ?>