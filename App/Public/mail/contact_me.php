<?php
$email_address = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !$email_address)
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
if ($email_address === FALSE) {
    echo 'Invalid email';
    exit(1);
}
$message = $_POST['message'];


// Create the email and send the message
$to = 'contact@caroline-moulin.fr'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contact depuis le site:  $name";
$email_body = "Nouveau mail depuis le formulaire de contact.\n\n"."Voici les détails :\n\nNom : $name\n\nEmail : $email_address\n\nMessage :\n$message";
$headers = "From: noreply@caroline-moulin.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;

