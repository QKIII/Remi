<?php	
	if(empty($_POST['input_2627']) && strlen($_POST['input_2627']) == 0 || empty($_POST['input_486']) && strlen($_POST['input_486']) == 0)
	{
		return false;
	}
	
	$input_2627 = $_POST['input_2627'];
	$input_486 = $_POST['input_486'];
	$input_1756 = $_POST['input_1756'];
	
	$to = 'Ivanw4112@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from RemiHome_02.";
	$email_body = "You have received a new message. \n\n".
				  "Input_2627: $input_2627 \nInput_486: $input_486 \nInput_1756: $input_1756 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>