<?php
// Step 1: Database connection
$servername = "localhost";
$username = "root";  // Default username in XAMPP is "root"
$password = "";      // Default password is empty
$dbname = "digital library";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Handle the form submission and insert data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $A_Id = mysqli_real_escape_string($conn, $_POST['A_Id']);
    $A_Name = mysqli_real_escape_string($conn, $_POST['A_Name']);
    $A_Contact = mysqli_real_escape_string($conn, $_POST['A_Contact']);

    // Step 3: Insert data into the 'authorid' table
    $sql = "INSERT INTO author (id, name, contact) VALUES ('$A_Id', '$A_Name', '$A_Contact')";

    if ($conn->query($sql) === TRUE) {
        echo "New author added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Step 4: Close the connection
$conn->close();
?>
