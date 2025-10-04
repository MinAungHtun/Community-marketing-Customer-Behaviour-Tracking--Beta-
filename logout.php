<?php   
session_start(); //to ensure you are using same session
include("Connectionstring.php");
$sql="Update bon set n=0;";
$ret=mysqli_query($connection,$sql);
if($ret)
{
session_destroy(); //destroy the session
header("location:http://localhost/Assignment/SALAssignment/"); //to redirect back to "http://localhost/Shop" after logging out
exit();
}
?>