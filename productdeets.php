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
    <a href="product.php" class="text-primary text-base1 font-medium uppercase">
        Shop
    </a>
    <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
    <p class="text-gray-600 font-medium uppercase">Tote Bags</p>
</div>
<!-- breadcrum end -->
   <!-- product view -->
   <div class="container pt-4 pb-6 grid lg:grid-cols-2 gap-6">
   <?php 
    require_once 'includes/conn.inc.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM images where product_id = ".  $id . ";";
    $rs_result = $conn->query($sql);
    while($row = $rs_result->fetch_assoc()) {
    ?>
    <!-- product image -->
    <div>
        <div>
            <img id="main-img" src="<?php echo $row['image'];?>" class="w-full zoom">
        </div>
        <div class="grid grid-cols-5 gap-4 mt-4">
            <?php 
                require_once 'includes/conn.inc.php';
                $sql = "select count(*) from images where id = ".  $id . ";";
                $rs_result = $conn->query($sql);
                $rs_result = $conn->query($sql);
                while($row = $rs_result->fetch_assoc()) {
                $quant = $row['count(*)'];
                for($i = 1; $i <= $quant; $i++){ 
                    require_once 'includes/conn.inc.php';
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM images where id = " . $i . " AND product_id = ".  $id . ";";
                    $rs_result = $conn->query($sql);
                    while($row = $rs_result->fetch_assoc()) {
                    ?>
                    
                    <div>
                    <img src="<?php echo $row['image'];?>" class="single-img w-full cursor-pointer border border-primary">
                    </div>
                <?php }
                }
            }
            
            ?>
            
            <div>
                <img src="./img/bp11.png" class="single-img w-full cursor-pointer border">
            </div>
            <div>
                <img src="./img/bp12.png" class="single-img w-full cursor-pointer border">
            </div>
            <div>
                <img src="./img/bp11.png" class="single-img w-full cursor-pointer border">
            </div>
            <div>
                <img src="./img/bp14.png" class="single-img w-full cursor-pointer border">
            </div>
        </div>
    </div>
    <?php }?>
    <!-- product image end -->
    <?php 
    require_once 'includes/conn.inc.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM productDetails where id = ".  $id . ";";
    $rs_result = $conn->query($sql);
    while($row = $rs_result->fetch_assoc()) {
    ?>
    <!-- product content -->
    <div>
        <h2 class="md:text-3xl text-2xl font-medium uppercase mb-2"><?php echo $row['name'];?></h2>
        <div class="flex items-center mb-4">
            <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(<?php echo $row['reviews'];?> Reviews)</div>
        </div>
        <div class="space-y-2">
            <p class="text-gray-800 font-semibold space-x-2">
                <span>Availability: </span>
                <span class="text-green-600"><?php echo $row['status'];?></span>
            </p>
            <p class="space-x-2">
                <span class="text-gray-800 font-semibold">Theme: </span>
                <span class="text-gray-600"><?php echo $row['theme'];?></span>
            </p>
            <p class="space-x-2">
                <span class="text-gray-800 font-semibold">Category: </span>
                <span class="text-gray-600"><?php echo $row['category'];?></span>
            </p>
            <p class="space-x-2">
                <span class="text-gray-800 font-semibold">SKU: </span>
                <span class="text-gray-600">BE45VGRT</span>
            </p>
        </div>
        <div class="mt-4 flex items-baseline gap-3">
            <span class="text-primary font-semibold text-xl1">₱<?php echo number_format($row['price'], 2);?></span>
        </div>
        <form>
        <!-- design style -->
        <div class="mt-4">
            <h3 class="text-base1 text-gray-800 mb-1">Design</h3>
            <div class="flex items-center gap-2">
                <!-- design style size -->
                <div class="size-selector">
                    <input type="radio" name="size" class="hidden" id="size-xs">
                    <label for="size-xs"
                        class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                        1
                    </label>
                </div>
                <!-- design style end -->
                <!-- design style size -->
                <div class="size-selector">
                    <input type="radio" name="size" class="hidden" id="size-s">
                    <label for="size-s"
                        class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                        2
                    </label>
                </div>
                <!-- design style end -->
                <!-- design style end size -->
                <div class="size-selector">
                    <input type="radio" name="size" class="hidden" id="size-m" checked>
                    <label for="size-m"
                        class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                        3
                    </label>
                </div>
                <!-- design style end -->
                <!-- design style -->
                <div class="size-selector">
                    <input type="radio" name="size" class="hidden" id="size-l">
                    <label for="size-l"
                        class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                        4
                    </label>
                </div>
                <!-- design style end -->
                <!-- design style -->
                <div class="size-selector">
                    <input type="radio" name="size" class="hidden" id="size-xl">
                    <label for="size-xl"
                        class="text-xs border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-600">
                        5
                    </label>
                </div>
                <!-- design style end -->
            </div>
        </div>
        <!-- size end -->
    
        <!-- quantity -->
        <div class="mt-4">
            <h3 class="text-base1 text-gray-800 mb-1">Quantity</h3>
            <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                <div class="h-8 w-10 flex items-center justify-center">4</div>
                <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
            </div>
        </div>
        <!-- color end -->
        <!-- add to cart button -->
        <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
            <a href="includes/addtocart.inc.php?id=<?php echo $row['id']?>" class="bg-primary border border-primary text-white px-8 py-2 font-medium rounded uppercase 
                hover:bg-transparent hover:text-primary transition text-sm flex items-center">
                <span class="mr-2"><i class="fas fa-shopping-bag"></i></span> Add to cart
            </a>
        </form>
            <a href="includes/addwishlist.inc.php?id=<?php echo $row['id']?>" class="border border-gray-300 text-gray-600 px-8 py-2 font-medium rounded uppercase 
                hover:bg-transparent hover:text-primary transition text-sm">
                <span class="mr-2"><i class="far fa-heart"></i></span> Wishlist
            </a>
        </div>
        <!-- add to cart button end -->
        <!-- product share icons -->
        <div class="flex space-x-3 mt-4">
            <a href="#"
                class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#"
                class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#"
                class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <!-- product share icons end -->
    </div>
    <!-- product content end -->
</div>
<!-- product view end -->

<!-- product details and review -->
<div class="container pb-16">
    <!-- detail buttons -->
    <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">
        Product Details
    </h3>
    <!-- details button end -->

    <!-- details content -->
    <div class="lg:w-4/5 xl:w-3/5 pt-6">
        <div class="space-y-3 text-gray-600">
            <p>
            <?php echo $row['details'];?>
            </p>
            
        </div>
        <!-- details table -->
        <table class="table-auto border-collapse w-full text-left text-gray-600 text-sm mt-6">
            <tr>
                <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Design</th>
                <td class="py-2 px-4 border border-gray-300">Blue, Minimalist, Aesthetic</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Material</th>
                <td class="py-2 px-4 border border-gray-300">Canvas</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Weight</th>
                <td class="py-2 px-4 border border-gray-300">1kg</td>
            </tr>
        </table>
        <!-- details table -->
    </div>
    <!-- details content end -->
</div>
<?php }?>
<!-- product details and review end -->


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
<script>
    let mainImg = document.getElementById('main-img')
    let imgBars = document.getElementsByClassName('single-img')

    for(let imgBar of imgBars){
        imgBar.addEventListener('click', function(){
            clearActive()
            let imgPath = this.getAttribute('src')
            mainImg.setAttribute('src', imgPath)
            this.classList.add('border-primary')
        })
    }

    function clearActive(){
        for(let imgBar of imgBars){
            imgBar.classList.remove('border-primary')
        }
    }
</script>
   </body>
   </html>