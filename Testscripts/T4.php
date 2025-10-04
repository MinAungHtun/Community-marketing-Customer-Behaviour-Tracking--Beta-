<?php 
session_start();
if (isset($_GET['btnsubmit']))
{
$name=$_GET["string"];
$_SESSION["name"]=$name;
}
else
{
	$_SESSION["name"]="Nothing Yet";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<p> <?php echo $_SESSION["name"] ?></p>
 <form action="T4.php" method="get">
 	<p><input type="text" name="string"/></p>
    <p><input type="submit" name="btnsubmit" value="submit"></p>
 </form>
 </body>
 </html>