<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fullname = ($_POST['name']);
    $username = ($_POST['username']);
    $pwd = ($_POST['pwd']);
    $phoneNumber = ($_POST['phone']);
    $email = ($_POST['email']);
    $cpwd =($_POST['cpwd']);
    $gender =($_POST['gender']);
    $state =($_POST['state']);

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';
        require_once 'signup_view.inc.php';

        $errors = [];
        if (is_input_empty($fullname, $username, $pwd, $phoneNumber, $email, $cpwd, $gender, $state)) {
            $errors["empty_input"] = "Please fill in all fields!";

        } 
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Invalid email!";

        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken. Kindly change your username!";

        }
        if (is_email_registered($pdo, $email)) { 
            $errors["email_used"] = "Email already registered. Kindly change your mail!";

        }
        if (does_pwd_match($pwd, $cpwd)){
            $errors["pwd_match"] = "Password don't match. Please check again";

        }
        if (!validatePhoneNumber($phoneNumber)){
            $errors["invalid_phonenumber"]= "Incorrect phone number format. Check again";

        }
        
        if (is_phone_registered($pdo,$phoneNumber)){
            $errors["phonenumber_used"]="Phone number already registered. Kindly change phone number!";
        }
        if (is_fullname_long($fullname)) {
            $errors["fullname_long"]=  "Name is too long. Kindly reduce!";
        }
        
        if (not_number_and_string($pwd)) {
            $errors["not_number_and_string"] = "Password must contain number and letters";
        }
        if (not_upto_six_char($pwd)) {
            $errors ["not_upto_six_char"] = "Password must be more than 6 characters";
        }
        require_once 'config.inc.php';


        if ($errors){
            $_SESSION["errors_signup"] = $errors;
            
            $signupdata = [
                "name" => $fullname,
                "username" => $username,
                "email" => $email,
                "phone"=> $phoneNumber,
                "gender" => $gender,
                "state" => $state
            ];
            $_SESSION["signup_data"] = $signupdata;
            header("Location: ../index.php");
            die();
        }
        


        create_user($pdo, $username,$fullname, $email,$phoneNumber,$pwd,$gender,$state);


        header("Location: ../login.php?signup=success");
        
        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e){
        die("Query failed: ". $e->getmessage());
    }
}else {
    header("Location:../index.php");
    die();
}