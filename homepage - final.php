<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.png">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Wear Your Moods Print</title>
</head>
<body>
  <div class="container4">
    <div class="preloader">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="content5">
    <header>
        <nav class="navbar">
            
            <ul class="menu">
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
            
            <ul class="icons">
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
            
            <div class="burger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <div class="burger-icons">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    	<!--Home section--->
	<section class="home" id="home">
        <div class="home-text">
            <h1>Wear Your Mood <br> Prints</h1>
			<h2>Print your mood, wear your vibe: Our mood prints, your unique style!</h2>
        <a href="product.php" class="home-btn">
          <span>Shop Now</span>
        </a>

        </section>
        <!--Best Seller--->
        <section class="best-sellers-carousel">
			<h2>Best Sellers</h2>
			<div class="carousel-wrapper">
			  <div class="carousel-container">
				
          <a href="productdeets.php" class="card">
            <div class="overlay"></div>
            <img src="./img/bp1.png" alt="Best Seller 1">
            <h3>PURPLE TOTE BAG</h3>
            <p>High Quality Aesthetic <br>Trendy Tote Bag</p>
            <span class="price">₱130 - ₱140</span>
            <ul class="icons4">
              <li><i class="bx bx-heart"></i></li>
              <li><i class="bx bx-cart"></i></li>
            </ul>
          </a>
          
				  <a href="productdeets.php" class="card">
            <div class="overlay"></div>
					<img src="./img/bp2.png" alt="Best Seller 2">
					<h3>MINIMALIST MUGS</h3>
					<p>Simple and elegant cups with a sleek <br>and understated design</p><br>
					<span class="price">₱150</span>
          <ul class="icons4">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
				  </a>
			  
				  <a href="productdeets.php" class="card">
            <div class="overlay"></div>
					<img src="./img/bp3.png" alt="Best Seller 3">
					<h3>NEW JEANS TOTE BAG</h3>
					<p>New Jeans Inspired Aesthetic <br>High Quality Tote Bag</p><br>
					<span class="price">₱150 - ₱160</span>
          <ul class="icons4">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
				  </a>
	
				  <a href="productdeets.php" class="card">
            <div class="overlay"></div>
					<img src="./img/bp6.png" alt="Best Seller 4">
					<h3>BLUE MOUSEPAD</h3>
					<p>Blue Custom Aesthetic High Quality Rubber Mousepad</p><br>
					<span class="price">₱100</span>
          <ul class="icons4">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
				  </a>
	
				  <a href="productdeets.php" class="card">
            <div class="overlay"></div>
					<img src="./img/bp5.png" alt="Best Seller 5">
					<h3>ENHYPEN TOTE BAG</h3>
					<p>Enhypen Inspired Aesthetic <br>High Quality Tote Bag</p><br>
					<span class="price">₱130 - ₱140</span>
          <ul class="icons4">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
				  </a>
	
				  <a href="productdeets.php" class="card">
            <div class="overlay"></div>
					<img src="./img/bp4.png" alt="Best Seller 6">
					<h3>BUTTERFLY TOTE BAG</h3>
					<p>Change Can Be A Good Thing Aesthetic Tote Bag</p><br>
					<span class="price">₱120 - ₱140</span>
          <ul class="icons4">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
				  </a>
	
				  <a href="productdeets.php" class="card">
            <div class="overlay"></div>
					<img src="./img/bp7.png" alt="Best Seller 7">
					<h3>MOTIVATIONAL MOUSEPAD</h3>
					<p>Motivational Custom Aesthetic High Quality Rubber Mousepad</p><br>
					<span class="price">₱100</span>
          <ul class="icons4">
            <li><i class="bx bx-heart"></i></li>
            <li><i class="bx bx-cart"></i></li>
          </ul>
				  </a>
			  </div>
			</div>
		  </section>

          <!--Who we are--->
          <section class="container">
            <div class="main-container">
              <div class="image-container">
              <img src="./img/hp.png" alt="who we are">	
              </div>
              <div class="text-container">
              <h2>WHO WE ARE</h2>
                        <p>At "Wear Your Mood Prints", we're all about helping you express your personality through custom designs on your everyday items. We offer a range of printing services, from tote bags to mugs and mousepads, that let you show off your unique style and mood. Whether you're looking for a fun way to brighten up your workspace or a personalized gift for someone special, we've got you covered. So why settle for plain and boring when you can wear your mood prints?</p>
                        <center>
                          <a href="about us.php" class="wwa-btn"><span>Learn More</span></a>
                        </center>
             </div>
          </div>
        </section>

        <!--Our Products--->
        <section class="container1">
            <h2>Our Products</h2>
            <div class="carousel">
              <div class="category">
                <img src="./img/p5.png" alt="Category 1">
                <h3>Mugs</h3>
              </div>
              <div class="category">
                <img src="./img/p6.png" alt="Category 2">
                <h3>Tote Bags</h3>
              </div>
              <div class="category">
                <img src="./img/p4.png" alt="Category 3">
                <h3>Mousepads</h3>
              </div>
            </div>
          </section>

            <!--Custom Made Products--->
            <section class="container2">
              <div class="main-container2">
                <div class="text-container2">
                  <h2>Custom-Made Products</h2>
                <p>Looking to add a touch of personality to your everyday items? Look no further than "Wear Your Mood Prints"! We specialize in custom printing services for a range of products, including tote bags, mugs, and mousepads. With our help, you can bring your unique ideas and designs to life, creating one-of-a-kind items that showcase your personality and style. Let us help you unleash your creativity and turn your vision into reality today!</p>
                <div class="btn-conteiner">
                <a class="btn-content" href="#">
                  <span class="btn-title">CREATE YOUR OWN</span>
                  <span class="icon-arrow">
                  <svg width="56px" height="33px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path id="arrow-icon-one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
                    <path id="arrow-icon-three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
                    </g>
                  </svg>
                  </span> 
                </a>
               </div>
                </div>
                <div class="image-container2">
                <img src="./img/cp8.png" alt="wow">	
            </div>
          </section>
          

              <!--Location--->
              <section class="container3">
                  <div class="main-container3">
                    <div class="text-container3">
                  <h2>Location</h2>
                  <p>Wear Your Mood Prints is located on the second floor of an apartment building, providing easy access to our printing services. While we regret that we are unable to offer an in-person shopping experience at our location, we warmly welcome customers to visit us and discuss their personalized print orders. Our friendly team is always ready to assist with creating unique designs and bringing your ideas to life. So whether you're looking to add a personal touch to your home or create a special gift for a loved one, drop by and let us help you make it happen.</p>
                  <h3>Address</h3>
                  <h4>99 Blk 12 United HOA., San Pedro St. Pinalad Rd. Centennial 2, Pasig</h4>
                  <h3>Contact Number</h3>
                  <h4>09488771646</h4>
                </div>
                <div class="map-container3">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.4365013995593!2d121.0253919153113!3d14.574185781629575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9b18b1f6797%3A0x5998687bacf7c457!2s624%20F.%20Blumentritt%2C%20Mandaluyong%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1667986655943!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </section>

              <!--pop up-->
              <div class="popup hide-popup">
                <div class="popup-content">
                  <div class="popup-close">
                    <i class='bx bx-x'></i>
                  </div>
                  <div class="popup-left">
                    <div class="popup-img-container">
                      <img class="popup-img" src="./img/bgreg.jpg" alt="popup">
                    </div>
                  </div>
                  <div class="popup-right">
                    <div class="right-content">
                      <h1>Get Discount <span>50%</span> Off</h1>
                      <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise!
                      </p>
                      <form action="#">
                        <input type="email" placeholder="Enter your email..." class="popup-form">
                        <a href="#">Subscribe</a>
                      </form>
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
  
  </div> 
</body>
</html>
