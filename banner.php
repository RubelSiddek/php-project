<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Islamic Solution</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                      
      </button>
	 
      <a class="navbar-brand" href="index.php"><abbr title="Islamic Resources Home">IR HOME</abbr></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
		
		<?php if(isset($_SESSION['login_status'])&&($_SESSION['login_status']=='Yes')){?>
		 <li><a href="img.php">Uplpad Image</a></li>
		 <li><a href="video_index.php">Uplpad Video</a></li>
        <li><a href="audio_index.php">Upload Audio</a></li>
		<li><a href="logout.php">Logout</a></li>
		
		<?php }else{?>
		
		
		<!-- Hide Admin_Login 
		<li><a href="admin_login.php">Admin_Login</a></li>
			-->
		
		
		<?php }?>
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