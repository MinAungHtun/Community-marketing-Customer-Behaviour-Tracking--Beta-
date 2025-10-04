<?php 
include('blockedinfo.php');
include('checkregblock.php');

include('Connectionstring.php');
session_start();
$i=$_SESSION['pid'] or die("Please insert leopard info first");
$c=$_SESSION['i'];
if(isset($_POST['upload']))
{
	$target="images/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	//$text=$_POST['text'];
	$query="Insert into pphoto (pid,photo)values ($i,'$image');";
	//$quer="INSERT into forumtbl (pid,pcontent,FID)values(4,'$text',1); ";
	/*$ret=mysqli_query($connection,$quer)or die("Sorry!");
	if($ret)
	{*/
	mysqli_query($connection,$query);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
	{
		header('location:detailforum.php?id='.$c);
		
	}
	else
	{
		$msg="There was a problem uploading image";
	}
	echo $msg;
}

 ?>