<?php include('checkregblock.php');
include('blockedinfo.php');
session_start();
include('Connectionstring.php');

 		if (isset ($_POST['btnsb']))
 		{
 			$i=$_POST['SB'];
 			//$i=preg_replace("#[^0-9a-z}#i","",$i);
 			$sql="SELECT ptitle, pcontent, pid, pauthor from forumtbl where ptitle like '%$i%'or pcontent like '%$i%';";
if ($query=$connection->prepare($sql))
{
	$query->bind_result($ptitle,$pcontent, $pid, $pauthor);
	$query->execute();
	$query->store_result();
}
else
{
	echo $connection->error;
}
if (isset($_SESSION['id']))
{
  $r=$_SESSION['id'];
  $sss="Insert into history (History,MemberID) values ('$i',$r);";
  $qqq=mysqli_query($connection,$sss);
}
}
?><!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="# v4.7.7, #.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/sal-logo-58x59.png" type="image/x-icon">
  <meta name="description" content="Home page
">
  <title>Search Results</title>
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
<div style="padding-top: 100px;text-align: center; height:5px; "><h1 class="mbr-section-title display-4">Search Results(Full Articles)</h1></div>
<section class="mbr-section mbr-section__container mbr-after-navbar mbr-section__container--first" id="header3-29" data-rv-view="37">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="mbr-section-title display-4"><table width="80%" align="left" cellpadding="100px">
			<?php if ($query->num_rows !=0): ?>
			<?php while($query->fetch()): ?>
			<tr>
				<td>
					<h3 class="mbr-section-title display-4" style="color:#CDBE70; "><?php echo "-"; echo $ptitle; ?></h3>
				</td>
			</tr>
			<tr>
				<td style="font-size:18px; padding-bottom: 8px; ">
					<small><?php echo "By ".$pauthor; ?></small>
				</td>
			</tr>
			<tr>
				<td style="font-size:24px; padding-bottom: 50px; ">
					<small><?php echo $pcontent; ?></small>
				</td>
			</tr>
			<?php endwhile; ?>
			<?php else:
			 ?>
			 <tr>
			 	<td>
			 		<small>Nothing matches your search.</small>
			 	</td>
			 </tr>
			<?php endif; ?>
		</table>
            </div>
        </div>
    </div>
</section>
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

<footer class="mbr-section mbr-section-nopadding mbr-footer" id="footer1-27" data-rv-view="34" style="background-color: rgb(55, 56, 62); padding-top: 1rem; padding-bottom: 0rem;">
    
    <div class="container">
        <p>Copyright (c) 2018 SAL. All rights reserved. <a href="term.html">Terms of Use</a>  | <a href="policy.html">Privacy Policy</a>
        This page has been visited <?php echo $_SESSION['time'];?> times.</p>
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