<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']


$email_form = 'satyamdev0558@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "user name : $name.\n".
               "user Email :$vistor_email.\n".
               "Subject: $subject.\n".
               "user message = $message .\n";

 $to = 'satyamkashyap035@gmail.com'
 
 $headers = "From: $email_from \r\n";

 $headers .= :"reply-to: $visitor_email \r\n";
 mail($to,$email_subject,$email_body,$headers);

 header("Location: contact.html");
 ?>
