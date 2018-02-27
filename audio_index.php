<?php 

session_start();
if(isset($_SESSION['login_status'])&&$_SESSION['login_status']=='Yes'){}
else{
	header('LOcation:../admin.php');
}

?>
<html lang="en">
<head>
  <title>Audio Upload</title>
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
	<?php 
		include('banner.php');
		include('audio_file_val.php');
	?>
	<div class="container">
		<div class="form cs_form col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<center><h2>WELCOME TO YOU IN THE AUDIO UPLOAD FORM OF ISLAMIC Resources</h2></center>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
				
					<div class="form-group">
						
					<input type="text" class="form-control" placeholder="Enter Your Image Name" name="title" value="<?php echo $title;?>">
					<span class="error"> <?php echo $titleErr;?></span>
					<br><br>
					
						<input type="file" name="fileToUpload"> 
						<span class="error"><?php echo $fileErr1;?></span>
						<span class="error"><?php echo $fileErr2;?></span>
						<span class="error"><?php echo $fileErr3;?></span>
						<span class="error"><?php echo $fileErr4;?></span>
						<span class="error"><?php echo $fileErr5;?></span>
						<span class="error"><?php echo $fileErr6;?></span>
										
						<button type="submit" class="btn-success btn-block btn-lg">Upload</button>						
					</div>
				</form>
		</div>
	</div>
<br>
	<?php include('footer.php');?>