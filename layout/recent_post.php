<!-- row -->
<?php 
	
	require_once '../includes/blogdb.php';
	require_once '../includes/db.php';
	connect();

	$blogs = getAllBlogs();
	

	// disconnect();
	
 ?>

					<?php 

						while ($row = mysqli_fetch_assoc($blogs)) {
					?>
					<div class="col-sm-6">
						<div class="post">
							<a class="post-img" href="blog_detail.php?id=<?php echo $row['blog_id']; ?>"><img src="../image/<?php echo $row['image'];?>" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category-blogpost.php?id=<?php 
									echo $row['category_id'];
									 ?>"><?php 
									echo $row['name']; ?></a>
									<span class="post-date"><?php echo $row['fullname']; ?>
										- <?php echo $row['datetime']; ?>
									</span>
								</div>
								<h3 class="post-title"><a href="blog_detail.php?id=<?php echo $row['blog_id']; ?>"><?php echo $row['title'];?></a></h3>
							</div>
						</div>
					</div>
						<?php
						}
					 ?>
