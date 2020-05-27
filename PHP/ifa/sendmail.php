<?php
$name = $_POST['name'];
$ifaMembership = $_POST['ifaMembership'];
$practiceName = $_POST['practiceName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n IFA Membership number: $ifaMembership \n Practice Name: $practiceName \n Email: $email \n Contact Phone: $phone \n Enquiry: $message";
$recipient = "darengallery@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.gallerytest.online/thank_you.html');
exit;
?>
