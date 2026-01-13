<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CodingChatRoom OTP Lab</title>

<style>
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
        background: #0e1117;
        color: #cdd9e5;
        display: flex;
        height: 100vh;
        overflow: hidden;
    }

    /* --- SIDEBAR --- */
    .sidebar {
        width: 240px;
        background: #111827;
        padding-top: 40px;
        display: flex;
        flex-direction: column;
        box-shadow: 4px 0 20px rgba(0,0,0,0.4);
    }

    .logo {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #00e6b8;
        margin-bottom: 35px;
    }

    .menu a {
        display: block;
        padding: 14px 25px;
        color: #cdd9e5;
        text-decoration: none;
        font-size: 16px;
        transition: 0.3s;
    }

    .menu a:hover {
        background: #1f2937;
        color: #00e6b8;
        padding-left: 35px;
    }

    .logout {
        margin-top: auto;
        padding: 14px 25px;
        background: #991b1b;
        color: #fff;
        text-decoration: none;
        text-align: center;
        font-weight: bold;
        transition: 0.3s;
    }

    .logout:hover {
        background: #dc2626;
    }

    /* --- MAIN AREA --- */
    .main {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    /* --- TOP BAR --- */
    .topbar {
        background: #1f2937;
        padding: 18px 30px;
        font-size: 20px;
        font-weight: bold;
        color: #00e6b8;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    /* --- CONTENT --- */
    .content {
        padding: 30px;
        overflow-y: auto;
    }

    .welcome {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 25px;
    }

    /* --- CARDS --- */
    .card-container {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .card {
        background: #1f2937;
        padding: 25px;
        border-radius: 12px;
        width: 260px;
        box-shadow: 0 0 15px rgba(0,0,0,0.3);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0 25px rgba(0,230,184,0.4);
    }

    .card-title {
        font-size: 16px;
        color: #9ca3af;
        margin-bottom: 10px;
    }

    .card-value {
        font-size: 30px;
        font-weight: bold;
        color: #00e6b8;
    }
</style>
</head>

<body>

<div class="sidebar">
    <div class="logo">CodingChatRoom OTP Lab Panel</div>

    <div class="menu">
        <a href="#">Dashboard</a>
        <a href="#">User Profile</a>
        <a href="#">Security Logs</a>
        <a href="#">System Status</a>
    </div>

    <a class="logout" href="logout.php">Logout</a>
</div>

<div class="main">

    <div class="topbar">
        Dashboard Overview
        <span><?php echo $_SESSION['email'] ?? "User"; ?></span>
    </div>

    <div class="content">
        <div class="welcome">Welcome back, <?php echo $_SESSION['email'] ?? "User"; ?>!</div>

        <div class="card-container">

            <div class="card">
                <div class="card-title">Account Status</div>
                <div class="card-value">Active</div>
            </div>

            <div class="card">
                <div class="card-title">Last Login</div>
                <div class="card-value">Just Now</div>
            </div>

            <div class="card">
                <div class="card-title">Security Level</div>
                <div class="card-value" style="color:#ff4d4d;">Weak OTP</div>
            </div>

            <div class="card">
                <div class="card-title">Total Sessions</div>
                <div class="card-value">01</div>
            </div>

        </div>

    </div>
</div>

</body>
</html>
