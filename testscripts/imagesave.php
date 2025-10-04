<?php 
if (isset($_POST['btnsubmit']))
{
$image=$_FILES["txtpic"]["name"];
$folder="Images/";
if($image)
{
	$filename=$folder."_".$image;
	$copied=copy($_FILES["txtpic"]["tmpname"],$filename);
	if(!$copied)
	{
		exit("Problem Occured.Cannot upload image.");
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
<form action="imagesave.php" method="POST">
<table>
<tr><td><input type="file" name="txtpic"/></td></tr>
<tr><td><input type="submit" name ="btnsubmit" value="Submit"/></td></tr>
</table>
</form>
</body>
</html>