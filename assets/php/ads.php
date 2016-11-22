<?php

// Displays the <img> element for the given ad object
function display_ad_image( $ad ) {
	?>
	<img class="book-image" src="<?php echo AD_PHOTO_PATH_BASE . '/' . htmlspecialchars( $ad['path_to_picture'] ); ?>" alt="<?php echo htmlspecialchars( $ad['book_title'] ); ?>" />
	<?php
}

// Displays the HTML for the given ad object
function display_ad( $ad ) {

	?>

	<div class="book-ad">
		<?php if ( ! empty( $ad['path_to_picture'] ) ): ?>
			<?php display_ad_image( $ad ); ?>
		<?php endif; ?>
		<h3 class="book-title"><a href="ad.php?ad=<?php echo htmlspecialchars( $ad['ad_id'] ); ?>"><?php echo htmlspecialchars( $ad['book_title'] ); ?></a></h3>
		<div class="book-authors"><span class="book-attr-label">Author(s):</span> <?php echo htmlspecialchars( $ad['book_author'] ); ?></div>
		<div class="book-edition"><span class="book-attr-label">Edition:</span> <?php echo htmlspecialchars( $ad['book_edition'] ); ?></div>
		<div class="book-isbn"><span class="book-attr-label">ISBN:</span> <?php echo htmlspecialchars( $ad['book_isbn'] ); ?></div>
		<div class="book-price"><span class="book-attr-label">Price:</span> <?php echo htmlspecialchars( $ad['listed_price'] ); ?></div>
	</div>

	<?php

}

?>
