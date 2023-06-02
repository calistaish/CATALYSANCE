<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.png">
    <link rel="stylesheet" type="text/css" href="styles2.css">
    <title>Reviews</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
<body>
  <body>
<!--header--->
<header style="background-color: #c68234f5;">
  <nav class="navbar">
      
      <ul class="menu2">
        <li><a href="homepage - final.php">Home</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="review.php">Reviews</a></li>
        <li><a href="about us.php">About Us</a></li>
      </ul>
      
      <div class="logo-container">
          <a href="#" class="logo">
              <img src="./img/logo8.png" alt="Logo">
          </a>
      </div>
      
      <ul class="icons2">
          <li>
              <a href="wishlist.php">
                  <img src="./img/wishlist.png" alt="Wishlist">
                  <span>Wishlist</span>
              </a>
          </li>
          <li>
            <a href="cart.php">
                  <img src="./img/cart.png" alt="Add to Cart">
                  <span>Add to Cart</span>
              </a>
          </li>
          <?php
                  if(isset($_SESSION['id'])){
                ?>
                <li>
                    <a href="account.php">
                        <img src="./img/acc1.png" alt="Sign In">
                        <span>My Account</span>
                    </a>
                </li>
                <?php
                }
                else{
                ?>
                <li>
                    <a href="userlogin.php">
                        <img src="./img/acc1.png" alt="Sign In">
                        <span>Sign In</span>
                    </a>
                </li>
                <?php
                }
                ?>
      </ul>
      
      <div class="burger-menu2">
          <span></span>
          <span></span>
          <span></span>
      </div>
      
      <div class="burger-icons2">
          <span></span>
          <span></span>
          <span></span>
      </div>
      
  </nav>
</header>
<!-- REVIEW -->
<section class="review-section">
  <h1>What Our Clients Say </h1>
  <p>We proudly present a collection of reviews that solidify our credentials and showcase the exceptional experiences shared <br>by our valued customers. These testimonials highlight the unwavering commitment we have towards delivering top-quality <br>printing services and ensuring customer satisfaction.</p>
  </section>
  
  <!--FEEDBACKS -->
  <div class="wrapper">
       <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p> Matibay naman basta huwag lang maglalagay ng masyadong mabigat na gamit.</p>
        <div class="content">
          <div class="info">
            <div class="name">czarinaapablo</div>
            <div class="job">Tote Bag</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review1.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>Maganda sya...makapal parang mukha ko.</p>
        <div class="content">
          <div class="info">
            <div class="name">seoriminatozaki</div>
            <div class="job">Tote Bag</div>
         <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/icon.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left  quote"></i>
        <p>I like it!!!!! <33333 it's so nice! Good quality and affordable. I am so happy. Thank you thank you</p>
        <div class="content">
          <div class="info">
            <div class="name">nyelaaang</div>
            <div class="job">Tote Bag</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
       <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p> Super gandaaaaaa❤️ makapal at maganda din ang details ng mouse pad na naorder ko❤️ hindi ko ineexpect yung quality nya. Super nice and tama din ang binigay sakin ni seller✨</p>
        <div class="content">
          <div class="info">
            <div class="name">jovyssimply</div>
            <div class="job">Mousepad</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review6.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>It's well-packed and the item has quality! It really suits my aesthetic and I cannot wait to use it while working online. Thank you so much, seller for this beautiful mouse pad! God bless you po 🧡🧡🧡</p>
        <div class="content">
          <div class="info">
            <div class="name">juwon_211995</div>
            <div class="job">Mousepad</div>
         <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review7.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left  quote"></i>
        <p>Thank you seller! The bags are of good quality and the print is nice. I thought it would feel like a sticker pero it’s really printed well into the cloth.</p>
        <div class="content">
          <div class="info">
            <div class="name">mariafiiona</div>
            <div class="job">Tote Bag</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review8.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  <div class="wrapper">
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>I was extremely sad about the tote bag packaging since it was placed inside the plastic just like that, but, overall, the tote bag itself met my expectation given the cheap price.</p>
        <div class="content">
          <div class="info">
            <div class="name">nyelaaang</div>
            <div class="job">Tote Bag</div>
     <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left quote"></i>
        <p>This is so beautiful!! the color surprised me because it looks so much better than expected and the size of the tote bag is just perfect </p>
        <div class="content">
          <div class="info">
            <div class="name">monicabonleon</div>
            <div class="job">Mousepad</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review4.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-quote-left  quote"></i>
        <p>Freetea gunthe pangexchange gift queh siya jajajajajaj pero freetea talga pati ung ano niya gunthe tapos bigay q sa friend q and ganda niya tiga guys</p>
        <div class="content">
          <div class="info">
            <div class="name">bnns_</div>
            <div class="job">Tote Bag</div>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="image">
            <img src="./img/review5.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  
  <!--REVIEW FORM--->
  <h1>What Do You Want To Say?</h1>
  <p>At Wear Your Mood Prints, we cherish and appreciate the valuable feedback provided by our esteemed customers.<br>Your reviews play a pivotal role in our pursuit of excellence, as they guide us in crafting remarkable products that are tailored<br>to meet and exceed your expectations.</p>
  <div class="container">
    <div class="review-box">
      <div class="left"></div>
      <div class="right">
        <h2>Please leave a review for us</h2>
        <div class="rating">
          <input type="number" name="rating" hidden>
          <i class="bx bx-star star"></i>
          <i class="bx bx-star star"></i>
          <i class="bx bx-star star"></i>
          <i class="bx bx-star star"></i>
          <i class="bx bx-star star"></i>
        </div>
        <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."></textarea>
        <div class="btn">
          <button type="submit" class="btn submit">SUBMIT</button>
        </div>
      </div>
    </div>
  </div>
  

         <!--footer--->
         <section id="contact">
          <div class="footer">
            <div class="list">
              <h4>Connect With Us</h4>
              <div class="social">
                <div class="socialf">
                  <a href="#"><i class='bx bxl-facebook'></i></a>
                </div>
                <div class="sociali">
                  <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
                <div class="socialt">
                  <a href="#"><i class='bx bxl-tiktok'></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="end-text">
            <p>Developed by Catalysance | &copy;2023 All rights reserved | Wear Your Mood Prints</p>
          </div>
        </section>
        
  <script src="./js/fscriptz.js"></script>


</body>
</html>
