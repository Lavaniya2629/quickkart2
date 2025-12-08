<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if(!isset($_SESSION['vendor_id'])) {
    header("Location: login.php");
    exit;
}

include('../db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vendor Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['vendor_name']; ?> 👋</h2>

<p>This is your vendor dashboard.</p>

<a href="logout.php"><button class="btn">Logout</button></a>


</body>
</html>
