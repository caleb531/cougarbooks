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

		<?php
			$page_index = isset($_GET['page']) ? $_GET['page'] : 0;
			$search_word = isset($_GET['q']) ? $_GET['q'] : 'Nothing';
		?>

		<h1>Search a book</h1>
		<p>Your search result for '<?php echo htmlspecialchars( $search_word ); ?>'</p>
		<p>Page : <?php echo htmlspecialchars( $page_index ); ?></p>

		<?php
			$books = $db->fetchAll(
					"SELECT book_title, book_author, book_isbn, listed_price, ad_description ".
					"FROM ad ".
					"WHERE book_title ".
					"LIKE '%:search%' ".
					"LIMIT :page,11"
				,
				array(
					'page' => $page_index,
	        		'search' => $search_word
	    		)
			);
		?>

        <?php
        	for ($i = 1; $i <= 10; $i++) {
				$book = $books[$i];
		?>

	        <a href="ad.php?ad=1">
				<div class="book-ad">
					<img class="book-image" src="http://akamaicovers.oreilly.com/images/9780596158118/cat.gif" alt="python-book" />
					<h3 class="book-title"><?php echo $book['book_title'] ?></h3>
					<h2 class="book-price"><?php echo $book['listed_price'] ?></h2>
					<div class="book-authors"><span class="book-attr-label">Author(s):</span> <?php echo $book['book_author'] ?></div>
					<p class="book-description"><?php echo substr($book['ad_description'],0, 200) ?>...</p>
				</div>
			</a>

        <?php
    		}
    		if (count($books) == 11) {
    			echo '<a href="search.php?q='.$search_word.'&page='.$page_index.'">Next Page</a>';
    		}
    	?>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
