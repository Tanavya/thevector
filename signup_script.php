<?php 

include "header.php";

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$class = $_POST['class'];

/*echo $first . $last . $uid . $class . $pwd . $class;*/
$sql = "INSERT INTO user_table (first, last, uid, email, pwd, class)
VALUES ('$first', '$last', '$uid', '$email', '$pwd', '$class')";

$result = mysqli_query($conn, $sql);

header("Location: index.html");

?>
