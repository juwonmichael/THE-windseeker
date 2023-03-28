<?php
session_start();
require_once('connection.php'); // include database connection code

// check if form has been submitted
if(isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  

  // check if the user exists in the database
  $query = "SELECT * FROM userinformation WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
   // var_dump($row);
    if($password === $row['password']) {
    
      // login successful
      $_SESSION['user_id'] = $row['userid'];
      $_SESSION["Role"]= $row["Role"];
      $parent = "..";
      if($row["Role"]=="ADMIN"){
        header("Location: ../dashboard/Admindashboard.php");


      }else{
        header("Location: ../dashboard/dashboard.html");
      }
      
      exit();
    } else {
      // incorrect password
      echo  "Incorrect password!";
      
    }
  } else {
    // user does not exist
    echo "User does not exist!";
  }
}

?>
