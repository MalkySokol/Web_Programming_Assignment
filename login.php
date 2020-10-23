<html>
<head>
<title>Login Page</title>
<?php include "header.php"; ?>
</head>
<body>
<form action = "response.php" method = "post">
<input type = "text" name = "userName" placeholder = "username" required>
<br><br>
<input type = "password" name = "userPassword" placeholder = "password" required>
<br><br>
<input type = "submit" name = "submit" value = "Login"/>
</form>
</body>
<footer>
<?php include "footer.php"; ?>
</footer>
</html>