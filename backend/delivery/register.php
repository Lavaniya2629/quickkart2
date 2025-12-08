<?php
include('../db.php');

if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);

    // Check if email exists
    $check = mysqli_query($conn, "SELECT * FROM delivery_boys WHERE email='$email'");
    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Email already registered! Please Login.');window.location.href='../../assets/pages/delivery-login.php';</script>";
        exit;
    }

    $sql = "INSERT INTO delivery_boys (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Registered Successfully! Waiting for Admin Approval.'); window.location.href='../../assets/pages/delivery-login.php';</script>";
    } else {
        echo "<script>alert('Error while registering'); window.location.href='../../assets/pages/delivery-register.php';</script>";
    }
}
