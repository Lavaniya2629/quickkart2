<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery Boy Login | QuickKart</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #F7F8FA;
        }
        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            background: #fff;
            width: 380px;
            padding: 40px;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.12);
            text-align: center;
        }
        .login-box h2 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
            font-weight: 600;
            color: #0077CC;
        }
        .input-field {
            width: 100%;
            margin-bottom: 15px;
        }
        .input-field input {
            width: 100%;
            padding: 12px;
            font-size: 15px;
            border-radius: 8px;
            border: 1px solid #cdcdcd;
            outline: none;
        }
        .input-field input:focus {
            border-color: #0077CC;
        }
        .login-btn {
            background: #FF6B2C;
            color: #fff;
            width: 100%;
            border: none;
            padding: 13px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
        }
        .login-btn:hover {
            opacity: .9;
            transform: scale(1.03);
            transition: .2s;
        }
        .small-text {
            margin-top: 15px;
            font-size: 14px;
            color: #2C2C2C;
        }
        .back-home {
            display: inline-block;
            margin-top: 8px;
            font-size: 14px;
            color: #0077CC;
            cursor: pointer;
            text-decoration: none;
            font-weight: 500;
        }
        .logo {
            font-family: 'Poppins', sans-serif;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 5px;
            color: #FF6B2C;
        }
        .tagline {
            color: #2C2C2C;
            font-size: 14px;
            margin-bottom: 25px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">

            <div class="logo">QuickKart</div>
            <div class="tagline">Fast • Safe • On-Time Delivery</div>

            <h2>Delivery Boy Login</h2>

            <form action="../../backend/delivery/login.php" method="POST">
                <div class="input-field">
                    <input type="email" name="email" placeholder="Enter Email" required>
                </div>

                <div class="input-field">
                    <input type="password" name="password" placeholder="Enter Password" required>
                </div>

                <button type="submit" name="login" class="login-btn">Login</button>
            </form>

            <p class="small-text">Login access only for registered delivery partners.</p>
            <a href="../../index.php" class="back-home">← Back to Home</a>

        </div>
    </div>
</body>
</html>
