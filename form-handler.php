<?php
$name = $-POST['name'];
$visitor_email  =$-POST['email'];
$subject = $-POST[' subject'];
$message = $-POST['message'];

$email_from = ' info@GeoInnovate.co.ke';
$email_subject = 'New form submission';
$email_body = "User name: $name.\n".
               "User Email:$visitor_email .\n". 
               "Subject: $subject.\n".
               "User message:  $message.\n".;
  
$to = 'antonnykavoi@yahoo.com'
$headers= "From: $email_from\r\n";
$headers. = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>