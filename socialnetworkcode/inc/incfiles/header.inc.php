<?
include ("inc/scripts/mysql_connect.inc.php");
session_start();
if (isset($_SESSION['user_login'])) {
$user = $_SESSION["user_login"];
}
else {
$user = "";
}

$get_unread_query = mysql_query("SELECT opened FROM pvt_messages WHERE user_to='$user' && opened='no'");
$get_unread = mysql_fetch_assoc($get_unread_query);
$unread_numrows = mysql_num_rows($get_unread_query);
$unread_numrows = "(".$unread_numrows.")";
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>

	<title>findFriends</title>
</head>
<body>

		<div class="mashmenu">
			<div id="menuWrapper">
			<div class="fnav">

				<a href="#" class="flink" >findFriends+ </a>

			</div><!-- end fnav -->

			<?
			if (isset($_SESSION["user_login"])) {
			echo '
			
			<div class="fnav">

				<a href="' . $user . '" class="flink" >Profile</a>

			</div><!-- end fnav -->
			<div class="fnav">

				<a href="account_settings.php" class="flink" >Account Settings</a>

			</div><!-- end fnav -->
			<div class="fnav">

				<a href="my_messages.php" class="flink" >Messages ' . $unread_numrows . '</a>

			</div><!-- end fnav -->
			<div class="fnav">

				<a href="my_pokes.php" class="flink" >Pokes</a>

			</div><!-- end fnav -->
			<div class="fnav">

				<a href="logout.php" class="flink" >Logout</a>

			</div><!-- end fnav -->
			
			';
			}
			else
			{
				echo '
				
				<div class="fnav">

				<a href="index.php" class="flink" >Sign Up+ </a>

			</div><!-- end fnav -->
            <div class="fnav">

				<a href="index.php" class="flink" >Login+ </a>

			</div><!-- end fnav -->
				
				';
			}
			?>

			<div class="feat">
				<form id="searchForm">
                <fieldset>
                    <div class="input">
                        <input type="text" class="Search" id="s" value="Search findFriends ..." />
                    </div>
                    <input type="submit" id="searchSubmit" value="" />
                </fieldset>
            </form>
			</div><!-- end fnav feat -->
     	  </div>
		</div><!--end mashmenu -->
        <div id="wrapper">
<br />
<br />
<br />
<br />