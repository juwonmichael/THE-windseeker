<?php
session_start();
require_once('connection.php'); // include database connection code

// Add User
if(isset($_POST['add_user'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	
	// Hash the password
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	

	
	// Prepare the SQL statement
	$stmt = mysqli_prepare($conn, "INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
	
	// Bind the parameters
	mysqli_stmt_bind_param($stmt, "ssss", $name, $email,);
	
	// Execute the statement
	mysqli_stmt_execute($stmt);
	
	// Close the statement and the database connection
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
	// Redirect to the admin page
	header("Location: admin.php");
	exit;
}

// Edit User
if(isset($_POST['edit_user'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	
	// Hash the password if it's not empty
	if(!empty($password)) {
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
		$sql = "UPDATE users SET name = ?, email = ?, password = ?, role = ? WHERE id = ?";
		$params = array($name, $email, $hashed_password, $role, $id);
	} else {
		$sql = "UPDATE users SET name = ?, email = ?, role = ? WHERE id = ?";
		$params = array($name, $email, $role, $id);
	}
	

    session_start();
require_once('connection.php'); // include database connection code

	
	// Prepare the SQL statement
	$stmt = mysqli_prepare($conn, $sql);
	
	// Bind the parameters
	call_user_func_array('mysqli_stmt_bind_param', array_merge(array($stmt, str_repeat('s', count($params))), $params));
	
	// Execute the statement
	mysqli_stmt_execute($stmt);
	
	// Close the statement and the database connection
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
	// Redirect to the admin page
	header("Location: admin.php");
	exit;
}

// Delete User
if(isset($_POST['delete_user'])) {
	$id = $_POST['id'];
	
    session_start();
    require_once('connection.php'); // include database connection code
    
	
	// Prepare the SQL statement
	$stmt = mysqli_prepare($conn, "DELETE FROM users WHERE id = ?");
	
	// Bind the parameter
	mysqli_stmt_bind_param($stmt, "i", $id);
	
	// Execute the statement
	mysqli_stmt_execute($stmt);
	
	// Close the statement and the database connection
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
	// Redirect to the admin page
	header("Location: admin.php");
	exit;
}
?>