<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'Jaydas Beat Box';
$email_subject = "New Form Submission";
$email_body = "Name: $name.\n".
            "Email: $email.\n".
            "Message: $message.\n";


$to = "watsonjaydabooking@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: Contact.html");

?>