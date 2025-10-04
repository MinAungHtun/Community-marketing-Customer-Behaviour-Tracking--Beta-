<?php 
include('checkregblock.php');
include('blockedinfo.php');
session_start();
include('Connectionstring.php');
$o=$_SESSION['uname'];
$sql="SELECT MembershipSD,MembershipED,MemberID,Photo from member where MemberName='$o';";
if($query=$connection->prepare($sql))
{
	$query->bind_result($sd,$ed,$idd,$p);
	$query->execute();
	$query->store_result();
}

				if($query->num_rows!==0):
					while($row=$query->fetch()):
		
		echo "<br/>";
		
			 
			 endwhile;endif;

echo "<br/>";
$date1=date("Y/m/d");
$date2=$ed;
$diff=abs(strtotime($date2)-strtotime($date1));
$years =floor($diff/(365*60*60*24));
$months=floor(($diff-$years *365*60*60*24)/(30*60*60*24));
$days=floor(($diff-$years *365*60*60*24-$months *30*60*60*24)/(60*60*24));
if (isset($_POST['btnsm']))
{
	$ii=$_POST['txtbx'];
	$oo="ID: ".$idd." Name: ".$o;
	$z=$oo." says ".$ii;
	$que="Insert into message (MDES) values ('$z');";
	$re=mysqli_query($connection,$que);
}
$_SESSION['id']=$idd;
$aa="Select * from History where MemberID=$idd;";
$bb=mysqli_query($connection,$aa);
$rr=mysqli_fetch_assoc($bb);
	$tt=$rr['History'];
	$zz=$rr['Time'];
	?>
<!DOCTYPE html>
<html >
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="# v4.7.7, #.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/sal-logo-58x59.png" type="image/x-icon">
  <meta name="description" content="Home page
">
  <title>Account Management</title>
  <link rel="stylesheet" href="assets/bootstrap/css/search-box.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/web/assets/#-icons/#-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/gdpr-plugin/gdpr-styles.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/#/css/mbr-additional.css" type="text/css">
   
  
  
</head>
<body>
  <nav class="navbar navbar-light mbr-navbar navbar-transparent navbar-fixed-top" id="menu-25" data-rv-view="32">
    <div class="container">
        <button class="navbar-toggler pull-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            <div class="hamburger-icon"></div>
        </button>

        <div class="clearfix"></div>
        <div class="collapse navbar-toggleable-sm" id="exCollapsingNavbar2">
            <span class="navbar-logo"><a href="https://#.com"><img src="images/SAL logo.png" alt="SAL"></a></span>
            <span><a class="navbar-brand" href="https://#.com">SAL</a></span>

            

           
                       <ul class="nav navbar-nav pull-xs-right"><li class="nav-item"><a class="nav-link" href="Home.php"style="color:#CDBE70 ;">Home</a></li>  <li class="nav-item"><a class="nav-link" href="Signinup.php"style="color:#CDBE70 ;">Sign in/up</a></li> <li class="nav-item"><a class="nav-link" href="community.php"style="color:#CDBE70 ;">Community</a></li><li class="nav-item"><a class="nav-link" href="about.php"style="color:#CDBE70 ;">About</a></li><li class="nav-item"><a class="nav-link" href="contact.php"style="color:#CDBE70 ;">Contact</a></li><li class="nav-item"><a class="nav-link" href="forum.php"style="color:#CDBE70 ;">Forum</a></li><li class="nav-item"><a class="nav-link" href="logout.php"style="color:#CDBE70 ;">logout</a></li>
        <li><form action="searchresults.php" method="POST">
          <div class="search-box-wrapper">
            <input type="text" placeholder="Search..." name="SB" class="search-box-input">
            <input type="submit"value="&#128269;" name="btnsb"></button>
        </div></form></li></ul>
        </div>
    </div>
</nav>
<div style="padding-top: 100px;text-align: center; height:5px; "><h1 class="mbr-section-title display-4">Account Control</h1></div>
<section class="mbr-section mbr-section__container mbr-after-navbar mbr-section__container--first" id="header3-29" data-rv-view="37">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="mbr-section-title display-4"><table align="left" width="80%" cellspacing="20px">
			 <tr>
			 	<td style="padding-bottom: 50px;"><?php if ($date1<$date2)
{echo "<p>You have exactly or less than  ";
printf("%d years,%d months, %d days\n", $years, $months, $days);
echo "remaining</p>";
}
else if($date1>$date2)
{
echo "Membership has expired";
}
if (isset($_POST['submit']))
{
		if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
 	{
 		echo "Please select an image";
 	}
 	else
 	{
 		$image=addslashes(($_FILES['image']['tmp_name']));
 		$imgname=addslashes(($_FILES['image']['name']));
 		$image=file_get_contents($image);
 		$image=base64_encode($image);
 $queryy="Update member Set Photo='$image' where MemberID=$idd;";
 		$re=mysqli_query($connection,$queryy);	
 }
}
?>
</td>
			 </tr><tr><td><?php if(is_null($p)){?>
			 	<form method="post" action="accountmanagement.php" enctype="multipart/form-data">
 	<input type="file" class="form-control"name="image"style="margin-left:25%; width:60%;"><br/>
 	<input type="submit" name="submit" class="btn btn-secondary-outline" value="Upload profile pic"/>
 </form><?php } else {
  ?><img src="data:member;base64,<?php echo $p; ?>"><?php } ?>
 </td></tr>
			 <tr>
			 	<td style="padding-top:20px;padding-bottom: 50px;"><?php echo $_SESSION['uname'];
?>
</td>
			 </tr>
			 <tr>
			 	<td style="padding-bottom: 50px;"><a href="updateinfo.php")> Update info</a>
</td>
			 </tr>
			 <tr>
			 	<td style="padding-bottom: 50px;"><a href="forum.php"><?php echo "Do you want to go to the forum where members discuss things?";
?></a>
</td>
			 </tr>
			 <tr><td>
			 	Would you like to <a href="pwswitch.php">change password</a> or <a href="leopard.php">adopt a leopard?</a>
			 </td></tr>
			 <tr><td><a href="editsearch.php">Edit search History</a>
			 </td></tr>
			</table></h3>
                
            </div>
        </div>
    </div>
</section>
<section><form action="accountmanagement.php " method="POST"><div class="form-group"style="width:80%; padding-left:20%; margin-top: 50px; margin-bottom: 30px;">
                        <textarea class="form-control" name="txtbx" id="txtbx" rows="10" placeholder="Leave a message(any type, wanting to change account info more than the password or any suggestions any feedback is appreciated. After clicking finished, your message will likely to be sent. If there were some error, we apologize you and the process of improvement is still under process. And also don't forget to mail us for adoption services." data-form-field="Name"></textarea> 
                    </div>
<div class="text-xs-right" style="padding-right: 20%;margin-bottom: 30px;"><button type="submit" name="btnsm"class="btn btn-secondary-outline">Finish</button></div>
</form></section>

<div style="height: 100px;"></div>
<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-26" data-rv-view="33" style="background-color: rgb(55, 56, 62); padding-top: 3rem; padding-bottom: 0rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <p><strong>Address</strong><br>Sir Matt Busby Way, Stretford, Manchester M16 0RA, UK<br><br>
<strong>Contacts</strong><br>
Email: support@SAL.com<br>
Phone:&nbsp;+44 161 868 8000<br>
Fax: +1 (0) 000 0000 002</p>
            </div>
            <div class="col-xs-12 col-md-3"><strong>Links</strong><ul><li><a href="http://something.com">support@SAL.com</a></li><li><a href="http://wikipedia.com/amurleopard">Amurleopards</a></li></ul></div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section-small" id="social-buttons2-7" data-rv-view="44" style="background-color: rgb(55, 56, 62); padding-top: 1.5rem; padding-bottom: 0rem;">
    

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="mbr-section-title h1">Follow Us</h2>
            </div>
            <div class="col-sm-8 text-xs-right"><a class="btn btn-social socicon-bg-twitter" title="Twitter" href="https://twitter.com" target="_blank"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social socicon-bg-facebook" title="Facebook" href="https://www.facebook.com" target="_blank"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social socicon-bg-google" title="Google+" href="https://plus.google.com" target="_blank"><i class="socicon socicon-google"></i></a> <a class="btn btn-social socicon-bg-youtube" title="YouTube" href="https://www.youtube.com" target="_blank"><i class="socicon socicon-youtube"></i></a> <a class="btn btn-social socicon-bg-instagram" title="Instagram" href="https://instagram.com" target="_blank"><i class="socicon socicon-instagram"></i></a> <a class="btn btn-social socicon-bg-pinterest" title="Pinterest" href="https://www.pinterest.com" target="_blank"><i class="socicon socicon-pinterest"></i></a> <a class="btn btn-social socicon-bg-tumblr" title="Tumblr" href="http://tumblr.com/" target="_blank"><i class="socicon socicon-tumblr"></i></a> <a class="btn btn-social socicon-bg-linkedin" title="LinkedIn" href="https://www.linkedin.com" target="_blank"><i class="socicon socicon-linkedin"></i></a> </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section-nopadding mbr-footer" id="footer1-27" data-rv-view="34" style="background-color: rgb(55, 56, 62); padding-top: 1rem; padding-bottom: 0rem;">
    
    <div class="container">
        <p>Copyright (c) 2018 SAL. All rights reserved. <a href="term.html">Terms of Use</a>  | <a href="policy.html">Privacy Policy</a>This page has been visited <?php echo $_SESSION['time'];?> times.</p>
    </div>
</footer>


   <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
 
  
<input name="cookieData" type="hidden" data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
  </body>
</html>

