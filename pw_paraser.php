<?php
session_start();
$id=$_SESSION['id'];
include("Connectionstring.php");
if( isset($_POST['n']) && isset($_POST['e'])){
	$n=$_POST['n'];
	$e=$_POST['e'];
$sql="Update member set Password='$e' where MemberID=$id and Password='$n';  ";
$ret=mysqli_query($connection,$sql);
if ($ret)
{
	echo "success";
}

		}
	 

?>