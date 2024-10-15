<?php 

require_once 'includes/config.inc.php';
require_once 'includes/email_contr.inc.php';

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
    <link rel="stylesheet" href="email.css?v=2.1">
    <title>Forget Password</title>
</head>
<center>
<body>
<a href="../index.php" class="logo"><img class="logo" src="icons/logo.png" alt="Hospital logo"></a>
    <h1>Forget Password</h1>
    <div class="wrapper">
    <h4>Enter your email address below and we'll send you an OTP to validate your new password.</h4> <br>
    <form action="includes/email.inc.php" method="POST">
    <label class="label" for="email">Email</label> <br>
        <input class="input" type="email"  name="email" placeholder="Input your registered Email" required> <br> <br>
        <input class="sbutton" type="submit" name= "submit" value="Submit Email">
        <?php
        check_email_errors();
        ?>
    </form>
    <br>
    <h4>Login to your account?</h4>
    <button class="sbutton"><a style="text-decoration: none; color: white;" href="login.php">Login</a></button>
</div>
</body>
</center>
</html>