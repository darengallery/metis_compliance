<?php
$name = $_POST['name'];
$email = $_POST['email'];
$practiceName = $_POST['practiceName'];
$contactPhone = $_POST['contactPhone'];
$message = $_POST['message'];

$formcontent=" From: $name \n Email: $email \n Practice Name: $practiceName \n Contact Phone: $contactPhone \n Message: $message";
$recipient = "metismatt@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.metiscompliance.co.uk/thank_you.html');
exit;
?>
