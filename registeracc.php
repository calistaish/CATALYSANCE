<!DOCTYPE html>
<html>
<head>
	<title>Register Account | Wear Your Moods Prints</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./img/logo.png">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

		* {
			box-sizing: border-box;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: linear-gradient(45deg, pink, orange);
			font-family: Arial, sans-serif;
		}

		.container-img {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-bottom: 20px;
		}

		.container-img img {
			width: 90px;
			height: auto;
		}

		.container {
			width: 35%;
			max-width: 1000%;
			padding: 20px;
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		h2 {
			font-size: 24px;
			font-weight: 700;
			text-align: center;
			color: #E76027;
			margin-bottom: 20px;
		}

		label {
			display: block;
			margin-top: 20px;
			margin-bottom: 10px;
			font-size: 14px;
			font-weight: 500;
			color: #333;
			text-transform: uppercase;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}

		.password-container {
			position: relative;
		}

		.password-logo {
			width: 16px;
			position: absolute;
			top: 50%;
			right: 5px;
			transform: translateY(-50%);
			cursor: pointer;
		}

		.button-container {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 20px;
		}

		input[type="submit"] {
			padding: 10px 20px;
			margin-right: 10px;
			background-color: #ff7b00;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 14px;
			font-weight: bold;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		input[type="submit"]:hover {
			background-color: #e16200;
		}

		.cancel-button {
			padding: 10px 20px;
			background-color: #984705;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 14px;
			font-weight: 600;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		.cancel-button:hover {
			background-color: #7a3800;
		}

		@media only screen and (max-width: 768px) {
			.container {
				width: 90%;
			}
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
			color: #7a3800;
		}

		/* WebKit Browsers */
		::-webkit-scrollbar {
			width: 8px; /* Adjust the width as needed */
		}

		::-webkit-scrollbar-thumb {
			background: linear-gradient(45deg, rgb(174, 33, 56), rgb(197, 93, 14)); /* Replace with your desired gradient */
			border-radius: 8px; /* Adjust the radius as needed */
		}

		/* Firefox */
		::-moz-scrollbar {
			width: 8px; /* Adjust the width as needed */
		}

		::-moz-scrollbar-thumb {
			background: linear-gradient(45deg, rgb(190, 33, 59), rgb(197, 93, 14)); /* Replace with your desired gradient */
			border-radius: 8px; /* Adjust the radius as needed */
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="container-img">
			<img src="./img/logo8.png" alt="Logo">
		</div>
		<h2>Register Account</h2>
		<form action="includes/signup.inc.php" method="post">
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

			<div class="button-container">
				<input type="submit" value="Register" name="register" required>
				<button class="cancel-button" onclick="location.href='userlogin.php'">Cancel</button>
			</div>
		</form>
		<br>
		<center><a href="userlogin.php">Already have an account? Login here.</a></center>
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
