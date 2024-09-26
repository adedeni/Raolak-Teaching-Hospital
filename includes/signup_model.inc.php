<?php

declare(strict_types=1);
function get_username(object $pdo,string  $username) {
    $query = 'SELECT username FROM users WHERE username =:username;';
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":username", $username);
    $stmt->execute();

    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;

}

function get_email(object $pdo,string  $email) {
    $query = 'SELECT username FROM users WHERE email =:email;';
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":email", $email);
    $stmt->execute();

    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;

}

function get_match(string $pwd, String $cpwd){
    if ($pwd===$cpwd){
        return true;
    }else {
        return false;
    }

}


function long_name (string $fullname){

    $newname = strlen($fullname);
    if ($newname < 50){

        return true;
    }else {
        return false;
    }
}

function set_user (object $pdo,  string $username, string $fullname, string $email, string $phoneNumber,string $pwd, string $gender, string $state ) {
    $query = "INSERT INTO users  ( username,fullname, email,phoneNumber,pwd,gender, state ) VALUES (:username,:fullname, :email,:phoneNumber,:pwd, :gender, :state);";  
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' =>  12
    ]; 

    $hashpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
    $stmt->bindparam(":username", $username);
    $stmt->bindparam(":fullname", $fullname);
    $stmt->bindparam(":email", $email);
    $stmt->bindparam(":phoneNumber", $phoneNumber);
    $stmt->bindparam(":pwd", $hashpwd);
    $stmt->bindparam(":gender", $gender);
    $stmt->bindparam(":state", $state);
    $stmt->execute();
};

function get_phone(object $pdo, string $phoneNumber) {
    $query = 'SELECT username FROM users WHERE phoneNumber =:phoneNumber;';
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":phoneNumber", $phoneNumber);
    $stmt->execute();

    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;

}