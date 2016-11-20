<?php
include('assets/php/head.php');

?>
<title>CougarBooks | Sign In</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<?php
	// if instructed to signout
	// lets clear all the session variables
	if( isset( $_GET['signout'] ) == 1 ){
		session_unset();
	}

	?>


	<main>

		<h1>Sign In</h1>

		<form class="sign-in-form" action="assets/php/sign-in.php" method="post">

			<label for="email-field">Email:</label><br>
			<input id="email-field" type="text" name="email" required placeholder="me@example.com"><br>

			<label for="password"></label>Password:<br>
			<input id="password" type="password" name="password" required><br>

			<button type="submit" name="submit">Sign In</button>

		</form>

		<?php
		// prompt the user to let them know their login failed
		if( isset( $_GET['loginFailed'] ) == 1 ){
			echo "<p>Login Credential Failed. Please try Again</p>";
		}
		?>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
