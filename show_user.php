<?php

			include('banner.php');	
			?>
	  <div class="container">
	  
	  <div class="center_text col-xs-12 col-sm-12 col-md-12 col-lg-12">
	  
		<div class="alert alert-success">
			<strong><center>WELCOME!</strong> to admin panel.<br>
			<?php
				echo date("d-m-Y");
				?>
			</center>
			
		</div>
		
	  <table class="table table-hover">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Edit</th>
			<th>Delete</th>
		  </tr>
		</thead>
		<tbody>
	  
			<?php

			include('db_connect.php');	
				
				
			$sql = "SELECT * FROM tbl_users";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				
				?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td style="color:red">
						<?php echo $row['email'];?>
					</td>
					<td><?php echo $row['gender'];?></td>
					
					<td><a href="form_update.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-success">Edit</button></a></td>
					<td><a href="form_delete.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
				</tr>
				
				<?php 
				}
			} else {
				echo "No data results";
			}
			$conn->close();
			?> 
			
			
			   
		</tbody>
	  </table>
		
	  </div>
	  
	  </div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>