<?php 
	function getAllCategory() {
		return query("SELECT * FROM category");
	}

	function addCat($name, $description) {
		query("INSERT INTO category(name,description)
				VALUES(\"$name\",\"$description\")");
	}

 ?>