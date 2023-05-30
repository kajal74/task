<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create a connection
$conn = new mysqli($servername, $username, $password,$database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = $_SESSION['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>  
    <h3>Dashboard Page</h3>
    <p>User ID: <?php echo $userId; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
