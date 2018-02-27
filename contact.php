<?php 
		include('banner.php');
		include('contact_val.php');
	 ?>
	<div class="container">
		<div class="Left col-md-8">
			<div class="form cs_form col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
				<center><h2>contact</h2></center>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
				
				  <div class="form-group">
					<label >Name:</label>
					<input type="name" class="form-control" placeholder="Enter your Name" name="name" value="<?php echo $name; ?>">
					<span class="error"><?php echo $nameErr; ?></span>
				  </div>
				  
				  <div class="form-group">
					<label >Subject:</label>
					<input type="name" class="form-control" placeholder="Enter your Subject" name="subject" value="<?php echo $subject; ?>">
					<span class="error"><?php echo $subjectErr; ?></span>
				  </div>
				  
				  <div class="form-group">
					<label >Email address:</label>
					<input type="email" class="form-control" placeholder="Enter your Email" name="email" value="<?php echo $email; ?>">
					<span class="error"><?php echo $emailErr; ?></span>
				  </div>
				  
				  <div class="form-group">
					<label >Message:</label>
					<textarea class="form-control" rows="5" placeholder="Enter your Massage" name="massage" value="<?php echo $massage; ?>"> </textarea>
					
					<span class="error"><?php echo $massageErr; ?></span>
				  </div>

				  
				  <button type="submit" class="btn-success btn-block btn-lg">Send</button>
				</form>
			</div>
		</div>
		<div class="Right col-md-4">
			<img src="img/contact.png" class="custom img-responsive" alt="Responsive Form image">
		</div>
	</div>
	<br>
	
<?php include('footer.php');?>