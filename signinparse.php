<?php 
include('Connectionstring.php');
$sql="Select * from lastinsertedmember;";
$ret=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($ret);
	$i=$row['ID']+1;

if( isset($_POST['txt']) && isset($_POST['e']) && isset($_POST['ad']&& isset($_POST['t']&& isset($_POST['p']) ){
	echo "Success";
	}

 ?>