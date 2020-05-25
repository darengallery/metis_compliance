<?php
$name = $_POST['name'];
$playersName = $_POST['playersName'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$homePhone = $_POST['homePhone'];
$contactPhone = $_POST['contactPhone'];
$medical = $_POST['medical'];
$message = $_POST['message'];
$optradio = $_POST['optradio'];

$formcontent=" From: $name \n Players Name: $playersName \n dob: $dob \n Address: $address \n Home Phone: $homePhone \n Contact Phone: $contactPhone \n Medical: $medical \n Message: $message \n First Aid: $optradio";
$recipient = "daren_gallery@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.gallerytest.online/thank_you.html');
exit;
?>
