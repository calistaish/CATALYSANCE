<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.png">
    <title>Custom Made</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
	text-decoration: none;
	list-style: none;
	scroll-behavior: smooth;
}

:root{
	--bg-color: #fff8f0;
    --text-color: #221314;
    --second-color: #c48862ec;
    --main-color: #c68234f5;
	--big-font: 6rem;
	--small-font: 1.2rem;
	--h2-font: 3rem;
	--p-font: 1.1rem;
}
body{
	background: var(--bg-color);
	color: var(--text-color);
      	
}

/* HEADER */
header {
            background: transparent;
            padding: 30px 18px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            align-items: center;
            justify-content: space-between;
            transition: ease .40s;
        }
        
        .navbar {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-left: 80px;
            padding: 0;
            list-style: none;
        }
        
        
        .logo-container {
            margin-right: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }
        
        .logo {
            width: 100px;
            text-align: center;
        }
        
        .logo img {
            display: block;
            max-width: 100px;
        }
        
  .menu2 {
          list-style-type: none;
          margin: 0;
          padding: 0;
          display: flex;
          align-items: center;
          color: var(--bg-color);
          font-size: var(--p-font);
          font-weight: 500;
          padding: 10px;
          border-radius: 4px;
          transition: ease .40s;
      }
      
  
      .menu2 a {
          margin-right: 20px;
          color: var(--bg-color);
          font-size: var(--p-font);
          font-weight: 500;
          display: flex;
          align-items: center;
          margin: 0 10px;
          padding: 7px;
          border-radius: 4px;
          transition: ease .40s;
      }
      
      .menu2 li a {
          text-align: right;
          color: rgb(255, 255, 255);
          text-decoration: none;
      }
      
      .icons2 a {
          color: var(--bg-color);
          font-size: var(--p-font);
          font-weight: 500;
          display: flex;
          align-items: center;
          margin: 0 10px;
          padding: 7px;
          border-radius: 4px;
          transition: ease .40s;
      }
      
      .icons2 {
          display: flex;
          align-items: center;
          margin-left: auto;
          margin-right: 80px;
      }
      
      .icons2 img {
          height: 30px;
          width: 30px;
          margin-right: 5px;
          transition: ease .40s;
      }
      
      .icons2 img:hover {
          box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
          border-radius: 5px;
      }
      .menu2 a:hover,
      .icons2 a:hover {
background: var(--bg-color);
color: var(--text-color);
box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
border-radius: 5px;
}

      .burger-menu2 {
          display: none;
          cursor: pointer;
          margin-left: auto;
      }
      
      .burger-menu2 span {
          display: block;
          width: 30px;
          height: 3px;
          background-color: rgb(255, 255, 255);
          margin-bottom: 5px;
          transition: all 0.3s ease-in-out;
      }
      
      .burger-menu2.active span:nth-child(1) {
          transform: rotate(-45deg) translate(-5px, 6px);
      }
      
      .burger-menu2.active span:nth-child(2) {
          opacity: 0;
      }
      
      .burger-menu2.active span:nth-child(3) {
          transform: rotate(45deg) translate(-5px, -6px);
      }
      
      .burger-icons2 {
          display: none;
          cursor: pointer;
          margin-left: auto;
      }
      
      .burger-icons2 span {
          display: block;
          width: 30px;
          height: 3px;
          background-color: rgb(255, 255, 255);
          margin-bottom: 5px;
          transition: all 0.3s ease-in-out;
      }
      
      .burger-icons2.active span:nth-child(1) {
          transform: rotate(-45deg) translate(-5px, 6px);
      }
      
      .burger-icons2.active span:nth-child(2) {
          opacity: 0;
      }
      
      .burger-icons2.active span:nth-child(3) {
          transform: rotate(45deg) translate(-5px, -6px);
      }
      
      @media (max-width: 768px) {
          .burger-menu2 {
              display: block;
          }
      
          .menu2 {
              display: none;
              flex-direction: column;
              position: absolute;
              top: 100%;
              left: 0;
              width: 100%;
              padding: 20px;
              background-color: var(--main-color);
          }
      
          .menu2.show {
              display: flex;
          }
      
          .burger-icons2 {
              display: block;
          }
      
          .icons2 {
              display: none;
              flex-direction: column;
              position: absolute;
              top: 100%;
              left: 0;
              width: 100%;
              padding: 20px;
              background-color: var(--main-color);
          }
      
          .icons2.show {
              display: flex;
          }
      }
        header.sticky {
  background: #fff8f0f7;
  padding: 20px 18px;
  box-shadow: rgba(33, 35, 38, 0.1) 0px 10px 10px -10px;
}

.sticky .logo {
  color: #c68234f5;
}

.sticky .navbar a {
  color: #edc190f5;
}
.sticky .icons span  {
 color:  #edc190f5;
}
.sticky .burger-icons span {
    background-color: #c68234f5;
  }
  .sticky .burger-menu span {
    background-color: #c68234f5;
  }
  .sticky .burger-icons2 span {
    background-color: #fffffff5;
  }
  .sticky .burger-menu2 span {
    background-color: #fffffff5;
  }

  .banner {
  margin-top: 9.4%;
  width: 100%;
}
.w-full {
  width: 100%;
}


.container-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: var(--bg-color);
  margin: -1% 5%;
  margin-bottom: 20px; 
}


.card1,
.card2 {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: auto;
  padding: 40px 0;
}

.card-text {
  margin: 0 20px;
  text-align: justify;
}

.card-text h1 {
  margin-top: 20px;
  margin-bottom: 10px;
  font-size: var(--big-font);
  color: var(--main-color);
}

.card-text h2 {
  margin-top: 20px;
  margin-bottom: 10px;
  font-size: var(--h2-font);
  color: #B80071;
}

.card-text p {
  margin-bottom: 20px;
  font-weight: 400;
  font-size: 1.3rem;
  color: var(--text-color);
}

.card2 .circle-card2 {
  position: absolute;
  top: -40px;
  right: 0;
  width: 300px;
  height: 300px;
  background-color: var(--second-color);
  border-radius: 50%;
  z-index: -1;
}
@media (max-width: 768px) {
            .banner {
                margin-top: 22%;
            }
            
            .container-content {
                margin: 0 5%;
            }
            
            .card1,
            .card2 {
                flex-direction: column;
            }
            
            .card-text {
                margin: 20px 0;
            }
            
            .card2 .circle-card2 {
                display: none;
            }
        }
label {
  font-size: var(--small-font);
  font-weight: 600;
  color: #B80071;
}

select,
textarea {
  width: 100%;
  margin-top: 5px;
  padding: 10px;
  font-size: var(--p-font);
  color: var(--text-color);
  border: 2px solid #B80071;
  border-radius: 5px;
  text-align: center;
}

textarea {
  resize: vertical;
}

.container1 {
	max-width: 900px;
	width: 100%;
	background: #fff;
  margin-top: 2%;
	padding: 30px;
	border-radius: 30px;
}
.img-area {
	position: relative;
	width: 100%;
	height: 240px;
	margin-bottom: 30px;
	border-radius: 15px;
	overflow: hidden;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.img-area .icon {
	font-size: 100px;
  color: #B80071;
}
.img-area h3 {
	font-size: 20px;
	font-weight: 500;
	margin-bottom: 6px;
}
.img-area p {
	color: #999;
}
.img-area p span {
	font-weight: 600;
}
.img-area img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
	object-position: center;
	z-index: 100;
}
.img-area::before {
	content: attr(data-img);
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, .5);
	color: #fff;
	font-weight: 500;
	text-align: center;
	display: flex;
	justify-content: center;
	align-items: center;
	pointer-events: none;
	opacity: 0;
	transition: all .3s ease;
	z-index: 200;
}
.img-area.active:hover::before {
	opacity: 1;
}
.select-image {
	display: block;
	width: 100%;
	padding: 16px 0;
	border-radius: 15px;
	background: #B80071;
	color: #f0e0e0;
	font-weight: 600;
	font-size: 16px;
	border: none;
	cursor: pointer;
	transition: all .3s ease;
}
.select-image:hover {
	background: var(--dark-blue);
}
.message-box {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #fbeedde7;
      border: 2px solid var(--main-color);
      border-radius: 5px;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 3);
    }

    .message-box h2 {
      margin-top: 0;
      color: #333;
    }

    .button-container {
      text-align: center;
      margin-top: 20px;
    }

    .button-container button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: hsl(332, 91%, 37%);
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .button3 button {
      margin-top: 20%;
      padding: 17px 40px;
     border-radius: 50px;
     border: 0;
     background-color: var(--main-color);
     box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
     letter-spacing: 1.5px;
    text-transform: uppercase;
    font-size: 16px;
    color: var(--bg-color);
    transition: all .5s ease;
}

.button3 button:hover {
 letter-spacing: 3px;
 background-color: hsl(332, 91%, 37%);
 color: hsl(0, 0%, 100%);
 box-shadow: hsl(332, 91%, 37%) 0px 7px 29px 0px;
}

.button3 button:active {
 letter-spacing: 3px;
 background-color: hsl(332, 91%, 37%);
 color: hsl(0, 0%, 100%);
 box-shadow: hsl(332, 91%, 37%) 0px 0px 0px 0px;
 transform: translateY(10px);
 transition: 100ms;
}
/* WebKit Browsers */
::-webkit-scrollbar {
  width: 8px; /* Adjust the width as needed */
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(45deg, pink, orange); /* Replace with your desired gradient */
  border-radius: 8px; /* Adjust the radius as needed */
}

/* Firefox */
::-moz-scrollbar {
  width: 8px; /* Adjust the width as needed */
}

::-moz-scrollbar-thumb {
  background: linear-gradient(45deg, pink, orange); /* Replace with your desired gradient */
  border-radius: 8px; /* Adjust the radius as needed */
}
/* FOOTER */
#contact {
	margin: 0;
    padding: 30px 0;
    color: #c68234f5;
    font-size: 18px;
    line-height: 1.5;
    width: 100%;
	margin-bottom: 20px;
}

.footer {
    display: flex;
    justify-content: center;
    border-top: 2px solid #c68234f5;
    padding-top: 50px;
	width: 80%;
    margin: auto;
}

.list {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 50px;
}

.list h4 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #c68234f5;
}

.social {
    display: flex;
}

.social a {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    background-color: rgba(198, 130, 52, 0.3);
    transition: all 0.3s ease;
}

.social a:hover {
    background-color: rgba(198, 130, 52, 0.5);
    transform: scale(1.1);
}

.social i {
    font-size: 24px;
    color: #c68234f5;
}

.end-text {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.end-text p {
    font-size: 14px;
    text-align: center;
    color: #c68234f5;
}
@keyframes FadeInUp {
	0% {
		transform:translateY(15px);
		opacity:0;
	}
	
	100% {
		transform:translateY(0px);
		opacity:1;
	}
}
@media screen and (min-width: 992px){
    .about-wrapper{
	margin-top: 3rem;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .about-left{
        position: relative;
    }
    .about-left-content{
        position: absolute;
        right: -50px;
    }
}
@media screen and (max-width: 1250px){
	.about{
	   margin-bottom: -3rem;
	   width: 100%;
	   height: auto;
	   padding: 60px 0;
	   align-items: center;
	}
	.all-text{
	   text-align: center;
	   margin-bottom: 30px;
	}
}
@media screen and (max-width: 1010px){
	.about{
	   margin-bottom: -5rem;
	   width: 100%;
	   height: auto;
	   padding: 60px 0;
	   align-items: center;
	}
	.all-text{
	   text-align: center;
	   margin-bottom: 30px;
	}
	 .about-wrapper{
	margin-bottom: 40rem;
	margin-top: -1rem;

    }
}
@media screen and (max-width: 650px){
	.about .main img{
	   margin-bottom: 10px;
	}
	.about-right{
	margin-left: -20px;
	width: 75vh;
	}
	 .about-left{
        margin-left: 150px;
    }
	 .about-wrapper{
	margin-bottom: 40rem;
    }
}
  </style>
  </head>
  <body>
    <!--header--->
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
        <script> const header = document.querySelector("header");
          window.addEventListener('DOMContentLoaded', () => {
            const burgerMenu = document.querySelector('.burger-menu');
            const burgerIcons = document.querySelector('.burger-icons');
            const icons = document.querySelector('.icons');
            const menu = document.querySelector('.menu');
          
            burgerMenu.addEventListener('click', () => {
            burgerMenu.classList.toggle('active');
            menu.classList.toggle('show');
            });
          
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
      </header>

      <div class="banner">
          <a href="#">
            <img src="./img/hays.png" class="w-full">
          </a>
      </div>
      <div class="container-content">
        <div class="card1">
        <div class="card-text">
          <h1>CUSTOM MADE PRODUCTS</h1>
          <p>Indulge in the sinful pleasure of custom-made products tailored to your deepest desires. Unleash your naughty side and explore a world of tantalizing possibilities, where your imagination takes center stage. With each bespoke creation, we craft an intimate masterpiece that embraces your wildest fantasies. Let your imagination run wild and experience the seductive allure of personalized delights, designed exclusively for your pleasure. Surrender to the temptation and immerse yourself in a realm where boundaries are shattered and desires are brought to life. Dare to indulge in the forbidden and revel in the exhilarating sensation of owning a truly naughty treasure, made just for you.</p>
        </div>
      </div>
        <div class="card2">
          <div class="card-text">
            <h2>MAKE A REQUEST HERE</h2>
            <p>Please select the category you wish to customize and describe your desired design in the text box. Additionally, you have the option to upload your desired design.</p>
          </div>
        </div>
        <div class="container">
          <label for="category">Select Category:</label>
          <select id="category" name="category">
            <option value="category1">Tote Bag</option>
            <option value="category2">Mug</option>
            <option value="category3">Mousepad</option>
          </select>
          <label for="description">Description:</label>
          <textarea id="description" name="description" rows="4" cols="50"></textarea>
        </div>

        <div class="container1">
          <input type="file" id="file" accept="image/*" hidden>
          <div class="img-area" data-img="">
            <i class='bx bxs-cloud-upload icon'></i>
            <h3>Upload Image</h3>
            <p>Image size must be less than <span>2MB</span></p>
          </div>
          <button class="select-image">Select Image</button>
        </div>
    <script>const selectImage = document.querySelector('.select-image');
      const inputFile = document.querySelector('#file');
      const imgArea = document.querySelector('.img-area');
      
      selectImage.addEventListener('click', function () {
        inputFile.click();
      })
      
      inputFile.addEventListener('change', function () {
        const image = this.files[0]
        if(image.size < 2000000) {
          const reader = new FileReader();
          reader.onload = ()=> {
            const allImg = imgArea.querySelectorAll('img');
            allImg.forEach(item=> item.remove());
            const imgUrl = reader.result;
            const img = document.createElement('img');
            img.src = imgUrl;
            imgArea.appendChild(img);
            imgArea.classList.add('active');
            imgArea.dataset.img = image.name;
          }
          reader.readAsDataURL(image);
        } else {
          alert("Image size more than 2MB");
        }
      })</script>

<div class="message-box" id="messageBox">
  <h2>Your design has been noted. <br>Please go and view it in your cart.</h2>
  <div class="button-container">
    <button onclick="redirectToHomepage()">OK</button>
  </div>
</div>

<div class="button3">
  <button onclick="showMessageBox()">Submit</button>
</div>

<script>
  function showMessageBox() {
    document.getElementById("messageBox").style.display = "block";
  }

  function redirectToHomepage() {
    window.location.href = "cart.php";
  }
</script>

<!--FOOTER--->
<section id="contact">
  <div class="footer">
      <div class="list">
        <h4>Connect With Us</h4>
        <div class="social">
    <a href="#"><i class='bx bxl-facebook' ></i></a>
                      <a href="#"><i class='bx bxl-instagram' ></i></a>
                      <a href="#"><i class='bx bxl-tiktok' ></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="end-text">
    <p>Copyright ©2023 All rights reserved | Wear Your Mood Prints</p>
  </div>
</section>

  </body>
</html>