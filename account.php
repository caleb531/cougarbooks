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
		<?php if ( isset( $_SESSION['signed_in'] ) ): ?>
		  <?php
		    $query = 'SELECT first_name, last_name, email_address, telephone_no FROM user WHERE user_id = :user_id';
		    $row = $db->fetchOne( $query, array(
		      'user_id' => $_SESSION['user_id']
		    ) );
		  ?>
		<form class="account-info-form" action="assets/php/account.php" method="post">

			<label for="first-name-field">First Name:</label><br>
			<input id="first-name-field" type="text" name="first_name" value="<?php echo $row['first_name'] ?>" required maxlength="30" autofocus><br>

			<label for="last-name-field">Last Name:</label><br>
			<input id="last-name-field" type="text" name="last_name" value="<?php echo $row['last_name'] ?>" required maxlength="30"><br>

			<label for="email-field">Email:</label><br>
			<input id="email-field" type="text" name="email" value="<?php echo $row['email_address'] ?>" required placeholder="me@example.com" pattern="\s*([^@]+)@([^@]+)\s*"><br>

			<label for="phone-field">Phone Number:</label><br>
			<input id="phone-field" type="text" name="phone" value="<?php echo $row['telephone_no'] ?>" placeholder="xxx-xxx-xxxx" pattern="\s*(\d{3})-?(\d{3})-?(\d{4})\s*"><br>

			<label for="new-password-field">Enter Password:</label><br>
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
<?php endif; ?>
