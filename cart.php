<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="product.css">
</head>

<div class="preloader"></div>
<div class="content4">

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
                    <span>Cart</span>
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
     <script> 
  window.addEventListener("DOMContentLoaded", function() {
    var preloader = document.querySelector(".preloader");
    var content = document.querySelector(".content4");
  
    setTimeout(function() {
      preloader.style.opacity = 0;
      preloader.style.visibility = "hidden";
      content.style.opacity = 1;
      content.style.visibility = "visible";
    }, 3000);
  });
  const header = document.querySelector("header");
  window.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.querySelector('.burger-menu');
    const burgerIcons = document.querySelector('.burger-icons');
    const icons = document.querySelector('.icons');
    const menu = document.querySelector('.menu');
  
    burgerIcons.addEventListener('click', () => {
      burgerIcons.classList.toggle('active');
      icons.classList.toggle('show');
    });
  });
  
  window.addEventListener('DOMContentLoaded', () => {
    const burgerMenu2 = document.querySelector('.burger-menu2');
    const burgerIcons2 = document.querySelector('.burger-icons2');
    const icons2 = document.querySelector('.icons2');
    const menu2 = document.querySelector('.menu2');
  
    burgerMenu2.addEventListener('click', () => {
      burgerMenu2.classList.toggle('active');
      menu2.classList.toggle('show');
    });
  
    burgerIcons2.addEventListener('click', () => {
      burgerIcons2.classList.toggle('active');
      icons2.classList.toggle('show');
    });
  }); </script>
    </nav>
  </header>
  <!-- breadcrum -->
  <div class="py-4 container flex gap-3 items-center">
    <a href="homepage - final.php" class="text-primary text-base">
        <i class="fas fa-home"></i>
    </a>
    <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
    <p class="text-gray-600 font-medium uppercase">Shopping Cart</p>
</div>
<!-- breadcrum end -->

<!-- cart wrapper -->
<div class="container lg:grid grid-cols-12 gap-6 items-start pb-16 pt-4">
    <!-- product cart -->
    <div class="xl:col-span-9 lg:col-span-8">
        <!-- cart title -->
        <div class="bg-pink1-200 py-2 pl-12 pr-20 xl:pr-28 mb-4 hidden md:flex">
            <p class="text-beige-600 text-center">Product</p>
            <p class="text-beige-600 text-center ml-auto mr-16 xl:mr-24">Quantity</p>
            <p class="text-beige-600 text-center">Total</p>
        </div>
        <!-- cart title end -->
        <?php
        require_once 'includes/conn.inc.php';
        function getCartID($conn){
            $sql = "select * from cart where user_id = " . $_SESSION['id'] . ";";
            $cart = $conn->query($sql);
            while($row = $cart->fetch_assoc()) {
                $cart_id = $row['cart_id'];
                return $cart_id;
            }
        }
        $cart_id = getCartID($conn);
        $results_per_page = 5;
        if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
        $start_from = ($page-1) * $results_per_page;
        $sql = "SELECT * FROM order_summary where cart_id = $cart_id ORDER BY cart_ID ASC LIMIT $start_from, ".$results_per_page;
        $rs_result = $conn->query($sql);
        ?>
        <!-- shipping carts -->
        <div class="space-y-4">
            <!-- single cart -->
            <?php while($row = $rs_result->fetch_assoc()) { ?>
            <div
                class="flex items-center md:justify-between gap-4 md:gap-6 p-4 border border-gray-200 rounded flex-wrap md:flex-nowrap">
                <!-- cart image -->
                <div class="w-32 flex-shrink-0">
                    <img src="./img/hp.png" class="w-full">
                </div>
                <!-- cart image end -->
                <!-- cart content -->
                <div class="md:w-1/3 w-full">
                    <h2 class="text-gray-800 mb-3 xl:text-xl textl-lg font-medium uppercase">
                        <?php echo $row['name']; ?>
                    </h2>
                    <p class="text-primary font-semibold">₱ <?php echo $row['price']; ?></p>
                    <p class="text-gray-500">Theme: <?php echo $row['theme']; ?></p>
                </div>
                <!-- cart content end -->
                <!-- cart quantity -->
                <div>
                        <form style="border: none;" action="includes/quantity.inc.php?id=<?php echo $row['item_id']; ?>" method="post">
                            <center><input style="width: 50px; text-align: center; margin-bottom: 2px;" type="text" name="quantity" value="<?php echo $row['quantity']; ?>"></center>
                            <center><input style="padding: 5px; background-color: #bc377e; color: white; font-weight: bold; border-radius: 5px;" type="submit" name="save" value="Save"></center>
                        </form>
                </div>
                <!-- cart quantity end -->
                <div class="ml-auto md:ml-0">
                    <p class="text-primary text-lg font-semibold">₱ <?php echo $row['subtotal']; ?></p>
                </div>
                <div class="text-gray-600 hover:text-primary cursor-pointer">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            <?php }; ?>
            <!-- single cart end -->
        </div>
        <!-- shipping carts end -->
    </div>
    <!-- product cart end -->
    <!-- order summary -->
    <div class="xl:col-span-3 lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0">
        <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">ORDER SUMMARY</h4>
        <div class="space-y-1 text-gray-600 pb-3 border-b border-gray-200">
            <?php
               $sql = "select SUM(subtotal) FROM order_summary;";
               $sum = $conn->query($sql);
               $rs_result = $conn->query($sql);
               while($row = $rs_result->fetch_assoc()) {
                $subtotal = $row['SUM(subtotal)'];
            ?>
            <div class="flex justify-between font-medium">
                <p>Subtotal</p>
                <p>₱<?php echo $subtotal?></p>
            </div>
            <div class="flex justify-between">
                <p>Delivery</p>
                <p>Free</p>
            </div>
            <div class="flex justify-between">
                <p>Discount</p>
                <?php 
                $discount = "None";
                $total = $subtotal;
                if(isset($_POST['submit'])){
                    $code = strtoupper($_POST['coupon']);

                    if($code == "CATALYSANCE"){
                        $discount = "25%";
                        $total = $subtotal - ($subtotal * 0.25) ;
                    }
                    else{
                        $discount = "None";
                        $total = $subtotal;
                    }
                }    
                ?>
                <p><?php echo $discount;?></p>
            </div>
        </div>
        <div class="flex justify-between my-3 text-gray-800 font-semibold uppercase">
            <h4>Total</h4>
            <h4>₱<?php echo number_format($total, 2);?></h4>
        </div>
        <?php }?>

        <!-- searchbar -->
        <form action="cart.php" method="post">
        <div class="flex mb-5">
            
            <input type="text" name="coupon"
                class="pl-4 w-full border border-r-0 border-primary py-2 px-3 rounded-l-md focus:ring-primary focus:border-primary text-sm"
                placeholder="Coupon">
            <input type="submit" name="submit" value="apply"
                class="bg-primary border border-primary text-white px-5 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition text-sm font-roboto">
                
        </div>
        </form>
        <!-- searchbar end -->

        <!-- checkout -->
        <a href="checkout.php" class="bg-primary border border-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent
         hover:text-primary transition text-sm w-full block text-center">
            Process to checkout
        </a>
        <!-- checkout end -->
    </div>
    <!-- order summary end -->
</div>
<!-- cart wrapper end -->

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
</div>
  
   </body>
   
   </html>