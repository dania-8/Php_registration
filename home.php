<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
              
                <li><a href="profile.php">profile</a></li>

            </ul>
        </nav>
    </header>
    <section>
        <h2>About Us</h2>
        <p>Hi <?php echo $_SESSION["user"]; ?>
          Welcome to our website!
           We provide various services and information.</p>
    </section>
    <footer>
        <p>&copy; 2024 MyWebsite. All rights reserved.</p>
    </footer>
</body>
</html>
