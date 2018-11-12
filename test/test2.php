<?php 
	$allowExts = array("jpg", "jpeg", "png", "gif", "bmp");
	$allowSize = 10000000;
	$errors = array();
	if(isset($_POST["submit"])) {
		$fileName = $_FILES["myfile"]["name"];
		$tmpFile = $_FILES["myfile"]["tmp_name"];
		$size = $_FILES["myfile"]["size"];

		$arr = explode(".", $fileName);
		$ext = strtolower(end($arr));

		if(!in_array($ext, $allowExts)) {
			$errors[] = "File extension .$ext is not allowed";
		}

		if($size > $allowSize) {
			$errors[] = "File size must smaller than 1MB";
		}

		if(empty($errors)) {
			move_uploaded_file($tmpFile, "../image/$fileName");	
		}
	}
?>
<h2 style="color: red"><?= implode("<br/>", $errors) ?></h2>
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="myfile">
	<input type="submit" name="submit">
</form>
<hr>



<script type="text/javascript">
	function select(img) {
		window.opener.selectImageurl(img.src);
		close();
	}
</script>