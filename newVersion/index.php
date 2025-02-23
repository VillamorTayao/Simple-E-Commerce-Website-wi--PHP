<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="./assets/images/website-icon.jpg">
    <link rel="stylesheet" href="./styles/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./styles/sliders.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <title>Drip and Brew</title>
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
                    <li onclick="location.href='#section1'">Products</li>
                    <li>Contacts</li>
                    <li>Buy Now</li>
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

        <section class="products-section">
            <div>
                <p class="title">Here are the selection of our products!</p>
            </div>

            <div class="products-section" id="section2">
                <div class="product-selection">
                    <div class="select-option">
                        <button>Coffee</button>
                        <button>Syrups</button>
                        <button>Other types</button>
                    </div>
                    <div class="show-products">
                        <img src="./assets/images/coffee-product/product1.jpg" alt="product 1">
                        <img src="./assets/images/coffee-product/product2.jpg" alt="product 2">
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>