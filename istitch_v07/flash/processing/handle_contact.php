<?php
/***************************************************\
 * PHP mail script http://www.php.net              *
\***************************************************/

// **TO**
// this is where the message goes
$sendTo = "info@istitch.net";
$subject = "****CONTACT ISTITCH****";


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
$body = "Thank you for contacting istitch. Your input is being processed. We will get back to you as soon as possible.";
mail ($_POST['email'], 'istitch contact', $body, 'From: info@istitch.net');


?>