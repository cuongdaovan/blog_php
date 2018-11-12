<?php 
	include '../layout_admin/header.php'; 
	require_once '../includes/db.php';
    require '../includes/userdb.php';

    connect();
    $users = getAllUser();
?>
	<div class="container">
		<a href="add-category.php"><button type="button" class="btn btn-primary">Add Category</button></a>
		  
		<table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>username</th>
		        <th>password</th>
		        <th>is_admin</th>
		        <th>fullname</th>
		        <th>avatar</th>
		        <th>action</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php while ($row = mysqli_fetch_assoc($users)) {
		    ?>
		    <tr>
		        <td><?php echo $row['username'] ?></td>
		        <td><?php echo $row['password'] ?></td>
		        <td><?php echo $row['is_admin'] ?></td>
		        <td><?php echo $row['fullname'] ?></td>
		        <td><?php echo $row['avatar'] ?></td>
		        <td><a href="">delete</a>-<a href="update-user.php?id=<?php echo $row['user_id']; ?>">update</a></td>
		      </tr>
		    <?php
		    } ?>
      
      
		    </tbody>
		</table>
	</div>
