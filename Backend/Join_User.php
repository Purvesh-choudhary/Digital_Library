<?php
// Step 1: Database connection
$servername = "localhost";
$username = "root";  // Default username in XAMPP is "root"
$password = "";      // Default password is empty
$dbname = "digital_library";  // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Handle the form submission and insert data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $User_Id = mysqli_real_escape_string($conn, $_POST['UId']);
    $User_Name = mysqli_real_escape_string($conn, $_POST['UName']);
    $User_Email = mysqli_real_escape_string($conn, $_POST['UEmail']);
    $User_Password = mysqli_real_escape_string($conn, $_POST['UPassword']);
    $User_ConfirmPassword = mysqli_real_escape_string($conn, $_POST['UConfirmPassword']);

    // Step 3: Insert data into the 'authorid' table
    $sql = "INSERT INTO users (Uid, Uname, Uemail , Upassword) VALUES ('$User_Id', '$User_Name', '$User_Email','$User_Password')";

    if($User_Password === $User_ConfirmPassword){
        if ($conn->query($sql) === TRUE) {
            echo "Joined successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else echo("Password Does not Match !");

}

// Step 4: Close the connection
$conn->close();
?>
