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
			$page_index = isset($_GET['page']) ? htmlspecialchars( $_GET['page'] ) : 0;
			$search_word = isset($_GET['q']) ? htmlspecialchars( $_GET['q'] ) : 'Nothing';


		?>

		<h1>Search a book</h1>
		<p>Your search result for '<?php echo $search_word ?>'</p>

		<?php
			$page_length = 4;
			$books = $db->get_ads_by_keyword($search_word, $page_index, $page_length);
		?>

        <?php
        	for ($i = 1; $i < count($books) && $i <= $page_length; $i++) {
				$book = $books[$i];
		?>
	        <?php echo "<a href='ad.php?ad=".$book['ad_id']."'>"; ?>
				<div class="book-ad">
					<?php echo "<img class='book-image' src='".$book['path_to_picture']."' alt='Preview' />"; ?>
					<h3 class="book-title"><?php echo $book['book_title'] ?></h3>
					<h2 class="book-price"><?php echo $book['listed_price'] ?></h2>
					<div class="book-authors"><span class="book-attr-label">Author(s):</span> <?php echo $book['book_author'] ?></div>
					<p class="book-description"><?php echo substr($book['ad_description'],0, 200) ?>...</p>
				</div>
			</a>

        <?php } ?>

    	<p>Page : <?php echo ($page_index + 1) ?></p>
		<?php
    		if ($page_index > 0) {
    			echo '<a href="search.php?q='.$search_word.'&page='.($page_index-1).'"> <<< Previous Page <<<</a>';
    		}
    		if (($page_index > 0) && (count($books) == $page_length + 1)) { echo ' | '; }
    		if (count($books) == $page_length + 1) {
    			echo '<a href="search.php?q='.$search_word.'&page='.($page_index+1).'"> >>> Next Page >>></a>';
    		}
    	?>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
