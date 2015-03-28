<?php 
$name = $_FILES['file']['name'];

$extension = strtolower(substr($name, strpos($name, '.') + 1));
$type = $_FILES['file']['size'];
$size = $_FILES['file']['size'];

$tmp_name = $_FILES['file']['tmp_name'];

if(isset($name)){
	if(!empty($name)){
        if(($extension=='jpg'||$extension=="png")&&($type=='image/jpeg'||$type=='image/png'||$type=='image/jpg')) {
            $location = 'uploads/';
            if (move_uploaded_file($tmp_name, $location . $name)) {
                echo 'uploaded';
            } else {
                echo 'uh oh....';
            }
        } else {
            echo 'please chose a jpg/png image';
        }
	}else{
		echo 'please choose a file';
	}
} else {
    echo 'the image has to be jpg/png';
}
?>

<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="submit">
</form>