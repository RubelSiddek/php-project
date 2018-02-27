<?php

$email = $pwd = "";
$emailErr = $pwdErr =$loginErr = "";

$valid=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["email"])) {
    $emailErr = '<div class="alert alert-danger">
  <strong>Email is required!</strong></div>';
	$valid=false;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = '<div class="alert alert-danger">
  <strong>Invalid Email Format!</strong></div>';
	  $valid=false;
    }
  }
  if (empty($_POST["pwd"])) {
    $pwdErr = '<div class="alert alert-danger">
  <strong>Password is required!</strong></div>';
	$valid=false;
  } else {
    $pwd = test_input($_POST["pwd"]);
  }
  
  if($valid){
	include('db_connect.php');
		
	$sql = "SELECT pwd,email FROM tbl_users WHERE pwd='$pwd' AND email='$email'";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		$_SESSION['login_status']='Yes';
		header('Location:index.php');
		
	} else {
		$loginErr= '<div class="alert alert-danger">
  <strong>Sorry! Your Email or Password is Invaid</strong></div>';
	}
			  
	
}
	  
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>