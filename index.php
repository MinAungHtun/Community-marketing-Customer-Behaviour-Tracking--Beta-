<?php 
session_start();
$_SESSION['count']=0;
$ip=$_SERVER['REMOTE_ADDR'];
header('location:Home.php');

 ?>