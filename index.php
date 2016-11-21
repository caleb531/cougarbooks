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

			<?php
			$ads = $db->fetchAll( 'SELECT ad_id, book_title, book_author, book_edition, listed_price, path_to_picture, ad_description, creation_time FROM ad WHERE is_closed = 0 ORDER BY listed_price DESC LIMIT 10', array() );
			?>

			<?php if ( count( $ads ) > 0 ): ?>

				<?php foreach ( $ads as $ad ): ?>

					<div class="book-ad">
						<?php if ( ! empty( $ad['path_to_picture'] ) ): ?>
							<img class="book-image" src="<?php echo AD_PHOTO_PATH_BASE . '/' . htmlspecialchars( $ad['path_to_picture'] ); ?>" alt="<?php echo htmlspecialchars( $ad['book_title'] ); ?>" />
						<?php endif; ?>
						<h3 class="book-title"><a href="ad.php?ad=<?php echo htmlspecialchars( $ad['ad_id'] ); ?>"><?php echo htmlspecialchars( $ad['book_title'] ); ?></a></h3>
						<div class="book-authors"><span class="book-attr-label">Author(s):</span> <?php echo htmlspecialchars( $ad['book_author'] ); ?></div>
						<div class="book-edition"><span class="book-attr-label">Edition:</span> <?php echo htmlspecialchars( $ad['book_edition'] ); ?></div>
						<div class="book-price"><span class="book-attr-label">Price:</span> <?php echo htmlspecialchars( $ad['listed_price'] ); ?></div>
						<p class="book-description"><?php echo htmlspecialchars( $ad['ad_description'] ); ?></p>
					</div>

				<?php endforeach; ?>

			<?php else: ?>

				<p>There are no new ads to show!</p>

			<?php endif; ?>

		</div>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
