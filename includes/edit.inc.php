<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $crpwd = $_POST['crpwd'];
    $fullName = $_POST['fullName'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    
    
    try {
    require_once "dbh.inc.php";
    require_once 'edit_model.inc.php';
    require_once 'signup_contr.inc.php';

    $errors = [];
    if (field_empty($fullName,$username,$crpwd,$phoneNumber,$email,$address)) {
        $errors["empty_input"] = "fill in all fields!";

    } 

    $result = getUserByUsername($pdo, $username);

    if (is_email_invalid($email)) {
        $errors["invalid_email"] = "Invalid email used!";

    }
    if (!validatePhoneNumber($phoneNumber)){
        $errors[" invalid_phonenumber"] = "Incorrect phone number formart";

    }

    if (!password_verify($crpwd,$result['pwd'])){
        $errors["invalid_password"]="Incorect password";
     }
     if (is_fullname_long($fullName)){
         $errors["fullname_long"] =  "Characters too long kindly reduce!";
     }
 
     require_once 'config.inc.php';
 
 
     if ($errors){
         $_SESSION["errors_edit"] = $errors;
         header("Location: ../edit.php");
         die();
     }
 
     updateUserDetails($pdo, $username, $fullName, $address, $email, $phoneNumber, $address);
        $_SESSION['user_fullName'] = htmlspecialchars($fullName);
        $_SESSION['user_email'] = htmlspecialchars($email);
        $_SESSION['user_phone'] = htmlspecialchars($phoneNumber);
        $_SESSION['user_gender'] = htmlspecialchars($result["gender"]);
        $_SESSION['user_state'] = htmlspecialchars($result["state"]);
        $_SESSION['user_address'] = htmlspecialchars($address);
        
        $_SESSION["last_regeneration"] = time();
     header("Location: ../dashboard.php"); 
     
      
     $pdo = null;
     $stmt = null;
 
     die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../edit.php");
    die();
}
