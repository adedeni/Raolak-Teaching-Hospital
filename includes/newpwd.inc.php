<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    $newPassword = $_POST['pwd'];
    $confirmPassword = $_POST['cpwd'];
    $email = $_SESSION['email'];

    try {
        require 'dbh.inc.php';
    $errors = [];
    if (strlen($newPassword) < 6) {
        $errors['password_length'] = "Password must be at least 6 characters long.";
    }
    
    if (!preg_match('/[A-Za-z]/', $newPassword) || !preg_match('/[0-9]/', $newPassword)) {
        $errors['password_format'] = "Password must contain at least one letter and one number.";
    }
 
    if ($newPassword !== $confirmPassword) {
        $errors['password_mismatch'] = "Passwords do not match.";
    }
    
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    $query = "UPDATE users SET pwd = :pwd WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":pwd", $hashedPassword);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    if ($errors) {
        $_SESSION["errors_reset"] = $errors;
        header("Location: ../newpwd.php");
        die();
    }
    
    $_SESSION["reset_success"] = "Your password has been reset successfully!";
    
    header("Location: ../login.php"); 
    die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
        header("Location: ../newpwd.php");
        die();
    }