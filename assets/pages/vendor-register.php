<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (!isset($_SESSION['vendor_id'])) {
    header("Location: assets/pages/vendor-login.php");
    exit();
}
echo "Welcome Vendor " . $_SESSION['vendor_name'];
include("../../backend/vendor/register.php");
?>
<a href="backend/vendor/logout.php">Logout</a>
<form action="../../backend/vendor/register.php" method="POST">
<button type="submit" name="register">Register</button>

