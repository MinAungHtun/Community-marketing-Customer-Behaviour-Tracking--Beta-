<?php 
session_start();
$_SESSION['something']=2;
 echo $_SESSION['something'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <a href="f2.php">i</a>
 </body>
 </html>