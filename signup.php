<?php
include("config.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO $tablename (username, password)
VALUES ('$username', '$password')";

if (!mysqli_query($db, $sql)) {
  echo "Error: " . $sql . "<br>" . mysqli_error($db);
} else {
	session_start();
	$_SESSION['login_user'] = $username;
	header("location: loggedin.php");
}
?>