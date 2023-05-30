<?php
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

echo "success";

// Close the connection
$conn->close();
?>
