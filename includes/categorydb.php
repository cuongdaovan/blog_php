<?php 
	function getAllCategory() {
		return query("SELECT * FROM category");
	}

	function addCat($name, $description) {
		query("INSERT INTO category(name,description)
				VALUES(\"$name\",\"$description\")");
	}

	function get_cat_blog($id){
		return query("SELECT b.blog_id FROM category c INNER JOIN blogpost b ON c.category_id=b.category_id WHERE c.category_id=$id");
	}

 ?>