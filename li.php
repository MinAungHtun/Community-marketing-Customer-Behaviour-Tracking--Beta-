<?php
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
$sql="Select * from lastinsertedleo;";
$ret=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($ret))
{
	$i=$row['ID'];
}
$id=$i+1;
session_start();
$_SESSION['lid']=$id;
$_SESSION['lname']=$_POST['n'];
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['f'])){
		$n=$_POST['n'];
		$e=$_POST['e'];
		$f=$_POST['f'];
		$query="Insert into leopard (LeopardID,LeopardName,Age,Yeararrived)values ($id,'$n',$e,$f);";
	$r=mysqli_query($connection,$query);
	if ($r)
	{
	$rr="Update lastinsertedleo set ID=$id;";
  	$t=mysqli_query($connection,$rr);
  	if ($t)
  	{
  		echo"success";
  	}
		
	}
	}
	 else {
	}

?>