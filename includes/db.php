<?php
// database credentials
$dbHost		 = 'localhost';
$dbUsername	 = 'rohan6366';
$dbPassword	 = 'She70aaa!';
$dbSchema	 = 'ito';
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbSchema);
// check if the database connection failed
if($db->connect_errno){
	echo "Failed to connect to MySQL: " . $db->connect_error;
}

?>