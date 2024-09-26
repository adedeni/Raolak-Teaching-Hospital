<?php
require_once 'includes/config.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<center>
<body>
    <br>
    <h3>Sign up</h3>
    <form action="includes/signup.inc.php" method="POST">
    <?php
        signup_inputs();
    ?>
        <input type="password" name="pwd" placeholder="Set a password" required><br><br>
        <input type="password" name="cpwd" placeholder="Confirm your password" required><br><br>
        <select name="state" id="" required>
            <option value="1">Select States</option>
            <option value="Abia">Abia</option>
            <option value="Adamawa">Adamawa</option>
            <option value="Aqua-Ibom">Akwa-ibom</option>
            <option value="Anambra">Anambra</option>
            <option value="Bauchi">Bauchi</option>
            <option value="Bayelsa">Bayelsa</option>
            <option value="Benue">Benue</option>
            <option value="Borno">Borno</option>
            <option value="Cross-River">Cross-River</option>
            <option value="Delta">Delta</option>
            <option value="Ebonyi">Ebonyi</option>
            <option value="Edo">Edo</option>
            <option value="Ekiti">Ekiti</option>
            <option value="Enugu">Enugu</option>
            <option value="Gombe">Gombe</option>
            <option value="Imo">Imo</option>
            <option value="Jigawa">Jigawa</option>
            <option value="Kaduna">Kaduna</option>
            <option value="Kano">Kano</option>
            <option value="Katsina">Katsina</option>
            <option value="Kebbi">Kebbi</option>
            <option value="Kogi">Kogi</option>
            <option value="Kwara">Kwara</option>
            <option value="Lagos">Lagos</option>
            <option value="Nasarawa">Nasarawa</option>
            <option value="Niger">Niger</option>
            <option value="Ogun">Ogun</option>
            <option value="Ondo">Ondo</option>
            <option value="Osun">Osun</option>
            <option value="Oyo">Oyo</option>
            <option value="Plateau">Plateau</option>
            <option value="Rivers">Rivers</option>
            <option value="Sokoto">Sokoto</option>
            <option value="Taraba">Taraba</option>
            <option value="Yobe">Yobe</option>
            <option value="Zamfara">Zamfara</option>
            <option value="FCT-Abuja">FCT-Abuja</option>
        </select><br><br>
        <label for="Gender">Gender</label><br><br>
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <br><br>
        <button>Sign Up</button>
    </form>
    <?php
    check_signup_errors();
    ?>
    <br>
    <h4>Already have account?</h4>
    <button><a style="text-decoration: none;" href="login.php">Login Here</a></button>
</body>
</center>
</html>