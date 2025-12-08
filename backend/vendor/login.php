<?php
session_start();
include('../db.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM vendors WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])) {

            if($row['status'] != 1) {
                echo "<script>alert('Admin approval pending!'); window.location.href='login.php';</script>";
                exit;
            }

            $_SESSION['vendor_id']   = $row['id'];
            $_SESSION['vendor_name'] = $row['full_name'];

            echo "<script>alert('Login Successful'); window.location.href='dashboard.php';</script>";
            exit;

        } else {
            echo "<script>alert('Invalid Password'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Email not found'); window.location.href='login.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vendor Login</title>
</head>
<body>

<h2>Vendor Login</h2>

<form action="" method="POST">
    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

<br>
<a href="register.php">New Vendor? Register</a>
</body>
</html>

