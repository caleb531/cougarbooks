<?php
include('database.php');

// Format thte book ISBN by removing dashes
function cb_format_book_isbn( $book_isbn ) {
	return trim( str_replace( '-', '', $book_isbn ) );
}

// Format the listed price for an ad by removing any leading
function cb_format_listed_price( $listed_price ) {
	return trim( str_replace( '$', '', $listed_price ) );
}

if ( ! empty( $_POST['ad_id'] ) ) {

	if ( ! empty( $_POST['submit'] ) ) {

		// Update textbook ad if ad ID is given

		$query = 'UPDATE ad
		SET book_title = :book_title,
			book_author = :book_author,
			book_edition = :book_edition,
			book_isbn = :book_isbn,
			listed_price = :listed_price,
			ad_description = :ad_description
			WHERE ad_id = :ad_id AND user_id = :user_id';

		$rowCount = $db->query( $query, array(
			'ad_id' => $_POST['ad_id'],
			'user_id' => 2,
			'book_title' => trim( $_POST['book_title'] ),
			'book_author' => trim( $_POST['book_author'] ),
			'book_edition' => trim( $_POST['book_edition'] ),
			'book_isbn' => trim( $_POST['book_isbn'] ),
			'listed_price' => cb_format_book_isbn( cb_format_listed_price( $_POST['listed_price'] ) ),
			'ad_description' => trim( $_POST['ad_description'] )
		) );

		// Redirect to updated ad page
		header("Location: ../../ad.php?ad={$_POST['ad_id']}");

	} else if ( ! empty( $_POST['close'] ) ) {

		// Close ad if Close button was pressed

		$query = 'UPDATE ad SET is_closed = 1 WHERE ad_id = :ad_id';

		$db->query( $query, array(
			'ad_id' => $_POST['ad_id']
		) );

		// Redirect to My Ads page once ad has been closed
		header("Location: ../../my-ads.php?closed=1");

	}

} else {

	// Otherwise, create new textbook ad with the given info

	$query = 'INSERT INTO ad
	(user_id, book_title, book_author, book_edition, book_isbn, listed_price, ad_description)
	VALUES (:user_id, :book_title, :book_author, :book_edition, :book_isbn, :listed_price, :ad_description)';

	$rowCount = $db->query( $query, array(
		'user_id' => 2,
		'book_title' => trim( $_POST['book_title'] ),
		'book_author' => trim( $_POST['book_author'] ),
		'book_edition' => trim( intval( $_POST['book_edition'] ) ),
		'book_isbn' => cb_format_book_isbn( $_POST['book_isbn'] ),
		'listed_price' => cb_format_listed_price( $_POST['listed_price'] ),
		'ad_description' => trim( $_POST['ad_description'] )
	) );

	// Redirect to page for new ad
	$new_ad_id = $db->lastInsertId();
	header("Location: ../../ad.php?ad=$new_ad_id");

}


?>
