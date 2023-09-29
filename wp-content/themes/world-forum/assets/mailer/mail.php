<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';

$admin_mail = "nanalit16@gmail.com";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
//From email address and name
$mail->CharSet = 'utf-8';
$mail->From = "nanalit16@gmail.com";
$mail->FromName = "Message from cx-world";
//To address and name

$mail->addAddress($admin_mail);

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Message from Feedbackform";
$mail->Body = '
<p><i>First Name</i> : <b>'.$_POST["name"].'</b></p>
<p><i>Last Name</i> : <b>'.$_POST["last-name"].'</b></p>
<p><i>Mobile Number</i> : <b>'.$_POST["mobile-number"].'</b></p>
<p><i>E-mail</i> : <b>'.$_POST["email"].'</b></p>
<p><i>Company Name</i> : <b>'.$_POST["company-name"].'</b></p>
<p><i>Title</i> : <b>'.$_POST["title"].'</b></p>
<p><i>Description</i> : <b>'.$_POST["description"].'</b></p>
<br/>
<sub>Send : '.date("d-m-Y H:i:s").'</sub>';
$mail->AltBody = 'First Name : '.$_POST["name"].' | E-mail : '.$_POST["email"].' | Description : '.$_POST["description"].' | ';

try {
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}