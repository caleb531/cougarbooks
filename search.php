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
			$search_word = isset($_GET['q']) ? htmlspecialchars( $_GET['q'] ) : '';
		?>

		<h1>Search for textbooks</h1>
		<p>Your search results for '<?php echo $search_word ?>'</p>

		<?php
			$page_length = 4;
			$ads = $db->get_ads_by_keyword($search_word, $page_index, $page_length);
		?>

        <?php foreach ( $ads as $ad ): ?>
			<?php display_ad( $ad ); ?>
		<?php endforeach; ?>

		<p>
			<?php if ($page_index > 0): ?>
				<a href="search.php?q=<?php echo $search_word; ?>&amp;page=<?php echo $page_index - 1; ?>">Previous Page</a> |
			<?php endif; ?>
			Page <?php echo ($page_index + 1) ?>
			<?php if (count($ads) == $page_length): ?>
				| <a href="search.php?q=<?php echo $search_word; ?>&amp;page=<?php echo $page_index + 1; ?>">Next Page</a>
			<?php endif; ?>
		</p>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
