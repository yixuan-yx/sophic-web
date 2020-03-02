<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/PHPMailer/src/Exception.php';
require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(TRUE);

$mail->setFrom('enquiry@sophicautomation.com');
$mail->addAddress('enquiry@sophicautomation.com');
$mail->addReplyTo($_POST['email'], $_POST['name']);

if(isset($_POST['product'])){
  $mail->Subject = $_POST['product'] . " Enquiry" . " [Information received from Sophic website contact form]";  
} else {
  $mail->Subject = $_POST['subject'] . " [Information received from Sophic website contact form]";      
}


$mail->Body = "Name: ";
$mail->Body .= $_POST['name'];
$mail->Body .= "\n";
if(isset($_POST['company'])){
  $mail->Body .= "Company: ";
  $mail->Body .= $_POST['company'];
  $mail->Body .= "\n";  
}
$mail->Body .= "Email: ";
$mail->Body .= $_POST['email'];
$mail->Body .= "\n";
if(isset($_POST['subject'])){
  $mail->Body .= "Subject: ";
  $mail->Body .= $_POST['subject'];
  $mail->Body .= "\n";
}
$mail->Body .= "Phone Number: ";
$mail->Body .= $_POST['phonenumber'];
$mail->Body .= "\n";
$mail->Body .= "Message: ";
$mail->Body .= $_POST['message'];
$mail->Body .= "\n";
$mail->isSMTP();
$mail->Host = 'koala.mschosting.com';
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = 'tls';
$mail->Username = 'enquiry@sophicautomation.com';
$mail->Password = '';
$mail->Port = 587;
   
	if (!$mail->send()) {
		echo "Sorry, something went wrong. Please try again later.";
	} else {
		echo "OK";
	}

?>