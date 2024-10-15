<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = ($_POST['email']);

    try {
        require 'dbh.inc.php';
        require_once 'email_contr.inc.php';

        $errors = [];
        if (emailEmpty($email)) {
            $errors["empty_input"] = "Fill in the email!";
        }
        if (!is_email_registered($pdo, $email)) {
            $errors["unregistered_email"] = "Email not registered!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }

        // If there are validation errors, store them in session and redirect
        if ($errors) {
            $_SESSION["errors_forget"] = $errors;
            header("Location: ../email.php");
            die();
        }

        
        $otp = generateOtp();
        if (storeOtp($pdo, $otp, $email)) {
            $_SESSION["email"] = $email;
            header("Location: ../otp.php");
            die();
        } else {
            $errors["otp_store_failed"] = "Failed to store OTP. Please try again.";
            $_SESSION["errors_forget"] = $errors;
            header("Location: ../email.php");
            die();
        }
        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../email.php");
    die();
}