<?php

declare(strict_types=1);
function isFieldEmpty($field) {
    return empty(trim($field));
}

function getOtp(object $pdo, string $email) {
    $query = "SELECT otp, updated_at FROM users WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
    
}
function isOtpValid($otp, $result) {
    if($otp == $result){        
        return true;
    }else{
        return false;
    }
}

function isOtpExpired($updatedAt, $exptime) {
    date_default_timezone_set('Africa/Lagos');
    $current_time = time();
    $otp_timestamp = strtotime($updatedAt);
    $time_difference = $current_time - $otp_timestamp;
    
    if ($time_difference > $exptime) {
        return true;
    }else{
        return false;
    }
}

function regenerateOtp(object $pdo, string $email) {
    $newOtp = rand(100000, 999999);
    $query = "UPDATE users SET otp = :otp, updated_at = NOW() WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":otp", $newOtp);
    $stmt->bindParam(":email", $email);
    return $stmt->execute();
}

function check_otp_error() {
    if (isset($_SESSION['errors_otp'])) {
        foreach ($_SESSION['errors_otp'] as $error) {
            echo "<p style='color:red;'>$error</p>";
            
            // if ($error === "OTP has expired!") {
            //     echo '<form method="POST" action="r.inc.php"><input type="submit" name="submit" value="Regenerate OTP" required></form>';
            // }
        }
        unset($_SESSION['errors_otp']);
    }
}