<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./assets/images/website-icon.jpg">
    <link rel="stylesheet" href="./styles/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <title>Drip and Brew | Sign Up</title>
</head>
<body style="margin: 0;" id="section">

    <header id="section">
        <div class="positioning">
            <div class="logo-position">
                <a href="index.php"><img src="./assets/images/logo.jpg" alt="logo pic"></a>
            </div>
            <nav class="redirect-buttons">
                <ul>
                    <li onclick="location.href='#section'">Home</li>
                    <li onclick="location.href='#section2'">Products</li>
                    <li onclick="location.href='#section3'">Contacts</li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="login.php">Buy Now</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Wrapper -->
    <main>
        <form action="./src/signup.php" method="post">
            <h1>Create Account</h1>
            <span>Enter Username</span>
            <input type="text" name="username" required>

            <span>Enter Email</span>
            <input type="text" name="email" required>

            <span>Password</span>
            <input type="password" name="password" required>

            <span>Confirm Password</span>
            <input type="password" name="confirm_password" required>

            <input type="submit" name="signup" value="Sign Up">
        </form>
    </main>
</body>
</html>