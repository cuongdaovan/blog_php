<?php 
	function getAllUser() {
		return query("SELECT * FROM user");
	}
	function addUser($username, $password, $is_admin, $fullname, $avatar) {
		query("INSERT INTO user(username,password,is_admin,fullname,avatar) VALUES(\"$username\",\"$password\",$is_admin,\"$fullname\",\"$avatar\")");
	}

	function get_user($id) {
		return single("SELECT username, password, is_admin, fullname, avatar FROM user WHERE user_id = $id");
	}

	function editUser($id,$username, $password,$is_admin, $fullname, $avatar) {
		query("UPDATE user 
				SET username = \"$username\",
				password = \"$password\",
				is_admin = $is_admin,
				fullname = \"$fullname\",
				avatar = \"$avatar\"
				WHERE user_id = $id");
	}

 ?>