<?php

if(isset($_POST['subject'], $_POST['sender'], $_POST['receiver'],$_POST['subject'], $_POST['body'])){
	//Validaite Subject
	
	if(empty($_POST['subject'])){
		$errors[] = "Please enter a subject";
	}else{
		$subject = htmlentities($_POST['subject']);
	}
	
	//Validaite Sender Email
	
	if(empty($_POST['sender'])){
		$errors[] = "Please enter your valid email address.";
	}else if(strlen($_POST['sender'])>347){
		$errors[] ="Your email is too long. Please provide your valid eMail address.";
	}else if(filter_var($_POST['sender'], FILTER_VALIDATE_EMAIL) ===false){
		$errors[] ="Please enter a valid email address.";
	}else{
		$email ="<". htmlentities($_POST['sender']).">";
	}
	
	//Validaite Receiver Email
	
	if(empty($_POST['receiver'])){
		$errors[] = "Please enter your valid email address for receiving contact.";
	}else if(strlen($_POST['receiver'])>347){
		$errors[] ="The email you entered for the receiver is too long. Please provide a valid eMail address.";
	}else if(filter_var($_POST['receiver'], FILTER_VALIDATE_EMAIL) ===false){
		$errors[] ="Please enter a valid email address for the receiver contact.";
	}else{
		$email ="<". htmlentities($_POST['receiver']).">";
	}
	
	//Validaite body
	
	if(empty($_POST['body'])){
		$errors[] = "Please enter a massage";
	}else{
		$body = htmlentities($_POST['body']);
	}
	
	
}

?>


		<?php 
			include('banner.php');
			if(empty($errors) === false){
			?>
			
			<ul>
				<?php
					foreach($errors as $errors){
						echo "<li>",$errors,"</li>";
					}
				?>
			</ul>
			
			<?php
			}else{
				if(isset($to, $subject, $body, $email)){
					mail($to, $subject, $body, "From: {$email}");
					echo"Message Sent.";
				}
			}
		
		?>
	
		
	<form method="post" action="">
		
		
		<!-- 
	<div class="form-group">
		<label for="subject" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" id="subject" name="subject" placeholder="Email">
		</div>
    </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
		 -->
		 
		 
		<label for="subject">Subject: </label>
			<input type="text" id="subject" name="subject"/> <br />
		<label for="sender">Your eMail: </label>
			<input type="text" id="sender" name="sender"/> <br />
		<label for="receiver">Receiver eMail: </label>
			<input type="text" id="receiver" name="receiver"/> <br />
		<label for="body">Message: </label>
			<textarea  id="body" name="body" cols="50" rows="10"></textarea> <br />
			<input type="submit" value="Send eMail!" />
	</form>
	
	
	
	
<?php include('footer.php');?>