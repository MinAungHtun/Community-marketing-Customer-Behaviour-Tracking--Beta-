<?php 
session_start();
$_SESSION["counter"]=$_SESSION["counter"]+1;
if (isset($_POST['btnsubmit']))
{
$name=$_POST["txtname"];
$_SESSION["name"]=$name;
}
else
{
	$_SESSION["name"]="New User";
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<p> Hello <?php echo $_SESSION["name"] ?></p>
 	<p>This is your <?php echo $_SESSION["counter"] ?> time</p>
 	<form action="T3.php" method="post">
 <table>
 <tr>
 <p>
 Your name please
 </p>
</tr>
<tr>
 <input type="text" name="txtname"/>
</tr>
<tr>
	<td>
 <input type="submit" name="btnsubmit" value="Finished"/>
</td>
</tr>
</table>
</form>
 </body>
 </html>