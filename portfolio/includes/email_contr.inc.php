<?php
declare(strict_types=1);
function is_email_invalid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    else {
        return false;
    }
}

function verifyOtpEmail(object $pdo, string $email ) {
 $query = "SELECT email FROM users WHERE email = :email;";
 $stmt = $pdo->prepare($query);
 $stmt->bindparam(":email", $email);
 $stmt->execute();
 $result = $stmt ->fetch(PDO::FETCH_ASSOC);
 return $result;
}
function generateOtp() {
    return rand(100000, 999999);
}


function storeOtp(object $pdo, string $otp, string $email) {
    $query = "UPDATE users SET otp = :otp WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":otp", $otp);
    $stmt->bindParam(":email", $email);
    return $stmt->execute();
}

function verifyOtp(object $pdo, string $otp, string $email ){
    $query = "SELECT email FROM users WHERE email = :email AND otp = :otp;";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":otp", $email, $otp);
    $stmt->execute();
    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function getEmail(object $pdo, string $email ){
    $query = "SELECT username FROM users WHERE email =:email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":email", $email,);
    $stmt->execute();
    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function emailEmpty(string $email) {
    if (empty($email)) {
        return true;
    }
    else {
        return false;
    }
}
function is_email_registered(object $pdo, string $email) {
    if (getEmail($pdo, $email)) {
        return true;
    }
    else {
        return false;
    }
}

function check_email_errors(){
    if (isset($_SESSION["errors_forget"])) {
        foreach ($_SESSION["errors_forget"] as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        unset($_SESSION["errors_forget"]);
    }
}
function otpEmpty(string $otp) {
    if (empty($otp)) {
        return true;
    }
    else {
        return false;
    }
}
function confirmPwd(string $pwd, String $cpwd){
    if ($pwd===$cpwd){
        return true;
    }else {
        return false;
    }
}

function invalidEmail(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}