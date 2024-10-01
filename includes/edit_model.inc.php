<?php
 declare(strict_types=1);
function getUserByUsername(object $pdo, string $username) {
    // Database connection
    $query = 'SELECT * FROM users WHERE username = :username;';
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":username",$username);
    $stmt ->execute();

    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function updateUserDetails(object $pdo, string $username, string $fullName, string $address, string $email, string $phoneNumber) {
    // Database connection

    $query = "UPDATE users SET fullName = :fullName, address = :address, email = :email, phoneNumber = :phoneNumber WHERE username = :username;";
    $stmt = $pdo->prepare($query);
        $stmt->bindparam(":fullName",$fullName);
        $stmt->bindparam(":username", $username);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":phoneNumber", $phoneNumber);
        $stmt -> bindparam(":address", $address);
    return $stmt->execute();
}
function long_name (string $fullName){

    $newname = strlen($fullName);
    if ($newname < 50){

        return true;
    }else {
        return false;
    }
}
function field_empty(string $username, string $crpwd, string $email, string $fullname, string $phoneNumber, string $address) {
    if (empty($username) || empty($crpwd) || empty($email) || empty($fullname)|| empty($address) || empty($phoneNumber)) {
        return true;
    }
    else {
        return false;
    }
}

function is_password_wrong( string $crpwd, string $hashed) {
    if (!password_verify($crpwd,$hashed)) {
        return true;
    } else {
        return false;
    }
}
function check_edit_errors()
{
    if (isset($_SESSION['errors_edit'])) {
        $errors = $_SESSION['errors_edit'];

        echo "<br>";
        foreach ($errors as $error) {
            echo '<p "style=color:red";>'.$error.'</p>';
        }

        unset($_SESSION['errors_edit']);
    } else if (isset($_GET["edit"]) && $_GET["edit"] ==="success") {
        echo '<br>';
        echo '<h4 "style=color:green";>edit success</h4>';
    }
}