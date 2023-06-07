
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="product.css">
</head>
<style>
.container{
 max-width: 1200px;
}	
.cart{
 display: flex;
}
.container h1{
 color: #333333;
 font-weight: 700;
 margin-bottom:1rem;
}
.products{
 flex: 0.75;
}
.product{
 display: flex;
 height: 650px;
 width: 900px;
}
.product > img{
 width: 300px;
 height: 300px;
 box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
}
.product-info{
 padding: 20px;
 width: 100%;
 position: relative;
 display: flex;
 flex-direction: column;
}

.status{
  color: #10B981;
  font-size: 15px;
  right: -200px;
}



/*RESPONSIVENESS NG DINAGDAG KO*/
@media screen and (max-width: 700px){
	.status{
	right: -130px;
	}
	
	.product{
		flex-direction: column;
		height: 600px;
	} 
	.product > img{
		height: auto;
		width: 200px;
	}
	
}
@media screen and (max-width: 1220px){
	.container{
		max-width: 170%;
	}
}
product-details-list {
    list-style-type: none;
    padding-left: 20px; 
    text-align: justfiy;
}

.product-details-list li:before {
    content: "\2022";
    color: #bc377e;
    font-size: 20px;
    margin-right: 5px;
}
}



</style>
<body>
<div class="preloader"></div>
<div class="content4">

      <header style="background-color: #c68234f5;">
          <nav class="navbar">
        
        <ul class="menu2">
            <li><a href="homepage - final.php>Home</a></li>
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
    <a href="my purchases(updated).php" class="text-primary text-base1 font-medium uppercase">
        My Purchases
    </a>
    <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
    <p class="text-gray-600 font-medium uppercase">My Order Details</p>
    </div>
    <!-- breadcrum end -->

    <!-- account wrapper -->
    <div class="container lg:grid grid-cols-12 items-start gap-6 pt-4 pb-16">
        <!-- sidebar -->
        <div class="col-span-3">
            <!-- account profile -->
            <div class="bg-white px-4 py-3 shadow flex items-center gap-4">
                <div class="flex-shrink-0">
                    <img src="./img/chanyeol.jpg" class="rounded-full w-14 h-14 p-1 border border-gray-200 object-cover">
                </div>
                <div>
                    <p class="text-gray-600">Hello,</p>
                    <h4 class="text-gray-800 capitalize font-medium">Chanyeol</h4>
                </div>
            </div>
            <!-- account profile end -->

            <!-- profile links -->
            <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">

                <!-- single link -->
                <div class="space-y-1 pl-8">
                    <a href="account.php"
                        class="relative medium capitalize text-gray-800 font-medium1 hover:text-primary transition block">
                        Manage account
                        <span class="absolute -left-8 top-0 text-base1">
                            <i class="far fa-address-card"></i>
                        </span>
                    </a>
                    <a href="profile-info.php" class="hover:text-primary transition capitalize block">Profile
                        information</a>
                    <a href="manage-address.php" class="hover:text-primary transition capitalize block">Manage
                        address</a>

                </div>
                <!-- single link end -->
                <!-- single link -->
                <div class="space-y-1 pl-8 pt-4">
                    <a href="#"
                        class="relative medium text-base1 font-medium capitalize hover:text-primary transition block">
                        My order history
                        <span class="absolute -left-8 top-0 text-base1">
                            <i class="fas fa-gift"></i>
                        </span>
                    </a>
                    <a href="#" class="hover:text-primary transition capitalize block text-primary">my purchases</a>
                    <a href="#" class="hover:text-primary transition block capitalize">my reviews</a>
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
                    <a href="#"
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


         <!-- order details content -->
	<div class=" col-span-9 mt-6 lg:mt-0 space-y-4">
            <!-- single wishlist -->
            <div
                class="bg-white flex items-center md:justify-between gap-4 md:gap-6 p-4 border border-gray-200 rounded flex-wrap md:flex-nowrap">
               <div class="container">
			<h3 class="text-lg font-medium capitalize mb-4">
                    My Order Details
	</h3>
        
		<div class="cart">
		<div class="products">
			<div class="product">
				<div class="product-info">					
				<div>		
			 	 <table>
	  			   <tr>
    	  			    <td>
		                      <label class="text-gray-600 mb-2 block">Order Number:&nbsp;</label>
			             </td>
    	 			     <td>
      				      <p class="order_number" style="margin-top: -5px;"> 0001 </p>
   	 			     </td>
  				    </tr>
	 			   <tr>
    	  			    <td>
		                      <label class="text-gray-600 mb-2 block">Order Date:&nbsp;</label>
			             </td>
    	 			     <td>
      				      <p class="order_date" style="margin-top: -5px;"> 06/15/2023 </p>
   	 			     </td>
  				    </tr>
				   <tr>
    	  			    <td>
		                      <label class="text-gray-600 mb-2 block">Product Name:&nbsp;</label>
			             </td>
    	 			     <td>
      				      <p class="order_name"style="margin-top: -5px;"> Tote Bag</p>
   	 			     </td>
  				    </tr>
				   <tr>
    	  			    <td>
		                      <label class="text-gray-600 mb-2 block">Variation:&nbsp;</label>
			             </td>
    	 			     <td>
      				      <p class="order_name"style="margin-top: -5px;"> Purple Aesthetic Trendy</p>
   	 			     </td>
  				    </tr>
				  </table>
				  <table>
				   <tr>
    	  			    <td>
		                      <label class="text-gray-600 mb-2 block">Product Description:&nbsp;</label>
					<ul class="product-details-list">
        				 <li>Lorem ipsum dolor sit amet, consectetur </li>
       					 <li>Lorem ipsum dolor sit amet, consectetur </li>
        				 <li>Lorem ipsum dolor sit amet, consectetur </li>
    					</ul></p>
			             </td>
  				    </tr>
				   <tr>
    	  			    <td>
		                      <label class="text-gray-600 mb-2 block" style="margin-top: 3px;">Product Description:&nbsp;</label>
					<ul class="product-details-list">
        				 <li>Color</li>
       					 <li>Size</li>
        				 <li>Measurement</li>
    					</ul></p>
			             </td>
  				    </tr>	
				</table>
				<table>
	  			 <tr>
    	  			  <td>
				   <label class="text-gray-600 mb-2 block">Quantity:</label>
          			  </td>
    	  			  <td>
 				   <p class="quantity"> x2 </p>
   	 			 </td>
  				</tr>
	  			<tr>	
           			 <td>
				  <label class="text-gray-600 mb-2 block">Per Product Price:&nbsp;</label>
		    		  </td>
		    		 <td>
			          <p class="product_price">₱130.00</p>
    			         </td>
  			       </tr>
		  		<tr>
           			  <td>
		               	 <label class="text-gray-600 mb-2 block">Subtotal:&nbsp;</label>
		    		</td>
		    		<td>
				 <p class="subtotal">₱260.00</p>
    				</td>
  			      </tr>
			       <tr>
          			 <td>
				<label class="text-gray-600 mb-2 block">Tax: &nbsp;
	      			 </label>
		    		 </td>
		    		<td>
				<p class="product_price">₱50.00</p>
    			        </td>
  			     </tr>
			      <tr>
           			<td>
				<label class="text-gray-600 mb-2 block">Total:&nbsp;</label>
		                 </td>
		    		<td>
				<p class="product_price">₱310.00</p>
    				</td>
  			     </tr>
		 	     <tr>
           		       <td>
				<label class="text-gray-600 mb-2 block">Status: &nbsp;</label>
		    		</td>
		    		<td>
				<p class="status"><i>Order Approved</i></p>
    			    </td>
  			    </tr>
			  </table>
				
				  </div>
				</div>
			   </div>
		       </div>
		   </div>
		</div>
            </div>
	</div>
        <!-- content details end -->
    <!-- account wrapper end -->
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
</div>
  
   </body>
   
   </html>
