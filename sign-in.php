<?php
include('assets/php/head.php');
?>
<title>CougarBooks | Sign In</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

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
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
