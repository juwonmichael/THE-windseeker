<?php 
include ("../BackendCode/conmanagement.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../styles/content.css">
  <title>content</title>
  
</head>
<body>
  <a href="../index.html" style="color: rgba(255, 255, 255, 0); text-decoration: none;">
    <header>
    <img src="../images/compass.png" alt="logo"/>
    <span>WINDSEEKER</span>
    </header>
    </a>
  <div class="info">
    <h2>Content Management</h2>
    <div class="data-summary">
      <div class="summary-item">
        <h3>Number of Users</h3>
        <p class="summary-value"><?php echo $num_users; ?></p>
      </div>
      <div class="summary-item">
        <h3>Number of Stories</h3>
        <p class="summary-value"><?php echo $num_stories; ?></p>
      </div>
    </div>
    <div class="content-list">
      <!-- content list goes here -->
    </div>
  </div>


  <footer>
    <p>&copy; WINDSEEKER 2023</p>
</footer>
</body>
</html>