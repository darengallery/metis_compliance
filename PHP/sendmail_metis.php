<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$enquiry = $_POST['enquiry'];

$formcontent=" From: $name \n Name: $name \n Email: $email \n Phone: $phone \n Enquiry: $enquiry \n ;
$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.gallerytest.online/thank_you.html');
exit;
?>
