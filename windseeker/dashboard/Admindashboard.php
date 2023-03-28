<?php 
session_start();
//echo $_SESSION ["Role"];
if(isset ($_SESSION["Role"])&& $_SESSION["Role"]=="ADMIN"){


}
else
{
exit();
}
?>

	


<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
</head>
<body>
    <div class="dashboardContainer">
        <div class="dashboardSidenav">
       
           <a href="../index.html" style="color: white; text-decoration: none;">
           <header>
           <img src="../images/compass.png" alt="logo"/>
           <span>WINDSEEKER</span>
           </header>
           </a>
           
	<div class="wrapper">
		<div class="sidebar">
			<h2>Admin Dashboard</h2>
			<ul>
				<li><a href="#">Dashboard</a></li>
				<li><a href="../dashboard/usermanagement.php">User Management</a></li>
				<li><a href="../dashboard/content.php">Content Management</a></li>
			</ul>
		</div>
		<div class="main-content">
			<div class="header">
				<h2>Welcome, Admin</h2>
				<div class="user-info">
					<p><a href="../index.html">Logout</a></p>
				</div>
			</div>
		
		</div>
	</div>

    <footer>
        <p>&copy; WINDSEEKER 2023</p>
    </footer>
</body>
</html>

