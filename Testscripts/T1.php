<?php 
if(isset($_POST['btnsubmit']))
{
$a=$_POST['no1'];
$b=$_POST['no2'];
$oo=$_POST['CC'];
if ($oo=="add")
 {
$c=$a+$b;
 }
 else if ($oo=="subtract")
 {
$c=$a-$b;
}
 else if($oo=="multiply")
 {
 	$c=$a*$b;
  }
 else if($oo=="divide")
 {
$c=$a/$b;
 }
elseif ($oo=="power")
 {
 	$c=$a**$b;
 }
 else if ($oo=="remainder")
 {
 	$c=$a%$b;
 }
}
else
{
	$c="first time no answer";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="T1.php" method="post">
	<table width="30%">
<tr>
<td>
<p>Number1 </p>
</td>
<td>
<input type="number" name="no1"/>
</td>
</tr>
<tr>
<td>
<p>Number 2 </p>
</td>
<td>
<input type="number" name="no2"/>	
</td>
</tr>
<tr>
<td>
<p>Operation </p>
</td>
<td>
<select name='CC'>
	<option value="add">Add</option>
	<option value="subtract">Subtract</option>
	<option value="multiply">Multiply</option>
	<option value="divide">Divide</option>
	<option value="power">x Power of y</option>
	<option value="remainder">remainder of x/y</option>
</select>
</td>
</tr>
<tr>
	<td>
	<p>
		<?php echo"The last operation answer is/was $c" ?>
	</p>
</td>
</tr>
<tr>
<td><input type="submit" name ="btnsubmit" value="Calculate"/></td>
</tr>
</table>
</form>

</body>
</html>