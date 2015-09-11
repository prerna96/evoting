<html>
<body>
<form action="mail1.php" method ="post">
Subject: <input type="text" name="subject">
Message: <input type="text" name="msg">
To: <input type="text" name="to">

<input type="submit" name="submit">

<?php
require 'PHPMailerAutoload.php'; 
require 'class.smtp.php';
/*if(isset($_POST['submit']))
	{
		$to=$_POST["to"];
		$subject=$_POST["subject"];
		$body=$_POST["msg"];
		
		
	

function send_mail($to,$subject,$body,$attachment){
$mail = new PHPMailer;
$from='seema2201@gmail.com';

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'seema2201@gmail.com';                 // SMTP username
$mail->Password = 'see.san.sha@1983';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'seema2201@gmail.com';
$mail->FromName = 'Seema Joshi';
//$mail->addAddress('viveksharma1202@gmail.com', 'Vivek Sharma');     // Add a recipient
$mail->addAddress($to);               // Name is optional
$mail->addReplyTo($from, 'ACE');
//$mail->addCC('viveksharma1202@gmail.com');
//$mail->addBCC('viveksharma1202@gmail.com');

$mail->addAttachment('new.docx','new1.docx'); 
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
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
}//END FUNC
//include './mail.php';
    
		
	send_mail($to,$subject,$body,'new.docx');	
	}*/
	$mail = new PHPMailer;
	//Enable SMTP debugging. 
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "seema2201@gmail.com";                 
$mail->Password =                            
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "seema2201@gmail.com";
$mail->FromName = "Seema Joshi";

$mail->addAddress("seema2201@gmail.com", "Seema");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}


	?>