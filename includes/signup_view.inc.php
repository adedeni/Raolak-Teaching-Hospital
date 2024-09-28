<?php

declare(strict_types=1);
require_once 'config.inc.php';
function signup_inputs(){

        if (isset($_SESSION["signup_data"]["name"]) && !isset($_SESSION["errors_signup"]["fullname_long"])){
            echo '<label class="label" for="name">Fullname</label>' . '<br>';
            echo '<input class="input" type="text" name="name" placeholder="Enter your full name" required
         value="'.$_SESSION["signup_data"]["name"].'">' . '<br>'. '<br>';
        } else {
            echo '<label class="label" for="name">Fullname</label>' . '<br>';
            echo '<input class="input" type="text" name="name" placeholder="Enter your full name" required>' . '<br>'. '<br>';
        }
        if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
            echo '<label class="label" for="username">Username</label>' . '<br>';
            echo '<input class="input" type="text" name="username" placeholder="Pick a username" required
         value="'.$_SESSION["signup_data"]["username"].'">' . '<br>'. '<br>';
        } else {
            echo '<label class="label" for="username">Username</label>' . '<br>';
            echo '<input class="input" type="text" name="username" placeholder="Pick a username" required>' . '<br>'. '<br>';
        }
        if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"])&& !isset($_SESSION["errors_signup"]["invalid_email"])) {
            echo '<label class="email" for="email">Email</label>' . '<br>';
            echo '<input class="input" type="email" name="email" placeholder="Input a valid email" required value="'.$_SESSION["signup_data"]["email"].'">' . '<br>'. '<br>';

        } else {
            echo '<label class="email" for="email">Email</label>' . '<br>';
            echo '<input class="input" type="email" name="email" placeholder = "Input a valid email">' . '<br>'. '<br>';
        }

        if (isset($_SESSION["signup_data"]["phone"]) && !isset($_SESSION["errors_signup"]["phonenumber_used"]) && !isset($_SESSION["errors_signup"]["invalid_phonenumber"])) {
            echo '<label class="phone" for="number">Phone Number</label>' . '<br>';
            echo '<input class="input" type="number" name="phone" placeholder="Phone Number" required value="'.$_SESSION["signup_data"]["phone"].'">'. '<br>'. '<br>';
        } else {
            echo '<label class="phone" for="number">Phone Number</label>' . '<br>';
            echo '<input class="input" type="number" name="phone" placeholder="Phone Number">' . '<br>'. '<br>';
        }
}

function check_signup_errors()
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p>signup success</p>';
    }
}   