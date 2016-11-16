<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<title>CougarBooks | My Ads</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<h1>My Ads</h1>

		<div id="books">

			<div class="book-ad">
				<img class="book-image" src="http://contactcrucial.com/wp-content/uploads/2016/10/img-not-available.jpg" alt="book-of-life" />
				<h3 class="book-title"><a href="ad.php?book=4">Book of Life</a></h3>
				<div class="book-authors"><span class="book-attr-label">Author(s):</span> Kevin Mata</div>
				<div class="book-edition"><span class="book-attr-label">Edition:</span> 9</div>
				<div class="book-price"><span class="book-attr-label">Price:</span> $40.00</div>
				<p class="book-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
			</div>

			<div class="book-ad">
				<img class="book-image" src="http://www.stroustrup.com/4thEnglish.JPG" alt="cplusplus-book" />
				<h3 class="book-title"><a href="ad.php?book=2">C++ Programming</a></h3>
				<div class="book-authors"><span class="book-attr-label">Author(s):</span> John Doe</div>
				<div class="book-edition"><span class="book-attr-label">Edition:</span> 3</div>
				<div class="book-price"><span class="book-attr-label">Price:</span> $70.00</div>
				<p class="book-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
			</div>

		</div>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
