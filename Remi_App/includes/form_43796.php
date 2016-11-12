<?php	
	
	
	$input_226 = $_POST['input_226'];
	$input_78 = $_POST['input_78'];
	$input_2846 = $_POST['input_2846'];
	$input_1071 = $_POST['input_1071'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Remi_App.";
	$email_body = "You have received a new message. \n\n".
				  "Input_226: $input_226 \nInput_78: $input_78 \nInput_2846: $input_2846 \nInput_1071: $input_1071 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>