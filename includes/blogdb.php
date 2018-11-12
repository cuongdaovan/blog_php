<?php 
	function getAllBlogs() {
		return query("SELECT blog_id, title, content,
			image, datetime, c.name, u.fullname, c.category_id
		 FROM blogpost b
		 INNER JOIN category c on b.category_id = c.category_id
		 INNER JOIN user u on b.user_id = u.user_id
		 ");
	}
	function addBlog($title, $content, $image, $datetime, $user_id, $category_id) {
		query("INSERT INTO blogpost(title,content,image,datetime,user_id,category_id) VALUES(\"$title\",\"$content\",\"$image\",\"$datetime\",$user_id,$category_id)");
	}
	function getBlog($id) {
		return single("SELECT blog_id, title, content,
			image, datetime, c.name, u.fullname
		 FROM blogpost b
		 INNER JOIN category c on b.category_id = c.category_id
		 INNER JOIN user u on b.user_id = u.user_id
		 WHERE blog_id=$id");
	}

 ?>