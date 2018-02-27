
<?php 
	$name = $email = $subject = $massage = $date ="";
	$nameErr = $emailErr = $subjectErr = $massageErr = "";

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
		
		if(empty($_POST["subject"])){
			$subjectErr = '<div class="alert alert-danger">
				<strong>Subject is required!!!</strong></div>';
				$valid = false;
		} else {
			$subject = test_input($_POST["subject"]);
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
				$subjectErr = '<div class="alert alert-danger">
					<strong>Only letters and white space allowed!!!</strong></div>';
					$valid=false;
			}
		}

		if(empty($_POST["massage"])){
			$massageErr = '<div class="alert alert-danger">
				<strong>Massage is required!!!</strong></div>';
				$valid = false;
		} else {
			$massage = test_input($_POST["massage"]);
			
		}

		
		if($valid){
			include('db_connect.php');
				
				$date=date('d-m-y h:i:sa');
				
			$sql = "INSERT INTO tbl_contact (id, name, email, subject, massage, date) VALUES ('', '$name', '$email', '$subject', '$massage', '$date')";

			if ($conn->query($sql) === TRUE) {
				echo '<div class="alert alert-info">
				  <center><strong>Congratulation!</strong> Your massage is successfully send</center>
				</div>';
			}
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				
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
	