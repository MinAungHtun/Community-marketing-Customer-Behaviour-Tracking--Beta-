<?php 
$image1=$_FILES['txtpic']['name'];
	$folder="Images/";
	if($image1)
	{
		$filename1=$folder."_".$image1;
		$copied=copy($_FILES['txtpic']['tmp_name'].$filename1);
		if(!$copied)
		{
			exit("Problem Occured. Cannot upload image.");
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="te.php" method="post">

<input type="file" name="txtpic">
<input type="submit" name ="btnsubmit" value="Submit"/>
</form>
</body>
</html>