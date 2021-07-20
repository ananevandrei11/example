<?php
	if($_POST['captcha'] != 56) {
		header('location: index.php');
		exit;
	}


	if($_POST['subject'] == 'LESSON') {
		$subject = 'LESSON';
	}
?>