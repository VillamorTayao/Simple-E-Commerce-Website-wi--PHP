<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./assets/images/website-icon.jpg">
    <link rel="stylesheet" href="./styles/about.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <title>Drip and Brew | About Us</title>
</head>
<body style="margin: 0;" id="section">
    <header id="section">
        <div class="positioning">
            <div class="logo-position">
                <img src="./assets/images/logo.jpg" alt="logo pic">
            </div>
            <div class="redirect-buttons">
                <ul>
                    <li onclick="location.href='index.php'">Home</li>
                    <li onclick="location.href='#section2'">Products</li>
                    <li onclick="location.href='#section3'">Contacts</li>
                    <li><a href="about.php">About Us</a></li>
                    <li>Buy Now</li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section class="about-section" id="section1">
            <div class="container">
                <div class="about-section-image">
                    <img src="./assets/images/preview1.jpg" alt="about image">
                </div>
                <div class="about-section-info">
                    <p style="font-size: 35px;">About Us?</p>
                    <p>Established in 2020, Drip and Brew provides every customer with coffee products 
                        that are always top notch and uncomparable to others. Always thinking of many innovative coffee product ways
                        that will make every customer wanting for more. Trusted by many by those who have tasted our delicate coffee
                        with such great reviews that makes this business have a strong aroma and good taste impact of an actual best coffee
                        which is Drip and Brew's Coffees.
                    </p>
                </div>
            </div>
        </section>
            
        <section class="certificate-section">
            <div class="positioning">
                
                <div class="certificate-image">
                    <p>2020s Best Budget-Friendly Coffee Shop</p>
                    <p>By: <span>Golden Globe Annual Awards for Business Excellence</span></p>
                    <img src="./assets/award.PNG" alt="award">
                </div>
            </div>
        </section>

        <section class="reviews-section">
            <div class="positioning">
                <div>
                    <p style="text-align: center;">Andrew Arellano</p>
                    <p>Seriously awesome cookies! Just the right sweetness, 
                        and if coupled with <span style="color: rgb(180, 124, 72);font-size: 18px;font-weight: 600;">Drip and Brew's Coffee Shop's coffee</span>
                        , a perfect combination!
                    </p>
                </div>

                <div>
                    <p style="text-align: center;">Francee Marie</p>
                    <p>Sobra accomodating ni seller and madali kausap. Nag order ako ng 8:00 PM ng gabi
                        kinabukasan dumating agad. <span style="color: rgb(180, 124, 72);font-size: 18px;font-weight: 600;">SUPER SARAP NG COFFEE!</span>
                    </p>
                </div>

                <div>
                    <p style="text-align: center;">Anonymous</p>
                    <p>Seriously awesome cookies! Just the right sweetness, 
                        and if coupled with <span style="color: rgb(180, 124, 72);font-size: 18px;font-weight: 600;">Drip and Brew's Coffee Shop's coffee</span>
                        , a perfect combination!
                    </p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>