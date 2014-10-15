<?php
$redirect_page = 'http://google.com';
$redirect = true;
if($redirect){
	header('Location:'.$redirect_page);
}
?>