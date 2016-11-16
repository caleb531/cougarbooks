<?php
include('assets/php/head.php');
?>
<title>CougarBooks | Search</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

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
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
