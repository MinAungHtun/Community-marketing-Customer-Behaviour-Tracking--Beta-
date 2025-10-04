<?php 
session_start();
 $_SESSION['count']=1;
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
if(isset($_POST['btnsm']))
{
	$c=$_SESSION['i'];
	$z=$_POST['tbxtitle'];
	$a=$_POST['txtbx'];
	$b=$_SESSION['uname'];
	$sql="Insert into forumtbl (ptitle,pauthor,pcontent,FID) values('$z','$b','$a','$c')";
	$ret=mysqli_query($connection,$sql);
	if ($ret)
	{
		$aa="Select * from forumtbl where ptitle='$z' and pauthor='$b' and pcontent='$a' and FID='$c';";
		$tt=mysqli_query($connection,$aa);
		$yy=mysqli_fetch_assoc($tt);
		if($tt)
		{
			$_SESSION['pid']=$yy['pid'];
		
		header('location:detailforum.php?id='.$c);
		}
	}
}


 ?>
