<?php
session_start();
include "database_handler.php";
date_default_timezone_set('Etc/UTC');
require 'PHPMailer/PHPMailerAutoload.php';

function send_mail($details) {
	
	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	//$mail->SMTPDebug = 2;

	//Ask for HTML-friendly debug output
	//$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// if your network does not support SMTP over IPv6

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "dpsi.thevector@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "thevectorisgr8";

	//Set who the message is to be sent from
	$mail->setFrom('dpsi.thevector@gmail.com', 'The Vector');

	//Set an alternative reply-to address
	$mail->addReplyTo('tanavya.dimri@gmail.com', 'Tanavya Dimri');

	//Set who the message is to be sent to
	$mail->addAddress('tanavya.dimri@gmail.com', 'Tanavya Dimri');
	$mail->addAddress('dpsi.thevector@gmail.com', 'The Vector');

	//Set the subject line
	$student = $_SESSION['FullName'];
	$class = $_SESSION['class'];
	$user_name = $_SESSION['UserName'];
	$email = $_SESSION['email'];
	

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->isHTML(true);
	$mail->Subject = "$student is requesting to be tutored!";
	//$mail->msgHTML(file_get_contents('PHPMailer/examples/contents.html'), dirname(__FILE__));

	//Replace the plain text body with one created manually
	$mail->Body = "The student $student ($user_name), from class $class is requesting to be tutored. The student is free during the following times: $details Kindly contact him/her at $email as soon as possible regarding whether you'll be available to take classes. <br> Thanks! <br>
	~The Vector"
	;

	//send the message, check for errors
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		$_SESSION["Message"] = "A mail has been sent to the tutors. They will get back to you in a while.";
	}
}

$days = array(
			"mon"=>"Monday",
			"tue"=>"Tueday",
			"wed"=>"Wednesday",
			"thur"=>"Thursday",
			"fri"=>"Friday");
$details = "";
foreach ($days as $id=>$full) {
	for ($p = 1; $p <= 10; $p++) {
		$name = $id . $p;
		if ($_POST[$name] == "on") {
			$details = $details . $full  . ", period " . $p . "<br>"; 
		}
	}
}
if ($_POST['stayback'] == "on") {
	$details = $details . "Stayback on Tuesdays <br>";
}
if (strlen($details) == 0) {
	$_SESSION["Message"] = "You have not entered any of your free periods! Please try again.";
}
else {
	send_mail($details);
}
header("Location: tutoring.php");

