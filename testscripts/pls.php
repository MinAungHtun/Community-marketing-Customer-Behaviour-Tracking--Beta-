<?php 
session_start();
$_SESSION['a']=time()+1;
$g= $_SESSION['a']-$_SESSION['t'];
while ($g<3)
{
	$_SESSION['a']=time();
	$g= $_SESSION['a']-$_SESSION['t'];
}
if ($g>3)
{
	echo $g;
}

 ?>

