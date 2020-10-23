<?php
session_start();
include "header.php";
//if the user is logged in
if($_SESSION['LoggedIn'] == 'True'){
	echo'Hello '.$_COOKIE['userName'];
	//echo'UserID '.$_COOKIE['userID'];
}
//if the user is not logged in
else{
	echo'ERROR: USERNAME AND PASSWORD WERE NOT RECOGNIZED <br> <br>';
	//redirect to the login page
	echo'<a href = "login.php"> Login Again </a>';
}
include "footer.php";
?>