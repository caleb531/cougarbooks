<?php
include('assets/php/head.php');
// if instructed to signout
// lets clear all the session variables
if( isset( $_GET['signout'] ) ){
	session_unset();
}
?>
<title>CougarBooks | Sign In</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<?php if ( isset( $_GET['signout'] ) ): ?>
			<div class="notification">You have been signed out.</div>
		<?php endif; ?>

		<h1>Sign In</h1>

		<form class="sign-in-form" action="assets/php/sign-in.php" method="post">

			<label for="email-field">Email:</label><br>
			<input id="email-field" type="text" name="email" required placeholder="me@example.com" autofocus><br>

			<label for="password"></label>Password:<br>
			<input id="password" type="password" name="password" required><br>

			<button type="submit" name="submit">Sign In</button>

		</form>

		<?php
		// prompt the user to let them know their login failed
		if( isset( $_GET['loginFailed'] ) == 1 ){
			echo "<p>Incorrect email or password. Please try again.</p>";
		}
		?>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
