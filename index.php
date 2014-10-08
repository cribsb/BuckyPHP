<?php
function has_space($string){
	if(preg_match('/ /', $string)){
		return true;
	}else{
		return false;
	}
}

if(has_space('Thishasspace hahah ha')){
	echo "has space";
}else{
	echo "has no spaces";
}
?>