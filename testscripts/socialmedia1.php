<?php 
session_start();
include('Connectionstring.php');
$sql="Select FID, FDES from forum;";
if($query=$connection->prepare($sql))
{
	$query->bind_result($fid, $fdes);
	$query->execute();
	$query->store_result();
}
else
{
	echo $connection->error;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table align="center" width="80%">
			<?php 
				if($query->num_rows!==0):
					while($row=$query->fetch()):
			 ?>
			 <tr>
			 	<td><a href="socialmedia2.php?id=<?php echo $fid ?>"><?php echo $fdes; ?></a></td>
			 </tr>
			<?php endwhile;endif; ?>
		</table>
</body>
</html>
