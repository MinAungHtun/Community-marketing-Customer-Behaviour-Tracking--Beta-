<?php 

$connection=mysqli_connect("localhost","root","","customertest");
$query="Alter table customer add column image varchar(255);";
$ret=mysqli_query($connection,$query) or die (mysqli_error());
if ($ret)
{
	echo "Column added";
}
 ?>