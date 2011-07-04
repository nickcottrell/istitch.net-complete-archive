<?php
/***************************************************\
 * PHP mail script http://www.php.net              *
\***************************************************/

// **TO**
// this is where the message goes
$sendTo = "info@istitch.net";
$subject = "****NEWSLETTER SIGN-UP****";


// **FROM**
// header content... basically just emails
$headers = "From: " . $_POST['email'] . "\r\n";
$headers .= "Reply-To: " . $_POST['email'] . "\r\n";
$headers .= "Return-path: " . $_POST['email'];

// **MESSAGE TO $sendTo EMAIL**
// message content. this includes the name of the sender
$message = "NAME:" . $_POST['name'] . "   COMPANY:" . $_POST['company'] . "   MAILING:" . $_POST['mailing'] . "   EMAIL:" . $_POST['email'] . "   HOW THEY HEARD ABOUT ISTITCH:" . $_POST['how'];


// **FUNCTION**
// mail function to $sendTo email
mail($sendTo, $subject, $message, $headers);

//**AUTO-REPLY TO POSTER**
$body = "Thank you for signing up for the quarterly istitch CON-STITCH-UENCY newsletter. Your submission is being processed. Please look forward to receiving updates on information about branding, art and design for business. We will not share your information with ANY third parties.";
mail ($_POST['email'], 'istitch newsletter', $body, 'From: info@istitch.net');


?>