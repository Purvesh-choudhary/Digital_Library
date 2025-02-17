<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library Management System</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>Login</li>
                <li>Sign Up</li>
            
            </ul>
            <h1>ADD AUTHOR </h1>
            <form action="addAuthor.php" method="post">
                <label id="Author_Id">ID : </label>
                <input type="number"name="A_Id" ><br>
                <label id="Author_Name">Name : </label>
                <input type="text" name="A_Name"><br>
                <label id="Author_Contact">Contact : </label>
                <input type="text" name="A_Contact"><br>
                <input type="submit" value="Add Author">
            </form>
        </nav>
    </header>
    
</body>
</html> -->


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
        <h4>As Reader</h4>
        <form action="Backend/Login_User.php" method="post">
            <input type="text" placeholder="User ID" required name="UId">
            <input type="password" placeholder="Password" required name="UPassword">
            <button type="submit">Login</button>

            
        </form>
    </section>

   
</div>

<?php @include 'Include/Footer.php'; ?>

</body>
</html>