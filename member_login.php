<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "1?or2?or3?";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check admin credentials
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // General login successful
    $_SESSION['username'] = $username;
    header("Location: sign.php"); // Redirect to general dashboard
} else {
    // General login failed
    echo "Invalid username or password.";
}

$conn->close();
?>
