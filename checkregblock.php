<?php 
include("Connectionstring.php");
$aa="Select * from bon;";
$qq=mysqli_query($connection,$aa)or die("Sorry");
$ff=mysqli_fetch_assoc($qq);
$tt=$ff['n'];
if ($tt==1)
{
	header('location:pars.php');
}
 ?>
