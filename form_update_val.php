
<?php 
	$name = $email = $pwd = $re_pwd = $gender = $length = $date = $user_id ="";
	$nameErr = $emailErr = $pwdErr = $re_pwdErr = $genderErr = $user_idErr ="";

	$valid = true;

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if(empty($_POST["name"])){
			$nameErr = '<div class="alert alert-danger">
				<strong>Name is required!!!</strong></div>';
				$valid = false;
		} else {
			$name = test_input($_POST["name"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				$nameErr = '<div class="alert alert-danger">
					<strong>Only letters and white space allowed!!!</strong></div>';
					$valid=false;
			}
		}

		if (empty($_POST["email"])) {
			$emailErr = '<div class="alert alert-danger">
				<strong>Email is required!</strong></div>';
			$valid=false;
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = '<div class="alert alert-danger">
					<strong>Invalid Email Format!!!</strong></div>';
  				$valid=false;
			}
		}

		if(empty($_POST["pwd"])) {
			$pwdErr = '<div class="alert alert-danger">
				<strong>Password is required!!!</strong></div>';
			$valid=false;
		} else {
			$pwd = test_input($_POST["pwd"]);
			
			$length=strlen($pwd);
			if($length<5) {
				$pwdErr = '<div class="alert alert-danger">
					<strong>Weak Password!</strong> Please enter at least five charecter !!!
				</div>';
				$valid=false;
			}

		}

		if(empty($_POST["re_pwd"])) {
			$re_pwdErr = '<div class="alert alert-danger">
		  	<strong>Re_pwd is required!!!</strong></div>';
			$valid=false;
		} else {
			$re_pwd = test_input($_POST["re_pwd"]);
			if($pwd != $re_pwd) {
				$re_pwdErr = '<div class="alert alert-danger">
					<strong>Invalid re_pwd Format!!!</strong></div>';
  				$valid=false;
			}
		}

		if(empty($_POST["gender"])){
			$genderErr ='<div class="alert alert-danger"><strong>Gender is required!!!</strong></div>';
			$valid = false;
		} else {
			$gender = test_input($_POST["gender"]);
		}
		
		
		if($valid){
			include('db_connect.php');

			$sql = "UPDATE tbl_users SET name='$name', email='$email', pwd='$pwd', gender='$gender' WHERE id='$_SESSION[update_id]'";

			if ($conn->query($sql) === TRUE) {
				echo '<div class="alert alert-info">
				  <center><strong>Congratulation!</strong> Your information is successfully UPDATED</center>
				</div>';
			}
			else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
				
				if (mysqli_errno($conn) == 1062) {
					$emailErr= '<div class="alert alert-danger">
						<strong>Email Already exist!</strong></div>';
				}
			}

			$conn->close();
		}
	}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	