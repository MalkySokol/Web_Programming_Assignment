<?php
session_start();
//log out previous user
$_SESSION["LoggedIn"] = "False";
//connect to the database
$db = new mysqli('localhost', 'root', '', 'nutrition');
//if there is an error when trying to connect
if($db->connect_errno > 0){ 
    die('Unable to connect to database [' . $db->connect_error . ']');
}
//create a string with an SQL query
$personname='"'.$_POST['userName'].'"';
$personpwd='"'.$_POST['userPassword'].'"';
$sql = "SELECT * FROM authorizedusers WHERE userName=$personname AND password=$personpwd";

//run the query
if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}
//echo'after sql query';
// if the query found no answer
if ($result->num_rows === 0) {
	//echo'ERROR no such username and password combination, sorry ' .$_POST['userName'];
	$_SESSION["LoggedIn"] = "False";
    //echo'session login is false.';
}
else {
	$queryID = "SELECT userID FROM authorizedusers WHERE userName=$personname AND password=$personpwd";
	//run the query
	if(!$result = $db->query($queryID)){
		die('There was an error running the query [' . $db->error . ']');
	}
	//set the cookies
	setcookie('userName', $_POST['userName']);
	if($row = mysqli_fetch_assoc($result)) {
		setcookie('userID', $row['userID']);
	}
	//echo'password is found and cookie is set. session login is true';
	//user is logged in
	$_SESSION["LoggedIn"] = "True";
}
header('Location: content.php');

?>