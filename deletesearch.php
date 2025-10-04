<?php 
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
$id=$_GET['id'];
include('Connectionstring.php');
$sql="Delete from history where ID=$id";
$ret=mysqli_query($connection,$sql);
if ($ret)
{
	header('location:editsearch.php');
}
 ?>
