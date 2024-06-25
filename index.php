<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "1?or2?or3?";
$database = "login";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully"; // This message will be displayed if the connection is successful
}
?>