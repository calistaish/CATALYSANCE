

<!DOCTYPE html>
<html>
<head>
	<title>Register Account | Wear Your Moods Prints</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./img/logo.png">
	<link rel="stylesheet" href="css/registeracc.css">

</head>
<body>
	<div class="container">
		<h2>Register Account</h2>
        <form action="registeracc.php" method="post">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

			<label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

			<label for="password">Password:</label>
			<div class="password-container">
				<input type="password" id="password" name="password" required>
				<img src="./img/password-hide.png" class="password-logo" id="password-toggle" alt="Password Toggle">
			</div>
			
			<label for="conpassword">Confirm Password:</label>
			<div class="password-container">
				<input type="password" id="conpassword" name="conpassword" required>
				<img src="./img/password-hide.png" class="password-logo" id="conpassword-toggle" alt="Confirm Password Toggle">
			</div>
			
            <label for="fname">Contact No:</label>
            <input type="text" id="cont" name="cont" required>

            <label for="username">Address:</label>
            <input type="text" id="add" name="add" required>

            <div class="button-container">
                <input type="submit" name="Register" value="Register" required>
                <button class="cancel-button" onclick="location.href='userlogin.html'">Cancel</button>
            </div>
			<?php include('php/server.php'); ?>
        </form>
        <br>
        <center><a href="userlogin.html">Already have an account? Login here.</a></center>
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
