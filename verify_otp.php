<?php
include 'db.php';

$user_otp = $_POST['otp'];
$real_otp = $_SESSION['otp'];

header("Content-Type: application/json");

if ($user_otp == $real_otp) {
    $_SESSION['otp_verified'] = true;

    echo json_encode([
        "status" => "success",
        "message" => "OTP Verified"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid OTP"
    ]);
}
?>
