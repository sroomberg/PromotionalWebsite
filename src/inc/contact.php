<?php

// contact form submission
if (isset($_POST['submit'])) {
	// form input
	$cf_name = $_POST['name'];
	$cf_email = $_POST['email'];
	$cf_subject = $_POST['subject'];
	$cf_msg = $_POST['message'];

	// email content
	$email_from = 'DONOTREPLY@stevenroombergsform';
	$email_to = 'stevenroomberg@gmail.com';
	$email_subject = 'Contact via your website';
	$email_body = 'From: ' . $cf_name . '\n';
	$email_body .= 'Email: ' . $cf_email . '\n';
	$email_body .= 'Subject: ' . $cf_subject . '\n\n';
	$email_body .= 'Message: \n\t' . $cf_msg . '\n';

	if (!$cf_name) {
		$err_name = 'Please enter your name';
	}
	if (!$cf_email || !filter_var($cf_email, FILTER_VALIDATE_EMAIL)) {
		$err_email = 'Please enter your email';
	}
	if (!$cf_subject) {
		$err_subject = 'Please enter a subject';
	}

	if (!isset($err_name) && !isset($err_email) && !isset($err_subject)) {
		if (mail($email_to, $email_subject, $email_body, $email_from)) {
			$result = '<p class="success">Your message was sent. Steven will get back to you in 1-2 days.</p>';
		}
		else {
			$result = '<p class="warning">Something went wrong please try again.</p>';
		}
	}
}

?>