<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $otp = $_POST['otp'];
    $email = $_SESSION["email"];
    
    try {
    require_once 'dbh.inc.php';
    require_once 'config.inc.php';
    require_once 'otp_model.inc.php';
    


    $errors = [];
    
    if (isFieldEmpty($otp)) {
        $errors['empty_input'] = "Please enter the OTP!";
    }
    $otpData = getOtp($pdo, $email);

    if (!$otpData) {
        $errors['otp_error'] = "Unable to retrieve OTP data!";
    } else {
        $storedOtp = $otpData['otp'];
        $updatedAt = $otpData['updated_at'];

        if (!isOtpValid($otp, $storedOtp)) {
            $errors['invalid_otp'] = "Invalid OTP!";
        }
        date_default_timezone_set('Africa/Lagos');
        $exptime = 60 * 1;
        if (isOtpValid($otp, $otpData)) {
            echo "OTP is valid!";
            header("Location: ../newpwd.php");
        } else {
            echo "Invalid OTP!";
        }
        if (isOtpExpired($updatedAt, $exptime)) {
            $errors['expired_otp'] = "OTP has expired!";
            
            //regenerateOtp($pdo,$email);
        }
    }
    
    if ($errors) {
        
        $_SESSION['errors_otp'] = $errors;
        header("Location: ../otp.php");
        
        die();
    } else    header("Location: ../newpwd.php");

    $_SESSION['otp'] = $otp;
    $pdo = null;
    $stmt = null;
    die();
    die();

    
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
    header("Location: ../otp.php");
    die();
}
