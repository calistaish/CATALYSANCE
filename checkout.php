<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="product.css">
</head>
<body>
<div class="preloader1"></div>
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
    var preloader1 = document.querySelector(".preloader1");
    var content = document.querySelector(".content4");
  
    setTimeout(function() {
      preloader1.style.opacity = 0;
      preloader1.style.visibility = "hidden";
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
        <a href="cart.php" class="text-primary text-base1 font-medium uppercase">
            Cart
        </a>
        <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
        <p class="text-gray-600 font-medium uppercase">CHECKOUT</p>
    </div>
    <!-- breadcrum end -->
    <?php ?>
    <!-- checkout wrapper -->
    <div class="container lg:grid grid-cols-12 gap-6 items-start pb-16 pt-4">
        <!-- checkout form -->
        <div class="lg:col-span-8 border border-gray-200 px-4a py-4 rounded">
            <form action="includes/checkout.inc.php?" method="post">
                <h3 class="text-lg font-medium capitalize mb-4">
                    checkout
                </h3>

                <div class="space-y-4">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-gray-600 mb-2 block">
                                First Name <span class="text-primary">*</span>
                            </label>
                            <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="fname" class="input-box" value="<?php echo $_SESSION['firstname']; ?>">
                            <?php } else {?>
                                <input type="text" name="fname" class="input-box">
                            <?php }?>
                        </div>
                        <div>
                            <label class="text-gray-600 mb-2 block">
                                Last Name <span class="text-primary">*</span>
                            </label>
                            <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="lname" class="input-box" value="<?php echo $_SESSION['surname']; ?>">
                            <?php } else {?>
                                <input type="text" name="lname" class="input-box">
                            <?php }?>
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Company Name
                        </label>
                        <input type="text" name="cname" class="input-box">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            County/Region <span class="text-primary">*</span>
                        </label>
                        <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="country" class="input-box" value="<?php echo $_SESSION['country'] ?>">
                            <?php } else {?>
                                <input type="text" name="country" class="input-box">
                            <?php }?>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Street Address <span class="text-primary">*</span>
                        </label>
                        <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="address" class="input-box" value="<?php echo $_SESSION['address'] ?>">
                            <?php } else {?>
                                <input type="text" name="address" class="input-box">
                            <?php }?>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Town/City <span class="text-primary">*</span>
                        </label>
                        <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="city" class="input-box" value="<?php echo $_SESSION['city'] ?>">
                            <?php } else {?>
                                <input type="text" name="city" class="input-box">
                            <?php }?>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Zip Code <span class="text-primary">*</span>
                        </label>
                        <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="zipcode" class="input-box" value="<?php echo $_SESSION['zipcode']  ?>">
                            <?php } else {?>
                                <input type="text" name="zipcode" class="input-box">
                            <?php }?>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Phone Number <span class="text-primary">*</span>
                        </label>
                        <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="phone" class="input-box" value="<?php echo $_SESSION['phone'] ?>">
                            <?php } else {?>
                                <input type="text" name="phone" class="input-box">
                            <?php }?>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Email Address <span class="text-primary">*</span>
                        </label>
                        <?php if(isset($_SESSION['id'])) { ?>
                                <input type="text" name="email" class="input-box" value="<?php echo $_SESSION['email'] ?>">
                            <?php } else {?>
                                <input type="text" name="email" class="input-box">
                            <?php }?>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Mode of Payment <span class="text-primary">*</span>
                        </label>
                        <select name="MOP"
                    class="w-44 text-sm text-gray-600 px-4 py-3 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                    <option value="GCASH">Gcash</option>
                    <option value="COD">COD</option>
                </select>
                    </div>
                </div>
        </div>
        <!-- checkout form end -->
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
        <!-- order summary -->
        <div class="lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0">
            <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">ORDER SUMMARY</h4>
            <div class="space-y-2">
            <?php while($row = $rs_result->fetch_assoc()) { ?>
                <div class="flex justify-between" v-for="n in 3" :key="n">
                    <div>                   
                        <h5 class="text-gray-800 font-medium"><?php $name = $row['name']; echo substr($name, 0, 18 ). "..."; ?></h5>
                        <p class="text-sm text-gray-600">Theme: <?php echo $row['theme']; ?>p</p>
                    </div>
                    <p class="text-gray-600">x<?php echo $row['quantity']; ?></p>
                    <p class="text-gray-800 font-medium">₱<?php echo $row['subtotal']; ?></p>
                </div>
                <?php };?>
            </div>
            <?php
               $sql = "select SUM(subtotal) FROM order_summary where cart_id =" . $cart_id. ";";
               $sum = $conn->query($sql);
               $rs_result = $conn->query($sql);
               while($row = $rs_result->fetch_assoc()) {
                $subtotal = $row['SUM(subtotal)'];
            ?>
            <div class="flex justify-between border-b border-gray-200 mt-1">
                <h4 class="text-gray-800 font-medium my-3 uppercase">Subtotal</h4>
                <h4 class="text-gray-800 font-medium my-3 uppercase">₱<?php echo $subtotal?></h4>
            </div>
            <?php }?>
            <div class="flex justify-between border-b border-gray-200">
                <h4 class="text-gray-800 font-medium my-3 uppercase">Shipping</h4>
                <h4 class="text-gray-800 font-medium my-3 uppercase">Free</h4>
            </div>
            <div class="flex justify-between border-b border-gray-200">
                <h4 class="text-gray-800 font-medium my-3 uppercase">Discount</h4>
            <?php $discount = $_GET['discount'];
            $value = 'none';
            if($discount == '25%'){
                $value = ($subtotal * 0.25);?>
                <h4 class="text-gray-800 font-medium my-3 uppercase">-₱<?php echo number_format($value, 2);?> </h4>
            <?php } else { 
                $value = 0; ?>
                <h4 class="text-gray-800 font-medium my-3 uppercase">None </h4>
            <?php } ?>       
            </div>
            <div class="flex justify-between">
                <h4 class="text-gray-800 font-semibold my-3 uppercase">Total</h4>
                <?php $total = $subtotal - $value;?>
                <h4 class="text-gray-800 font-semibold my-3 uppercase">₱<?php echo number_format($total, 2);?></h4>
            </div>

            <!-- agreeement  -->
            <div class="flex items-center mb-4 mt-2">
                <input type="checkbox" id="agreement"
                    class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3">
                <label for="agreement" class="text-gray-600 ml-3 cursor-pointer text-sm">
                    Agree to our
                    <a href="#" class="text-primary">terms & conditions</a>
                </label>
            </div>
            <input type="text" name="total" value="<?php echo $total; ?>" class="hidden">
            <!-- checkout -->
            <input type="submit" name="submit" value="Place order" class="bg-primary border border-primary text-white px-4 py-3 font-medium rounded-md uppercase hover:bg-transparent
         hover:text-primary transition text-sm w-full block text-center">
            <!-- checkout end -->
            </form>
        </div>
        <!-- order summary end -->
    </div>
    <!-- checkout wrapper end -->

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