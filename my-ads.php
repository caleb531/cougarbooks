<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<title>CougarBooks | My Ads</title>
</head>
<body>

	<header id="site-header">
		<h1><a href="index.php">CougarBooks</a></h1>
		<nav id="site-navigation">
			<ul>
				<li><a href="post.php">Post New Ad</a></li>
				<li><a href="my-ads.php">My Ads</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="sign-in.php?signout=1">Sign Out</a></li>
			</ul>
		</nav>
		<form action="search.php" id="site-search-form">
			<input type="text" placeholder="Search textbook ads" name="q" id="site-search-field" />
			<input type="submit" value="Submit" id="site-search-submit" />
		</form>
	</header>

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
	<script src="assets/js/main.js"></script>
</body>
</html>
