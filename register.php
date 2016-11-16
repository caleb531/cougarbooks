<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<title>CougarBooks | Register</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<h1>Register</h1>

		<form class="register-form" action="index.php" method="post">

			<label for="first-name-field">First Name:</label><br>
			<input id="first-name-field" type="text" name="first_name" required><br>

			<label for="last-name-field">Last Name:</label><br>
			<input id="last-name-field" type="text" name="last_name" required><br>

			<label for="email-field">Email:</label><br>
			<input id="email-field" type="text" name="email" required placeholder="me@example.com" pattern="\s*([^@]+)@([^@]+)\s*"><br>

			<label for="phone-field">Phone Number:</label><br>
			<input id="phone-field" type="text" name="phone" placeholder="xxx-xxx-xxxx" pattern="\s*(\d{3})-?(\d{3})-?(\d{4})\s*"><br>

			<label for="password-field">Password:</label><br>
			<input id="password-field" type="password" name="password" required><br>

			<label for="confirm-password-field">Confirm Password:</label><br>
			<input id="confirm-password-field" type="password" name="confirm_password" required><br>

			<button type="submit" name="submit">Register</button>

		</form>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
