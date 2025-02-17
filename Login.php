<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library Management</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php @include 'Include/Header.php'; ?>

    <section class="login-form">
        <div class="login-container">
            <h2>Login Form</h2>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <div class="input-group">
                    <label for="LID">Library ID</label>
                    <input type="text" id="email" name="LID" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                
                <a href="#" class="forgot-password">Forgot password?</a>
                <button type="submit" class="btn">Login</button>

                <p>Not a member? <a href="Join.php">Join now</a></p>
            </form>
        </div>
    </section>

    <?php @include 'Include/Footer.php'; ?>
</body>

</html>



<?php
include 'backend/ConnectPHP.php'; // Connect to database

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email = ? OR phone = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            header("Location: dashboard.php"); // Redirect after login
            exit();
        } else {
            $error = "Invalid email or password!";
        }
    } else {
        $error = "User not found!";
    }
}
?>