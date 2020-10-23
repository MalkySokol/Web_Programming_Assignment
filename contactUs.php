<?php
echo'<html>';
echo'<head>';
echo'<title>';
echo'contact form';
echo'</title>';
include "header.php";
echo'</head>';
echo'<body>';
echo'<form action = "mail.php" method = "post">';
echo'<p>';
echo'Name:';
echo'</p>';
echo'<input type = "text" name = "Name" placeholder = "name "/>';
echo'<p>Email:</p>';
echo'<input type = "text" name = "Email" placeholder = "your email "/>';
echo'<p>Subject:</p>';
echo'<input type = "text" name = "Subject" placeholder = "subject "/>';
echo'<p>Message:</p>';
echo'<textarea rows="8" cols="30" name = "Message"></textarea>';
echo'<br>';
echo'<br>';
echo'<input type = "submit" name = "Submit" value = "Submit"/>';
echo'</form>';
include "footer.php";
echo'</body>';
echo'</html>';
?>