<?php 
session_start();
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
$_SESSION['count']=1;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p><h1>SAL</h1></p>
	<p>Pay through 
	<a href="www.visa.com">Visa</a>
	<a href="www.mastercard.com">Mastercard</a>
	</p>
	<p>Sorry for inconvenience.Payment function is still under construction but we do guarantee you that we won't scam you.</p>

 <p>Though we have your adoption data it won't be confirmed until you pay the membership fees</p>
</body>
</html>