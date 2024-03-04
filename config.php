<!-- Database connection file -->
<!-- localhost/slicesnbites/config.php -->
<!-- DATABASE NAME=slicesnbites -->
<?php
	$conn = new mysqli("localhost","root","","sliceandbites");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>