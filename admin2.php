
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard | Wear Your Moods Prints</title>
    <link rel="shortcut icon" href="./img/logo.png">
    <link rel="stylesheet" href="admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-bank'></i>
      <span class="logo_name"> Admin </span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin2.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="admin3.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product Inventory</span>
          </a>
        </li>
        <li>
          <a href="admin4.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Orders</span>
          </a>
        </li>
        <li>
          <a href="admin6.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">User Accounts</span>
          </a>
        </li>
        <li>
          <a href="admin7.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Custom Request</span>
          </a>
        </li>
        <li>
          <a href="admin9.php">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Administrator Settings</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic orange">Total Order</div>
            <div class="number">1,000</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic orange">Total Sales</div>
            <div class="number">4,035</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic orange">Total Profit</div>
            <div class="number">₱ 10,213</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic orange">Total Return</div>
            <div class="number">12</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title orange">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">09 May 2023</a></li>
              <li><a href="#">16 May 2023</a></li>
              <li><a href="#">29 May 2023</a></li>
              <li><a href="#">01 Jun 2023</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Park Chanyeol</a></li>
            <li><a href="#">Lee Seokmin</a></li>
            <li><a href="#">Jeon Wonwoo</a></li>
            <li><a href="#">Hong Jisoo</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">Delivered</a></li>
            <li><a href="#">Pending</a></li>
            <li><a href="#">Returned</a></li>
            <li><a href="#">Delivered</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">₱ 204.98</a></li>
            <li><a href="#">₱ 150.00</a></li>
            <li><a href="#">₱ 100.00</a></li>
            <li><a href="#">₱ 200.56</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="admin10.php">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title red">Top Selling Product</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <img src="img/bp13.png" alt="">
              <span class="product black">NewJeans Tote Bag</span>
            </a>
            <span class="price">₱ 150</span>
          </li>
          <li>
            <a href="#">
              <img src="img/bp16.png" alt="">
              <span class="product black">Blue Mousepad </span>
            </a>
            <span class="price">₱ 100</span>
          </li>
          <li>
            <a href="#">
              <img src="img/bp12.png" alt="">
              <span class="product black">Aesthetic Mugs</span>
            </a>
            <span class="price">₱ 100</span>
          </li>
          <li>
            <a href="#">
              <img src="img/bp11.png" alt="">
              <span class="product black">Blackpink Tote Bag</span>
            </a>
            <span class="price">₱ 150</span>
          </li>
          </ul>
        </div>
      </div>
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title orange">Monthly Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Month</li>
              <li><a href="#"> January 2023</a></li>
              <li><a href="#"> February 2023</a></li>
              <li><a href="#"> March 2023</a></li>
              <li><a href="#"> April 2023</a></li>
              <li><a href="#"> May 2023</a></li> 
            </ul>
            <ul class="details">
              <li class="topic">Top Product</li>
              <li><a href="#">Tote Bag</a></li>
              <li><a href="#">Tote Bag</a></li>
              <li><a href="#">Mousepad</a></li>
              <li><a href="#">Mugs</a></li>
            </ul>
          <ul class="details">
            <li class="topic">Sales</li>
            <li><a href="#">₱ 10,204.98</a></li>
            <li><a href="#">₱ 12,005.98</a></li>
            <li><a href="#">₱ 11,101.98</a></li>
            <li><a href="#">₱ 15,504.98</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="admin11.php">See All</a>
          </div>
        </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
