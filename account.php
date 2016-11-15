<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<title>CougarBooks | Account</title>
</head>
<body>

	<header id="site-header">
		<h1><a href="index.php">CougarBooks</a></h1>
		<nav id="site-navigation">
			<ul>
				<li><a href="post.php">Post New Ad</a></li>
				<li><a href="my-ads.php">My Ads</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="sign-in.php?signout=1">Sign Out</a></li>
			</ul>
		</nav>
		<form action="search.php" id="site-search-form">
			<input type="text" placeholder="Search textbook ads" name="q" id="site-search-field" />
			<input type="submit" value="Submit" id="site-search-submit" />
		</form>
	</header>

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
	<script src="assets/js/main.js"></script>
</body>
</html>
