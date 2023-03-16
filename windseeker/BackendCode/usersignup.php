<?php
session_start();
include('connection.php'); // include database connection code

// check if form has been submitted
if(empty($_POST['name'])) {
  echo "enter  name";
}
else{
   
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password= $_POST['password'];

 


} 
  

  // check if the user already exists in the database
  $query = "SELECT * FROM userinformation WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 0) {
    // insert the user into the database
    $query = "INSERT INTO userinformation (name,email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($conn, $query);
    

    


// Redirect the user to the about User  page
$parent = "..";
header("Location: $parent/dashboard/dashboard.html");
    exit();
  } else {
    // user already exists
    echo "User already exists!";
  }

?>