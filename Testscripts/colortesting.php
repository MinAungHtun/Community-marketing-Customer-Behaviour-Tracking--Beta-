<?php
if (isset($_POST['btnsubmit']))
{
$backcolor=$_POST['clobox'];
}
else 
{
	$backcolor="black";
}
?>
 <html>
 <head>
 	<style type="text/css">
			body{background-color:<?php echo $backcolor ?>;}
		  </style>	
 </head>
 <body >
 	<form action="colortesting.php" method="post">
 	<input type="color" name="clobox">
 	<input type="submit" name="btnsubmit" value="change">
 </form>
 </body>
 </html>