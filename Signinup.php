<?php session_start(); 
include('checkregblock.php');
include('blockedinfo.php');
$_SESSION['count']=1;
if(isset($_POST['mybtn']))
{
  echo "Hello";
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
  <title>Sign in/up</title>
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
  <script>
function _(id){ return document.getElementById(id); }
function submitForm(){
  _("mybtn").disabled = true;
  _("status").innerHTML = '';
  var formdata = new FormData();
  formdata.append( "txt", _("txt").value );
  formdata.append( "e", _("e").value );
  formdata.append( "t", _("t").value );
  formdata.append( "p", _("p").value );
  formdata.append( "ad", _("ad").value );
  formdata.append( "pc", _("pc").value );
  var ajax = new XMLHttpRequest();
  ajax.open( "POST", "a.php" );
  ajax.onreadystatechange = function() {
    if(ajax.readyState == 4 && ajax.status == 200) {
      if(ajax.responseText == "success"){
        _("mybtn").disabled = false;
        _("status").innerHTML = 'success';
      } else {
        _("status").innerHTML = ajax.responseText;
        _("mybtn").disabled = false;
      }
    }
  }
  ajax.send( formdata );
}
</script>

  </head>
<body>
  <nav class="navbar navbar-light mbr-navbar navbar-transparent navbar-fixed-top" id="menu-a" data-rv-view="60">
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

<section class="mbr-section mbr-section-small mbr-after-navbar" id="form1-1m" data-rv-view="294" style="background-color: rgb(255, 255, 255); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    
    <div class="container">
      <form action="login.php"><button type="submit" class="btn btn-secondary-outline">Sign In</button></form>
        <div class="row">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                <h2 class="mbr-section-title display-3 text-xs-center">Registeration Form</h2>

                
        </div>
    </div>
</section>
<div>
                <form id="my_form" onsubmit="submitForm(); return false;" method="post" data-form-title="Registeration Form"
                style="width: 30%; margin-left: 35%;">
                    <div class="form-group">
                        <input type="text" id="txt" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" id="e"class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" id="t"class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                    </div>
                    <div class="form-group">
                        <input type="password" id="p"class="form-control" name="password" required="" placeholder="Password*" data-form-field="Name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="ad" name="address" rows="10" placeholder="Address" data-form-field="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" id="pc" class="form-control" name="pce" required="" placeholder="Postal Code*" data-form-field="Name">
                    </div>
                    <div class="text-xs-right"><button type="submit" class="btn btn-secondary-outline"id="mybtn">Register</button> <span id="status"></span></div>
              <span class="gdpr-block "><label><input type="checkbox" name="gdpr" id="gdpr-input" required="">By continiung you agree to our <a href="terms.html">Terms of Service</a> and <a href="policy.html">Privacy Policy</a>.or <a href="registerationform/register.php">Alternative form link</a></label></span><span id="status"></span></form>
            </div></div>
<section class="mbr-section mbr-section__container mbr-section__container--isolated" id="header3-1y" data-rv-view="364">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="mbr-section-title display-4">Or become a permanent member</h3><br/>
                <p>register as a suscriber first and then choose the packages</p>
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="pricing-table1-1n" data-rv-view="303" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-success">Regular Sign up</div>
                    <div class="card-block lead">
                        <span>$</span><span>0</span> <small>per month</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>Unlimited Articles &amp; Posts&nbsp;</strong></li><li class="list-group-item"><strong>No Leopard Adoption</strong></li><li class="list-group-item"><strong>Pass-by &nbsp;community access</strong></li></ul></div>
                    <form action="customersignup.php" method="post">
                    <div class="card-block"><button type="submit" class="btn btn-secondary-outline">Choose</button></div>
                  </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-warning">6 months</div>
                    <div class="card-block lead">
                        <span>$</span><span>10</span> <small>per month</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>Monthly Exclusive Members' Magazine, unlimited articles &amp; posts</strong></li><li class="list-group-item"><strong>Leopard adoption *</strong></li><li class="list-group-item"><strong>Community &amp; Recognition</strong></li></ul></div>
                    <form action="customersignup.php" method="post">
                    <div class="card-block"><button type="submit" class="btn btn-secondary-outline">Choose</button></div>
                  </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-danger">Yearly</div>
                    <div class="card-block lead">
                        <span>$</span><span>8.33</span> <small>per month</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>Monthly Exclusive Members' Magazine, unlimited articles &amp; posts</strong></li><li class="list-group-item"><strong>Leopard adoption *
</strong></li><li class="list-group-item"><strong>Community &amp; Recognition</strong></li></ul></div>
                    <form action="customersignup.php" method="post">
                    <div class="card-block"><button type="submit" class="btn btn-secondary-outline">Choose</button></div>
                  </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card text-xs-center">
                    <div class="card-header bg-primary">2 years</div>
                    <div class="card-block lead">
                        <span>$</span><span>6.25</span> <small>per month</small>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>Monthly Exclusive Members' Magazine, unlimited articles &amp; posts</strong></li><li class="list-group-item"><strong>Leopard adoption *
</strong></li><li class="list-group-item"><strong>Community &amp; Recognition</strong></li></ul></div>
                    <form action="customersignup.php" method="post">
                    <div class="card-block"><button type="submit" class="btn btn-secondary-outline">Choose</button></div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-8" data-rv-view="253" style="background-color: rgb(55, 56, 62); padding-top: 3rem; padding-bottom: 0rem;">
    
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

<section class="mbr-section mbr-section-small" id="social-buttons2-1g" data-rv-view="254" style="background-color: rgb(55, 56, 62); padding-top: 1.5rem; padding-bottom: 0rem;">
    

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="mbr-section-title h1">Follow Us</h2>
            </div>
            <div class="col-sm-8 text-xs-right"><a class="btn btn-social socicon-bg-twitter" title="Twitter" href="https://twitter.com" target="_blank"><i class="socicon socicon-twitter"></i></a> <a class="btn btn-social socicon-bg-facebook" title="Facebook" href="https://www.facebook.com" target="_blank"><i class="socicon socicon-facebook"></i></a> <a class="btn btn-social socicon-bg-google" title="Google+" href="https://plus.google.com" target="_blank"><i class="socicon socicon-google"></i></a> <a class="btn btn-social socicon-bg-youtube" title="YouTube" href="https://www.youtube.com" target="_blank"><i class="socicon socicon-youtube"></i></a> <a class="btn btn-social socicon-bg-instagram" title="Instagram" href="https://instagram.com" target="_blank"><i class="socicon socicon-instagram"></i></a> <a class="btn btn-social socicon-bg-pinterest" title="Pinterest" href="https://www.pinterest.com" target="_blank"><i class="socicon socicon-pinterest"></i></a> <a class="btn btn-social socicon-bg-tumblr" title="Tumblr" href="http://tumblr.com/" target="_blank"><i class="socicon socicon-tumblr"></i></a> <a class="btn btn-social socicon-bg-linkedin" title="LinkedIn" href="https://www.linkedin.com" target="_blank"><i class="socicon socicon-linkedin"></i></a> </div>
        </div>
    </div>
</section>

<footer class="mbr-section mbr-section-nopadding mbr-footer" id="footer1-9" data-rv-view="256" style="background-color: rgb(55, 56, 62); padding-top: 1rem; padding-bottom: 0rem;">
    
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