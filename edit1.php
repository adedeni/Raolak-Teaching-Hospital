<?php
require_once "includes/config.inc.php";
require_once "includes/edit_model.inc.php";
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
     die();
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
</head>
<center>
<body>
    <h1><a href="dashboard.php">Dashboard</a> / Profile Update</h1>
    <h4>
    <form action="includes/edit.inc.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['user_username']); ?>" style="border: none; font-weight: bold; text-transform: uppercase;" readonly><br><br>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullName" value="<?php echo htmlspecialchars($_SESSION['user_fullName']);?>" style="font-weight: bold; text-transform: uppercase;" required><br><br>
            <label for="new_password">Password:</label>
            <input type="password" id="new_password" name="crpwd" placeholder="Input Password" required><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Input your address" value="<?php echo htmlspecialchars($_SESSION['user_address']); ?>"><br><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION["user_email"]); ?>" required><br><br>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" value="<?php echo htmlspecialchars($_SESSION['user_phone']); ?>" required><br><br>

            <button type="submit">Update Details</button>
            <?php
        check_edit_errors();
        

      

        ?>
    </form>
    </h4>
</body>
</center>
</html>