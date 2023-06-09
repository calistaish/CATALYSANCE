<?php require_once 'includes/conn.inc.php';
$results_per_page = 10;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT * FROM users ORDER BY user_id ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);
?>
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
                <table style="width: 100%; border-spacing: 5px;" class="details">
                  <tr>
                    <td style="font-size: 20px;" class="topic"><strong>Username</strong></td>
                    <td style="font-size: 20px;" class="topic"><strong>First Name</strong></td>
                    <td style="font-size: 20px;" class="topic"><strong>Last Name</strong></td>
                    <td style="font-size: 20px;" class="topic"><strong>Contact No.</strong></td>
                    <td style="font-size: 20px;" class="topic"><strong>Email Address</strong></td>
                  </tr>
                  <?php while($row = $rs_result->fetch_assoc()) { ?>
                    <tr>
                      <td><a style="text-decoration: none; font-size: 18px; color:  #333;"><?php echo $row["username"]; ?></td>
                      <td><a style="text-decoration: none; font-size: 18px; color:  #333;"><?php echo $row["firstname"]; ?></td>
                      <td><a style="text-decoration: none; font-size: 18px; color:  #333;"><?php echo $row["surname"]; ?></td>
                      <td><a style="text-decoration: none; font-size: 18px; color:  #333;"><?php echo $row["phone"]; ?></td>
                      <td><a style="text-decoration: none; font-size: 18px; color:  #333;"><?php echo $row["email"]; ?></td>
                    </tr>
                    <?php }; ?>
                </table>
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
