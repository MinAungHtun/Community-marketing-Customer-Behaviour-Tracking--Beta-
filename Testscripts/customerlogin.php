<?php 
$connection=mysqli_connect("localhost","root","","customertest");
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$password=$_POST['txtpassword'];
	$select="SELECT * FROM Customer Where CustomerName='$name' And Password='$password'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{
		echo "<script>window.alert('Log in succeeds')</script>";
	}
	else
	{
		echo"<script>window.alert('Incorrect customer name and/or password.Log in fails.Pls create an account if not already done')</script>";
	}
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="customerlogin.php" method="post">
	<table width="30%" border="2">
<tr>
	<td>
		Customer Name
	</td>
<td>
<input type="text" name="txtname" placeholder=""/>
</td>
</tr>
<tr>
	<td>
		Password
	</td>
<td>
<input type="text" name="txtpassword" placeholder=""/>
</td>
</tr>
<tr>
<td><input type="submit" name ="btnsubmit" value="Submit"/></td>
</tr>
 </body>
 </html>