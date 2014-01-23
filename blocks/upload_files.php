<?php


	var_dump($_FILES);

	move_uploaded_file($_FILES['file']['tmp_name'], basename($_FILES['file']['name']));



/*	if ($_FILES["file"]["error"] > 0){
	  echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else{
	  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	  echo "Type: " . $_FILES["file"]["type"] . "<br>";
	  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	  echo "Stored in: " . $_FILES["file"]["tmp_name"];
	}*/
?>