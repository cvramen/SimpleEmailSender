<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Auto Email App</title>
</head>

<body>
Your email has been sent.
<?php

/* Establish the variables for the email */
$to      = 'clerical@cvramen.com'; // Who the email is being sent to
$subject = 'The Subject of The Email'; // The subject of the email
$message = 'hello'; // The body of the email
$headers = 'From: webmaster@pokemonbitcoin.com' . "\r\n" . // Who the email is from
    'Reply-To: webmaster2@pokemonbitcoin.com' . "\r\n" . // Who the recipient will reply to
    'X-Mailer: PHP/' . phpversion(); // PHP version. Additional data the email server is free to reject

mail($to, $subject, $message, $headers); // The command to send the email based on the established data
?>
</body>
</html>