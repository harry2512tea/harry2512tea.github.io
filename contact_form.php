<?php
$name = $_POST['name'];
$email_address = $_POST['email_address'];
$message = $_POST['contact_message'];

function filter_email($form_field) {
	return preg_replace('/[nr|!/<>^$%*&]+/', '', $form_field);
}

$email_address = filter_email($email_address);

$headers = "From: &email_address";
$sent = mail('benjamin.t.harrison24@gmail.com', 'contact form submission', $message, $headers, $name);
header("Location: index.html");
?>