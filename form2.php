<html>
<head>
<title>Nutrition Form</title>
</head>
<body>
<form method = "post" action = "<?php $_SERVER['PHP_SELF']; ?>" >
<?php
include "header.php";
// connect to database
$db = new mysqli('localhost', 'root', '', 'nutrition');
//if there is an error when trying to connect
if($db->connect_errno > 0){ 
    die('Unable to connect to database [' . $db->connect_error . ']');
}
//create a string with an SQL query
//$personname='"'.$_POST['userName'].'"';

$food_arr = array("fruit","vegetable","grain");
foreach ($food_arr as $food_type){
	//find all foods that are $food_type
	$query = 'SELECT food FROM foods WHERE food_category = "'.$food_type.'"';

	// query returns list of $food_type
	if(!$result = $db->query($query)){
		die('There was an error running the query to get the food list [' . $db->error . ']');
	}
	//make a pulldown displaying the fruits
	echo '<p>Select your favorite '.$food_type.':</p>';
	echo '<select name = "'.$food_type.'" size = 3>';
	// loop
	while($row = mysqli_fetch_assoc($result)) {
		echo '<option value = "'.$row['food'].'" > ' .$row['food']. '<br>';
	}
	echo'</select><br>';

	mysqli_free_result($result);
}

$query2 = 'SELECT food FROM foods WHERE food_category = "protein" ';

// query returns list of protein
if(!$result = $db->query($query2)){
	die('There was an error running the query to get the food list [' . $db->error . ']');
}
//make radio buttons displaying the proteins
echo '<p>Select your favorite protein:</p>';
// loop
while($row = mysqli_fetch_assoc($result)) {
	echo'<input type = "radio" name = "protein" value = "'.$row['food'].'">'.$row['food']. '<br>';
}
mysqli_free_result($result);


?>
<input type = "submit" name = "Submit" value = "Submit"/>
</form>
<?php

// Check For Submit
if(isset($_POST['Submit'])){
	// Get form data
	$fruit = mysqli_real_escape_string($db, $_POST['fruit']);
	$vegetable = mysqli_real_escape_string($db, $_POST['vegetable']);
	$grain = mysqli_real_escape_string($db, $_POST['grain']);
	$protein = mysqli_real_escape_string($db,$_POST['protein']);
	$del = "DELETE  FROM `favorite foods` WHERE userID = ".$_COOKIE['userID']."";
	if(!mysqli_query($db, $del)){
		echo'ERROR: '. mysqli_error($db);
	}
	$query = "INSERT INTO `favorite foods`(`food category`,	`user favorite`, userID) 
	          VALUES ('fruit','$fruit',".$_COOKIE['userID']." ),
	                 ('vegetable','$vegetable', ".$_COOKIE['userID']."),
					 ('grain', '$grain', ".$_COOKIE['userID']."),
					 ('protein', '$protein', ".$_COOKIE['userID'].")";
	if(mysqli_query($db, $query)){
		header("Location: myInfo.php");
	} else {
		echo 'ERROR: '. mysqli_error($db);
	}

}
// Close Connection
mysqli_close($db);
include "footer.php";
?>
</body>
</html>