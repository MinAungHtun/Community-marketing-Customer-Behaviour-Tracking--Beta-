<?php 
include('blockedinfo.php');
include('checkregblock.php');

include('Connectionstring.php');
session_start();
$i=$_SESSION['lid'] or die("Please insert leopard info first");
if(isset($_POST['upload']))
{
	$target="images/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	//$text=$_POST['text'];
	$query="Update leopard set Photo='$image' where LeopardID=$i;";
	//$quer="INSERT into forumtbl (pid,pcontent,FID)values(4,'$text',1); ";
	/*$ret=mysqli_query($connection,$quer)or die("Sorry!");
	if($ret)
	{*/
	mysqli_query($connection,$query);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
	{
		$msg="Image uploaded successfully";
		
	}
	else
	{
		$msg="There was a problem uploading image";
	}
	echo $msg;
}

 ?>