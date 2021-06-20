<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sparks bank";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn)
	{
		die("Connection Failed due to the following error--> ".mysqli_connect_error());
	}


?>