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

session_start(); // Start a session to store user data once logged in

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = $_POST['UId'];
    $upassword = $_POST['UPassword'];

    // Retrieve user from database based on Uid
    $sql = "SELECT * FROM users WHERE uid = $uid";
    echo $sql;
    $result = mysqli_query($conn, $sql);

    // if ($conn->query($sql) === TRUE) {
    //     echo "User Exist!";
    //     $result = $conn->query($sql);
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }


    $user = mysqli_fetch_assoc($result);
    $tnt = implode(", ", $user);
    echo "<br>". $tnt ."<br>";
    if ($user['uid']==$uid && $user['upassword'] == $upassword && $user['uid']!=1) {
        // Password matches, set session variables
        $_SESSION['UId'] = $user['u id'];
        $_SESSION['UName'] = $user['uname'];
        $_SESSION['UEmail'] = $user['uemail'];
        $_SESSION['UPassword'] = $user['upassword'];
       // header("Location: profile.php"); // Redirect to profile page after successful login
       echo "login successfull!";

        echo  $_SESSION['UName'];
        $tnt = implode(", ", $_SESSION);
        echo "<br>". $tnt ."<br>";
    } else {
        echo "Invalid login credentials!";
    }
}
?>
