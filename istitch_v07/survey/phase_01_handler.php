<?php
/***************************************************\
 * PHP mail script http://www.php.net              *
\***************************************************/

// **TO**
// this is where the message goes
$sendTo = "ncottrell@istitch.net";
$subject = "****ISTITCH SURVEY PHASE 1****";


// **FROM**
// header content... basically just emails
$headers = "From: " . $_POST['email'] . "\r\n";
$headers .= "Reply-To: " . $_POST['email'] . "\r\n";
$headers .= "Return-path: " . $_POST['email'];

// **MESSAGE TO $sendTo EMAIL**
// message content. this includes the name of the sender
$message = "NAME:" . $_POST['name'] . "   COMPANY:" . $_POST['company'] . "   EMAIL:" . $_POST['email'] . "   SUBJECT:" . $_POST['subject'] . "   MESSAGE:" . $_POST['message'];


// **FUNCTION**
// mail function to $sendTo email
mail($sendTo, $subject, $message, $headers);

//**AUTO-REPLY TO POSTER**
$body = "Thank you for filling out the survey. Your input is being processed.";
mail ($_POST['email'], 'istitch contact', $body, 'From: info@istitch.net');


?>