<?php 
	include '../layout_admin/header.php'; 
	require_once '../includes/db.php';
    require '../includes/categorydb.php';
    require '../includes/blogdb.php';

    connect();
    $categories = getAllCategory();
?>
	<div class="container">
		<a href="add-category.php"><button type="button" class="btn btn-primary">Add Category</button></a>
		  
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>name</th>
		        <th>description</th>
		        <th>action</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php while ($row = mysqli_fetch_assoc($categories)) {
		    ?>
		    <tr>
		        <td><?php echo $row['name'] ?></td>
		        <td><?php echo $row['description'] ?></td>
		        <td><a href="delete-cat.php?id=<?php echo $row['category_id']; ?>">delete</a>-<a href="">update</a></td>
		      </tr>
		    <?php
		    } ?>
      
      
		    </tbody>
		</table>
	</div>
