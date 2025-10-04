<?php 
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');

session_start();
$_SESSION['count']=1; 
$j=$_SESSION['id'];
$i=$_SESSION['ll'];
if (isset($_POST['a']))
{

	$sql="Insert into adoption(MemberID,LeopardID)values($j,$i);";
	$ret=mysqli_query($connection,$sql);
	if ($ret)
	{
		echo "success";
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <p>Are you sure?</p><p>Though, you still need to be an active member for the confrimation</p>
 <form action="leoinfo.php" method="post"><input type="submit" name="a" value="Yes"></form><a href="accountmanagement.php">No</a>
 </body>
 </html>