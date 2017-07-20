<?php
include "header.php";


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

/*echo $first . $last . $uid . $class . $pwd . $class;*/
$sql = "SELECT * FROM user_table WHERE uid = '$uid' AND pwd = '$pwd'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect!";
	//$_SESSION['error_msg'] = "Your username or password is incorrect!";
}
else {
	$_SESSION['id'] = "YOU HAVE BEEN LOGGED IN! YAY";
	header("Location: index.php");
}

?>

