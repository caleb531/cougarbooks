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

		<?php if ( isset( $_GET['fail'] ) ): ?>
			<div class="notification warning">Incorrect email or password. Please try again.</div>
		<?php endif; ?>

		<h1>Sign In</h1>

		<form class="sign-in-form" action="assets/php/sign-in.php" method="post">

			<label for="email-field">Email:</label><br>
			<input id="email-field" type="text" name="email" required placeholder="me@example.com" pattern="\s*([^@]+)@([^@]+)\s*" autofocus><br>

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
