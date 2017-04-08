<?php

require('connect.php');

// contact form submission
if (isset($_POST['submit'])) {
	// form input
	$cf_name = $_POST['name'];
	$cf_email = $_POST['email'];
	$cf_subject = $_POST['subject'];
	if (isset($_POST['message'])) {
		$cf_msg = htmlspecialchars($_POST['message']);
	}

	// email content
	$email_headers = 'FROM: DONOTREPLY@stevenroombergsform';
	$email_to = 'stevenroomberg@gmail.com';
	$email_subject = 'Contact via your website';
	$email_body = 'From: ' . $cf_name . '\n';
	$email_body .= 'Email: ' . $cf_email . '\n';
	$email_body .= 'Subject: ' . $cf_subject . '\n\n';
	if (isset($cf_msg)) {
		$email_body .= 'Message: \n\t' . $cf_msg . '\n';
	}

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
		// This mail functionality will be used once the site goes live. For now a database will be used.
		// if (mail($email_to, $email_subject, $email_body, $email_headers)) {
		// 	$result = '<p class="success">Your message was sent. Steven will get back to you in 1-2 days.</p>';
		// }
		// else {
		// 	$result = '<p class="warning">Something went wrong please try again.</p>';
		// }
		
		// Database functionality
		$cxn = connect();
		$cxn_name = $cxn->real_escape_string($cf_name);
		$cxn_email = $cxn->real_escape_string($cf_email);
		$cxn_subject = $cxn->real_escape_string($cf_subject);
		if (isset($cf_msg)) {
			$cxn_msg = $cxn->real_escape_string($cf_msg);
		}
		$query = "INSERT INTO contact_form (cf_name,cf_email,cf_subject,cf_msg)
					VALUES ('" . $cxn_name . "','" . $cxn_email . "','" . $cxn_subject . "','" . $cxn_msg . "');";

		if (!$cxn->query($query)) {
			die("QUERY ERROR: " . $cxn->error);
		}

		$cxn->close();
	}
}

?>