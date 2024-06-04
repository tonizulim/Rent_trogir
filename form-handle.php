<?php
$name=$_POST['name'];
$visitior_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form = 'toni.zulim003@rent-trogir.rent';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitior_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";


$to = 'toni.zulim003@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitior_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>