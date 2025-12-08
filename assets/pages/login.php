<?php
include('../../backend/db.php');
session_start();
?>



<!DOCTYPE html>
<html>
<head>
<title>QuickKart - Login</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="auth-box">
  <h2>Welcome Back</h2>
  <form action="../../backend/vendor/login.php" method="POST">

      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="login">Login</button>
  </form>
  <p>Don't have an account? <a href="register.php">Create Account</a></p>
</div>

</body>
</html>
