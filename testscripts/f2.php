<?php 
function isok()
{
	include('Connectionstring.php');
	$query="Select * from forum";	 
$ret=mysqli_query($connection,$query) or die ("Sorry");
if ($ret)
{
	echo "Success";
}
};
function number()
{
	echo "<br/>";
	return 1+1;
};
function dis()
 	{
 		include('Connectionstring.php');
 		$query="Select * from forum where FID=1;";
 		$ret=mysqli_query($connection,$query) or die ("Sorry!");
 		while($row=mysqli_fetch_array($ret))
 		{
 			echo "<br/>".$row['FDES'];
 		}
 		mysqli_close($connection);
 	}
session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo $_SESSION['something']; 
echo "<br/>";
isok();
$i=number();
echo "<a href='timetest.php'>".$i."</a>";
dis();
?>
</body>
</html>