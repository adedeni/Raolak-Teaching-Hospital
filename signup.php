<?php
require_once 'includes/config.inc.php';
require_once 'includes/signup_view.inc.php';
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
    <link rel="stylesheet" href="signup.css?v=3.1">
    <title>Sign Up</title>
</head>
<center>
<body>
<a href="#" class="logo"><img class="logo" src="icons/logo.png" alt="Hospital logo"></a>
<h1>Welcome</h1>
    <h3>Sign Up and Creat an Account</h3>
    <div class="wrapper">
    <form action="includes/signup.inc.php" method="POST">
    <?php
        signup_inputs();
    ?>
        <label  class="label" for="password">Password</label>
        <input id="password" class="input" type="password" name="pwd" placeholder="Set a password" required>
        <span class="eye-icon" onclick="togglePassword()">
                <img id="eyeIcon" src="https://img.icons8.com/ios-glyphs/30/000000/visible.png" alt="Show Password">
        </span>
        <br> <br>
        <label class="confirm" for="password">Confirm Password</label>
        <input  class="input" type="password" name="cpwd" placeholder="Confirm your password" required>
            <br><br>
        <select class="sbutton" name="state" id="" required>
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
        <button class="bbutton">Sign Up</button>
    </form>
    <script>
    // Toggle password visibility
    function togglePassword() {
        const passwordField = document.getElementById("password");
        const eyeIcon = document.getElementById("eyeIcon");
        if (passwordField.type === "password") {
            passwordField.type = "text";  // Show the password
            eyeIcon.src = "https://img.icons8.com/ios-glyphs/30/000000/invisible.png";
        } else {
            passwordField.type = "password";  // Hide the password
            eyeIcon.src = "https://img.icons8.com/ios-glyphs/30/000000/visible.png";
        }
    }
</script>
    <?php
    check_signup_errors();
    ?>
    <br>
    <h4>Already have account?</h4>
    <button class="sbutton"><a style="text-decoration: none; color: white;" href="login.php">Login Here</a></button>
    </div>
</body>
</center>
</html>