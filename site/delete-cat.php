<?php
	require_once '../includes/db.php';
	require_once '../includes/categorydb.php';


	connect();
	$id = $_GET['id'];
	deleteCat($id);
	header('Location:list-category.php');

 ?>