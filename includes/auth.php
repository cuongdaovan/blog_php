<?php
	function login($username, $password) {
		startSession();
		if($username == 'admin' && $password == '123') {
			$_SESSION['username'] = $username;
			$cookie_name = "username";
			$cookie_value = $username;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			return true;
		}
		return false;
	}

	function logout() {
		startSession();
		session_destroy();
	}

	function checkLogin() {
		startSession();
		if(!isset($_SESSION['username'])){
			header('location:login.php');
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