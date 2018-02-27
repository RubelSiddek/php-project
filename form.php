<?php 
		include('banner.php');
		include('user_val.php');
	 ?>
	<div class="container">
		<div class="Left col-md-4">
			<img src="img/form1.jpg" class="custom img-responsive" alt="Responsive Form image">
		</div>
		<div class="Right col-md-8">
			<div class="form cs_form col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
				<center><h2>WELCOME TO YOU IN THE User FORM OF ISLAMIC Resources</h2></center>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				
				  <div class="form-group">
					<label >Name:</label>
					<input type="name" class="form-control" placeholder="Enter your Name" name="name" value="<?php echo $name; ?>">
					<span class="error"><?php echo $nameErr; ?></span>
				  </div>
				  
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
				  
				  <div class="form-group">
					<label >Verified Password:</label>
					<input type="password" class="form-control" placeholder="Verified your Password" name="re_pwd" value="<?php echo $re_pwd; ?>">
					<span class="error"><?php echo $re_pwdErr; ?></span>
				  </div>
				
					<!--        ----for browser box---- 
								<label >File input</label>
									<input type="file">     		-->
							<?php echo $date; ?>	
					<div class="form-group">
					<label >Gender:</label>
					  <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male")echo "checked"; ?> value="male">Male
					  <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female")echo "checked"; ?> value="male">Female
					  <span class="error"><?php echo $genderErr; ?></span>
					</div>
				  
				  <button type="submit" class="btn-success btn-block btn-lg">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<br>
	
<?php include('footer.php');?>