<?php

$con = "mysql:host=localhost; dbname=raolak_admin";
$dbusername = "root";
$dbpassword = "";
try {
     $pdo = new PDO($con, $dbusername,$dbpassword );
     $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed". $e->getMessage();
}