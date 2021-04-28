<?php
// Check for empty fields
if(empty($_POST['name'])   ||
   empty($_POST['email'])  ||
   empty($_POST['subj'])   ||
   empty($_POST['msg'])    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Please fill all requested fields!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subj']));
$message = strip_tags(htmlspecialchars($_POST['msg']));
   
// Create the email and send the message
$to = 'you@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New message ($subject)";
$email_body = "You have a new message!\n\n"."All details here below:\n\nName: $name\n\nComment:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?> 
