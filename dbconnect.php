<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'phpmyadmin';
	$dbname = 'mysql';

	//Creat Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	//Check Connection
	if ($conn->connect_error) {
	    die("Connect failed: " . $conn->connect_error);
	}
	
?>