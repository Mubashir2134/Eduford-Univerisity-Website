<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$email_from = 'Qazi Mubashir.com';

$email_subject = 'New Form Submission';

$email_body = "User Name:$Qazi.\n".
              "User Email:$visitor_email.\n".
              "Subject:$subject.\n".
              "User Message:$message.\n";


$to = 'qazimubashirhussain77@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>