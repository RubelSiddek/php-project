<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Islamic Resources</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style= " background:url(img/3d-bes.jpg)#ddd;">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                      
      </button>
	 
      <a class="navbar-brand" href="#myPage"><abbr title="Islamic Resources Home">I.R. HOME</abbr></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#image">Image</a></li>
        <li><a href="#video">Video</a></li>
        <li><a href="#audio">Audio</a></li>
		
		<?php if(isset($_SESSION['login_status'])&&($_SESSION['login_status']=='Yes')){?>
		 <li><a href="img.php">Uplpad Image</a></li>
		 <li><a href="video_index.php">Uplpad Video</a></li>
        <li><a href="audio_index.php">Upload Audio</a></li>
		<li><a href="logout.php">Logout</a></li>
		<?php }else{?>
		<li><a href="login.php">Login</a></li>
			<!-- Hide Admin_Login 
		<li><a href="admin_login.php">Admin_Login</a></li>
			-->
			
		<li><a href="form.php">sign up</a></li>
		<?php }?>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
	  
	  
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="img1">
			<img src="img/1.jpg" alt="Bismillah"/>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
		<div class="row">
		  <h1>Islamic Resources</h1> 
		  <p>About our daily life</p> 
		  
		</div>
		<center>
	
		</center>
    </div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="img2">
			<img src="img/1.1.jpg" alt="Salam"/>
		</div>
	</div>
  </div>
</div>
<?php include('show_img.php'); ?>
<?php include('show_video.php'); ?>
<?php include('show_audio.php'); ?>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy;***MD RUBEL SIDDEK*** mrsa.weakup@gmail.com</p>
	<?php
		echo date("Y");
		?>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
