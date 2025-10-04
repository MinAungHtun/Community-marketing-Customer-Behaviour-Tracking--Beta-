<?php
$comm = mysqli_query($connection,"select name,text,time from chat");
if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=mysqli_query($comm,"insert into chat (name,text,time) values('$name','$comment',CURRENT_TIMESTAMP)");

}
?>