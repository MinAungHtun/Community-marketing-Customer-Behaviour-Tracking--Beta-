<?php 
session_start();
include('blockedinfo.php');
if ($_SESSION['log']!=2)
{
		header('location:errorinfo.html');
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<a href="leopardinsert.php"> leopard insert</a>
 </body>
 </html>