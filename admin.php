<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
          box-sizing: border-box;
        }

        body {
          background: #dc7323c3;
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
          background: linear-gradient(to bottom right, #fff8f0, #c6692672);
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
          background-color: #d55008;
          color: #ffffff;
          border: none;
          border-radius: 5px;
          font-size: 16px;
          font-weight: bold;
          cursor: pointer;
          transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
          background-color: #db1658;
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
    </style>
</head>
<body>
    <div class="container">
        <center><img src="img/admin.png" width="140px"></center>
        <h2>Admin</h2>
        <form action="includes/admin1.inc.php" method="post">
            <label>Please enter company verification code:</label>
            <input type="text" id="code" name="code" placeholder="*****">
            <div class="button-container">
                <input type="submit" name="Submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
