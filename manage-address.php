<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account</title>
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
        <p class="text-gray-600 font-medium uppercase">My Account</p>
    </div>
    <!-- breadcrum end -->

    <!-- account wrapper -->
    <div class="container lg:grid grid-cols-12 items-start gap-6 pt-4 pb-16">
        <!-- sidebar -->
        <div class="col-span-3">
            <!-- account profile -->
            <div class="bg-white px-4 py-3 shadow flex items-center gap-4">
                <div class="flex-shrink-0">
                    <img src="./img/defaultpic.png" class="rounded-full w-14 h-14 p-1 border border-gray-200 object-cover">
                </div>
                <div>
                    <p class="text-gray-600">Hello,</p>
                <?php if(isset($_SESSION['id'])){ ?>
                    <h4 class="text-gray-800 capitalize font-medium"><?php echo $_SESSION['firstname'];?></h4>
                <?php } else { ?>
                    <h4 class="text-gray-800 capitalize font-medium">Guest</h4>
                <?php } ?>     
                </div>
            </div>
            <!-- account profile end -->

            <!-- profile links -->
            <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
                <!-- single link -->
                <div class="space-y-1 pl-8">
                    <a href="account.php"
                        class="relative medium text-base1 font-medium capitalize hover:text-primary transition block">
                        Manage account
                        <span class="absolute -left-8 top-0 text-base1">
                            <i class="far fa-address-card"></i>
                        </span>
                    </a>
                    <a href="profile-info.php" class="hover:text-primary transition capitalize block ">Profile
                        information</a>
                    <a href="manage-address.php" class="hover:text-primary transition capitalize block text-primary">Manage
                        address</a>

                </div>
                <!-- single link end -->
                <!-- single link -->
                <div class="space-y-1 pl-8 pt-4">
                    <a href="my-order-history.php"
                        class="relative medium capitalize text-gray-800 font-medium1 hover:text-primary transition block">
                        My order history
                        <span class="absolute -left-8 top-0 text-base1">
                            <i class="fas fa-gift"></i>
                        </span>
                    </a>
                    <a href="my purchases.php" class="hover:text-primary transition block capitalize">my purchases</a>
                    <a href="my reviews.php" class="hover:text-primary transition block capitalize">my reviews</a>
                </div>
                <!-- single link end -->
                <!-- single link -->
                <div class="pl-8 pt-4">
                    <a href="wishlist.php"
                        class="relative capitalize hover:text-primary transition block">
                        my wishlist
                        <span class="absolute -left-8 top-0 text-base1">
                            <i class="far fa-heart"></i>
                        </span>
                    </a>
                </div>
                <!-- single link end -->
                <!-- single link -->
                <div class="pl-8 pt-4">
                    <a href="includes/logout.inc.php"
                        class="relative medium capitalize text-gray-800 font-medium1 hover:text-primary transition block">
                        logout
                        <span class="absolute -left-8 top-0 text-base1">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                    </a>
                </div>
                <!-- single link end -->
            </div>
            <!-- profile links end -->
        </div>
        <!-- sidebar end -->

          <!-- account content -->
          <div class="col-span-9 bg-white shadow rounded px-6 pt-5 pb-7 mt-6 lg:mt-0">
            <form action="includes/address.inc.php" method='post'>
                <h3 class="text-lg font-medium capitalize mb-4">
                    Manage Address
                </h3>
                <div class="space-y-4">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-gray-600 mb-2 block">
                                Country
                            </label>
                            <select name='country' class="input-box">
                            <?php
                                if(isset($_SESSION['country'])){
                                    if($_SESSION['country'] == 'South Korea'){ ?>
                                        <option value='South Korea' selected>South Korea</option>
                                        <option value='Philippines'>Philippines</option>
                                        <option value='China'>China</option>
                                        <option value='Japan'>Japan</option>
                                <?php
                                    }
                                    else if($_SESSION['country'] == 'Philippines'){ ?>
                                        <option value='South Korea'>South Korea</option>
                                        <option value='Philippines' selected>Philippines</option>
                                        <option value='China'>China</option>
                                        <option value='Japan'>Japan</option>
                                        <?php
                                    }
                                    else if($_SESSION['country'] == 'China'){ ?>
                                        <option value='South Korea'>South Korea</option>
                                        <option value='Philippines'>Philippines</option>
                                        <option value='China' selected>China</option>
                                        <option value='Japan'>Japan</option>
                                        <?php
                                    }
                                    else if($_SESSION['country'] == 'Japan'){ ?>
                                        <option value='South Korea'>South Korea</option>
                                        <option value='Philippines'>Philippines</option>
                                        <option value='China'>China</option>
                                        <option value='Japan' selected>Japan</option>
                                <?php
                                    }
                                }
                                else{ ?>
                                    <option value='South Korea' selected>South Korea</option>
                                    <option value='Philippines'>Philippines</option>
                                    <option value='China'>China</option>
                                    <option value='Japan'>Japan</option>
                                <?php
                                } ?>
                            </select>
                        </div>
                        <div>
                            <label class="text-gray-600 mb-2 block">
                                Region
                            </label>
                            <select name='region' class="input-box">
                            <?php
                                if(isset($_SESSION['region'])){
                                    if($_SESSION['region'] == 'NCR'){ ?>
                                        <option value='NCR' selected>NCR</option>
                                        <option value='Calabarzon'>Calabarzon</option>
                                <?php
                                    }
                                    else if($_SESSION['region'] == 'Calabarzon'){ ?>
                                        <option value='NCR'>NCR</option>
                                        <option value='Calabarzon' selected>Calabarzon</option>
                                <?php
                                    }
                                }
                                else{ ?>
                                    <option value='NCR' selected>NCR</option>
                                    <option value='Calabarzon'>Calabarzon</option>
                                <?php
                                } ?>                               
                            </select>
                        </div>
                    </div>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div>
                            <label class="text-gray-600 mb-2 block">
                                City
                            </label>
                            <select name='city' class="input-box">
                            <?php if(isset($_SESSION['city'])){ 
                                if($_SESSION['city'] == 'Seoul'){ ?>
                                    <option value='Seoul' selected>Seoul</option>
                                    <option value='Makati'>Makati</option>
                            <?php }
                                else if($_SESSION['city'] == 'Makati'){ ?>
                                        <option value='Seoul'>Seoul</option>
                                        <option value='Makati' selected>Makati</option>
                            <?php }
                                }
                                else{ ?>
                                    <option value='Seoul' selected>Seoul</option>
                                    <option value='Makati'>Makati</option>
                            <?php } ?>                     
                            </select>
                        </div>
                        <div>
                            <label class="text-gray-600 mb-2 block">
                               ZIP Code
                            </label>
                            <?php if(isset($_SESSION['address'])){ ?>
                                <input name='zipcode' type="text" class="input-box" value="<?php echo $_SESSION['zipcode'];?>">
                            <?php } else { ?>
                                <input name='zipcode' type="text" class="input-box" value="zipcode">
                            <?php } ?>
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Address
                        </label>
                        <?php if(isset($_SESSION['address'])){ ?>
                            <input type="text" name='address' class="input-box" value="<?php echo $_SESSION['address'];?>">
                        <?php } else { ?>
                            <input type="text" name='address' class="input-box" value="address">
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" name='billing'
                        class="px-6 py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
        <!-- account content end -->
    </div>
    <!-- account wrapper end -->

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
