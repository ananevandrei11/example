<?php
	if($_POST['captcha'] != 56) {
		header('location: /example/phpless/send');
		exit;
	}


	if(!empty($_POST['subject'])) {
		$subject = $_POST['subject'];
	} else {
		$subject = "FROM SITE";
	}
	
	$to = $_POST['email'];
	$from = "my_test_localhost@mail.ru";

	$message = htmlspecialchars($_POST['msg']);
	$message = urldecode($message);
	$message = trim($message);

	$headers = "From: $from" . "\r\n" .
	"Reply-To: $from" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();

	if(mail($to, $subject, $message, $headers)) {
		header('location: /example/phpless/send');
		exit;
	} else {
		echo 'Letter is not send';
	}
?> 