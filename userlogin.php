<!DOCTYPE html>
<html>
    <head>
        <title>Login Form | Wear Your Moods Prints</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="./img/logo.png">
        <link rel="stylesheet" href="css/userlogin.css">

    </head>
    <body>
    
        <div class="container">
            <h2>WEAR YOUR MOOD PRINTS</h2>
            <center><img src="img/logo4.png" width="140px"></center>
            <h2>LOG IN</h2>
            <form action = "userlogin.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password">
                <center><input type="submit" value="  Log In   " name="LogIn"></center><br>
                <center><a href="homepage - final.html">Continue as Guest</a></center><br>
                <center><a href="registeracc.html">Sign Up</a></center>
                <?php include('php/server.php'); ?>
            </form>
        </div>
    </body>
</html>


