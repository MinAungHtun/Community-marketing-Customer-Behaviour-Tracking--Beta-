<?php 
$ip=$_SERVER['REMOTE_ADDR'];
include("Connectionstring.php");
$i="Select ipadd from block where ipadd='$ip';";
$o=mysqli_query($connection,$i);
$row=mysqli_num_rows($o);
if ($row!=0)
{
header('location:errorinfo.html');	
}
?>