<?php 
session_start();
if(isset($_POST['btnsubmit']))
{
$i1=$_COOKIE["count"]+2;
$_COOKIE["count"]=$i1;
echo $_COOKIE["count"];
}
else
{
$i=0;
setcookie("count",$i);
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<form action="timetest.php" method="post">
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
		Phone No.
	</td>
<td>
<input type="text" name="txtphone" placeholder=""/>
</td>
</tr>
<tr>
	<td>
		Email
	</td>
<td>
<input type="text" name="txtemail" placeholder=""/>
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
	<td>
		Gender
	</td>
  <td><input type="radio" name="rdoGender" value="Male"/>Male
                    	<input type="radio" name="rdoGender" value="Female"/>Female
  </td>
</tr>
<tr>
	<td>
		Image
	</td>
	<td>
		<input type="file" name="txtpic"/>
	</td>
</tr>
<tr>
<td><input type="submit" name ="btnsubmit" value="Submit"/></td>
</tr>
</table>
</form>
<?php echo $_SESSION['something']; ?> 
 </body>
 </html>