
<?php include '../layout/head.php' ?>
<?php 
	require_once '../includes/categorydb.php';
	require_once '../includes/db.php';
	connect();
	$id = $_GET['id'];
	$blog_id = get_cat_blog($id);
 ?>
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-sm-8">
						<div class="row">
							
							<?php
								while ($row = mysqli_fetch_assoc($blog_id)) {
									echo $row['blog_id'];
								} 
							?>	
						</div>
					</div>

					<div class="col-sm-4">

						<?php include '../layout/category.php' ?>
						
						
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		

		