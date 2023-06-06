<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
          box-sizing: border-box;
        }

        body {
            background: #fadadecd;
          background-size: cover;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
          padding: 0;
          font-family: 'Poppins', sans-serif;
        }

        .container {
          width: 100%;
          max-width: 500px;
          padding: 40px;
          background: linear-gradient(to bottom right, #fff8f0, #e74d9f72);
          border-radius: 10px;
          box-shadow: 0px 10px 20px rgba(0,0,0,2);
        }

        h2 {
          text-align: center;
          margin-bottom: 20px;
          font-weight: 600;
          color: #333;
        }

        form {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }

        label {
          display: block;
          margin-bottom: 10px;
          font-size: 16px;
          font-weight: 500;
          color: #333;
        }

        input[type="text"],
        input[type="password"] {
          padding: 10px;
          margin-bottom: 20px;
          border-radius: 5px;
          border: none;
          text-align: center;
          width: 100%;
          font-size: 16px;
          background: #f3eee9;
          color: #333;
        }

        .button-container {
          display: flex;
          justify-content: center;
        }

        .button-container input[type="submit"] {
          margin: 0 5px;
        }

        input[type="submit"] {
          padding: 10px;
          background-color: #910a52;
          color: #fff;
          border: none;
          border-radius: 5px;
          font-size: 16px;
          font-weight: bold;
          cursor: pointer;
          transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
          background-color: #c51372;
        }

        a {
          margin-top: 20px;
          font-size: 14px;
          color: #984705;
          text-decoration: none;
          font-weight: 500;
          transition: color 0.3s ease-in-out;
        }

        a:hover {
          color: #e16200;
        }

        /* Media Queries */
        @media (max-width: 600px) {
          .container {
            padding: 20px;
          }
        }

        @media (max-width: 400px) {
          h2 {
            font-size: 24px;
          }

          input[type="text"],
          input[type="password"] {
            font-size: 14px;
          }

          input[type="submit"] {
            font-size: 14px;
          }

          a {
            font-size: 12px;
          }
        }
        .password-container {
            position: relative;
            width: 100%;
        }

        .password-logo {
            width: 16px;
            position: absolute;
            top: 50%;
            right: 5px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .message-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            padding:20px;
            transform: translate(-50%, -50%);
            background-color: #fbeeddfa;
            border: 2px solid #910a52;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 4);
            width: 35%;
        }

        .message-box .check-logo {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            background-image: url('img/check.png');
            background-repeat: no-repeat;
            background-size: contain;
        }

        .message-box p {
            margin-top: 20px;
            font-size: 18px;
        }

        .message-box button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0b9f0e;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .message-box button:hover {
            background-color: #057107;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><img src="img/lock.png" width="140px"></center>
        <form action="includes/forgotpassword4.inc.php" method="post">
          <h2>Create New Username/Password</h2>
          <?php if($_SESSION['chngepassword'] == 1 && $_SESSION['chngeusername'] == 1){ ?>
            <label for="password">New Password:</label>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="password" required>
                <img src="./img/password-hide.png" class="password-logo" id="password-toggle" alt="Password Toggle">
            </div>
  
            <label for="conpassword">Confirm Password:</label>
            <div class="password-container">
                <input type="password" id="conpassword" name="conpassword" placeholder="password" required>
                <img src="./img/password-hide.png" class="password-logo" id="conpassword-toggle" alt="Confirm Password Toggle">
            </div>
            <label>New Username:</label>
            <input type="text" id="username" name="username" placeholder="username">

          <?php } else if($_SESSION['chngeusername'] == 1) { ?>
            <label>New Username:</label>
            <input type="text" id="username" name="username" placeholder="username">

          <?php } else if ($_SESSION['chngepassword'] == 1){ ?>
            <label for="password">New Password:</label>
            <div class="password-container">
                <input type="password" id="password" name="password" placeholder="password" required>
                <img src="./img/password-hide.png" class="password-logo" id="password-toggle" alt="Password Toggle">
            </div>

            <label for="conpassword">Confirm Password:</label>
            <div class="password-container">
                <input type="password" id="conpassword" name="conpassword" placeholder="password" required>
                <img src="./img/password-hide.png" class="password-logo" id="conpassword-toggle" alt="Confirm Password Toggle">
            </div>
          <?php } ?> 

          <div class="button-container">
            <input type="submit" name="Confirm" value="Confirm">
            <input type="submit" name="Cancel" value="Cancel">
          </div>
        </form>
        <?php echo $_SESSION['email']; ?>
    </div>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var passwordToggleBtn = document.getElementById("password-toggle");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordToggleBtn.src = "./img/password-show.png";
            } else {
                passwordInput.type = "password";
                passwordToggleBtn.src = "./img/password-hide.png";
            }
        }

        function toggleConfirmPassword() {
            var confirmPasswordInput = document.getElementById("conpassword");
            var confirmPasswordToggleBtn = document.getElementById("conpassword-toggle");

            if (confirmPasswordInput.type === "password") {
                confirmPasswordInput.type = "text";
                confirmPasswordToggleBtn.src = "./img/password-show.png";
            } else {
                confirmPasswordInput.type = "password";
                confirmPasswordToggleBtn.src = "./img/password-hide.png";
            }
        }

        // Hide or show password when the logo is clicked
        document.getElementById("password-toggle").addEventListener("click", togglePassword);
        document.getElementById("conpassword-toggle").addEventListener("click", toggleConfirmPassword);
    </script>
</body>
</html>
