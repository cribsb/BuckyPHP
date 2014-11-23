<?php 
$name = $_FILES['file']['name'];

$tmp_name = $_FILES['file']['tmp_name'];

if(isset($name)){
	if(!empty($name)){
		$location = 'uploads/';
		if(move_uploaded_file($tmp_name, $location.$name)){
			echo 'uploaded';
		}else{
			echo 'uh oh....';
		}
	}else{
		echo 'please choose a file';
	}
}
?>

<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="submit">
</form>