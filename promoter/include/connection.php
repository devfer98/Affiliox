<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'affiliox'; 

	$connection = mysqli_connect('localhost', 'root', '', 'affiliox');

	if (mysqli_connect_error()) {
		die('Database connection failed ' . mysqli_connect_error());
	}

?>

