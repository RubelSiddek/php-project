
	<?php 
		include('banner.php');
		include('login_val.php');
	 ?>
	<div class="container">
		<div class="Left col-md-4">
			<img src="img/login3.jpg" class="Login img-responsive" alt="Responsive Form image">
		</div>
		<div class="Right col-md-8">
			<div class="form cs_login col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
				<center><h2>WELCOME TO YOU IN THE User Login OF ISLAMIC Resources</h2></center>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				
				  <div class="form-group">
					<label >Email address:</label>
					<input type="email" class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $email; ?>">
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
	</div>
<?php include('footer.php');?>