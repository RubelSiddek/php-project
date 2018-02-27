
<!-- Container (Pricing Section) -->
<div id="audio" class="container">
  
    <div class="container" style="background:url(img/img01.jpg)">
		
		
		<div class="row">
		<div class="gallary audio">
		<h1>Audio Galary</h1>
		
		</div>
		</div>
		<div class="table-responsive">
			<table class="table table-hover">
			<div class="table"style="background:#7508b5 ;">
				
				<thead style="background:#ffff ;">
				
				  <tr>
					<th><center>Audio Image</center></th>
					<th><center>Audio Title</center></th>
					<th><center>Dodnload</center></th>
					<th><center>Play</center></th>
				  </tr>
				  
				</thead>
				
				<tbody>
					<?php
						include('db_connect.php');
						
						$sql = "SELECT * FROM tbl_audio";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
					?>
								<tr>
									<td><img src="img/default2.jpg" style="width:20px;"/></td>
									
									<td><?php echo $row['title'];?></td>
									
									<td><a href="<?php echo $row['audio_file_path'];?>" download ><button type="button" class="btn btn-success">Dodnload</button></a></td>
									
									<td> <audio controls>
									  <source src="<?php echo $row['audio_file_path'];?>" type="audio/ogg">
									</audio> </td>
								</tr>
									
								<?php 
							}
						} else{echo "No data results";}
								$conn->close();
								?>
				</tbody>
			</table>
		  </div>
			
		</div>
		  
	
  
	</div>
</div>
