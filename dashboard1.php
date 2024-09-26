<?php

require_once 'includes/config.inc.php';
require_once 'includes/login_view.inc.php';
require_once 'includes/login_model.inc.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<center>
<body>

<h1>DASHBOARD</h1>


    <?php
    
     output_username();
    ?>
    <br>
 <button><a href="edit.php">Edit Profile Details</a></button>
   <br><br>
      <form action="includes/logout.inc.php" method="POST">
            <button>logout</button>
    </form>
</body>
</center>
</html>