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
        
		
        <li><a href="admin.php">Admin Panel</a></li>
		
		
		
		
		<!-- Hide Admin_Login 
		<li><a href="logout.php">Logout</a></li>
		<li><a href="admin_login.php">Admin_Login</a></li>
			
			-->
		
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

	<?php	
if(isset($_GET['id'])){
	  
	  $_SESSION['update_id']=$_GET['id'];
  }
include('db_connect.php');	
	
		$sql = "SELECT * FROM tbl_users WHERE id='".$_SESSION['update_id']."'";
		
		$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		
?>


	<?php 
		include('form_update_val.php');
	 ?>
	<div class="container">
		<div class="form cs_form col-xs-12 col-sm-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
			<center><h2>WELCOME TO YOU IN THE FORM OF ISLAMIC RESOURCES</h2></center>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			
			  <div class="form-group">
				
				<label >Name:</label>
				<input type="name" class="form-control" placeholder="Enter your Name" name="name" value="<?php if(empty($name)) {echo $row['name'];} else echo $name; ?>">
				
				<span class="error"><?php echo $nameErr; ?></span>
			  </div>
			  
			  <div class="form-group">
				<label >Email address:</label>
				<input type="email" class="form-control" placeholder="Enter your Email" name="email" value="<?php if(empty($email)){echo $row['email'];} else echo $email; ?>">
				<span class="error"><?php echo $emailErr; ?></span>
			  </div>
			  
			  <div class="form-group">
				<label >Password:</label>
				<input type="password" class="form-control" placeholder="Enter your Password" name="pwd" value="<?php if(empty($pwd)){echo $row['pwd'];} else echo $pwd; ?>">
				
				<span class="error"><?php echo $pwdErr; ?></span>
			  </div>
			  
			  <div class="form-group">
				<label >Verified Password:</label>
				<input type="password" class="form-control" placeholder="Verified your Password" name="re_pwd" value="<?php if(empty($re_pwd)){echo $row['pwd'];} else echo $re_pwd; ?>">
				
				<span class="error"><?php echo $re_pwdErr; ?></span>
			  </div>
			  
			  
				
				<!--        ----for browser box---- 
							<label >File input</label>
								<input type="file">     		-->
								
				<div class="form-group">
				<label >Gender:</label>
				  <input type="radio" name="gender" <?php if(empty($gender) && $row['gender']=='male') {echo 'checked';} else if(isset($gender) && $gender=="male")echo "checked"; ?> value="male">Male
				  <input type="radio" name="gender" <?php if(empty($gender) && $row['gender']=='female') {echo 'checked';} else if(isset($gender) && $gender=="female")echo "checked"; ?> value="female">Female
				  <span class="error"><?php echo $genderErr; ?></span>
				</div>
			  
			  <input type="submit" class="btn-success btn-block btn-lg" name="submit" value="Update" />
			</form>
		</div>
	</div>
	<?php 
	}
			}
			else{
				echo "No data results";
			}
		$conn->close();
	?>
	<?php include('footer.php');?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>