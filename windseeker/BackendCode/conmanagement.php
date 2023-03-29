<?php
session_start();
require_once('connection.php'); // include database connection code


// Retrieve the number of users from database
$sql = "SELECT COUNT(*) as num_users FROM userinformation";
$result = $conn->query($sql);
$num_users = $result->fetch_assoc()["num_users"];

// Retrieve the number of stories
$sql = "SELECT COUNT(*) as num_stories FROM story";
$result = $conn->query($sql);
$num_stories = $result->fetch_assoc()["num_stories"];

// Close the database connection
$conn->close();

?>
