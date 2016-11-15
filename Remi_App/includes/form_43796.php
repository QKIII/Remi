<?php	
	
	
	$input_1204 = $_POST['input_1204'];
	$input_1827 = $_POST['input_1827'];
	$input_1960 = $_POST['input_1960'];
	$input_2990 = $_POST['input_2990'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Remi_App.";
	$email_body = "You have received a new message. \n\n".
				  "Input_1204: $input_1204 \nInput_1827: $input_1827 \nInput_1960: $input_1960 \nInput_2990: $input_2990 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>