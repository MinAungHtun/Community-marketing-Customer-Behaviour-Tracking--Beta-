<?php 
include('Connectionstring.php');
$sql="Select * from lastinsertedmember";
$ret=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($ret))
{
	$i=$row['ID'];
}
$id=$i+1;
if(isset($_POST['txt'])&&isset($_POST['e'])&&isset($_POST['t'])&&isset($_POST['p'])&&isset($_POST['ad'])&& isset($_POST['pc']))
{
  $na=$_POST['txt'];
  $em=$_POST['e'];
  $ph=$_POST['t'];
  $pw=$_POST['p'];
  $ad=$_POST['ad'];
  $pc=$_POST['pc'];
  $sq="Insert into member (MemberID, MemberName,Email,Phoneno,Password,Address,Postalcode) values ($id,'$na','$em','$ph','$pw','$ad','$pc');";
  $rt=mysqli_query($connection,$sq);
  if ($rt)
  {
  	$r="Update lastinsertedmember set ID=$id;";
  	$t=mysqli_query($connection,$r);
  	if ($t)
  	{
  		echo"success";
  	}
  }
}
 ?>