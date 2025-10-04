<html>
<head>
</head>
<body>
<?php 
//session_start();
$name=$_POST['txtname'];
//$_SESSION['name']=$name;
setcookie("txtck",$name,time()+(60*1000));
echo"POST name is $name";
?>
<br>
<a href="sessionform2.php">Go to next page</a>
</br>
</body>
</html>