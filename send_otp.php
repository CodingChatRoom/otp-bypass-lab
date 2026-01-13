<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>CodingChatRoom OTP Lab</title>

<style>
    body {
        background: #0d0d0d;
        color: #fff;
        font-family: Arial;
        text-align: center;
        padding-top: 80px;
    }

    .box {
        width: 380px;
        margin: auto;
        padding: 30px;
        background: rgba(255,255,255,0.05);
        border-radius: 12px;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }

    .otp {
        font-size: 40px;
        margin: 20px 0;
        color: #00e6b8;
    }

    button {
        background: #00e6b8;
        padding: 12px;
        border: none;
        width: 90%;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        color: #000;
    }
</style>
</head>

<body>

<?php
$email = $_POST['email'];
$_SESSION['email'] = $email;

$otp = rand(1000,9999);
$_SESSION['otp'] = $otp;
?>

<div class="box">
    <h2>CodingChatRoom OTP Lab</h2>
    <h2>OTP Loaded</h2>
    <p>Your temporary OTP:</p>
    <div class="otp"><?php echo $otp; ?></div>

    <form action="verify_otp.php" method="POST">
        <input type="text" name="otp" placeholder="Enter OTP" style="padding:12px;width:80%;border-radius:8px;border:none;margin-bottom:15px;">
        <button type="submit">Verify OTP</button>
    </form>
</div>

</body>
</html>
