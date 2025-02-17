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
    <section id="home">
        <h2>Discover Our Collection</h2>
        <p>Explore thousands of digital books, journals, and resources available at your fingertips. Our library offers a wide range of subjects and genres to cater to all your reading needs.</p>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are dedicated to providing access to a vast array of digital resources. Our mission is to promote literacy and learning through innovative technology and user-friendly services.</p>
    </section>

    <section id="catalog">
        <h2>Library Catalog</h2>
        <p>Browse our extensive catalog to find the latest books, articles, and research papers. Use our advanced search features to locate specific materials quickly and easily.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <ul>
            <li>Online Reading</li>
            <li>Research Assistance</li>
            <li>Membership Programs</li>
            <li>Workshops and Events</li>
        </ul>
    </section>

</div>    

<?php @include 'Include/Footer.php'; ?>
</body>


</html>