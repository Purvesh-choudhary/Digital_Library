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
// session_start(); // Start a session to store user data once logged in

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aemail = $_POST['AEmail'];
    $apassword = $_POST['APassword'];

    // Retrieve user from database based on Uid
    $sql = "SELECT * FROM users WHERE uemail = $aemail";
    echo $sql;
    $result = mysqli_query($conn, $sql);

    // if ($conn->query($sql) === TRUE) {
    //     echo "User Exist!";
    //     $result = $conn->query($sql);
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    echo "yeha";
    $user = mysqli_fetch_assoc($result);
    echo "yeha2";
    $tnt = implode(", ", $user);
    echo "<br>". $tnt ."<br>";
    echo "yeha3";
    if ($user['uemail']==$aemail && $user['upassword'] == $apassword && $user['uid']==1) {
        // Password matches, set session variables
        $_SESSION['AId'] = $user['uid'];
        $_SESSION['AName'] = $user['uname'];
        $_SESSION['AEmail'] = $user['uemail'];
       // header("Location: profile.php"); // Redirect to profile page after successful login
       echo "Admin login successfull!";

        echo  $_SESSION['AName'];
    } else {
        echo "Invalid login credentials!";
    }
}
?>
