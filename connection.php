<!-- The purpose of this class is to connect the website to the database, it will be used in every class that must be 
connected the database -->
<?php

	// The 4 variables are the information needed to gain access to the database
	$dbhost = "localhost";
	$dbuser = "u175449475_root";
	$dbpass = "RS_SEproject2";
	$dbname = "u175449475_project";
	

	// This If statement is used to diplay the message in the block of the If statement upon failing of connection
	if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
		die("Failed to connect!");
	}