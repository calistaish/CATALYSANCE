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
				<?php
                  if(isset($_SESSION['id'])){
                ?>
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
			<script> const header = document.querySelector("header");
				
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
				});
				
				
				window.addEventListener("scroll", function() {
				  header.classList.toggle("sticky", window.scrollY > 0);
				});
				
				let menu = document.querySelector('#menu-icon');
				let navbar = document.querySelector('.navbar');
				
				menu.onclick = () => {
				  menu.classList.toggle('bx-x');
				  navbar.classList.toggle('open');
				};
				
				window.onscroll = () => {
				  menu.classList.remove('bx-x');
				  navbar.classList.remove('open');
				};
				  </script>
		</nav>