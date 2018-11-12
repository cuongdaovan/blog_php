
<?php include '../layout/head.php' ?>
<?php 
	require_once '../includes/categorydb.php';
	require_once '../includes/db.php';
	require_once '../includes/blogdb.php';
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
									$blog = getBlog($row['blog_id']);
							?>
							<div class="col-sm-4">
								<div class="post">
									<a class="post-img" href="blog-post.html"><img src="../image/<?php echo $blog['image'];?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-1" href="category.html"><?php 
											echo $blog['name']; ?></a>
											<span class="post-date"><?php echo $blog['fullname']; ?>-<?php echo $blog['datetime']; ?></span>
										</div>
										<h3 class="post-title"><a href="blog_detail.php?id=<?php echo $blog['blog_id']; ?>"><?php echo $blog['title'];?></a></h3>
									</div>
								</div>
							</div>
							<?php
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

		

		