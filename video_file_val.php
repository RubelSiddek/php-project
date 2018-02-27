<?php
// define variables and set to empty values
$video_name =$video_file_path= "";
$video_nameErr =$fileErr1=$fileErr2=$fileErr3=$fileErr4=$fileErr5=$fileErr6="";
$valid=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
 if (empty($_POST["video_name"])) {
    $video_nameErr =  '<div class="alert alert-danger">
  <strong>Video_name is required!</strong></div>';
	$valid=false;
  } else {
    $video_name = test_input($_POST["video_name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$video_name)) {
      $video_nameErr = '<div class="alert alert-danger">
  <strong>Only letters and white space allowed!</strong></div>';
	  $valid=false;
    }
  }
  
  //copy start here//  
$target_dir = "V_files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$videoFileType = pathinfo($target_file,PATHINFO_EXTENSION);



// Check if image file is a actual image or fake image
if(!empty($videoFileType))
{
if(isset($_POST["submit"])) {

    }

// Check if file already exists
if (file_exists($target_file)) {
	$valid=false;
   $fileErr2= "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
	$valid=false;
    $fileErr3= "Sorry, your file is too large.";
	$valid=false;
    $uploadOk = 0;
}
// Allow certain file formats
if($videoFileType != "3gp" && $videoFileType != "3GP" && $videoFileType != "mkv"
&& $videoFileType != "flv" && $videoFileType != "MP4" && $videoFileType != "mp4"){
	$valid=false;
    $fileErr4="Sorry, only 3gp, flv, mkv & mp4 V_files are allowed.";
    $uploadOk = 0;
}
 
 
 
 
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  $fileErr5= "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	
if($valid){
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
{
$video_file_path="V_files/".basename( $_FILES["fileToUpload"]["name"])."";
}
   
}
}
}
else
{
	$valid=false;
	$fileErr6="File is required";
	$video_file_path="V_files/default.png";
	
}
//copy end here// 
if($valid){
	
	include('db_connect.php');
		
	$sql = "INSERT INTO tbl_video (video_id,video_name,video_file_path) VALUES ('', '$video_name','$video_file_path')";
	
	if ($conn->query($sql) === TRUE) {
		echo '<div class="alert alert-info">
  <strong><center>Congratulation!</strong> Your Video is successfully Uploaded</center>
</div>';
	
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		
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