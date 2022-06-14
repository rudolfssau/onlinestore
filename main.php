<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!--    https://fonts.google.com/specimen/Source+Sans+Pro    -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
    <nav class="navbar">
        <a href="main.php" class="navbar-name">Quickify</a>
        <ul class="navbar-items">
                <li><a href="estore.php" class="navbar-item">E-Store</a></li>
                <li><a href="bestdeals.php" class="navbar-item">Best Deals</a></li>
                <li><a href="services.php" class="navbar-item">Services</a></li>
                <li><a href="ourstore.php" class="navbar-item">Our Stores</a></li>
                <li><a href="contactus.php" class="navbar-item">Contact Us</a></li>
        </ul>
        <div class="dropdown">
            <span class="row"></span>
            <span class="row"></span>
            <span class="row"></span>
        </div>
    </nav>
    <script src="dropdown.js"></script>
</header>
    <div id="main-info">
        <div id="main-news">
            <h2>Quick Tip Of The Day</h2>
            <div>
                <h2>The main cause for fruit to go bad?</h2>
                <h3>Microscopic bacteria cause food to spoil. These tiny organisms, called spoilage bacteria, consume unprotected foods and produce waste products. As long as nutrition and water are present, bacteria will multiply, sometimes rapidly. Bacterial waste is the cause of the foul smell and rotten appearance of spoiled food.</h3>
                <h3>Prevent this by storing your food in dry places and not leaving it out long.</h3>
                <div><a href="#">Continue reading</a></div>
            </div>
        </div>
        <div id="main-new">
            <h2>Freshly Delivered Today</h2>
            <div>
                <section id="slide-container">
                    <div>
                        <div class="numbertxt">1 / 3</div>
<!--                        <img-->
                    </div>
                    <div>
                        <div class="numbertxt">2 / 3</div>
                    </div>
                    <div>
                        <div class="numbertxt">3 / 3</div>
                    </div>
                </section>
            </div>
        </div>
        <div id="main-recipes">
            <h2>Our Recommended Recipes</h2>
            <section id="recipes01">
                <div id="recipe0-container">
                    <a href="#" class="recipe0">
                        <section class="bananabread">
                            <img src="recipes/bananabread.jpg" alt="#">
                            <div class="spacer-container"><span class="spacer"></span><h4 class="recipes-date">12 May 2022</h4><span class="spacer"></span></div>
                            <h3>The Best Banana Bread Ever!</h3>
                        </section>
                    </a>
                </div>
                <div id="recipe1-container">
                    <a href="#" class="recipe1">
                        <section class="chickenpie">
                            <img src="recipes/chickenpie.jpg" alt="#">
                            <div class="spacer-container"><span class="spacer"></span><h4 class="recipes-date">3 June 2022</h4><span class="spacer"></span></div>
                            <h3>Our Favorite, The Chicken Potpie.</h3>
                        </section>
                    </a>
                </div>
                <div id="recipe4-container">
                    <a href="#" class="recipe4">
                        <section class="bread">
                            <img src="recipes/bread.jpg" alt="#">
                            <div class="spacer-container"><span class="spacer"></span><h4 class="recipes-date">8 July 2022</h4><span class="spacer"></span></div>
                            <h3>Healthy, Homemade Bread</h3>
                        </section>
                    </a>
                </div>
            </section>
            <section id="recipes23">
                <div id="recipe2-container">
                    <a href="#" class="recipe2">
                        <section class="applepie">
                            <img src="recipes/applepie.jpg" alt="#">
                            <div class="spacer-container"><span class="spacer"></span><h4 class="recipes-date">25 August 2022</h4><span class="spacer"></span></div>
                            <h3>Tastiest Apple Pie EVER, Period.</h3>
                        </section>
                    </a>
                </div>
                <div id="recipe3-container">
                    <a href="#" class="recipe3">
                        <section class="lasagna">
                            <img src="recipes/lasagna.jpg" alt="#">
                            <div class="spacer-container"><span class="spacer"></span><h4 class="recipes-date">8 July 2022</h4><span class="spacer"></span></div>
                            <h3>Traditional Lasagna</h3>
                        </section>
                    </a>
                </div>
                <div id="recipe5-container">
                    <a href="#" class="recipe5">
                        <section class="cake">
                            <img src="recipes/cake.jpg" alt="#">
                            <div class="spacer-container"><span class="spacer"></span><h4 class="recipes-date">8 July 2022</h4><span class="spacer"></span></div>
                            <h3>Moist Chocolate Cake</h3>
                        </section>
                    </a>
                </div>
            </section>
        </div>
        <div id="main-delivery">
            <h2>How We Simplify Food Delivery</h2>
            <div>
                <h1>hi</h1>
            </div>
        </div>
    </div>
<footer>
    <div id="footer-top">
        <section>
            <h3>Accepted payment methods</h3>
            <div>
                <img src="" alt="#">
                <img src="" alt="#">
                <img src="" alt="#">
            </div>
        </section>
        <section>
            <h3>Our food delivery partner</h3>
            <img src="" alt="#">
        </section>
    </div>
    <div id="footer-bottom">
        <section>
            <h3>More information</h3>
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Apply for a job</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Supplier info</a></li>
            </ul>
        </section>
        <section>
            <h3>Social Media</h3>
            <div>
                <img src="" alt="#">
                <img src="" alt="#">
                <img src="" alt="#">
            </div>
        </section>
        <section>
            <h3>Email subscription</h3>
            <h4>Become a subscriber and get alerts on the newest deals and offer specifically for you!</h4>
<!--            Make a subscription box HERE-->
        </section>
    </div>
</footer>
</body>
</html>