<?php
require_once 'includes/config.inc.php';
require_once 'includes/otp_model.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<center>
<body>
    <br>
    <h1>Forget Password</h1>
    <p>Enter the OTP sent to your email below, to validate your new password.</p> <br>
    <form action="includes/otp.inc.php" method="POST">
        <input type="number" name="otp" placeholder="Input OTP here" > <br> <br>
        <input type="submit" name="submit" value="Submit OTP" required>
        <?php check_otp_error();?>
    </form> <br> <br>
    <form action="includes/r.inc.php" method="POST"><button>Regenerate OTP</button>
</form>
    <h4>Login to your account?</h4>
   <button><a style="text-decoration: none;" href="login.php">Login</a></button>
</body>
</center>
</html>