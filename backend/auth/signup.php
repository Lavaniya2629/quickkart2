<?php
session_start();
include "db.php";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        header("Location: login.php?signup=success");
        exit();
    } else {
        echo "Error: Email already exists";
    }
}
?>
