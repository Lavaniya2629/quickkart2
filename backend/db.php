<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "quickkart_db"; // or quickkart – your choice
$port = 3307; // 🔴 THIS WAS MISSING

$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
