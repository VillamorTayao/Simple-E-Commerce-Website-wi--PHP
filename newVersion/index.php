<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./assets/images/website-icon.jpg">
    <link rel="stylesheet" href="./styles/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./styles/product-section.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./styles/contact.css?v=<?php echo time(); ?>">
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
                    <li><a href="login.php">Buy Now</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <main>
        <section class="company-background-image">
            <img src="./assets/images/background.png" alt="company wallpaper">
            <div class="redirect-icon">
                <a href="https://www.facebook.com/dripandbrew.ph" target="_blank"><img src="./assets/icons/facebook-svgrepo-com.svg" alt="facebook"></a>
                <a href="https://www.instagram.com/dripandbrew.ph/" target="_blank"><img src="./assets/icons/instagram-svgrepo-com.svg" alt="instagram"></a>
            </div>
        </section>

        <section class="company-intro">
            <div class="position">
                <div class="preview1">
                    <div>
                        <img src="./assets/images/preview1.jpg" alt="preview 1">
                    </div>
                    <div style="flex: 1; padding-left: 50px">
                        <p>JUST TAKE A SIP, RELAX, AND BE REFRESHED</p>
                        <p>Here at Drip and Brew's, service is our top priority to make your experience 
                        as excellent as always. Allowing you to be with nature itself as you sip in the fresh and hard picked 
                        coffee grounds for an amazing taste!</p>
                    </div>
                </div>
                <div class="preview2">
                    <div>
                        <img src="./assets/images/preview2.jpg" alt="preview 1">
                    </div>
                    <div>
                        <p>BE WITH NATURE WITH OUR COFFEE!</p>
                        <p>All of our coffee products are made with pure, straight from the garden, coffee beans
                        that is made into unique but delicate coffee products with many variety of flavors for thirsty mouths
                        wanting for a good exceptional coffee.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="products-section" id="section2">
            <div>
                <p class="title">Here are the selection of our products!</p>
            </div>

            <div class="products">
                <div class="select-product-show">
                    <div class="select-option">
                        <button id="coffee">Coffee</button>
                        <button id="syrups">Syrups</button>
                        <button id="others">Other types</button>
                    </div>
                    <div class="show-products">
                        <div style="margin-right: 30px;">
                            <img src="./assets/coffee-product/coffees/product1.jpg" alt="product 1">
                            <p>Classic Drip and Brew (Ungrounded)</p>
                            <p>&#8369; 100</p>
                            <button>Buy now</button>
                        </div>
                        <div>
                            <img src="./assets/coffee-product/coffees/product2.jpg" alt="product 2">
                            <p>Classic Drip and Brew (Grounded)</p>
                            <p>&#8369; 120</p>
                            <button>Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section style="display: flex; justify-content: center; align-items: center; margin-top: 150px;" id="section3">
            <h1>Give us a Feedback or Visit Us!</h1>
        </section>

        <section class="contact-section">
            <div class="position">
                <div class="maps-position">
                    <p>Visit Us at!</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4182815574427!2d121.02202051415333!3d14.688922078845781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b18eca761a43%3A0xe1dec56e75fff543!2sDrip%20%26%20Brew%20Coffee%20Shop!5e0!3m2!1sen!2sph!4v1670394702626!5m2!1sen!2sph" 
                    width="500" height="400" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <form action="./src/contact.php" method="post">
                    <label>Email</label>
                    <input type="text" name="email">
                    <label>Message</label>
                    <textarea name="message" id="message" placeholder="Feel free to send any message :)"></textarea>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </section>
    </main>
    <script src="./scripts/index.js"></script>
</body>
</html>