<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Islamic Solution</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
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
		include('admin_login_val.php');
	 ?>
	<div class="container">
		<div class="form cs_form col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<center><h2>WELCOME TO YOU IN THE FORM OF ISLAMIC SOLUTION</h2></center>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			
			  <div class="form-group">
				<label >Email address:</label>
				<input type="email"  class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $email; ?>">
				<span class="error"><?php echo $emailErr; ?></span>
			  </div>
			  
			  <div class="form-group">
				<label >Password:</label>
				<input type="password" class="form-control" placeholder="Enter your Password" name="pwd" value="<?php echo $pwd; ?>">
				<span class="error"><?php echo $pwdErr; ?></span>
			  </div>
			  <div class="error"> <?php echo $loginErr; ?> </div>
			  
			  <button type="submit" class="btn-success btn-block btn-lg">Submit</button>
			</form>
		</div>
	</div>
	<br />	
<?php include('footer.php');?>