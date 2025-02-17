<?php
// Step 1: Database connection
$servername = "localhost";
$username = "root";  // Default username in XAMPP is "root"
$password = "";      // Default password is empty
$dbname = "digital_library";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// echo "Connected PHP";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>