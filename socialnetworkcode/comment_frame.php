<?php
session_start();
if (isset($_SESSION['user_login'])) {
$user = $_SESSION["user_login"];
}
else {
$user = "";
}
?>
<style>
* {
 font-size: 12px;
 font-family: Arial, Helvetica, Sans-serif;
}
hr {
	background-color: #DCE5EE;
	height: 1px;
	border: 0px;
}
</style>
<?php

include("./inc/scripts/mysql_connect.inc.php");

$getid = $_GET['id'];

?>
<script language="javascript">
         function toggle() {
           var ele = document.getElementById("toggleComment");
           var text = document.getElementById("displayComment");
           if (ele.style.display == "block") {
              ele.style.display = "none";
           }
           else
           {
             ele.style.display = "block";
           }
         }
</script>

<?php
if (isset($_POST['postComment' . $getid . ''])) {
 $post_body = $_POST['post_body'];
 $posted_to = "sinimma";
 $insertPost = mysql_query("INSERT INTO post_comments VALUES ('','$post_body','$user','$posted_to','0','$getid')");
 echo "Comment Posted!<p />";
}
?>

<a href='javascript:;' onClick="javascript:toggle()"><div style='float: right; display: inline;'>Post Comment</div></a>
<div id='toggleComment'  style='display: none;'>
<form action="comment_frame.php?id=<?php echo $getid; ?>" method="POST" name="postComment<?php echo $getid; ?>">
Enter your comment below:<p />
<textarea rols="50" cols="50" style="height: 100px;" name="post_body"></textarea>
<input type="submit" name="postComment<?php echo $getid; ?>" value="Post Comment">
</form>
</div>
<?php

//Get Relevant Comments
$get_comments = mysql_query("SELECT * FROM post_comments WHERE post_id='$getid' ORDER BY id DESC");
$count = mysql_num_rows($get_comments);
if ($count != 0) {
while ($comment = mysql_fetch_assoc($get_comments)) {

$comment_body = $comment['post_body'];
$posted_to = $comment['posted_to'];
$posted_by = $comment['posted_by'];
$removed = $comment['post_removed'];

echo "<b>$posted_by said: </b><br />".$comment_body."<hr /><br>";

}
}
else
{
 echo "<center><br><br><br>No comments to display!</center>";
}