<?php

require_once 'dbh.inc.php';
require_once 'otp_model.inc.php';

session_start();
$email = $_SESSION['email'];
regenerateOtp($pdo,$email,$otp);
header("Location:../otp.php");