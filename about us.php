<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/logo.png">
    <title>About Us</title>
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
            z-index: 999;
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

/* ABOUT LOCATION */
.about{
	margin-top: 3rem;
	height: 100vh;
	width: 100%;
	background: var(--bg-color);
	display: flex;
	justify-content: center;
	align-items: center;
	margin-bottom: -15rem;
}
.about .main img{
	width: 580px;
 	max-width: 100%;
	height: auto;
	padding: 0 10px;
}
.all-text{
	width: 600px;
	max-width: 100%;
	padding: 0 10 px;
	text-align: justify;
}
.main{
	width: 1290px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-round;
}
.all-text h4{
	font-size: var(--big-font);
	color: var(--main-color);
	letter-spacing: 1px;
	font-weight: 800;
	margin-bottom: 10px;
}
.all-text h1{
	color: #bc377e;
	margin-bottom: 20px;
}
.all-text p{
	font-weight: 500;
	font-size: 16px;
	color: var(--text-color);
	line-height: 30px;
	text-align: justify;
}

/* ABOUT OWNER */
.about-wrapper{
    height: 80vh;
    margin-top: -7rem;
    background-color: #F5ECE0;
    margin-bottom: 7rem;
}
.about-left{
    margin-left: 350px;
    background: linear-gradient(45deg, pink, rgba(255, 166, 0, 0.902));
    width: 25vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 80vh;
}
.about-left-content > div{
    background: rgb(254, 153, 170);
    padding: 4rem 4rem 2.5rem 5rem;
    text-align: center;
}
.about-left-content{
    margin-right: -20px;
    align-items: center;  
    box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
    -webkit-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
    -moz-box-shadow: 0px 0px 18px -1px rgba(0, 0, 0, 0.39);
}
.about-img img{
    display: block;
    width: 200px;
}
.about-img{
    width: 200px;
    height: 200px;
    overflow: hidden;
    border-radius: 50%;
    transition: all 0.5s ease-in-out;
}
.shadow{
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    position: relative;
    cursor: pointer;
}
.shadow::after{
    content: "";
    position: absolute;
    background: rgba(0, 0, 0, 0.4);
    left: 50%;
    transform: translateX(-50%);
    bottom: -20px;
    height: 7px;
    width: 50px;
    filter: blur(3px);
    -webkit-filter: blur(3px);
    opacity: 0;
    transition: all 0.6s ease;
}
.shadow:hover .about-img{
    transform: translateY(-10px);
}
.shadow:hover::after{
    opacity: 1;
}
.about-left-content h2{
    color: #bc377e;
    font-size: 2rem;
    margin: 2.2rem 0 0.6rem 0;
    line-height: 1.2;
    padding-bottom: 1rem;
    border-bottom: 2px solid #bc377e;
    white-space: nowrap;

}
.about-left-content h3{
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 7px;
    margin-top: 1.2rem;
    white-space: nowrap;
    color: #bc377e;

}
.icon{
    background: #fff;
    display: flex;
    justify-content: center;
    padding: 0.8rem 0;
}
.icon a{
    list-style-type: none;
    background: linear-gradient(45deg, pink, rgba(255, 166, 0, 0.902));
    color: #fff;
    width: 40px;
    height: 40px;
    margin: 0 0.5rem;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-in-out;
}
.icon a:hover{
    transform: rotate(360deg);
    background: var(--bg-color);
    color: orange;
}
.about-right{
    width: 100vh;
    height: 80vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 5rem;
    text-align: center;
}
.about-right h1{
	color: var(--main-color);
    font-size: 7rem;
    text-transform: uppercase;
}
.about-right h1 span{
	color:  #bc377e;

}
.about-para p{
    text-align: justify;	
    font-size: 1.2rem;
    font-weight: 500;
    padding: 0.5rem;
}


/* ABOUT TIMELINE */
.timeline {
  	padding: 5px 3%;
  	//display: flex;
  	position: relative;
  	margin: 0 auto;
  	margin-bottom: 2em;
}
.timeline h1 {
  	font-size: 50px;
	text-align: center;
  	padding-bottom: 0;
    margin-top: 3rem;
  	color: var(--main-color)
}
.timeline p {
	font-size: var(--p-font);
  	font-weight: 400;
	color: var(--text-color);
	line-height: 30px;
  	text-align: center;

}
.process-wrapper {
	margin:auto;
	max-width:1080px;
}

#progress-bar-container {
	position:relative;
	width:90%;
	margin:auto;
	height:100px;
	margin-top:65px;
}

#progress-bar-container ul {
	padding:0;
	margin:0;
	padding-top:15px;
	z-index:999;
	position:absolute;
	width:100%;
	margin-top:-40px
}

#progress-bar-container li:before {
	content:" ";
	display:block;
	margin:auto;
	width:30px;
	height:30px;
	border-radius:50%;
	border:solid 2px #aaa;
	transition:all ease 0.3s;
     
}

#progress-bar-container li.active:before, #progress-bar-container li:hover:before {
	border:solid 2px #fff;
	background: linear-gradient(to right, #BE9A76 0%, #C48862 100%); 
	background: rgb(202, 87, 143);
}

#progress-bar-container li {
	list-style:none;
	float:left;
	width:25%;
	text-align:center;
	color:#aaa;
	text-transform:uppercase;
	cursor:pointer;
	font-weight:700;
	transition:all ease 0.2s;
	vertical-align:bottom;
	height:60px;
	position:relative;
}

#progress-bar-container{
    z-index: -1;
}

#progress-bar-container li .step-inner {
	position:absolute;
	width:100%;
	bottom:0;
        font-size: 14px;
}

#progress-bar-container li.active, #progress-bar-container li:hover {
	color:#221314;
}

#progress-bar-container li:after {
	content:" ";
	content:" ";
	display:block;
	width:6px;
	height:6px;
	background:#777;
	margin:auto;
	border:solid 7px #fff;
	border-radius:50%;
	margin-top:40px;
	box-shadow:0 2px 13px -1px rgba(0,0,0,0.3);
	transition:all ease 0.2s;
     
}

#progress-bar-container li:hover:after {
	background:#555;
}

#progress-bar-container li.active:after {
	background:#bc377e;
}

#progress-bar-container #line {
	width:80%;
	margin:auto;
	background: #eee;
	height:6px;
	position:absolute;
	left:10%;
	top:57px;
	z-index:1;
	border-radius:50px;
	transition:all ease 0.9s;
}

#progress-bar-container #line-progress {
	content:" ";
	width:0%;
	height:100%;
	background: linear-gradient(45deg, rgba(255, 166, 0, 0.918),rgb(231, 53, 136));
	background: linear-gradient(45deg, rgba(255, 166, 0, 0.888),rgb(231, 53, 136));
	position:absolute;
	z-index:2;
	border-radius:50px;
	transition:all ease 0.9s;
}

#progress-content-section {
	width:90%;
	margin: auto;
	background: linear-gradient(45deg, rgba(255, 166, 0, 0.623),pink);
	border-radius: 10px;
}

#progress-content-section .section-content {
	padding:30px 40px;
	text-align:center;
	box-shadow:0 2px 13px -1px rgba(0,0,0,0.3);
	border-radius: 10px;
}

#progress-content-section .section-content h2 {
	font-size:30px;
	text-transform:uppercase;
	color: #895a2b;
	letter-spacing:1px;
}
#progress-content-section .section-content h2 span{
    	color:#bc377e;
}
#progress-content-section .section-content p {
	font-size: var(--p-font);
  	font-weight: 400;
	line-height:1.8em;
	color: #895a2b;
}

#progress-content-section .section-content {
	display:none;
	animation: FadeInUp 700ms ease 1;
	animation-fill-mode:forwards;
	transform:translateY(15px);
	opacity:0;
}

#progress-content-section .section-content.active {
	display:block;
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
<!--ABOUT LOCATION--->
<section class="about">
	<div class="main">
	 <img src= "./img/shop4.png" alt="">
	  <div class="all-text">
	    <h4>About Us</h4>
	      <h1>Empower Your Individuality: Infuse Art into Fashion!</h1>
		<p> Wear Your Mood: Prints specializes in selling fashionable printed tote bags. Our tote bags are designed with unique and trendy prints that cater to fashion-forward individuals who appreciate stylish and functional accessories. We believe that a tote bag can be more than just a practical item; it can also be a fashion statement. Our goal is to provide our customers with high-quality, durable tote bags that not only serve their everyday needs but also elevate their style and express their individuality. Additionally, we offer custom printed mouse pads with different aesthetic designs.</p>	
	</div>
	  </div>
</section>
<!--ABOUT OWNER--->
<br><br><br><br>
 <div class = "about-wrapper">
      <div class = "about-left">
        <div class = "about-left-content">
          <div>
            <div class = "shadow">
              <div class = "about-img">
                <img src = "./img/ganda.png" alt = "about image">
              </div>
            </div>

            <h2>Michelle Acot</h2>
            <h3>Business Owner</h3>
          </div>

          <ul class = "icon">
	<a href="https://www.facebook.com/ceraohluhh" target="_blank"><i class='bx bxl-facebook'></i></a>
          </ul>
        </div>
      </div>

      <div class = "about-right">
        <h1>hi<span>!</span></h1>

        <div class = "about-para">
          <p>I am an entrepreneur who is passionate about fashion and creativity. I have always had a keen eye for unique designs and a love for accessories that add a touch of flair to any outfit. Combining my passion for fashion and my entrepreneurial spirit, I started this online business to share my love for stylish tote bags with like-minded individuals.</p>
          <p>I personally curate the designs and ensure that each tote bag reflects the latest fashion trends, while maintaining the highest standards of quality.</p>
        </div>
      </div>
    </div>
<!--ABOUT TIMELINE--->
<section class="timeline">
<h1>Our History and Growth</h1>
<p>From humble beginnings to the present, our unwavering pursuit of excellence has shaped our history and growth. We have overcome challenges, <br>embodying the spirit of perseverance to deliver the highest quality products.</p><br>
<div class="process-wrapper">
<div id="progress-bar-container">
	<ul>
		<li class="step step01 active"><div class="step-inner">2020</div></li>
		<li class="step step02"><div class="step-inner">2021</div></li>
		<li class="step step03"><div class="step-inner">2022</div></li>
		<li class="step step04"><div class="step-inner">2023</div></li>
	</ul>
	
	<div id="line">
		<div id="line-progress"></div>
	</div>
</div>

<div id="progress-content-section">
	<div class="section-content discovery active">
		<h2>YEAR <span>2020</span></h2>
		<br>
		<p>In the midst of the global pandemic in 2020, Wear Your Mood Prints was founded with the vision of delivering fashionable printed tote bags and custom printed mousepad. The challenging circumstance during that time inspired the owner to embark on a journey of creativity and perseverance. Recognizing the transformative power of celebrating individuality through fashion, and also as a way to uplift their spirits during the uncertainty that surrounds them, the owner established a business that stimulated her creativity and passion.</p>
	</div>
	
	<div class="section-content strategy">
		<h2>YEAR <span>2021</span></h2>
		<br>
		<p>As 2021 unfolded, Wear Your Mood Prints experienced a steady growth. While it may not have been explosive or rapid, the brand saw a gradual increase in recognition and appreciation for its products. This deliberate pace of growth allowed Wear Your Mood Prints to build a solid foundation upon which it could refine its offerings and strengthen its position in the fashion and accessories industry. During this period, the brand remained focused on understanding the evolving needs and preferences of its customers.</p>
	</div>
	
	<div class="section-content creative">
		<h2>YEAR <span>2022</span></h2>
		<br>
		<p>In the year 2022, Wear Your Mood Prints witnessed a notable increase in its customer base, marking a significant milestone for the business. This growth in customer numbers was a testament to the brand's efforts and the growing recognition of its products within the fashion and accessories market. However, while this growth was indeed a cause for celebration, Wear Your Mood Prints remained driven and determined to achieve even more. The brand recognized that there were still countless individuals out there who had yet to discover its products.</p>
	</div>
	
	<div class="section-content production">
		<h2>YEAR <span>2023</span></h2>
		<br>
		<p>As Wear Your Mood Prints stepped into the new year of 2023, the momentum of appreciation for its products showed no signs of slowing down. The continuous growth in the number of individuals who embraced and valued the brand's offerings spoke volumes about the unwavering dedication to delivering exceptional quality and style. Theenthusiasm demonstrated by the expanding customer base served as a powerful motivation for Wear Your Mood Prints to push boundaries and surpass expectations.</p>
	</div>
	
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script>
    
 $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "33.33%"); // Changed to 33.33% to divide the width evenly for three steps
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "66.67%"); // Changed to 66.67% to divide the width evenly for three steps
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "100%"); // Changed to 100% to represent the completion of the fourth step
	$(".production").addClass("active").siblings().removeClass("active");
});
    </script>
</section>
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