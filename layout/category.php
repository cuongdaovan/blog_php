<?php 
	require_once '../includes/categorydb.php';
	require_once '../includes/db.php';
	connect();

	$categories = getAllCategory();
	// while ($row = mysqli_fetch_assoc($categories)) {
	// 	$columns = array("name" => "name");
	// 	foreach ($columns as $key => $value) {
	// 		$data = $row[$key];
	// 		echo "<td>$data</td>";
	// 	}
		
	// }

	disconnect();
?>
<div class="aside-widget">
	<div class="section-title">
		<h2>Catagories</h2>
	</div>
	<div class="category-widget">
		<ul>
			<?php 
				while ($row = mysqli_fetch_assoc($categories)) {
					$columns = array("name" => "name");
					foreach ($columns as $key => $value) {
						$data = $row[$key];

			?>
			<li><a href="" class="cat-1"><?php echo $data; ?><span>340</span></a></li>
			<?php
						
					}
				}
			 ?>
			
			
		</ul>
	</div>
</div>
