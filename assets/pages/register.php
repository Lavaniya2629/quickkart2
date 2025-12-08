<?php include('../../backend/db.php'); ?>


<!DOCTYPE html>
<html>
<head>
<title>QuickKart - Register</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="auth-box">
  <h2>Create Account</h2>
      <form action="../../backend/vendor/register.php" method="POST">

      <input type="text" name="full_name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="register">Sign Up</button>
  </form>
  <p>Already have an account? <a href="login.php">Login</a>
</p>
</div>

</body>
</html>
