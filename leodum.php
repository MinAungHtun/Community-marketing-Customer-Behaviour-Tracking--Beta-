<?php 
session_start();
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
$_SESSION['ll']= $_GET['id'];
if (isset($_SESSION['ll']))
{
	header('location:leoinfo.php');
}?>
