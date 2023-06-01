<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="product.css">
</head>


<body>
<!--header--->
<header style="background-color: #c68234f5;">
    <nav class="navbar">
        
        <ul class="menu2">
            <li><a href="homepage - final.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="reproductdeets.php">Reviews</a></li>
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
     <script> const header = document.querySelector("header");
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
    <div class="container py-4 flex justify-between">
        <div class="flex gap-3 items-center">
            <a href="homepage - final.php" class="text-primary text-base">
                <i class="fas fa-home"></i>
            </a>
            <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
            <p class="text-gray-600 font-medium">Products</p>
        </div>
    </div>
    <!-- breadcrum end -->

    <!-- shop wrapper -->
    <div class="container grid lg:grid-cols-4 gap-6 pt-4 pb-16 items-start relative">
        <!-- sidebar -->
        <div
            class="col-span-1 bg-white px-4 pt-4 pb-6 shadow rounded overflow-hidden absolute lg:static left-4 top-16 z-10 w-72 lg:w-full lg:block">
            <div class="divide-gray-200 divide-y space-y-5 relative">
                <!-- category filter -->
                <div class="relative">
                    <div
                        class="lg:hidden text-gray-400 hover:text-primary text-lg absolute right-0 top-0 cursor-pointer">
                        <i class="fas fa-times"></i>
                    </div>
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
                    <div class="space-y-2">
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Bedroom"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Bedroom" class="text-gray-600 ml-3 cursor-pointer">Tote Bag</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Sofa"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Sofa" class="text-gray-600 ml-3 cursor-pointer">Mug</label>
                            <div class="ml-auto text-gray-600 text-sm">(05)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Office"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Office" class="text-gray-600 ml-3 cursor-pointer">Mousepad</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single category end -->
                        <!-- single category -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Outdoor"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Outdoor" class="text-gray-600 ml-3 cursor-pointer">All Products</label>
                            <div class="ml-auto text-gray-600 text-sm">(19)</div>
                        </div>
                        <!-- single category end -->
                    </div>
                </div>
                <!-- category filter end -->
                <!-- brand filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Theme</h3>
                    <div class="space-y-2">
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Dominik"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Dominik" class="text-gray-600 ml-3 cursor-pointer">KPop</label>
                            <div class="ml-auto text-gray-600 text-sm">(15)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Karl"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Karl" class="text-gray-600 ml-3 cursor-pointer">Aesthetic</label>
                            <div class="ml-auto text-gray-600 text-sm">(18)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Maxing"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Maxing" class="text-gray-600 ml-3 cursor-pointer">Motivational</label>
                            <div class="ml-auto text-gray-600 text-sm">(09)</div>
                        </div>
                        <!-- single brand name end -->
                        <!-- single brand name -->
                        <div class="flex items-center">
                            <input type="checkbox" id="Ernest"
                                class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                            <label for="Ernest" class="text-gray-600 ml-3 cursor-pointer">Custom Made</label>
                            <div class="ml-auto text-gray-600 text-sm">(12)</div>
                        </div>
                        <!-- single brand name end -->
                    </div>
                </div>
                <!-- brand filter end -->
                <!-- price filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Price</h3>
                    <div class="mt-4 flex items-center">
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="min">
                        <span class="mx-3 text-gray-500">-</span>
                        <input type="text"
                            class="w-full border-gray-300 focus:ring-0 focus:border-primary px-3 py-1 text-gray-600 text-sm shadow-sm rounded"
                            placeholder="mix">
                    </div>
                </div>
                <!-- price filter end -->
              
            </div>
        </div>
        <!-- sidebar end -->

        <!-- products -->
        <div class="col-span-3">
            <!-- sorting -->
            <div class="mb-4 flex items-center">
                <button ="showFilter=!showFilter"
                    class="bg-primary border border-primary text-white px-10 py-3 font-medium rounded uppercase hover:bg-transparent hover:text-primary transition lg:hidden text-sm mr-3 focus:outline-none">
                    Filter
                </button>
                <select
                    class="w-44 text-sm text-gray-600 px-4 py-3 border-gray-300 shadow-sm rounded focus:ring-primary focus:border-primary">
                    <option>Default sorting</option>
                    <option>Price low-high</option>
                    <option>Price high-low</option>
                    <option>Latest product</option>
                </select>
                <div class="flex gap-2 ml-auto">
                    <div
                        class="border border-primary w-10 h-9 flex items-center justify-center text-white bg-primary rounded cursor-pointer">
                        <i class="fas fa-th"></i>
                    </div>
                    <div
                        class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-600 rounded cursor-pointer">
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>
            <!-- sorting end -->
            <!-- product wrapper -->
            <div class="grid lg:grid-cols-2 xl:grid-cols-3 sm:grid-cols-2 gap-6">
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="./img/bp12.png" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="productdeets.php"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="productdeets.php">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Tote Bag
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">₱45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">₱55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="./img/bp12.png" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="productdeets.php"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="productdeets.php">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Tote Bag
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">₱45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">₱55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="./img/bp12.png" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="productdeets.php"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="productdeets.php">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Mousepad
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">₱45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">₱55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="./img/bp12.png" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="productdeets.php"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="productdeets.php">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Mousepad
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">₱45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">₱55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="./img/bp12.png" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="productdeets.php"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="productdeets.php">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Mousepad
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">₱45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">₱55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
                <!-- single product -->
                <div class="group rounded bg-white shadow overflow-hidden">
                    <!-- product image -->
                    <div class="relative">
                        <img src="./img/bp12.png" class="w-full">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
                            <a href="productdeets.php"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#"
                                class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end -->
                    <!-- product content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="productdeets.php">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                                Mousepad
                            </h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl text-primary font-roboto font-semibold">₱45.00</p>
                            <p class="text-sm text-gray-400 font-roboto line-through">₱55.00</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                                <span:key="n"><i class="fas fa-star"></i></span>
                            </div>
                            <div class="text-xs text-gray-500 ml-3">(150)</div>
                        </div>
                    </div>
                    <!-- product content end -->
                    <!-- product button -->
                    <a href="#"
                        class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">
                        Add to Cart
                    </a>
                    <!-- product button end -->
                </div>
                <!-- single product end -->
            </div>
            <!-- product wrapper end -->
        </div>
        <!-- products end -->
    </div>
    <!-- shop wrapper end -->

    <!--PAGINATION-->

    <div class="pagination">
        <a href="#" class="prev">&laquo; </a>
        <a href="#" class="page active">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="page">3</a>
        <a href="#" class="page">4</a>
        <a href="#" class="page">5</a>
        <a href="#" class="next"> &raquo;</a>
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

</body>

</html>