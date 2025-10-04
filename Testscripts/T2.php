<?php
if (isset($_POST['btnsubmit']))
{
$backcolor=$_POST['clobox'];
setcookie("color",$backcolor);
}
?>
 <html>
 <head>
 	<style type="text/css">
			body{background-color:<?php echo $_COOKIE["color"] ?>;}
		  </style>	
 </head>
 <body >
 	<form action="T2.php" method="post">
 	<input type="color" name="clobox">
 	<input type="submit" name="btnsubmit" value="change">
 </form>
 <a href="1.php">Next</a>
 </body>
 </html>