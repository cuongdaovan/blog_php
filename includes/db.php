<?php 
	$conn = null;
	function connect() {
		global $conn;
		$conn = mysqli_connect("localhost", "root", "", "blog_it") or die("cannot connect to db");
		mysqli_set_charset($conn, "utf8");
	}

	function escape($param) {
		global $conn;
		return mysqli_real_escape_string($conn, $param);
	}

	function query($queryStr) {
		global $conn;
		$result = mysqli_query($conn, $queryStr);

		if(mysqli_errno($conn) > 0) {
			die (mysqli_error($conn) . ": $queryStr");
		}

		return $result;
	}

	function single($queryStr) {
		$result = query($queryStr);

		$record = mysqli_fetch_assoc($result);

		if($record == null) {
			die("Record not found");
		}

		return $record;
	}

	function disconnect() {
		global $conn;
		mysqli_close($conn);
	}
 ?>