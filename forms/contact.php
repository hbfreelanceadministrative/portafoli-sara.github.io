<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'hbfreelance@hotmail.com';


// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['subject']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'hbfreelance@hotmail.com'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
$email_subject = "Aquest missatge es va enviar des del formulari de contacte del seu lloc web portafoli-sara.github.io a nom de:  $name";
$email_body = "Heu rebut un missatge nou del formulari de contacte del vostre lloc web portafoli-sara.github.io\n\n"."Aquí hi ha els detalls:\n\nEl Seu Nom: $name\n\nEl Seu Correu Electrònic: $email_address\n\nL'assumpte: $subject\n\nEl Seu Missatge:\n$message";
$headers = "From: equipofreelancershb@gmail.com\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
