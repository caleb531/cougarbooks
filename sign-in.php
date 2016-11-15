<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<title>CougarBooks | Sign In</title>
</head>
<body>

	<header id="site-header">
		<h1><a href="index.php">CougarBooks</a></h1>
		<nav id="site-navigation">
			<ul>
				<li><a href="register.php">Register</a></li>
				<li><a href="sign-in.php">Sign In</a></li>
			</ul>
		</nav>
		<form action="search.php" id="site-search-form">
			<input type="text" placeholder="Search textbook ads" name="q" id="site-search-field" />
			<input type="submit" value="Submit" id="site-search-submit" />
		</form>
	</header>

	<main>

		<h1>Sign In</h1>

		<form class="sign-in-form" action="index.php" method="post">

			<label for="email-field">Email:</label><br>
			<input id="email-field" type="text" name="email" required placeholder="me@example.com"><br>

			<label for="password"></label>Password:<br>
			<input id="password" type="password" name="password" required><br>

			<button type="submit" name="submit">Sign In</button>

		</form>

	</main>
	<script src="assets/js/main.js"></script>
</body>
</html>
