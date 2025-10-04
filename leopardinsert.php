<?php 
session_start();
include('blockedinfo.php');
include('checkregblock.php');
if ($_SESSION['log']!=2)
{
	header('location:errorinfo.html');
}

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="# v4.7.7, #.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/sal-logo-58x59.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Leopard Insert</title>
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
	_("status").innerHTML = 'please wait ...';
	var formdata = new FormData();
	formdata.append( "n", _("n").value );
	formdata.append( "e", _("e").value );
	formdata.append( "f", _("f").value );
	var ajax = new XMLHttpRequest();
	ajax.open( "POST", "li.php" );
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			if(ajax.responseText == "success"){
				_("my_form").innerHTML = 'Success';
					_("mybtn").disabled = false;
				
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
<form id="my_form" onsubmit="submitForm(); return false;"style="text-align: center;margin-top: 200px;">
  <p><input id="n" placeholder="Name" class="form-control"style="width :50%;margin-left: 25%;" required></p>
  <p><input id="e" placeholder="Age" type="number" class="form-control" style="width :50%;margin-left: 25%;"required></p>
  <p><input id="f" type="number"placeholder="Year Arrived" class="form-control"style="width :50%;margin-left: 25%;" required></p>
  <p><input id="mybtn" type="submit"class="btn btn-secondary-outline" value="Submit Form"> <span id="status"></span></p>
</form>
<p>This text will appear 1 months after deployment. IF you want to assign a leopard to an image first insert leopard data separately by hitting the button underneath it and then uploading a photo by hitting the button underneath it.</p>
<form method="post" action="Leopardinsertadmin.php" enctype="multipart/form-data"style="text-align: center;margin-top: 200px;">
	<input type="hidden" name="size" value="1000000">
	<div>
		<input type="file" class="form-control"name="image"style="margin-left:25%; width:20%;">
	</div>
	<div>
		<input type="submit" name="upload" class="btn btn-secondary-outline"value="Upload image">
	</div>

</form>
 <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
</body>
</html>

 