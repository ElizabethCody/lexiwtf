<?php

	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$newFileName = generateRandomString(7);

	if($_POST["key"] == "What are you looking at? :^)"){
		$fileName = $_FILES['file']['name'];
		$ext = end((explode(".", $fileName)));
		if(move_uploaded_file($_FILES['file']['tmp_name'], "/usr/share/nginx/www/x/" . $newFileName . "." . $ext)) {
			echo "https://lexi.wtf/x/" . $newFileName . "." . $ext;
		}
		else {
			echo "Error uploading";
		}
	}
	else {
		echo "We don't take kindly to people without keys around here.";
	}

?>
