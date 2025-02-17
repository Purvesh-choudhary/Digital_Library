<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
@include 'Include/Header.php'; 
@include 'Backend/ConnectPHP.php'; 

// Retrieve the latest user ID from the database and increment it for the next user
$sql = "SELECT * FROM users ORDER BY uid DESC LIMIT 1"; 
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Calculate the next available user ID
$newUId = isset($row['uid']) ? $row['uid'] + 1 : 1;  // Default to 1 if no users exist

?>

<div class="content">
    <section id="login" class="login-panel">
        <h3>Join</h3>
        <h4>As Reader</h4>
        <form action="Backend/Join_User.php" method="post">
            <input type="text" placeholder="User ID" readonly name="UId" value ="<?php echo $newUId; ?>">
            <input type="text" placeholder="Enter Name" required name="UName">
            <input type="text" placeholder="Enter Email" required name="UEmail">
            <input type="text" placeholder="Password" required name="UPassword">
            <input type="text" placeholder="Confirm Password" required name="UConfirmPassword">
            <button type="submit">Join</button>
        </form>
    </section>

   
</div>

<?php @include 'Include/Footer.php'; ?>

</body>
</html>