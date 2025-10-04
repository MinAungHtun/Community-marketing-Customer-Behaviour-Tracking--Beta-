<?php
$db_host='localhost';
$db_user='root';
$db_pwd='';
$database='assignment';

if(!mysqli_connect($db_host,$db_user,$db_pwd))
die("can't Connect to Database");
$connection=mysqli_connect("localhost","root","","assignment");
/*if(!mysqli_select_db($database))
die("can't Select Database");*/
?>