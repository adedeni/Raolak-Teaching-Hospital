<?php
require_once 'includes/config.inc.php';
require_once 'includes/otp_model.inc.php';

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
    <link rel="stylesheet" href="otp.css?v=2.1">
    <title>Forget Password</title>
</head>
<center>
<body>
<a href="#" class="logo"><img class="logo" src="icons/logo.png" alt="Hospital logo"></a>
    <h1>Forget Password</h1>
    <div class="wrapper">
    <h4>Enter the OTP sent to your email below, to validate your new password.</h4> <br>
    <form action="includes/otp.inc.php" method="POST">
    <label class="label" for="otp">OTP</label> <br>
        <input class="input" type="number" name="otp" placeholder="Input OTP here" required> <br> <br>
        <input class="sbutton" type="submit" name="submit" value="Submit OTP" required>
        <?php check_otp_error();?>
    </form> <br>
    <h4>OTP expired? Regenerate below</h4>
    <form action="includes/r.inc.php" method="POST">
        <button class="sbutton">Regenerate OTP</button>
</form>
<br>
    <h4>Login to your account?</h4>
   <button class="sbutton"><a style="text-decoration: none; color: white;" href="login.php">Login</a></button>
</div>
</body>
</center>
</html>