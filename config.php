<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "GoalTracker";

$connect = mysqli_connect($serverName, $username, $password, $dbName);

if (!$connect) {
	echo ("Connection Failed:" . mysqli_connect_error());
}
// else{
// 		echo "Connected Successfully!!!";
// 	}
	
	
	?>