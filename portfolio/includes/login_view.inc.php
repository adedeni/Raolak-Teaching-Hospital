<?php

declare(strict_types=1);
function output_username(){
    if (isset($_SESSION["user_id"])) {
        echo '<h1>Welcome Dear, ' . $_SESSION["user_username"] . "!" . '<h3>' . "Username: " . $_SESSION["user_username"].'<br>'.'<br>'."Fullname: " . $_SESSION["user_fullName"].'<br>'.'<br>'."Email: ".$_SESSION["user_email"].'<br>'.'<br>'."Phone Number: ".$_SESSION["user_phone"].'<br>'.'<br>'."Gender: ".$_SESSION["user_gender"].'<br>'.'<br>'."State: ".$_SESSION["user_state"].'<br>'.'<br>'."Address: " .$_SESSION["user_address"];
    } else {
        echo '<p "style=color:red";>Login Failed';
    }
}

function check_login_errors()
{
    if (isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];

        echo "<br>";
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }

        unset($_SESSION['errors_login']);
    } else if (isset($_GET["login"]) && $_GET["login"] ==="success") {
        echo '<br>';
        echo '<h1 "style=color:green";>login success</h1>';
    }
}