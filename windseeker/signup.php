<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>windseeker signup</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="./styles/authentication.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
<style>
</style>
<script src=""></script>
<body>
<div class="loginContainer">
 <div class="inputSection">
    <header>
        <a href="index.html" style="text-decoration: none;">
        <img src="./images/compass_red.png" />
         </a>
        <a href="index.html" style="text-decoration: none; color: orangered;">
        <span>WINDSEEKER</span>
        </a>
    </header>

<form class="inputForm" action="../windseeker/BackendCode/usersignup.php" method="post">
    <div class="loginHeader">Sign up</div>

    <div class="inputDiv">
        <label for="name" >username</label><br/>
        <input type="text" name=name placeholder="junolesky" />
        </div>

    <div class="inputDiv">
    <label for="email">Email</label><br/>
    <input type="email" name="email" placeholder="email" />
    </div>

    <div class="inputDiv">
        <label for="password" >password</label><br/>
        <input type="passwsord"  name="password" required/>
    </div>

    <button type="submit" value="submit">submit</button>

    <div class="noAccount">Already have an account? <a href="login.html" style="text-decoration: none; color: white;"><span> Login</span></a></div>
</form>
 </div>
 <div class="signupImage">
 </div>
</div>