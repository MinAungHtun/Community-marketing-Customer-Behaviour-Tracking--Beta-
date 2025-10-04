<?php 
session_start();
include('blockedinfo.php');
include('checkregblock.php');
include('Connectionstring.php');
 $_SESSION['count']=1;
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
  <title>About US</title>
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
  <nav class="navbar navbar-light mbr-navbar navbar-transparent navbar-fixed-top" id="menu-m" data-rv-view="235">
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

<section class="mbr-section mbr-after-navbar" id="msg-box3-1d" data-rv-view="236" style="background-color: rgb(255, 248, 224); padding-top: 9rem; padding-bottom: 9rem;">
    
    <div class="container">
        <div class="row text-xs-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="mbr-section-title display-3">Founded with love &amp; passion</h2>
                

                <div class="lead"><p>Amur Leopards is quickly becoming one of the most endangered species in the world. For this reason, in 2010, SAL president decided to quit full time job and dedicate all of his time to SAL. We are all in when it comes to Amur leopards. We have devoted our hearts and souls for these lovely creatures. Any requests concerning Amur leopards will be considered.&nbsp;</p></div>
                <div><a class="btn btn-lg btn-secondary-outline" href="VideoChat/">Detail Inquiry<br></a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-nopadding" id="msg-box4-1w" data-rv-view="352" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-lg-3 mbr-inner-padding text-xs-center mbr-table-cell-lg">
                <h3 class="mbr-section-title display-4">Our founding ceremony</h3>
                
                <div class="lead"><p>Take a look at the very birth of the SAL</p></div>
                <div><a class="btn btn-lg btn-secondary-outline" href="https://www.youtube.com" target="_blank">More Videos</a></div>
            </div>
            <div class="col-xs-12 col-lg-9 mbr-table-cell-lg image-size" style="width: 50%;">
                <div class="mbr-figure"><img src="assets/images/photo-4.jpg"></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="content4-1x" data-rv-view="355" style="background-color: rgb(255, 255, 255); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">History</h4>
                        <p class="card-text">Our rich and long history defines us</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">Vision</h4>
                        <p class="card-text">We live by leopards and our hearts</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">Mission</h4>
                        <p class="card-text">To save these mysterious creatures from going extinct</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">Ethics</h4>
                        <p class="card-text">We only mean to serve leopards and that is all we mean</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-parallax-background col-undefined" id="content5-1e" data-rv-view="239" style="background-image: url(assets/images/photo-3.jpg); padding-top: 9rem; padding-bottom: 9rem;">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);"></div>
    <div class="container">
        <h3 class="mbr-section-title display-2">We are not an animal adoption service</h3>
        <div class="lead">The adoption of leopards from the members is a subjective matter and we don't push or influence anyone to adopt any leopard. The choice entirely depends on the person.</div>
    </div>
</section>

<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-8" data-rv-view="245" style="background-color: rgb(55, 56, 62); padding-top: 3rem; padding-bottom: 0rem;">
    
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

<section class="mbr-section mbr-section-small" id="social-buttons2-1f" data-rv-view="242" style="background-color: rgb(55, 56, 62); padding-top: 1.5rem; padding-bottom: 0rem;">
    

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="mbr-section-title h1">Follow Us</h2>
            </div>
            <div class="col-sm-8 text-xs-right"><a class="btn btn-social socicon-bg-twitter" title="Twitter" href="https://twitter.com" target="_blank"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social socicon-bg-facebook" title="Facebook" href="https://www.facebook.com" target="_blank"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social socicon-bg-google" title="Google+" href="https://plus.google.com" target="_blank"><i class="socicon socicon-google"></i></a> <a class="btn btn-social socicon-bg-youtube" title="YouTube" href="https://www.youtube.com" target="_blank"><i class="socicon socicon-youtube"></i></a> <a class="btn btn-social socicon-bg-instagram" title="Instagram" href="https://instagram.com" target="_blank"><i class="socicon socicon-instagram"></i></a> <a class="btn btn-social socicon-bg-pinterest" title="Pinterest" href="https://www.pinterest.com" target="_blank"><i class="socicon socicon-pinterest"></i></a> <a class="btn btn-social socicon-bg-tumblr" title="Tumblr" href="http://tumblr.com/" target="_blank"><i class="socicon socicon-tumblr"></i></a> <a class="btn btn-social socicon-bg-linkedin" title="LinkedIn" href="https://www.linkedin.com" target="_blank"><i class="socicon socicon-linkedin"></i></a> </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section-nopadding mbr-footer" id="footer1-9" data-rv-view="244" style="background-color: rgb(55, 56, 62); padding-top: 1rem; padding-bottom: 0rem;">
    
    <div class="container">
        <p>Copyright (c) 2018 SAL. All rights reserved. <a href="https://#.com/">Terms of Use</a>  | <a href="https://#.com/">Privacy Policy</a>This page has been visited <?php echo $_SESSION['time'];?> times.</p>
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