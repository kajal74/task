<?php
// Start the session
session_start();

// Clear all session data
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other appropriate page
header("Location: login.php");
exit();
?>
