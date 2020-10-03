<?php
$name = $_POST['name'];
$visitor_email = $_POST ['email']
$message = $_POST['message']

$email_from = 'r.cali@outlook.com';
$email_subject = "New Form Submission";
$email_body = "user name: $name.\in".
"User Email: $visitor_email.\in".
"User Message: $message.\in";

$to = "ruben.cali.2003@gmail.com";

$headers = "From $email_from \r\n";

$headers .="Reply-To $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");
?>