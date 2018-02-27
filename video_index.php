
	<?php 
		include('banner.php');
		include('video_file_val.php');
	?>
	<div class="container">
		<div class="form cs_form col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<center><h2>WELCOME TO YOU IN THE VIDEO UPLOAD FORM OF ISLAMIC Resources</h2></center>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
				
					<div class="form-group">
						
					<input type="text" class="form-control" placeholder="Enter Your Video Name" name="video_name" value="<?php echo $video_name;?>">
					<span class="error"> <?php echo $video_nameErr;?></span>
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