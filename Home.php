<?php 
session_start();
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
$sq="SELECT Visitorcount  from counter;";
$resu=mysqli_query($connection,$sq)or die("Sorry");
$ff=mysqli_fetch_assoc($resu);
$time=$ff['Visitorcount']; 
$new=$time+1;
mysqli_close($connection);
if ($_SESSION['count']==0)
{
include('Connectionstring.php');    
$sql="Update counter Set Visitorcount=$new;";
$result=mysqli_query($connection,$sql)or die("Sorry");
$_SESSION['time']=$new;
}
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
  <title>Home</title>
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
  <nav class="navbar navbar-light mbr-navbar navbar-transparent navbar-fixed-top" id="menu-a" data-rv-view="23">
    <div class="container">
        <button class="navbar-toggler pull-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            <div class="hamburger-icon"></div>
        </button>

        <div class="clearfix"></div>
        <div class="collapse navbar-toggleable-sm" id="exCollapsingNavbar2">
            <span class="navbar-logo"><a href="https://#.com"><img src="images/SAL logo.png" alt="#"></a></span>
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

<section class="mbr-section mbr-section-full mbr-parallax-background mbr-after-navbar" id="header4-5" data-rv-view="25" style="background-image: url(assets/images/photo-2.jpg);">
    <div class="mbr-table-cell">
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <h1 class="mbr-section-title display-1">SAL (Save An Amur Leopard)</h1>
                    
                    <div class="mbr-buttons--left"><a class="btn btn-lg btn-warning" href="Signinup.php">Become a Member</a> <a class="btn btn-lg btn-white" href="customersignup.php">Donate :-)<br></a></div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<section style="height: 3px;">
</section>
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="5000" id="slider-6" data-rv-view="28" style="background-color: rgb(255, 255, 255);">
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-6" class="active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider-6" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider-6" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="mbr-section carousel-item dark center mbr-section-full active" style="background-image: url(assets/images/photo-6.jpg);">
                        <div class="mbr-table-cell">
                         
                            <div class=" container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">Community</h2>
                                        

                                        <div><a class="btn btn-lg btn-danger" href="community.php">Read Our Articles</a> <a class="btn btn-lg btn-secondary-outline" href="Signinup.php">Join our community</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section carousel-item dark center mbr-section-full" style="background-image: url(images/t.jfif);">
                        <div class="mbr-table-cell">
                         
                            <div class=" container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h2 class="mbr-section-title display-1">Leopards</h2>
                                        

                                        <div><a class="btn btn-lg btn-danger" href="about.php">Amur</a> <a class="btn btn-lg btn-secondary-outline" href="about.php">Breeds<br></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="mbr-section carousel-item dark center mbr-section-full" style="background-image: url(assets/images/photo-10.jpg);">
                        <div class="mbr-table-cell">
                         
                            <div class=" container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-xs-center">
                                        <h2 class="mbr-section-title display-1">Know Us</h2>
                                        

                                        <div><a class="btn btn-lg btn-danger" href="about.php">History</a> <a class="btn btn-lg btn-secondary-outline" href="VideoChat/">Live Chat!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-6">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-6">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-nopadding" id="msg-box5-t" data-rv-view="138" style="background-color: rgb(255, 255, 255); padding-top: 3rem; padding-bottom: 0rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-9 mbr-table-cell-lg image-size" style="width: 50%;">
                <div class="mbr-figure"><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/dXAmEDFFero?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=1&amp;playlist=dXAmEDFFero" width="1280" height="720" frameborder="0" allowfullscreen></iframe></div>
            </div>
            <div class="col-xs-12 col-lg-3 mbr-inner-padding text-xs-center mbr-table-cell-lg">
                <h3 class="mbr-section-title display-4">Feel the beast</h3>
                
                <div class="lead"><p>Get amazed and seducted by one of the most mesmerizing creatures on the planet</p></div>
                <div><a class="btn btn-lg btn-secondary-outline" href="https://www.youtube.com/user/Troydan">More</a></div>
            </div>
            
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="form2-y" data-rv-view="172" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem; margin-top:3rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="mbr-section-title display-3 text-xs-center">Subscribe to our Newsletter</h2>

                <form action="subenter.php " method="POST"><div class="form-group"style="width:80%; padding-left:20%; margin-top: 50px; margin-bottom: 30px;">
                        <input type="Email" class="form-control" name="txtbx"  placeholder="Enter your email" data-form-field="Name">
                    </div>
<div class="text-xs-right" style="padding-right: 20%;margin-bottom: 30px;"><Input type="submit" name="sub"class="btn btn-secondary-outline" value="Subscribe"></div>
<input type="checkbox" name="gdpr" id="gdpr-input" required="">By continiung you agree to our <a href="terms.html">Terms of Service</a> and <a href="policy.html">Privacy Policy</a>.</form>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-8" data-rv-view="40" style="background-color: rgb(55, 56, 62); padding-top: 3rem; padding-bottom: 0rem;">
    
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

<footer class="mbr-section mbr-section-nopadding mbr-footer" id="footer1-9" data-rv-view="42" style="background-color: rgb(55, 56, 62); padding-top: 1rem; padding-bottom: 0rem;">
    
    <div class="container">
        <p>Copyright (c) 2018 SAL. All rights reserved. <a href="https://#.com/">Terms of Use</a>  | <a href="https://#.com/">Privacy Policy</a>This page has been visited <?php echo $_SESSION['time']; ?> times.</p>
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