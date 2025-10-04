<?php 
$connection=mysqli_connect("localhost","root","","customertest");
$query="CREATE TABLE Customer 
(
	CustomerID int not null Primary Key Auto_increment, 
	CustomerName varchar(50), 
	PhoneNo varchar (30),
	Email varchar(30), 
	Password varchar(30),
	Gender varchar(10)
);";
$ret=mysqli_query($connection,$query) or die (mysqli_error());
if ($ret)
{
	echo "Customer table created";
}
 ?>