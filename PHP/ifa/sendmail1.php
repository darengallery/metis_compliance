<?php
$name = $_POST['name'];
$ifaMembership = $_POST['ifaMembership'];
$practiceName = $_POST['practiceName'];
$practiceAddress = $_POST['practiceAddress'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" From: $name \n IFA Membership number: $ifaMembership \n Practice Name: $practiceName \n Practice Address: $practiceAddress \n Email: $email \n Contact Phone: $phone \n Enquiry: $message";
$recipient = "matthew@metiscompliance.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.metiscompliance.co.uk/thank_you.html');
exit;
?>
