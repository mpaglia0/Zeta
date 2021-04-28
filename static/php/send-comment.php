<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['website'])   ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Please fill all required fields!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$website = strip_tags(htmlspecialchars($_POST['website']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New comment from $name";
$email_body = "You received a new comment on your website.\n\n"."All details are here below:\n\nName: $name\n\nEmail: $email_address\n\nWebsite: $website\n\nComment:\n$message";
mail($to,$email_subject,$email_body);
return true;         
?>
