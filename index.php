<?php
include('assets/php/head.php');
?>
<title>CougarBooks | Sell your unused textbooks</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<section id="home-intro">

			<h1>Welcome to CougarBooks!</h1>

			<p>CougarBooks enables CSU San Marcos students to sell their unused textbooks to students who need them!</p>

		</section>

		<h2>Latest Ads</h2>

		<div id="books">

			<div class="book-ad">
				<img class="book-image" src="http://akamaicovers.oreilly.com/images/9780596158118/cat.gif" alt="python-book" />
				<h3 class="book-title"><a href="ad.php?ad=1">Programming Python</a></h3>
				<div class="book-authors"><span class="book-attr-label">Author(s):</span> Mary Ann</div>
				<div class="book-edition"><span class="book-attr-label">Edition:</span> 5</div>
				<div class="book-price"><span class="book-attr-label">Price:</span> $50.00</div>
				<p class="book-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut...</p>
			</div>

			<div class="book-ad">
				<img class="book-image" src="http://www.stroustrup.com/4thEnglish.JPG" alt="cplusplus-book" />
				<h3 class="book-title"><a href="ad.php?ad=2">C++ Programming</a></h3>
				<div class="book-authors"><span class="book-attr-label">Author(s):</span> John Doe</div>
				<div class="book-edition"><span class="book-attr-label">Edition:</span> 3</div>
				<div class="book-price"><span class="book-attr-label">Price:</span> $70.00</div>
				<p class="book-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
			</div>

			<div class="book-ad">
				<img class="book-image" src="http://math.mit.edu/~gs/linearalgebra/linearalgebra5_Front.jpg" alt="linear-algebra" />
				<h3 class="book-title"><a href="ad.php?ad=3">Linear Algebra</a></h3>
				<div class="book-authors"><span class="book-attr-label">Author(s):</span> Gilbert Strang</div>
				<div class="book-edition"><span class="book-attr-label">Edition:</span> 7</div>
				<div class="book-price"><span class="book-attr-label">Price:</span> $40.00</div>
				<p class="book-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut...</p>
			</div>

			<div class="book-ad">
				<img class="book-image" src="http://contactcrucial.com/wp-content/uploads/2016/10/img-not-available.jpg" alt="book-of-life" />
				<h3 class="book-title"><a href="ad.php?ad=4">Book of Life</a></h3>
				<div class="book-authors"><span class="book-attr-label">Author(s):</span> Kevin Mata</div>
				<div class="book-edition"><span class="book-attr-label">Edition:</span> 9</div>
				<div class="book-price"><span class="book-attr-label">Price:</span> $40.00</div>
				<p class="book-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium...</p>
			</div>

		</div>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
