<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/ad.css" />
	<title>CougarBooks | Ad: Programming Python</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<div class="book-ad">
			<img class="book-image" src="http://akamaicovers.oreilly.com/images/9780596158118/cat.gif" alt="python-book" />
			<a href="post.php?book=1" class="edit-ad-link">Edit</a>
			<h1 class="book-title">Programming Python</h1>
			<div class="book-authors"><span class="book-attr-label">Author(s):</span> Mary Ann</div>
			<div class="book-edition"><span class="book-attr-label">Edition:</span> 5</div>
			<div class="isbn"><span class="book-attr-label">ISBN:</span> 978-3-16-148410-0</div>
			<div class="book-price"><span class="book-attr-label">Price:</span> $50.00</div>
			<p class="book-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut...</p>
		</div>

		<div class="clearfix"></div>
		<hr>

		<div class="contact-info">To buy this textbook, contact John Smith at 314-159-2635 (<a href="mailto:johnsmith@example.com">email</a>)</div>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
