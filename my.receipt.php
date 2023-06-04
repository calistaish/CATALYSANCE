<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Receipt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="product.css">
</head>
<style>
.main-content {
  padding: 0px 20px; }

.invoice-container {
  max-width: 800px;
  margin: auto;
  padding: 3rem;
  background: #fff; }
  .invoice-container .top {
    margin-bottom: 4rem;
    display: flex;
    justify-content: space-between; }
    .invoice-container .top .top-left {
      color: var(--main-color); }
    .invoice-container .top .main {
      font-size: 30px;
      text-transform: uppercase;
      font-weight: 700;
      display: block;
      margin-bottom: 0.5rem; }
    .invoice-container .top .code {
      font-size: 20px; }
    .invoice-container .top .date {
      font-size: 18px;
      color: #ADADAD;
      margin-bottom: 10px; }
	


.bill-box {
  display: flex;
  justify-content: space-between;
  margin-bottom: 4rem;
  color: #ADADAD; }
  .bill-box .left, .bill-box .right {
    max-width: 240px; }
  .bill-box .text-m {
    font-size: 16px;
    margin-bottom: 1rem;
    text-transform: uppercase; }
  .bill-box .title {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    font-weight: 500;
    color: #2B2B2B; }
    .bill-box .addr {
    font-size: 15px;
    margin-bottom: 1rem;
    font-weight: 500;
    color: #ADADAD; }

.table-bill table {
  width: 100%;
  border-collapse: 0px;
  border-spacing: 0px;
  font-size: 1rem; }

.table-bill th, .table-bill td {
  text-align: left;
  padding: 10px 10px;
  font-weight: 500; }

.table-bill td {
  padding: 15px 10px; }

.table-bill th {
  text-transform: uppercase;
  background-color: var(--main-color);
  color: var(--bg-color);
  font-weight: 500; }

.table-bill .quantity {
  width: 100px; }

.table-bill .cost {
  text-align: right;
  white-space: nowrap; }

.table-bill .total  {
  font-size: 17px;
  color: #bc377e; }
  .table-bill .total td {
    font-weight: 700;
    border-top: 1px solid #ececec; }
  .table-bill .total .number {
    text-align: right;
     color: #bc377e;
    font-weight: 600; }


.actions {
  text-align: center;
  margin-top: 4rem; 
}
.actions .btn {
    margin: 3px;
    padding: 8px 10px;
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: 700;
    min-width: 130px;
  background-color: #bc377e;
     color: white;
  cursor: pointer;
  border-radius: 5px;
  transition: all 0.5s;
}
 .actions .btn:hover{
  box-shadow: 0 0 0 1px white, 0 0 0 2px #bc377e, 0 0 0 5px #bc377e, 0 0 0 6.5px white, 0 0 0 7px #bc377e;
  border-radius: 100px;
  background: white;
  color: #bc377e;
}
.note {
  text-align: center;
  margin-top: 1rem;
  font-size: 12px;
  color: #ADADAD; }

@media (max-width: 1320px) {
  body, html {
    font-size: 14px; }
  .invoice-container .top .date {
    font-size: 14px; }
  .invoice-container .top .main {
    font-size: 32px; }
  .invoice-container .top .code {
    font-size: 18px; }
  .bill-box .text-m {
    font-size: 14px; }
  .bill-box .title {
    font-size: 1.5rem; }
  .table-bill .total {
    font-size: 16px; } }

@media (max-width: 768px) {
  .invoice-container .top {
    display: block; }
    .invoice-container .top .top-left {
      margin-bottom: 1rem; }
  .bill-box {
    display: block; }
  .bill-box .left, .bill-box .right {
    max-width: 100%; }
  .table-bill table, .table-bill tbody, .table-bill tfoot, .table-bill td, .table-bill th, .table-bill tr {
    display: block; }
  .table-bill th {
    display: none; }
  .table-bill tbody tr {
    padding: 10px 0px;
    border-bottom: 1px solid #e5e5e5; }
    .table-bill tbody tr td:first-child {
      display: none; }
  .table-bill td {
    padding: 5px 0px; }
  .table-bill .cost {
    text-align: left; }
  .table-bill .total  {
    margin-top: 20px; }
    .table-bill .total td {
      border-top: 0px; }
    .table-bill .total .number {
      text-align: left; } }

@media (max-width: 420px) {
  .actions .btn {
    width: 100%;
    margin: 5px 0px; }
  .header {
    display: block; } }


</style>
<body>
<div class="preloader"></div>
<div class="content4">

      <header style="background-color: #c68234f5;">
          <nav class="navbar">
        
        <ul class="menu2">
            <li><a href="homepage - final.html">Home</a></li>
            <li><a href="product.html">Product</a></li>
            <li><a href="review.html">Reviews</a></li>
            <li><a href="about us.html">About Us</a></li>
        </ul>
        
        <div class="logo-container">
            <a href="#" class="logo">
                <img src="./img/logo8.png" alt="Logo">
            </a>
        </div>
        
        <ul class="icons2">
            <li>
                <a href="wishlist.html">
                    <img src="./img/wishlist.png" alt="Wishlist">
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    <img src="./img/cart.png" alt="Add to Cart">
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="userlogin.html">
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
        <a href="homepage - final.html" class="text-primary text-base">
            <i class="fas fa-home"></i>
        </a>
         <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
    <a href="my purchases(updated).php" class="text-primary text-base1 font-medium uppercase">
        My Purchases
    </a>
    <span class="text-sm text-gray-400"><i class="fas fa-chevron-right"></i></span>
    <p class="text-gray-600 font-medium uppercase">My Receipt</p>
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
                    <a href="account.html"
                        class="relative medium capitalize text-gray-800 font-medium1 hover:text-primary transition block">
                        Manage account
                        <span class="absolute -left-8 top-0 text-base1">
                            <i class="far fa-address-card"></i>
                        </span>
                    </a>
                    <a href="profile-info.html" class="hover:text-primary transition capitalize block">Profile
                        information</a>
                    <a href="manage-address.html" class="hover:text-primary transition capitalize block">Manage
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
                    <a href="wishlist.html"
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
			
		  <div class="main-content">
        <div class="invoice-container">
           <div class="top">
                <div class="top-left">
                    <h1 class="main">WEAR YOUR MOOD</h1>
                    <span class="code">#0001</span>
                </div>
                <div class="top-right">
                    <div class="date">Date: 06/15/2023</div>
                </div>
            </div>
            <div class="bill-box">
                <div class="left">
                    <div class="text-m">Bill from:</div>
                    <div class="title">Wear Your Mood Prints</div>
                    <div class="addr">99 Blk 12 United HOA., San Pedro St. Pinalad Rd. Centennial 2, Pasig</div>
                </div>
                <div class="right">
                    <div class="text-m">Bill TO:</div>
                    <div class="title">Chanyeol</div>
                    <div class="addr">3SM Entertainment 83-21, Wangsimni-ro, Seongdong-gu.</div>
                </div>
            </div>
            <div class="table-bill">
                <table class="table-service">
                    <thead>
                        <th class="quantity">Quantity</th>
                        <th>Product</th>
                        <th class="cost">Price</th>
			<th class="cost">Total Price</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>x2</td>
                            <td>Purple Aesthetic Trendy Totebag</td>
                            <td class="cost">₱130.00</td>
			    <td class="cost">₱260.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="total">
                            <td class="name">Subtotal</td>
                            <td colspan="3" class="number">₱260.00</td>
                        </tr>
			<tr class="total">
                            <td class="name">Tax</td>
                            <td colspan="3" class="number">₱50.00</td>
                        </tr>
			<tr class="total">
                            <td class="name">Total</td>
                            <td colspan="3" class="number">₱310.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        
   <div class="actions">
                <a href="#" class="btn btn-main">BUY AGAIN</a>
            </div>
            <div class="note">
                <p>Thank You for working with us!</p>
                <p>Daily Service.com</p>
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