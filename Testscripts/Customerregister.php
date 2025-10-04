<?php 
$connection=mysqli_connect("localhost","root","","customertest");
if(isset($_POST['btnsubmit']))
{
	$name=$_POST['txtname'];
	$phone=$_POST['txtphone'];
	$email=$_POST['txtemail'];
	$password=$_POST['txtpassword'];
	$gender=$_POST['rdoGender'];
	$image1=$_FILES['txtpic']['name'];
	$folder="Images/";
	if($image1)
	{
		$filename1=$folder."_".$image1;
		$copied=copy($_FILES['image1']['tmp_name'],$filename1);
		if(!$copied)
		{
			exit("Problem Occured. Cannot upload image.");
		}
	}
	$select="SELECT * FROM Customer Where Email='$email'";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	if($count>0)
	{
		echo "<script>window.alert('Customer already exists')</script>";
	}
	else
	{
	$insert="INSERT INTO customer
	( 
	CustomerName, 
	PhoneNo,
	Email, 
	Password ,
	Gender,
image)VALUES('$name','$phone','$email','$password','$gender','$filename1') ";
	$ret=mysqli_query($connection,$insert);
	if($ret)
	{
		echo'<script>window.alert("Register successful")</script>';
	}
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="Customerregister.php" method="post">
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
</body>
</html>