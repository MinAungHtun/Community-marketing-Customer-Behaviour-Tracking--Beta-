<?php
include("Connectionstring.php");
include ("blockedinfo.php");
$sql="Update bon set n=1;";
$ret=mysqli_query($connection,$sql);
if ($ret)
{
	$s="Update five set times=0;";
	$t=mysqli_query($connection,$s);
}
echo "5 minutes. Refresh the page if longer and then wait.";
  ?>

	<script type="text/javascript">
		function min()
		{
			window.location="http://localhost/Assignment/SALAssignment/logout.php"//needs to change this according to the domain name
		}
	</script>
</head>
<body onLoad="setTimeout('min()',300000)">
</body>