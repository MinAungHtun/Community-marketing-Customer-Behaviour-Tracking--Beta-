<?php 
$connection=mysqli_connect("localhost","root","","mypos");
$query="CREATE TABLE Customer 
(
	CustomerID int not null Primary Key, 
	CustomerName varchar(50), 
	Email varchar(30), 
	Password varchar(30)
);";
$ret=mysqli_query($connection,$query) or die (mysqli_error());
if ($ret)
{
	echo "Customer table created";
}
?>