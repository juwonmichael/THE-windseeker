<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/usermanagerment.css">
    <title>Document</title>
</head>
<
<body>
    <div class="dashboardContainer">
        <div class="dashboardSidenav">
       
           <a href="../index.html" style="color: white; text-decoration: none;">
           <header>
           <img src="../images/compass.png" alt="logo"/>
           <span>WINDSEEKER</span>
           </header>
           </a>
	<div class="container">
		<h1>User Management - Admin Panel</h1>
		
	
         <!-- Table of user accounts -->
    <h2>User Accounts</h2>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th>stories</th>
     
    
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
          <button>Edit</button>
          <button>Delete</button>
        
      </tr>
    
      <!-- Add more rows for each user account -->
    </table>
		
		<!-- Add user form -->
		<form action="../Backend Code/usermanagement.php" method="post">
			<h2>Add User</h2>
			<label>Name:</label>
			<input type="text" name="name" required>
			<label>Email:</label>
			<input type="email" name="email" required>
			<label>Password:</label>
			<input type="password" name="password" required>
      <button>add_user<button>
      


          
            <footer>
                <p>&copy; WINDSEEKER 2023</p>
            </footer>
    
</body>
</html>