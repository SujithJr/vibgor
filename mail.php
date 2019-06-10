<?php
$name = "Your Name";
$email = "YourEmail@anyservice.com";
$subject = "Some subject here.";
$message = "Your message here.";
$recipient_email = "RecipientEmail@anyservice.com";

$headers  = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
$headers .= "From: $name <$email> \n";

$body = '<b>Name: </b> ' . $name . '<br />';
$body .= '<b>Email: </b>' . $email . '<br />';
$body .= '<b>Message: </b>' . $message . '<br /><br />';
$body .= 'You can add something here like signature.';

if( mail($recipient_email, $subject, $body, $headers) ){
	echo "Message has been successfully sent.";
}else{
	echo "Sending failed.";
}
?>