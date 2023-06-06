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
          <a href="admin2.php" >
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
          <a href="admin6.php" class="active">
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
        <span class="dashboard">User Accounts</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
            </div>
          </nav>
      
          <div class="home-content">
            <div class="sales-boxes">
              <div class="recent-sales box">
                <div class="title orange">Users</div>
                <div class="sales-details">
                  <ul class="details">
                    <li class="topic">Username</li>
                    <li><a href="#">chanyeolloml</a></li>
                    <li><a href="#">dkdokyeom</a></li>
                    <li><a href="#">joshuashua</a></li>
                    <li><a href="#">wonwoorawr</a></li>
                  </ul>
                  <ul class="details">
                  <li class="topic">First Name</li>
                  <li><a href="#">Chanyeol</a></li>
                  <li><a href="#">Seokmin</a></li>
                  <li><a href="#">Jisoo</a></li>
                  <li><a href="#">Wonwoo</a></li>
                </ul>
                <ul class="details">
                  <li class="topic">Last Name</li>
                  <li><a href="#">Park</a></li>
                  <li><a href="#">Lee</a></li>
                  <li><a href="#">Hong</a></li>
                  <li><a href="#">Jeon</a></li>
                </ul>
                <ul class="details">
                  <li class="topic">Contact No.</li>
                  <li><a href="#">091309133131</a></li>
                  <li><a href="#">093092308212</a></li>
                  <li><a href="#">092309232323</a></li>
                  <li><a href="#">093535232323</a></li>
                </ul>
                <ul class="details">
                    <li class="topic">Email Address</li>
                    <li><a href="#">parkchanyeol@gmail.com</a></li>
                    <li><a href="#">leeseokmin@gmail.com</a></li>
                    <li><a href="#">hongjisoo@gmail.com</a></li>
                    <li><a href="#">jeonwoo@gmail.com</a></li>
                  </ul>
                </div>
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