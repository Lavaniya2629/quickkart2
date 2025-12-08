<?php
include '../db.php'; // Already in backend/auth, go up one level to backend
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // fetch user
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];

            header("Location: ../../index.php"); // redirect to home
            exit();
        } else {
            echo "❌ Incorrect Password";
        }
    } else {
        echo "❌ Email Not Registered";
    }
}
?>
