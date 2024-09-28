<?php
require_once 'includes/newpwd.inc.php';
if(!isset($_SESSION['otp'])){
    header("Location: login.php");
     die();
 }
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
    <link rel="stylesheet" href="newpwd.css?v=2.1">
    <title>Set New Password</title>
</head>
<center>
<body>
<a href="#" class="logo"><img class="logo" src="icons/logo.png" alt="Hospital logo"></a>
<h1>Set new password here</h1>
    <div class="wrapper">
    <h4>Password must be minimum of six characters long and must contain at least one alphabet and one number.</h4> <br>
    <form action="includes/newpwd.inc.php" method="POST">
    <label class="label" for="pwd">Password</label> <br>
        <input class="input" type="password" name="pwd" placeholder="Set a new password" required><br><br>
        <label class="confirm" for="cpwd">Confirm Password</label> <br>
        <input class="input" type="password" name="cpwd" placeholder="Confirm new password" required><br><br>
            <button class="sbutton">Change Password</button> <br>
    <?php
        if (isset($_SESSION["errors_reset"])) {
            foreach ($_SESSION["errors_reset"] as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
            unset($_SESSION["errors_reset"]);
        }
        ?>
    </form>
    <br>
    <h4>Login to your account?</h4>
    <button class="sbutton"><a style="text-decoration: none; color: white;" href="login.php">Login</a></button>
  </div>
</body>
</center>
</html>