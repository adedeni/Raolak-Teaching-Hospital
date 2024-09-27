<?php
require_once 'includes/config.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Raolak Teaching Hospital" description="This is a Teaching Hospital website">
    <meta name="keywords" content="healthcare, doctor, emergency, patients">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="icons/favicon.png">
    <link rel="stylesheet" href="login.css?v=1.0">
    <title>Login</title>
</head>
<center>
<body>
<a href="#" class="logo"><img class="logo" src="icons/logo.png" alt="Hospital logo"></a>
<h1>Welcome</h1>
    <h3>Log in to Patient Portal</h3>
<div class="wrapper">
<form action="includes/login.inc.php" method="POST">
  <label class="label" for="username">Username</label> <br>
        <input class="input" type="text" name="username" placeholder = "Username or Email or Phone Number" required value="<?php if(isset($_COOKIE['username'])) { echo htmlspecialchars($_COOKIE['username']) ; } ?>"><br><br>
        <label class="label" for="pwd">Password</label> <br>
        <input class="input" type="password" name="pwd" placeholder = "Password" required value="<?php if(isset($_COOKIE['pwd'])) { echo htmlspecialchars($_COOKIE['pwd']); } ?>"><br><br>
        <button class="login">Login</button> <br> <br>
        <input class="checkbox" type="checkbox" style="margin-right: 40px;" name="remember_me" <?php if(isset($_COOKIE['username'])) { echo htmlspecialchars('checked') ; } ?>>
        <label  class="remember" for="remember_me">Remember Me</label>
</form> 
        <?php
            check_login_errors(); 
        ?>
        <br>
        <p class="forget"><a href="email.php">Forget Password?</a></p>
    <p class="new">Don't have an account? <a href="index.php">Register Here</a></p>
</div>
</body>
</center>
</html>