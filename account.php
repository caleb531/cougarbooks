<?php
include('assets/php/head.php');
?>
<title>CougarBooks | Account</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<h1>Account Info</h1>

		<form class="account-info-form" action="account.php" method="post">

			<label for="first-name-field">First Name:</label><br>
			<input id="first-name-field" type="text" name="first_name" required maxlength="30"><br>

			<label for="last-name-field">Last Name:</label><br>
			<input id="last-name-field" type="text" name="last_name" required maxlength="30"><br>

			<label for="email-field">Email:</label><br>
			<input id="email-field" type="text" name="email" required placeholder="me@example.com" pattern="\s*([^@]+)@([^@]+)\s*"><br>

			<label for="phone-field">Phone Number:</label><br>
			<input id="phone-field" type="text" name="phone" placeholder="xxx-xxx-xxxx" pattern="\s*(\d{3})-?(\d{3})-?(\d{4})\s*"><br>

			<label for="new-password-field">Change Password:</label><br>
			<input id="new-password-field" type="password" name="new_password" required><br>

			<label for="confirm-password-field">Confirm Password:</label><br>
			<input id="confirm-password-field" type="password" name="confirm_password" required><br>

			<button type="submit" name="submit">Save Changes</button>

		</form>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
