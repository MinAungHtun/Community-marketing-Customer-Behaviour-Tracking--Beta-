<?php
include("config.php");
$comm = mysqli_query($connection,"select name,text,time from chat");
while($row=mysqli_fetch_array($comm)){
	$name=$row['name'];
	$comment=$row['text'];
    $time=$row['time'];
?>
<div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p></div>
<?php
}
?>