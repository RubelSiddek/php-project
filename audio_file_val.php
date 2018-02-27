<?php
// define variables and set to empty values
$title =$audio_file_path= "";
$titleErr =$fileErr1=$fileErr2=$fileErr3=$fileErr4=$fileErr5=$fileErr6="";
$valid=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	
 if (empty($_POST["title"])) {
    $titleErr =  '<div class="alert alert-danger">
  <strong>Audio_name is required!</strong></div>';
	$valid=false;
  } else {
    $title = test_input($_POST["title"]);
    if (!preg_match("/^[a-zA-Z 0-9]*$/",$title)) {
      $titleErr = '<div class="alert alert-danger">
  <strong>Only letters and white space allowed!</strong></div>';
	  $valid=false;
    }
  }
  
  
$target_dir = "Audio_files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$audio_FileType = pathinfo($target_file,PATHINFO_EXTENSION);



// Check if image file is a actual image or fake image
if(!empty($audio_FileType))
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
if($audio_FileType != "mp3" && $audio_FileType != "MP3" && $audio_FileType != "AIF"
&& $audio_FileType != "IFF" && $audio_FileType != "M3U" && $audio_FileType != "WMA"){
	$valid=false;
    $fileErr4="Sorry, only mp3, MP3, IFF & WMA Audio_files are allowed.";
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
$audio_file_path="Audio_files/".basename( $_FILES["fileToUpload"]["name"])."";
}
   
}
}
}
else
{
	$valid=false;
	$fileErr6="File is required";
	$audio_file_path="Audio_files/default.png";
	
}
//copy end here// 
if($valid){
	
	include('db_connect.php');
		
	$sql = "INSERT INTO tbl_audio (audio_id, title,audio_file_path) VALUES ('', '$title','$audio_file_path')";
	
	if ($conn->query($sql) === TRUE) {
		echo '<div class="alert alert-info">
  <strong><center>Congratulation!</strong> Your Mp3 is successfully Uploaded</center>
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