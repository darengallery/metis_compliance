<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contactPhone = $_POST['contactPhone'];
$message = $_POST['message'];

$formcontent=" From: $name \n Email: $email \n Contact Phone: $contactPhone \n Message: $message";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.gallerytest.online/thank_you.html');
exit;
?>
