<?php
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

$email = $_POST['email'];
$userPassword = $_POST['password'];
$sql = " SELECT * FROM `users` WHERE email='$email' AND password='$userPassword';";

$result = mysqli_query($conn, $sql);

$value = mysqli_fetch_field($result);



$count = mysqli_num_rows($result);

if ($count >= 1) {

    echo json_encode(array("statusCode" => 200, "status" => 'success'));
} else {
    echo json_encode(array("statusCode" => 201, "status" => 'fail'));
}


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $_SESSION["id"]  =  $row["id"];
        $_SESSION["name"] = $row["username"];
    }
} else {
    // echo "0 results";
}

?>