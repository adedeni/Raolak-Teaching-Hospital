<?php

declare(strict_types=1);


function get_user(object $pdo, string $username ) {
    $query = "SELECT * FROM users WHERE username = :username or email = :email or phoneNumber = :phoneNumber;";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":username",$username);
    $stmt->bindparam(":email",$username);
    $stmt->bindparam(":phoneNumber",$username);
    $stmt->execute();

    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;

}