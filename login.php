<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>CodingChatRoom OTP Lab</title>

<style>
    body {
        margin: 0;
        background: linear-gradient(135deg,#0a0f24,#081a38,#0d0d0d);
        font-family: Arial, sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        width: 380px;
        padding: 40px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.15);
        border-radius: 15px;
        backdrop-filter: blur(15px);
        text-align: center;
        animation: fadeIn 0.7s ease-in-out;
    }

    @keyframes fadeIn {
        from {opacity: 0; transform: translateY(20px);}
        to {opacity: 1; transform: translateY(0);}
    }

    h2 {
        color: #00e6b8;
        margin-bottom: 20px;
        font-size: 26px;
    }

    input {
        width: 90%;
        padding: 12px;
        border-radius: 8px;
        border: none;
        margin: 10px 0;
        font-size: 16px;
        outline: none;
    }

    button {
        width: 100%;
        padding: 12px;
        border: none;
        background: #00e6b8;
        color: #000;
        font-size: 16px;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #00b38f;
    }

    .logo {
        width: 70px;
        margin-bottom: 15px;
        filter: drop-shadow(0 0 8px #00e6b8);
    }
</style>
</head>

<body>

<div class="card">
    <h2>CodingChatRoom OTP Lab</h2>
    
    <img src="https://cdn-icons-png.flaticon.com/512/483/483361.png" class="logo">

    <h2>Login</h2>

    <form action="send_otp.php" method="POST">
        <input type="text" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit">Continue</button>
    </form>
</div>

</body>
</html>
