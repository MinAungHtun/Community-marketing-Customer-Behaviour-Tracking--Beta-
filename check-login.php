<?php
include('blockedinfo.php');
include('checkregblock.php');

include("Connectionstring.php");
session_start();
$tt=1;
$ip=$_SERVER['REMOTE_ADDR'];
include("Connectionstring.php");
		$i="Select errortimes from error where ip='$ip';";
$o=mysqli_query($connection,$i);
$io=mysqli_num_rows($o);
	if($io!=0)
	{
	$aa="Select * from error where ip='$ip';";
	$qq=mysqli_query($connection,$aa)or die("Sorry");
	$ff=mysqli_fetch_assoc($qq);
	$tt=$ff['errortimes'];
	}

	if ($tt==20)
	{
		
		mysqli_close($connection);
		$ip=$_SERVER['REMOTE_ADDR'];
		include("Connectionstring.php");
		$a="Insert into block (ipadd) values ('$ip')";
		$s=mysqli_query($connection,$a);
		if($s)
		{
			mysqli_close($connection);
			include('Connectionstring.php');
			$o="Delete from error where ip='$ip';";
			$i=mysqli_query($connection,$o);
			if ($i)
			{
				mysqli_close($connection);
				include('Connectionstring.php');
				$bb="Select * from block where ipadd='$ip';";
			    $aa=mysqli_query($connection,$bb);
				while ($row=mysqli_fetch_array($aa))
{
	$_SESSION['blockedperson']=$row["blockedID"];
}
			}
			$_SESSION['last_time']=time();
	header('location:index.php');
		}
	}
else{

$uName = $_POST['username'];
$pWord = $_POST['password'];

$qry = "SELECT * FROM member WHERE MemberName='".$uName."' and Password='".$pWord."'";
$res = mysqli_query($connection,$qry);
$num_row = mysqli_num_rows($res);
$row=mysqli_fetch_assoc($res);

if( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uname']=$row['MemberName'];
	header('location:accountmanagement.php');
	$_SESSION['log']=1;	
}
else {

	echo 'Unmatch. Please check your password and username correctly as we have 2 times maximum error and 3 times maximum attempts policy which could result in banning you for a day or more depending on circumstances';
	$aaa="Select * from five;";
	$qqq=mysqli_query($connection,$aaa)or die("Sorry");
	$fff=mysqli_fetch_assoc($qqq);
	$ttt=$fff['times'];
	$tyt=$ttt+1;
	if ($ttt!=2){$sad="Update five set times=$tyt"; $ewrt=mysqli_query($connection,$sad);}
	else if ($ttt==2) { header('location:pars.php');
	}
	mysqli_close($connection);
		include("Connectionstring.php");
$ipp="Select ip from error where ip='$ip';";
$ooo=mysqli_query($connection,$i);
$ioi=mysqli_num_rows($ooo);
	if ($ioi==0)
	{

		$ii="Insert into error (errortimes,ip) values (1,'$ip') ";
		$ss=mysqli_query($connection,$ii);		
	}
	else
	{
	$a="Select * from error where ip='$ip';";
	$q=mysqli_query($connection,$a)or die("Sorry");
	$f=mysqli_fetch_assoc($q);
	$t=$f['errortimes'];
	$r=$t+1;
	mysqli_close($connection);
	if ($q)
	{
		include('Connectionstring.php');    
$sql="Update error Set errortimes=$r where ip='$ip';";
$result=mysqli_query($connection,$sql)or die("Sorry");
	}
	}

	}
}
/*original codeif( $num_row == 1 ) {
	echo 'true';
	$_SESSION['uname']=$row['MemberName'];
	echo $_SESSION['uname'];
	header('location:Chat.php');	
}
else {
	echo 'false';
}*/
?>