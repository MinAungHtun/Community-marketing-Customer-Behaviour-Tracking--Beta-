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
  <title>Community</title>
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
  <nav class="navbar navbar-light mbr-navbar navbar-transparent navbar-fixed-top" id="menu-n" data-rv-view="191">
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

<section class="mbr-section mbr-section__container mbr-after-navbar mbr-section__container--isolated" id="header3-24" data-rv-view="414"style="background-image: url(images/m.jfif); margin-top: 100px;";>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="mbr-section-title display-4" style="color:#CDBE70; ">Our community</h3>
                <h7 style="color:#CDBE70; ">Join our lovely community which is full of enthusiastic people dedicaded to saving leopards</br>You will have a time of your life. </h7>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-nopadding" id="video1-12" data-rv-view="192">
    <div class="mbr-figure">
        <div><iframe class="mbr-embedded-video" src="https://www.youtube.com/embed/btPJPFnesV4?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0" width="1280" height="720" frameborder="0" allowfullscreen style="width: 60%; margin-left: 20%; margin-bottom: 10%; padding-top: 10%;"></iframe></div>
        <div class="mbr-figure-caption">
            <div class="container">You will be a part of our big family.</br></div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-parallax-background col-undefined" id="content5-13" data-rv-view="194" style="background-image: url(assets/images/photo-3.jpg); padding-top: 9rem; padding-bottom: 9rem;">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);"></div>
    <div class="container">
        <h3 class="mbr-section-title display-2">Come and Enjoy!</h3>
        <div class="lead"><p>We have an additional offer for adopting leopards</br> which you can request yourself</p></div>
    </div>
</section>

<section class="mbr-section mbr-section__container mbr-section__container--isolated" id="buttons1-1z" data-rv-view="373">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-xs-center"><a class="btn btn-lg btn-danger" href="Signinup.php">Become a Member</a> <a class="btn btn-lg btn-secondary-outline" href="Home.php">Subscribe</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="testimonials1-14" data-rv-view="197" style="background-color: rgb(255, 255, 255); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    <div>
        
        <div class="container">
            <h2 class="mbr-section-title display-3 text-xs-center">Experiences from our Members</h2>

            <div class="row mbr-testimonial-cards">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-block"><em>Fantastic Experience</em></div>
                        <div class="card-footer text-muted">
                            <div>ABANOUB S.</div>
                            <small>Member</small>
                        </div>
                    </div>
                </div><div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-block"><em>Well founded and organized group</em></div>
                        <div class="card-footer text-muted">
                            <div>SUFFIAN A.</div>
                            <small>member</small>
                        </div>
                    </div>
                </div><div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-block"><em>Not so much charities like this nowadays.</em></div>
                        <div class="card-footer text-muted">
                            <div>JHOLLMAN C.</div>
                            <small>User</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section__container mbr-section__container--first" id="header3-16" data-rv-view="207">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="mbr-section-title display-4">Awesome</h3>
                <small>By John Smith posted July 30, 2015</small>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section__container mbr-section__container--last" id="content1-15" data-rv-view="206">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 lead"><p>Cool testing</p></div>
        </div>
    </div>
</section>


<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-8" data-rv-view="212" style="background-color: rgb(55, 56, 62); padding-top: 3rem; padding-bottom: 0rem;">
    
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

<section class="mbr-section mbr-section-small" id="social-buttons2-17" data-rv-view="209" style="background-color: rgb(55, 56, 62); padding-top: 1.5rem; padding-bottom: 0rem;">
    

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="mbr-section-title h1">Follow Us</h2>
            </div>
            <div class="col-sm-8 text-xs-right"><a class="btn btn-social socicon-bg-twitter" title="Twitter" href="https://twitter.com" target="_blank"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social socicon-bg-facebook" title="Facebook" href="https://www.facebook.com" target="_blank"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social socicon-bg-google" title="Google+" href="https://plus.google.com" target="_blank"><i class="socicon socicon-google"></i></a> <a class="btn btn-social socicon-bg-youtube" title="YouTube" href="https://www.youtube.com" target="_blank"><i class="socicon socicon-youtube"></i></a> <a class="btn btn-social socicon-bg-instagram" title="Instagram" href="https://instagram.com" target="_blank"><i class="socicon socicon-instagram"></i></a> <a class="btn btn-social socicon-bg-pinterest" title="Pinterest" href="https://www.pinterest.com" target="_blank"><i class="socicon socicon-pinterest"></i></a> <a class="btn btn-social socicon-bg-tumblr" title="Tumblr" href="http://tumblr.com/" target="_blank"><i class="socicon socicon-tumblr"></i></a> <a class="btn btn-social socicon-bg-linkedin" title="LinkedIn" href="https://www.linkedin.com" target="_blank"><i class="socicon socicon-linkedin"></i></a> </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section-nopadding mbr-footer" id="footer1-9" data-rv-view="211" style="background-color: rgb(55, 56, 62); padding-top: 1rem; padding-bottom: 0rem;">
    
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