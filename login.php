<?php
	include("config.php");

	//start a session
	session_start();
	
	//create escape string variables
	$myusername = mysqli_real_escape_string($db,$_POST['username']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']);
	
	//get the data
	$sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active = $row['active'];
	
	//find the number of rows
	$count = mysqli_num_rows($result);
	
	//compare the data
	if($count == 1) {
		session_register("myusername");
		$_SESSION['login_user'] = $myusername;
		header("location: loggedin.php");
	}else {
		$error = "Your Login Name or Password is invalid";
	}
?>