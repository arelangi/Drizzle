<?php

	$myFile = "beta.txt";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = $_GET['email']."\n";
	fwrite($fh, $stringData);
	fclose($fh);

?>