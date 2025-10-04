<?php 
session_start();
include('Connectionstring.php');
if(isset($_GET['id'])&& is_numeric($_GET['id']))
{
	$id=$_GET['id'];
}
else
{
	die("Error");
}
$check=$connection->query("SELECT * from forumtbl where FID='$id';");
/*if ($check->num_rows !==1)
{
	die("Error");
}*/
$sq="SELECT FID,FDES from forum where FID='$id';";
$resu=mysqli_query($connection,$sq)or die("Sorry");
$ff=mysqli_fetch_assoc($resu);
echo $ff['FDES']."forum's posts";
$sql="SELECT ptitle, pcontent, pid from forumtbl where FID=? and ptype='o'";
if ($query=$connection->prepare($sql))
{
	$query->bind_param('s',$id);
	$query->bind_result($ptitle,$pcontent, $pid);
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
	<title><?php $jl=" "; 
echo $ff['FDES']; echo $jl."forum's posts"; ?></title>
</head>
<body>
	<div id="con">
		<table width="80%" align="center">
			<?php if ($query->num_rows !=0): ?>
			<?php while($query->fetch()): ?>
			<tr>
				<td>
					<h2><a href="socialmedia3.php?id=<?php echo $pid ?>&fid=<?php echo $id ?>"><?php echo $ptitle; ?></a></h2>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $pcontent; ?>
				</td>
			</tr>
			<?php endwhile; ?>
			<?php else:
			 ?>
			 <tr>
			 	<td>
			 		<h2>There are no posts in this forum</h2>
			 	</td>
			 </tr>
			<?php endif; ?>
		</table>
	</div>
</body>
</html>