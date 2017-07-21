<?php
session_start();
include "database_handler.php";

$first = $_POST['first'];
$last = $_POST['last'];
$uid = strtolower($_POST['uid']);
$email = strtolower($_POST['email']);
$pwd = $_POST['pwd'];
$class = $_POST['class'];

/*echo $first . $last . $uid . $class . $pwd . $class;*/
$sql = "SELECT * FROM user_table WHERE uid = '$uid'";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
	$user_name = $row['uid'];
	$_SESSION['error_msg'] = "Username $user_name already exists! Please try again.";
	header("Location:signup.php");
	exit();
}

$sql = "SELECT * FROM user_table WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
	$email = $row['email'];
	$_SESSION['error_msg'] = "User with email ID $email already exists! Please try again.";
	header("Location:signup.php");
	exit();
}


else {
	$sql = "INSERT INTO user_table (first, last, uid, email, pwd, class)
	VALUES ('$first', '$last', '$uid', '$email', '$pwd', '$class')";

	$result = mysqli_query($conn, $sql);
	
	$_SESSION['LoggedIn'] = true;
	$_SESSION['UserName'] = $uid;
	header("Location:index.php");
	exit();
}

