<?php
session_start();
include "database_handler.php";

$uid = strtolower($_POST['uid']);
$pwd = $_POST['pwd'];

//echo "$pwd </br> $uid </br>";
$sql = "SELECT * FROM user_table WHERE uid = '$uid' AND pwd = '$pwd'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	$_SESSION['error_msg'] = "Your username or password is incorrect!";
	header("Location:login.php");
	exit();
}
else {
	$_SESSION['LoggedIn'] = true;
	$_SESSION['UserName'] = $row['uid'];
	header("Location:index.php");
	exit();
}
