<?php
include('assets/php/head.php');
?>
<title>CougarBooks | Post New Ad</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<h1>Post New Textbook Ad</h1>

		<form class="post-form" action="post.php" method="post">

			<label for="book-title-field">Book Title:</label><br>
			<input id="book-title-field" type="text" name="title" required maxlength="100"><br>

			<label for="book-authors-field">Author(s):</label><br>
			<input id="book-authors-field" type="text" name="book_authors" required maxlength="100"><br>

			<label for="book-edition-field">Edition:</label><br>
			<input id="book-edition-field" type="text" name="book_edition" maxlength="100"><br>

			<label for="isbn-field">ISBN:</label><br>
			<input id="isbn-field" type="text" name="isbn" required pattern="\s*\d(-?\d){9,12}\s*" maxlength="17" placeholder="10-digit or 13-digit ISBN"><br>

			<label for="book-price-field">Price:</label><br>
			<input id="book-price-field" type="text" name="book_price" maxlength="30"><br>

			<label for="book-description">Book Description:</label><br>
			<textarea name="book_description" id="book-description" placeholder="200 characters or less" maxlength="200"></textarea><br>

			<label for="book-photo-field">Photo:</label><br>
			<input id="book-photo-field" type="file" name="book_photo"><br>

			<button type="submit" name="submit">Submit</button>

		</form>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
