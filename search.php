<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<title>CougarBooks | Search</title>
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

		<h1>Search a book</h1>
		<p>Your search result for 'programming'</p>

		<div class="book-ad">
			<img class="book-image" src="http://akamaicovers.oreilly.com/images/9780596158118/cat.gif" alt="python-book" />
			<h3 class="book-title"><a href="ad.php?book=1">Programming Python</a></h3>
			<div class="book-authors"><span class="book-attr-label">Author(s):</span> Mary Ann</div>
			<p class="book-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut...</p>
		</div>

		<div class="book-ad">
			<img class="book-image" src="http://www.stroustrup.com/4thEnglish.JPG" alt="cplusplus-book" />
			<h3 class="book-title"><a href="ad.php?book=2">C++ Programming</a></h3>
			<div class="book-authors"><span class="book-attr-label">Author(s):</span> John Doe</div>
			<p class="book-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
		</div>

	</main>
	<script src="assets/js/main.js"></script>
</body>
</html>
