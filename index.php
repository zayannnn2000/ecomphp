<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 </head>

 <?php
    include "db.php";
    session_start();
    
   
    



 ?>
 
 

 <body>

    <section id="header">
         <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

         <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <li><?php if(isset($_SESSION["name"])) : ?>
                    <a href="#"><h4> Welcome <?php echo $_SESSION["name"] ?> </h4></a>    
                
                    <?php else : ?>
                        <a href="login.php">Login</a>    
                        <?php endif; ?>
                 </li>
                                  
             
                
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
         </div>

         <div id="mobile">
             <i id="bar" class="fas fa-outdent"></i> 
             <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
         </div>

    </section>    

    <section id="banner">
         <h4>Shop Summer</h4>
         <h2>Evening Edge</h2>
         <h3>Make your summer fashionable!</h3>
         <a href = "shop.html">
         <button>Shop Now</button></a>
    </section>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/f5.png" alt="">
            <h6>Happy Shopping</h6>
        </div>
        <div class="fe-box">
            <img src="img/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="products" class="section-p1">
        <h2>Featured Products</h2>
        <p>Build Your Dream Wardrobe</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/pro1.jpg" alt="">
                <div class="des">
                    <span>Shein</span>
                    <h5>Violet Hues Cropped Long-Sleeved Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/pro2.jpg" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5>Orange Dreams Tied Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/pro3.jpg" alt="">
                <div class="des">
                    <span>Missguided</span>
                    <h5>Red Velvet Flared Pants</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$25</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/pro4.jpg" alt="">
                <div class="des">
                    <span>Princess Polly</span>
                    <h5>Black Gothic Off-Shoulder Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$40</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/pro5.jpg" alt="">
                <div class="des">
                    <span>Off-White</span>
                    <h5>Black Signature Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/pro6.jpg" alt="">
                <div class="des">
                    <span>Mango</span>
                    <h5>Striped Casual T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/pro7.jpg" alt="">
                <div class="des">
                    <span>Nordstrom</span>
                    <h5>Graffiti Joggers</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/pro8.jpg" alt="">
                <div class="des">
                    <span>Bones</span>
                    <h5>Black Classic Varsity Jacket</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
        </div>
    </section>

    <section id="banner2" class="section-m1">
        <h4>Unbelievable Offers!</h4>
        <h2>Upto <span>10% Off</span> for Every Purchase</h2>
        <a href = "shop.html">
        <button class="normal">Explore More</button></a>
    </section>

    <section id="products" class="section-p1">
        <h2>Latest Arrivals</h2>
        <p>Captivating Looks For Your Summertime Daydreams</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/p1.jpg" alt="">
                <div class="des">
                    <span>Nordstrom</span>
                    <h5>Dandalion Chiffon Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p2.jpg" alt="">
                <div class="des">
                    <span>Princess Polly</span>
                    <h5>Lavender Silk Skirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$25</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p3.jpg" alt="">
                <div class="des">
                    <span>Mango</span>
                    <h5>Olive Drop Shoulder T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p4.jpg" alt="">
                <div class="des">
                    <span>Missguided</span>
                    <h5>Maroon Mandarin Satin Dress</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p5.jpg" alt="">
                <div class="des">
                    <span>Zara</span>
                    <h5>Lime Embroidered Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p6.jpg" alt="">
                <div class="des">
                    <span>Mango</span>
                    <h5>Grey Tailored Pants</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$30</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p7.jpg" alt="">
                <div class="des">
                    <span>Shein</span>
                    <h5>Psyduck Summer Sweatshirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$25</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/p8.jpg" alt="">
                <div class="des">
                    <span>Bones</span>
                    <h5>Casual Graphic T-shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$20</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
        </div>
    </section>

    <section id="banner3" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals!</h4>
            <h2>Get Free Shipping</h2>
            <span>Right At Your Doorstep</span>
            <a href = "shop.html">
        <button class="normal">Explore More</button></a>
        </div>
        <div class="banner-box banner-box2">
            <h4>Fall/Spring</h4>
            <h2>Upcoming Collection</h2>
            <span>Make Your Own Statement</span>
            <a href = "shop.html">
            <button class="normal2">Learn More</button></a>
        </div>
    </section>

    <section id="banner5">
        <div class="banner-box">
            <h2>Seasonal Sale</h2>
            <h3>On Specific Items</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>Chinese Cheongsams</h2>
            <h3>Exclusive For Chinese New Year</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>Top-notch Tees</h2>
            <h3>For Men And Women</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters!</h4>
            <p>Get email updates about latest items and special offers</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address" id="form">
            
        
                <button class="normal" onclick="message()">Sign Up</button> 
            
        </div>
        <div class="message">
            <div class="success" id="success">Thank You!</div>
            <div class="danger" id="danger">Try Again!</div>
        </div>
                </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo2.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Block-B, Bashundhara R/A</p>
            <p><strong>Phone:</strong> +11111111111</p>
            <p><strong>Hours:</strong> Sundays-Saturdays</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
         
        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
            <a href="about.html">Delivery Information</a>
            <a href="about.html">Privacy Policy</a>
            <a href="about.html">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="login.php">Sign In</a>
            <a href="cart.html">View Cart</a>
            <a href="cart.html">My Wishlist</a>
            <a href="blog.html">Blogs</a>
            <a href="contact.html">Help</a>
        </div>


        <div class="col install">
            <h4>Download Our App</h4>
            <p>From App Store Or Google Play</p>
            <div row="row">
                <img src="img/app.png" alt="">
                <img src="img/google.png" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay.jpg" alt="">
        </div>      

        <div class="copyright">
            <p> © All Rights Reserved By WearCute.</p>
        </div>

    </footer>

     <script src="script.js"></script>

</body>

</html>