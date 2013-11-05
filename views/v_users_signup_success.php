

<META HTTP-EQUIV="refresh" CONTENT="3;URL=/users/login">

<h1>Congratulations!</h1>

<h4>You have successfully registered for Ready Set Blog!</h4>

<p>If you are not redirected to the login page in 5 seconds, <a href="/users/login">click here</a></p>

<?php
class Email {
	$to[]    = Array("name" => APP_NAME, "email" => SYSTEM_EMAIL);
	$from    = Array("name" => APP_NAME, "email" => APP_EMAIL);
	$subject = "Welcome to Ready Set Blog";				
	
	$body = "Congrats! You have completed registration to Ready Set Blog."
	
	# Send email
	Email::send($to, $from, $subject, $body, true, '');
}

?>