<?php
include('assets/php/head.php');
?>
<?php if ( ! empty( $_GET['ad'] ) ): ?>
	<title>CougarBooks | Edit Ad</title>
<?php else: ?>
	<title>CougarBooks | Post New Ad</title>
<?php endif; ?>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<?php
		if ( ! empty( $_GET['ad'] ) ) {
			// Populate fields for existing ad
			$ad = $db->get_ad( $_GET['ad'] );
			// Prepend $ to book price for readability
			$ad['listed_price'] = '$' . $ad['listed_price'];
			echo '<h1>Edit Textbook Ad</h1>';
		} else {
			// Leave fields blank for new ad
			$ad = array(
				'book_title' => '',
				'book_author' => '',
				'book_edition' => '',
				'book_isbn' => '',
				'listed_price' => '',
				'ad_description' => '',
			);
			echo '<h1>Post New Textbook Ad</h1>';
		}
		?>

		<form class="post-form" action="assets/php/post.php" method="post">

			<?php if ( ! empty( $_GET['ad'] ) ): ?>
				<input id="ad-id-field" type="hidden" name="ad_id" value="<?php echo $_GET['ad']; ?>">
			<?php endif; ?>

			<label for="book-title-field">Book Title:</label><br>
			<input id="book-title-field" type="text" name="book_title" required maxlength="100" value="<?php echo htmlspecialchars( $ad['book_title'] ); ?>"><br>

			<label for="book-author-field">Author(s):</label><br>
			<input id="book-author-field" type="text" name="book_author" required maxlength="100" value="<?php echo htmlspecialchars( $ad['book_author'] ); ?>"><br>

			<label for="book-edition-field">Edition:</label><br>
			<input id="book-edition-field" type="text" name="book_edition" maxlength="100" value="<?php echo $ad['book_edition']; ?>"><br>

			<label for="isbn-field">ISBN:</label><br>
			<input id="isbn-field" type="text" name="book_isbn" required pattern="\s*\d(-?\d){9,12}\s*" maxlength="17" placeholder="10-digit or 13-digit ISBN" value="<?php echo htmlspecialchars( $ad['book_isbn'] ); ?>"><br>

			<label for="book-price-field">Price:</label><br>
			<input id="book-price-field" type="text" name="listed_price" maxlength="30" value="<?php echo $ad['listed_price']; ?>"><br>

			<label for="ad-description">Book Description:</label><br>
			<textarea name="ad_description" id="ad-description" placeholder="200 characters or less" maxlength="200"><?php echo htmlspecialchars( $ad['ad_description'] ); ?></textarea><br>

			<label for="book-photo-field">Photo:</label><br>
			<input id="book-photo-field" type="file" name="book_photo"><br>

			<?php if ( ! empty( $_GET['ad'] ) ): ?>
				<button type="submit" name="submit" value="1">Save Changes</button>
				<?php if ( $ad['is_closed'] !== '1' ): ?>
					<button type="submit" name="close" value="1" class="warning">Close Ad</button>
				<?php endif; ?>
			<?php else: ?>
				<button type="submit" name="submit" value="1">Post New Ad</button>
			<?php endif; ?>

		</form>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
