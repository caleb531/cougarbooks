<?php
include('assets/php/head.php');
?>
<link rel="stylesheet" href="assets/css/ad.css" />
<title>CougarBooks | Ad: Programming Python</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>


		<?php
					$ad_id = trim($_GET['ad']);
		      $sql = "SELECT * FROM ad where ad_id LIKE '$ad_id'";
					$ads = $db->fetchAll( $sql, array());
		?>

		<div class="book-ad<?php echo $ad['is_closed'] ? ' closed' : ''; ?>">
			<?php foreach ( $ads as $ad ): ?>

				<?php if ( $ad['is_closed'] ): ?>
					<span class="closed-badge">Closed</span>
				<?php endif; ?>

				<?php if ( ! empty( $ad['path_to_picture'] ) ): ?>
					<?php display_ad_image( $ad['ad_id'] ); ?>
				<?php endif; ?>

				<?php if($_SESSION['signed_in']): ?>
						<?php if ( $db->allowed_to_edit_ad( $_GET['ad'] ) ): ?>
							<a href="post.php" class="edit-ad-link">Edit</a>
						<?php endif ?>
				<?php endif ?>
				<h1 class="book-title"><?php echo htmlspecialchars( $ad['book_title'] ); ?></a></h1>
				<div class="book-authors"><span class="book-attr-label">Author(s):</span> <?php echo htmlspecialchars( $ad['book_author'] ); ?></div>
				<div class="book-edition"><span class="book-attr-label">Edition:</span> <?php echo htmlspecialchars( $ad['book_edition'] ); ?></div>
				<div class="book-isbn"><span class="book-attr-label">ISBN:</span> <?php echo htmlspecialchars( $ad['book_isbn'] ); ?></div>
				<div class="book-price"><span class="book-attr-label">Price:</span> $<?php echo htmlspecialchars( $ad['listed_price'] ); ?></div>
				<div class="ad-post-date"><span class="book-attr-label">Posted:</span> <?php echo strftime( '%b %d, %Y @ %-I:%M %p', strtotime( $ad['creation_time'] ) ); ?></div>

				<?php $userID = $ad['user_id'];
					$query = "SELECT * FROM user WHERE user_id LIKE '$userID'";
					$users = $db->fetchAll( $query, array() );
				?>

				<div class="clearfix"></div>
				<hr>
					<?php foreach ($users as $user): ?>
						<div class="contact-info">To buy this textbook, contact:</div>
							<div class="firt-name"><span class="first-name">First Name:</span> <?php echo htmlspecialchars( $user['first_name'] ); ?></div>
							<div class="last-name"><span class="last-name">Last Name:</span> <?php echo htmlspecialchars( $user['last_name'] ); ?></div>
						  <div class="email-address"><span class="email-address">Email Address:</span> 	<?php echo htmlspecialchars( $user['email_address'] ); ?></div>
							<div class="phone-number"><span class="phone-number">Phone No.:</span> <?php echo htmlspecialchars( $user['telephone_no'] ); ?></div>
						</div>
					<?php endforeach; ?>

				<?php endforeach; ?>
		</div>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
