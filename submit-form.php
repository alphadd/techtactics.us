<?php


$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];



$to='info@techtactics.us';

$headers = 'From: '.$name."\r\n" .
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
$subject = 'Contact Form'."\n\n";
$body='Tech Tactics Contact Form'."\n\n";

$body.='Name: '.$name."\n";
$body.='Email: '.$email."\n";
$body.='Number: '.$number."\n";
$body.='Message: '."\n".$message."\n";
	
if(mail($to, $subject, $body, $headers)) {
	header('Location: success.html');
} else {
	die('Error: Mail failed');
}

?>