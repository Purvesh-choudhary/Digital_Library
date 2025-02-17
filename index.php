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

    <main>
        <section class="welcome">
            <h2>Explore a World of Knowledge</h2>
            <p>Discover a vast collection of books, journals, and digital resources.  <br> Our library is here to support your
                learning journey.</p>
            <a href="LoginUser.php" class="btn">Login To Browse Books</a>
            
        </section>

        <section class="features">
            <div class="feature-box">
                <h3>Extensive Collection</h3>
                <p>Thousands of books and journals at your fingertips.</p>
            </div>
            <div class="feature-box">
                <h3>Easy Access</h3>
                <p>Online catalog and digital resources available 24/7.</p>
            </div>
            <div class="feature-box">
                <h3>Community Events</h3>
                <p>Join book clubs, author talks, and educational sessions.</p>
            </div>
        </section>
    </main>

    <?php @include 'Include/Footer.php'; ?>
</body>


</html>