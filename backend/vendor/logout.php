<?php
session_start();
session_destroy();
header("Location: ../../assets/pages/vendor.php");
exit;
?>
