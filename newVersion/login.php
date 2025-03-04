<?php
    include('./src/login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./assets/images/website-icon.jpg">
    <link rel="stylesheet" href="./styles/login.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <title>Drip and Brew | Home</title>
</head>
<body style="margin: 0;" id="section">

    <header id="section">
        <div class="positioning">
            <div class="logo-position">
                <img src="./assets/images/logo.jpg" alt="logo pic">
            </div>
            <div class="redirect-buttons">
                <ul>
                    <li onclick="location.href='#section'">Home</li>
                    <li onclick="location.href='#section2'">Products</li>
                    <li onclick="location.href='#section3'">Contacts</li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="./src/login.php">Buy Now</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section>
            <form action="./src/login.php" method="post">
                <p style="font-size: 25px; margin-top: 0px; font-weight: 700;">Login</p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>

                <div class="password-setup">
                    <label>Password</label>
                    <input type="password" name="password" id="password" required>
                    <span class="show-password" id="show-password"><img src="./assets/icons/eye-password-hide-svgrepo-com.svg" alt="hide-password" id="show-password-icon"></span>
                </div>

                <div class="login-position">
                    <input type="submit" name="login" value="Login">
                </div>
                
                <hr style="margin-top: 20px; border-color: B7B7B7;">
                <div class="signup-position">
                    Don't have an account?<a href="index.php" style="font-size: 16px;">Sign Up</a>
                </div>

                <div class="other-options">
                    <h4>--OR--</h4>
                    <div class="options">
                        <img src="assets/google-svgrepo-com.svg" alt="google">
                        <img src="assets/facebook-svgrepo-com.svg" alt="facebook" style="margin-right: 0;">
                    </div>
                </div>
            </form>
        </section>
    </main>

    <script src="./scripts/login.js"></script>
</body>
</html>