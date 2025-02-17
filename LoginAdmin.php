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

<div class="content">
       
    <section id="login" class="login-panel">
        <h3>Login</h3>
        <h4>As Admin</h4>
        <form action="Backend/Login_Admin.php" method="post">
            <input type="text" placeholder="Admin Email" required name="AEmail">
            <input type="password" placeholder="Password" required name="APassword">
            <button type="submit">Login</button>

            
        </form>
    </section>

   
</div>

<?php @include 'Include/Footer.php'; ?>

</body>
</html>