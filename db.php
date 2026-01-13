<?php
session_start();

$host = "localhost";
$user = "otpuser";
$pass = "otp123";
$db   = "otp_lab";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("DB ERROR: " . mysqli_connect_error());
}
?>
