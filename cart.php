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
            <li>
                <a href="userlogin.php">
                    <img src="./img/acc1.png" alt="Sign In">
                    <span>Sign In</span>
                </a>
            </li>
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

        <!-- shipping carts -->
        <div class="space-y-4">
            <!-- single cart -->
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
                        Tote Bag
                    </h2>
                    <p class="text-primary font-semibold">₱45.00</p>
                    <p class="text-gray-500">Theme: KPop</p>
                </div>
                <!-- cart content end -->
                <!-- cart quantity -->
                <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300">
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                    <div class="h-8 w-10 flex items-center justify-center">4</div>
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                </div>
                <!-- cart quantity end -->
                <div class="ml-auto md:ml-0">
                    <p class="text-primary text-lg font-semibold">₱320.00</p>
                </div>
                <div class="text-gray-600 hover:text-primary cursor-pointer">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            <!-- single cart end -->
            <!-- single cart -->
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
                        Tote Bag
                    </h2>
                    <p class="text-primary font-semibold">₱45.00</p>
                    <p class="text-gray-500">Theme: KPop</p>
                </div>
                <!-- cart content end -->
                <!-- cart quantity -->
                <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300">
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                    <div class="h-8 w-10 flex items-center justify-center">4</div>
                    <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                </div>
                <!-- cart quantity end -->
                <div class="ml-auto md:ml-0">
                    <p class="text-primary text-lg font-semibold">₱320.00</p>
                </div>
                <div class="text-gray-600 hover:text-primary cursor-pointer">
                    <i class="fas fa-trash"></i>
                </div>
            </div>
            <!-- single cart end -->
        </div>
        <!-- shipping carts end -->
    </div>
    <!-- product cart end -->
    <!-- order summary -->
    <div class="xl:col-span-3 lg:col-span-4 border border-gray-200 px-4 py-4 rounded mt-6 lg:mt-0">
        <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">ORDER SUMMARY</h4>
        <div class="space-y-1 text-gray-600 pb-3 border-b border-gray-200">
            <div class="flex justify-between font-medium">
                <p>Subtotal</p>
                <p>₱320</p>
            </div>
            <div class="flex justify-between">
                <p>Delivery</p>
                <p>Free</p>
            </div>
            <div class="flex justify-between">
                <p>Tax</p>
                <p>Free</p>
            </div>
        </div>
        <div class="flex justify-between my-3 text-gray-800 font-semibold uppercase">
            <h4>Total</h4>
            <h4>₱320</h4>
        </div>

        <!-- searchbar -->
        <div class="flex mb-5">
            <input type="text"
                class="pl-4 w-full border border-r-0 border-primary py-2 px-3 rounded-l-md focus:ring-primary focus:border-primary text-sm"
                placeholder="Coupon">
            <button type="submit"
                class="bg-primary border border-primary text-white px-5 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition text-sm font-roboto">
                Apply
            </button>
        </div>
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