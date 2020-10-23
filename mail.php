<?php
require '../PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'nutrition.mcon358@gmail.com';
$mail->Password = 'website2020';
$mail->setFrom($_POST['Email'], $_POST['Name']);
$mail->addAddress('nutrition.mcon358@gmail.com');
$mail->addCC($_POST['Email'], $_POST['Name']);
$mail->addReplyTo($_POST['Email']);
$mail->Subject = $_POST['Subject'];
$mail->Body = $_POST['Message'];
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "Your email has been successfully sent.";
	echo '<br>';
	echo '<a href = "index.php">Return to HOME</a>';
}
