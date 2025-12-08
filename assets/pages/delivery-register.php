<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Delivery Boy Register | QuickKart</title>
</head>
<body>
<h2>Delivery Boy Register</h2>
<form action="../../backend/delivery/register.php" method="POST">
    <input type="text" name="name" placeholder="Full Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>
</body>
</html>
