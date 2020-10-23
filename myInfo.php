<?php
session_start();
include "header.php";
//if the user is logged in
if($_SESSION['LoggedIn'] == 'True'){
	// connect to database
	$db = new mysqli('localhost', 'root', '', 'nutrition');
	//if there is an error when trying to connect
	if($db->connect_errno > 0){ 
		die('Unable to connect to database [' . $db->connect_error . ']');
	}
	$query = "SELECT * FROM `favorite foods` WHERE userID = ".$_COOKIE['userID']." ";
	//run the query
	if(!$result = $db->query($query)){
		die('There was an error running the query [' . $db->error . ']');
	}
	echo $_COOKIE['userName'];
	echo', your favorite foods are: <br>';
	//get and display the data
	while($row = mysqli_fetch_assoc($result)) {
		echo$row["food category"].':';
		echo $row["user favorite"].'<br>';
		
	}
	mysqli_free_result($result);
	mysqli_close($db);
}
else{
	echo'LOGIN TO CONTINUE';
}
include "footer.php";
?>