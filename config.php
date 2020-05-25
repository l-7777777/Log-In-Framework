<?php 
	//replace anything commented here
	define('DB_SERVER', /*Database server URL*/);
	define('DB_USERNAME', /*Database username*/);
	define('DB_PASSWORD', /*Database password*/);
	define('DB_DATABASE', /*Database name*/);
	$tablename = /*Table name*/;
	$mustbeloggedin = true; //can the user access loggedin.php before logging in. True = no and false = yes.
	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	
	// Check connection
	if (!$db) {
		echo "Database connection failed: " . mysqli_connect_error;
	}
?>