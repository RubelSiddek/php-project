<?php
	
	if(isset($_GET['id']))
{
			include('db_connect.php');
			  
				$sql = "DELETE FROM tbl_users WHERE id='".$_GET['id']."'";

				if ($conn->query($sql) === TRUE) {
					// header('Location:show.php');
					echo'<script type="text/javascript">
					window.location.replace("show.php");
				</script>';
					$_SESSION['login_status']='Yes';
		header('Location:admin.php');

				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					
				}

				$conn->close();
				
}



?>
