<?php 	
	$name = trim($_POST['name']);
	
	$email = trim($_POST['email']);
			
	if(function_exists('stripslashes')) {
		$message = stripslashes(trim($_POST['message']));
	} else {
		$message = trim($_POST['message']);
	}
		
	$emailTo = 'info@gmcassociation.com';
	$subject = 'Formulario enviado do site gcma.com.br '.$name;
	$sendCopy = trim($_POST['sendCopy']);
	$body = "Name: $name \n\nEmail: $email \n\nMensagem: $message";
	$headers = 'From: Form <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
	
try{
		mail($emailTo, $subject, $body, $headers);
		echo "<script>location.href='sucesso.html'</script>"; 
	}catch (Exception $e){
		echo "<script>location.href='index2.html'</script>"; 
	}
	
	
	
?>