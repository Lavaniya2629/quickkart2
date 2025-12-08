<?php
session_start();
include('../db.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO vendors (full_name, email, phone, password) VALUES ('$full_name', '$email', '$phone', '$password')";
    
    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Registered Successfully — Wait for admin approval'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Email already exists'); window.location.href='register.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vendor Register</title>
</head>
<body>

<h2>Vendor Registration</h2>

<form action="" method="POST">
    <label>Full Name:</label>
    <input type="text" name="full_name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Phone:</label>
    <input type="text" name="phone" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="register">Register</button>
</form>

<br>
<a href="login.php">Already have an account? Login</a>
</body>
</html>

