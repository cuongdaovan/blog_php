<?php
	require_once "db.php";

	function login($username, $password) {
		startSession();
		$conn = mysqli_connect("localhost", "root", "", "blog_it") or die("cannot connect to db");
		if($username != '' && $password != '') {
			 $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
			 $result = mysqli_query($conn, $sql);
			 if($result != ''){
			 	if(mysqli_num_rows($result) == 1)
				 {
				 	$logged_in_user = mysqli_fetch_assoc($result);
				 	// echo $logged_in_user['user_id'];
				 	$_SESSION['username'] = $username;
					$cookie_name = "username";
					$cookie_value = $username;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
					setcookie("user_id", "".$logged_in_user['user_id'], time() + (86400 * 30), "/"); // 86400 = 1 day
					return true;
				 }
				
			 }
			 
			return false;
		}
		
		
	}

	function logout() {
		startSession();
		session_destroy();
	}

	function checkLogin($location) {
		startSession();
		if(!isset($_SESSION['username'])){
			header('location: '.$location);
		}
	}

	function startSession() {
		if(session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	}
	function getUser(){
		return "admin";
	}
 ?>