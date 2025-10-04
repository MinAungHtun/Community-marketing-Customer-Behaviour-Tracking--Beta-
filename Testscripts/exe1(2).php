<?php 
$name=$_POST['txtname'];
echo "Hello  ".$name*8;
echo "</br>";
$mark=$_POST['Mark'];
 if ($mark=="0-39")
 {
echo"$name receives Fail";
 }
 else if ($mark=="40-59")
 {

echo"$name receives Pass";
 }
 else if($mark=="60-69")
 {

echo"$name receives Credit";
 }
 else if($mark=="70-100")
 {

echo"<p>$name receives Distinction</p>";
 }

 $course=$_POST['CC'];
 echo"<p>$name selects $course</p>";

 $gender=$_POST['rdogender'];
 echo"<p>$name is $gender</p>";

 $color=$_POST['chkcolor'];
 foreach ($color as $counter) 
 {
 	echo"<p>$name likes $counter</p>";
 }
 ?>