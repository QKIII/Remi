<?php	
	if(empty($_POST['undefined_42014']) && strlen($_POST['undefined_42014']) == 0 || empty($_POST['undefined_42014']) && strlen($_POST['undefined_42014']) == 0 || empty($_POST['input_1442']) && strlen($_POST['input_1442']) == 0 || empty($_POST['input_1696']) && strlen($_POST['input_1696']) == 0)
	{
		return false;
	}
	
	$undefined_42014 = $_POST['undefined_42014'];
	$undefined_42014 = $_POST['undefined_42014'];
	$input_1442 = $_POST['input_1442'];
	$input_1696 = $_POST['input_1696'];
	$input_2086 = $_POST['input_2086'];
	$input_243 = $_POST['input_243'];
	
	$to = 'Ivanw4112@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from RemiHome_02.";
	$email_body = "You have received a new message. \n\n".
				  "Undefined_42014: $undefined_42014 \nUndefined_42014: $undefined_42014 \nInput_1442: $input_1442 \nInput_1696: $input_1696 \nInput_2086: $input_2086 \nInput_243: $input_243 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $undefined_42014";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>