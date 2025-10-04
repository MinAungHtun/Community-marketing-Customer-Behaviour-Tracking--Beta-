<?php 
$connection=mysqli_connect("localhost","root","","customertest");
$select="SELECT * FROM Customer;";
	$ret=mysqli_query($connection,$select);
	$count=mysqli_num_rows($ret);
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="Display.php" method="post">
<table>
	<?php 
	for ($i=0;$i<$count;$i+=3)
	{
		echo"<tr>";
		$select1="SELECT * FROM Customer;";
	$ret1=mysqli_query($connection,$select1);
	$count1=mysqli_num_rows($ret1);
	for($j=0;$j<$count1;$j++)
	{
		$data=mysqli_fetch_array($ret1);
		echo"<td>";
		echo"<img src='".$data['image']."'width ='100px' height='80px'/><br>";
		echo"<b>".$data['CustomerID']."</b><br>";
		echo"<a href='Detail.php'>View More</a>";
		echo"</td>";
	}
		echo"</tr>";
	}
	
	 ?>
	}
</table>
</form>
 </body>
 </html>