<?php
session_start();
if (!isset($_SESSION['vendor_id'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<h2>Welcome, <?php echo $_SESSION['vendor_name']; ?> 👋</h2>
<a href="../../backend/vendor/logout.php">Logout</a>
