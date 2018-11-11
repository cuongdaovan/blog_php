<!-- row -->
<?php 
	
	require_once '../includes/blogdb.php';
	require_once '../includes/db.php';
	connect();

	$blogs = getAllBlogs();
	

	// disconnect();
	
 ?>
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Recent Posts</h2>
						</div>
					</div>
					<?php 

						while ($row = mysqli_fetch_assoc($blogs)) {
					?>
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img src="<?php echo $row['picture'];?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html"><?php 
									echo $row['name']; ?></a>
									<span class="post-date">March 27, 2018</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html"><?php echo $row['title']; ?></a></h3>
							</div>
						</div>
					</div>
					<?php
						}
					 ?>

				</div>
				<!-- /row -->