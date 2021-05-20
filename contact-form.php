<?php
$name = $_Post['name'];
$email = $_Post['email']
$message = $_Post['message'];
$email_from ='rahulbhardwaj930@gmail.com';
$email_subject = 'new form submission';
$email_body = "User Name: $name. \n".
                "User Email: $email. \n".
                "User Message: $message. \n".



$to = "rahulbhardwaj8851046@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r \n";

mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");







?>
