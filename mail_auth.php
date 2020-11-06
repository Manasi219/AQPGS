<?php
   if(!empty ($_POST['mail']))
   {
	   // $name=$_POST['name'];
		//echo "name is ".$name;
		$file=$_POST['file'];
		//echo "file is ".$file;
		require 'PHPMailer/PHPMailerAutoload.php';
		// require 'PHPMailer/class.phpmailer.php';
         //require 'PHPMailer/class.smtp.php';

		$mail = new PHPMailer;

	    $mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'manasipatil988@gmail.com';                 // SMTP username
		$mail->Password = 'manasip18699';                           // SMTP password
		$mail->SMTPSecure = 'ssl';  		// Enable encryption, 'ssl' also accepted
		$mail->Port = 587;  		

		$mail->setFrom('poorvajc@gmail.com','poorva chaudhari');
       
        $mail->addAddress('manasipatil988@gmail', 'manasi patil');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('poorvajc@gmail.com', 'pixelw3 technologies');
        $mail->addCC('manasipatil988@gmail');
//$mail->addBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

     if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
					echo 'Message has been sent';
				}
		

		
		
   }
 ?>