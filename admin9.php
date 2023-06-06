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
     <style>
        
     </style>
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
          <a href="admin3.php" >
            <i class='bx bx-box' ></i>
            <span class="links_name">Product Inventory</span>
          </a>
        </li>
        <li>
          <a href="admin4.php" >
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
          <a href="admin7.php" >
            <i class='bx bx-message' ></i>
            <span class="links_name">Custom Request</span>
          </a>
        </li>
        <li>
          <a href="admin9.php" class="active">
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
        <span class="dashboard">Administrator</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="sales-boxes">
        <div class="top-sales box">
          <div class="title black">
            <img src="./img/admin.png" alt="">ADMIN
          </div>
          <ul class="top-sales-details">
            <li>
              <a href="#">
                <span class="product black">Username:</span>
              </a>
              <input type="text" class="username" placeholder="Username" value="Park Chanyeol" readonly>
            </li>
            <li>
              <a href="#">
                <span class="product black">Email:</span>
              </a>
              <input type="text" class="email" placeholder="Email" value="parkchanyeol@gmail.com" readonly>
            </li>
            <li>
              <a href="#">
                <span class="product black">Password:</span>
              </a>
              <input type="password" class="password" placeholder="Password" value="ilychanyeol" readonly>
            </li>
            <li>
              <a href="#">
                <span class="product black">Company Verification Code:</span>
              </a>
              <input type="password" class="code" placeholder="Verification Code" disabled>
            </li>
            <li>
              <a href="#" onclick="showVerificationMessageBox()">
                <span class="product">Change Settings</span>
              </a>
            </li>
          </ul>
          <div class="message-box" id="verification-message-box">
            <span>Enter business owner verification key:</span>
            <input type="password" id="verification-key-input">
            <button onclick="checkVerificationKey()">Submit</button>
        </div>
        <div class="message-box" id="access-message-box" style="display: none;">
            <span id="access-message"></span>
        </div>
        <button id="save-button" style="display: none;">Save</button>
        
        <script>
            function showVerificationMessageBox() {
                var verificationMessageBox = document.getElementById('verification-message-box');
                verificationMessageBox.style.display = 'block';
            }
        
            function checkVerificationKey() {
                var verificationKeyInput = document.getElementById('verification-key-input');
                var accessMessageBox = document.getElementById('access-message-box');
                var accessMessage = document.getElementById('access-message');
                var verificationCodeInput = document.querySelector('.code');
                var passwordField = document.querySelector('.password');
                var textFields = document.querySelectorAll('.username, .email, .password');
                var saveButton = document.getElementById('save-button');
        
                var verificationKey = verificationKeyInput.value;
                var correctVerificationKey = "1234"; // Replace with the actual correct verification key
        
                if (verificationKey === correctVerificationKey) {
                    accessMessageBox.style.display = 'none';
                    verificationCodeInput.disabled = false;
                    passwordField.type = 'text';
                    textFields.forEach(function (textField) {
                        textField.removeAttribute('readonly');
                    });
                    saveButton.style.display = 'block';
                } else {
                    accessMessage.textContent = 'Incorrect verification key';
                    accessMessageBox.style.display = 'block';
                }
            }
        </script>
        

        </div>
<div class="recent-sales box">
    <div class="title orange">Previous Administrator Log-In</div>
    <div class="sales-details">
      <ul class="details">
        <li class="topic">Date</li>
        <li><a href="#">05-12-2023</a></li>
        <li><a href="#">05-16-2023</a></li>
        <li><a href="#">06-01-2023</a></li>
        <li><a href="#">06-02-2023</a></li>
      </ul>
      <ul class="details">
      <li class="topic">Time</li>
      <li><a href="#">7:01 AM</a></li>
      <li><a href="#">11:05 PM</a></li>
      <li><a href="#">4:17 AM</a></li>
      <li><a href="#">6:35 PM</a></li>
    </ul>
    <ul class="details">
      <li class="topic">Location</li>
      <li><a href="#">Taguig</a></li>
      <li><a href="#">Makati</a></li>
      <li><a href="#">South Korea</a></li>
      <li><a href="#">Japan</a></li>
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