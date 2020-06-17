<?php

/* Contact Form Engine
 * Code for the contact form function.
 */

$recipient = 'emin.h@hotmail.com';
$subject = 'Creaspace Support';
$sender = 'noreply@creaspace.cc';

$name = Trim(stripslashes($_POST['Name']));
$email = Trim(stripslashes($_POST['Email']));
$message = Trim(stripslashes($_POST['Message']));
$ip = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);

// Confirmation
$validationOK=true;
if (!$validationOK) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=404.php\">";
    exit;
}

// Preparation E-Mail Body Text
$content = "";
$content .= "Name: ";
$content .= $name;
$content .= "\n\n";
$content .= "Email: ";
$content .= $email;
$content .= "\n\n";
$content .= "Message: ";
$content .= $message;
$content .= "\n\n";
$content .= "IP: ";
$content .= $ip;

// Send E-Mail
$success = mail($recipient, $subject, $content, $sender, ' -f ' . $sender);

// Redirect Success
if ($success){
    print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-confirmation.php\">";
}
else{
    print "<meta http-equiv=\"refresh\" content=\"0;URL=404.php\">";
}
?>