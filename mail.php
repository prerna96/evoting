<?php
require 'PHPMailerAutoload.php'; 

function send_mail($to,$subject,$body,$attachment){
$mail = new PHPMailer;
$from = "seema" ;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'evoting1515@gmail.com';                 // SMTP username
$mail->Password = 'evoting15';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//$mail->From = 'evoting1515@gmail.com';
$mail->FromName = 'admin';

$mail->addAddress($to);               // Name is optional
$mail->addReplyTo($from, 'Admin');


$mail->addAttachment($attachment); //'/var/tmp/file.tar.gz'         // Add attachments
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject ;//'Here is the subject';
$mail->Body    = $body; //'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = $body;//'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}