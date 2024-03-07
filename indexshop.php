<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Coffee Shop</title>
    <link rel="icon" href="images/icon.svg" type="image/x-icon">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styleshop.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo-label.svg" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="/simplecoffee/simplecoffeeacademy/indexacademy.php">Our Academy</a>
            
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-1.png" alt="">
                <div class="content">
                    <h3>cart item 01</h3>
                    <div class="price">₽4.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-2.png" alt="">
                <div class="content">
                    <h3>cart item 02</h3>
                    <div class="price">₽8.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-3.png" alt="">
                <div class="content">
                    <h3>cart item 03</h3>
                    <div class="price">₽5.99/-</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/cart-item-4.png" alt="">
                <div class="content">
                    <h3>cart item 04</h3>
                    <div class="price">₽10.99/-</div>
                </div>
            </div>
            <a href="#" class="btn">checkout now</a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Simple Coffee </h3>
            <p>"Where Every Sip Tells a Story &
                More Than Just Coffee, It's an Experience"
            </p>
            <a href="#menu" class="btn">Order now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="/simplecoffee/simplecoffeeacademy/images/about-img.jpeg" alt="">
            </div>

            <div class="content">
                <h3>what makes our coffee special?</h3>
                <p>Choose high-quality, freshly roasted coffee beans.
                    Grind the beans just before brewing.
                    Brew using your preferred method, ensuring proper water temperature and brewing time.
                   
                </p>
                <p> Serve in a favorite mug or cup.
                
                    Enjoy with a treat or in a relaxing environment that enhances your coffee experience.</p>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="heading"> our <span>menu</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/menu-1.png" alt="">
                <h3>Espresso</h3>
                <div class="price">₽8.99 <span>14.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-2.png" alt="">
                <h3>Cappuccino</h3>
                <div class="price">₽100.99 <span>15.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-3.png" alt="">
                <h3>Latte</h3>
                <div class="price">₽193.99 <span>1999.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-4.png" alt="">
                <h3>Macchiato</h3>
                <div class="price">₽1555.99 <span>2000.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-5.png" alt="">
                <h3>Mocha</h3>
                <div class="price">₽15.99 <span>20.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="box">
                <img src="images/menu-6.png" alt="">
                <h3>Turkish Coffee</h3>
                <div class="price">₽15.99 <span>20.99</span></div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </section>

    <!-- menu section ends -->

    <section class="products" id="products">

        <h1 class="heading"> our <span>products</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product-1.png" alt="">
                </div>
                <div class="content">
                    <h3>nicaragua coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">₽600.99 <span>₽1400.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product-2.png" alt="">
                </div>
                <div class="content">
                    <h3>Columbia coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">₽1500.99 <span>₽200.99</span></div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/product-3.png" alt="">
                </div>
                <div class="content">
                    <h3>Pero coffee</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">₽1500.99 <span>$2000.99</span></div>
                </div>
            </div>

        </div>

    </section>

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Очень Вкусно !!!.</p>
                <img src="images/pic-1.png" class="user" alt="">
                <h3>Ali Afzal</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>мне нравитсия это ! спасибо.</p>
                <img src="images/pic-2.png" class="user" alt="">
                <h3>Abu Bakar</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>Nicee i like it !!</p>
                <img src="images/pic-3.png" class="user" alt="">
                <h3>M.Ramzan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe class="map" src="images/bull.png" allowfullscreen="" loading="lazy"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="/simplecoffee/simplecoffeeacademy/indexacademy.PHP">our academy</a>
        </div>

        <div class="credit">created by <span>Mo selim</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

















    <!-- custom js file link  -->
    <script src="script.js"></script>

</body>

</html>