<!DOCTYPE html>
<html>
<head>
	<title>Account Creation Successful | Wear Your Moods Prints</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./img/logo.png">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

		* {
			box-sizing: border-box;
		}

		body {
			background: radial-gradient( farthest-corner at 40px 40px, #fff8f0 0%, #c48862ec 100%);
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
			width: 90%;
			max-width: 800px;
			padding: 40px;
			background: #ffffffa4;
			border-radius: 10px;
			box-shadow: 0px 10px 20px rgba(0,0,0,0.2);
			text-align: center;
		}

		h2 {
			font-size: 30px;
			font-weight: 600;
			text-align: center;
			color: #333;
			margin-bottom: 20px;
		}

		p {
			font-size: 18px;
			font-weight: 500;
			color: #333;
			margin-bottom: 30px;
		}

		input[type="submit"] {
			padding: 10px 20px;
			margin-top: 20px;
			background-color: #ff7b00;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		input[type="submit"]:hover {
			background-color: #e16200;
		}

		@media only screen and (max-width: 768px) {
			.container {
				padding: 20px;
			}
		}
	</style>
</head>
<body>
	<div class="container">
        <img src="./img/check1.png" alt="Check sign" width="140px">
		<h2>Account Creation Successful!</h2>
		<p>Your account has been successfully created. <br>You can now log in to your account.</p>
		<form action="userlogin.php">
			<input type="submit" value="OK">
		</form>
	</div>
</body>
</html>
