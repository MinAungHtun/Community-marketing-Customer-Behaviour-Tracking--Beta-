<?php 
session_start();
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
 $_SESSION['count']=1;
 $idd=$_SESSION['id'];
include('Connectionstring.php');

if (!isset($_SESSION['log']))
{
	header('location:errorinfo.html');
}
else{ 
	include('Connectionstring.php');
$sql="Select History, Time, ID from history where MemberID=$idd;";
if($query=$connection->prepare($sql))
{
	$query->bind_result($His,$t, $m);
	$query->execute();
	$query->store_result();
}
else
{
	echo $connection->error;
}
}

 ?>
 <!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div id="con">
		<table width="50%" align="center">
			<?php if ($query->num_rows !=0): ?>
			<?php while($query->fetch()): ?>
			<tr>
				<td>
					<?php echo $His; ?>
				</td>
				<td><?php echo $t; ?></td>
				<td><a href="deletesearch.php?id=<?php echo $m; ?>">Delete</a></td>
			</tr>
			<?php endwhile; ?>
			<?php else:
			 ?>
			 <tr>
			 	<td>
			 		<h2>No search History for you</h2>
			 	</td>
			 </tr>
			<?php endif; ?>
		</table>
	</div>
	<a href="accountmanagement.php">Go back</a>
</body>
</html>