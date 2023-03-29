<?php
// Database credentials
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'windseekerdb';

// Attempt to connect to MySQL database
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check connection status
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully"
?>
