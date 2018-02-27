<div id="image" class="container-fluid">
    <div class="row">
		<div class="fix content">
			<div class="container">
				<div class="gallary">
					<h1>Image Galary</h1>
					
					
					<?php
					  
						include('db_connect.php');
						  
						$sql = "SELECT * FROM tbl_img ORDER BY img_id DESC;";
						$print = $conn->query($sql);

						if ($print->num_rows > 0) {
						  // output data of each row
						$print_row=1;
						  while($row = $print->fetch_assoc()) {
						$sum_row=1;
					?>

					<?php if($sum_row==$print_row){?>
					
					<center>
						<div class="row">
						<?php $print_row=$print_row+2; }?>
						<div class="col-sm-4" style="margin-bottom:10px;">
							<div class="row img-responsive ">
							<img class="img-thumbnail" src="<?php echo $row['img_file_path'];?>"style="width:350px;height:200px;">
							</div>
							<div class="row">
								<div class="img" style="background:#337AB7;max-width: 100%;height:auto;border-radius:5px;margin:5px">
								
									<span style="background:blue;border-radius:5px;"><h2><?php echo $row['title'];?></h2></span>
									<a href="<?php echo $row['img_file_path']?>" download class="btn btn-success btn-md" role="button">Download</a>
								</div>
							</div>
						</div>
							<?php if($sum_row==$print_row){?>
						</div>
					</center>
					<?php }?>
						  <?php
						$sum_row++;
						  }
						} else {
						  echo "0 prints";
						}
						$conn->close();
						?>
				</div>
			</div>
		</div>
	
    </div>
</div>