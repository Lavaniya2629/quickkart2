<?php
session_start();
include('../db.php');

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM delivery_boys WHERE email='$email' AND password='$password'");
    $user = mysqli_fetch_assoc($query);

    if($user) {
        if($user['status'] == 1) {
            $_SESSION['delivery_id'] = $user['id'];
            $_SESSION['delivery_name'] = $user['name'];
            echo "<script>alert('Login Successful'); window.location.href='../../backend/delivery/dashboard.php';</script>";
        } else {
            echo "<script>alert('Waiting for admin approval'); window.location.href='../../assets/pages/delivery-login.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid credentials'); window.location.href='../../assets/pages/delivery-login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delivery Login | QuickKart</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #F7F8FA;
        }
        .navbar {
            background: #0077CC;
            padding: 18px;
            text-align: center;
            color: #fff;
            font-size: 26px;
            font-weight: bold;
        }
        .container {
            width: 380px;
            margin: 70px auto;
            background: #fff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.12);
        }
        .title {
            text-align: center;
            font-size: 22px;
            margin-bottom: 18px;
            color: #2C2C2C;
            font-weight: 600;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
            outline: none;
        }
        input:focus {
            border-color: #0077CC;
        }
        .btn {
            width: 100%;
            background: #FF6B2C;
            border: none;
            padding: 14px;
            margin-top: 20px;
            color: #fff;
            font-size: 17px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.2s;
        }
        .btn:hover {
            background: #E85E1F;
            transform: scale(1.02);
        }
        .note {
            margin-top: 15px;
            font-size: 14px;
            text-align: center;
            color: #555;
        }
        .note span {
            color: #0077CC;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="navbar">QuickKart Delivery Partner</div>

<div class="container">
    <div class="title">🚚 Delivery Login</div>

    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit" class="btn" name="login">Login</button>
    </form>

    <p class="note">Not registered? <span>Contact Admin</span></p>
</div>

</body>
</html>
