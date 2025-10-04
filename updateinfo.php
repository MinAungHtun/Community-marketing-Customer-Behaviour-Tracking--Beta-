<?php include('checkregblock.php');
include('blockedinfo.php');
session_start();
if ($_SESSION['log']!=1)
{
	header('location:errorinfo.html');
}
$i=$_SESSION['id'];
include('Connectionstring.php');
if (isset($_POST['a']))
{
	$name=$_POST['na'];
	$sql="Update member set MemberName='$name' where MemberID=$i;";
	$ret=mysqli_query($connection,$sql);
if($ret)
{
	echo"success";
}
}
if(isset($_POST['b']))
{
	$email=$_POST['ee'];
	$sq="Update member set Email='$email' where MemberID=$i;";
	$re=mysqli_query($connection,$sq);
if($re)
{
	echo"success";
}
}
if (isset($_POST['c']))
{
	$tel=$_POST['pp'];
	$ss="Update member set Phoneno='$tel' where MemberID=$i;";
	$rr=mysqli_query($connection,$ss);
if($rr)
{
	echo"success";
}
}
if (isset($_POST['d']))
{
	$pc=$_POST['p'];
	$er="Update member set Postalcode='$pc' where MemberID=$i;";
	$tr=mysqli_query($connection,$er);
if($tr)
{
	echo"success";
}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="updateinfo.php" method="post">
 		<input type="text" name="na"placeholder="name"> <input type="submit" name="a" value="Change">
 	</form>
 	<form action="updateinfo.php" method="post">
 		<input type="email" name="ee" placeholder="email"><input type="submit" name="b" value="Change">
 		</form>
 		<form action="updateinfo.php" method="post">
 		<input type="text" name="pp" placeholder="phone"><input type="submit" name="c" value="Change">
 	
 	</form>
 	<form action="updateinfo.php" method="post">
 		<input type="text" name="p" placeholder="postalcode"><input type="submit" name="d" value="Change">
 	
 	</form>
 </body>
 </html>