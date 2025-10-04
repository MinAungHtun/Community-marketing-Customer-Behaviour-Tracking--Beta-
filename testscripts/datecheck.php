<?php 
$ip=$_SERVER['REMOTE_ADDR'];
echo $ip; 
echo "<br/>";
include('Connectionstring.php');
$sql="SELECT MembershipSD,MembershipED from member where MemberID=1;";
if($query=$connection->prepare($sql))
{
	$query->bind_result($sd,$ed);
	$query->execute();
	$query->store_result();
}

				if($query->num_rows!==0):
					while($row=$query->fetch()):
		echo $sd;
		echo "<br/>";
		echo $ed;
			 
			 endwhile;endif;

echo "<br/>";
$date1=$sd;
$date2=$ed;
$diff=abs(strtotime($date2)-strtotime($date1));
$years =floor($diff/(365*60*60*24));
$months=floor(($diff-$years *365*60*60*24)/(30*60*60*24));
$days=floor(($diff-$years *365*60*60*24-$months *30*60*60*24)/(60*60*24));
printf("%d years,%d months, %d days\n", $years, $months, $days);
?>