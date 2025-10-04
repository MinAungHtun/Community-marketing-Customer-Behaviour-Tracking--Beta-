<?php 
include('Connectionstring.php');
if(isset($_POST['upload']))
{
	$target="images/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	$text=$_POST['text'];
	$query="INSERT into pphoto (pid,photo) values(4,'$image');";
	$quer="INSERT into forumtbl (pid,pcontent,FID)values(4,'$text',1); ";
	$ret=mysqli_query($connection,$quer)or die("Sorry!");
	if($ret)
	{
	mysqli_query($connection,$query);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
	{
		$msg="Image uploaded successfully";
		
	}
	else
	{
		$msg="There was a problem uploading image";
	}
	echo $msg;
}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<?php 
		$sql="SELECT * from forumtbl f, pphoto p  where f.pid=p.pid;";
		$r=mysqli_query($connection,$sql)or die ("error");
			while ($row=mysqli_fetch_array($r))
			{
				echo "<div>";
					echo "<img src='images/".$row['photo']."' height=300px; width=30%;>";
	
					echo "<p>".$row['pcontent']."</p>";
					echo "</div>";
				}
			
		 ?>
<form method="post" action="imageworksleo.php" enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
	<div>
		<input type="file" name="image">
	</div>
	<div>
		<textarea name="text" cols="40"
		rows="4" placeholder="Say something"></textarea>
	</div>
	<div>
		<input type="submit" name="upload" value="Upload image">
	</div>
</form>
</div>
</body>
</html>