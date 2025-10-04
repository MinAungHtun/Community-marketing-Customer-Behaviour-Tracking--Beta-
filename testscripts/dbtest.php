<?php 
include("Connectionstring.php");
$i="Select * from member";
$o=mysqli_query($connection,$i);
while ($row=mysqli_fetch_array($o))
{
	echo "<table>"; 
	echo "<tr>";
	echo "<td>";
	echo $row['MemberName'];

	echo "</table>"; 
	echo "</tr>";
	echo "</td>";
}
 ?>
