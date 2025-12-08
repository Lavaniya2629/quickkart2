<?php
include "../db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // password hashing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../assets/pages/login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
