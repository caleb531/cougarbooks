<?php
include('assets/php/head.php');
?>
<title>CougarBooks | My Ads</title>
</head>
<body>

	<?php
	include('assets/php/header.php');
	?>

	<main>

		<?php if ( ! empty( $_GET['closed'] ) ): ?>
			<div class="notification">Ad has been closed.</div>
		<?php endif; ?>

		<h1>My Ads</h1>

		<?php
		// Retrieve all ads created by the signed-in user
		$query = 'SELECT * FROM ad WHERE user_id = :user_id';
		$ads = $db->fetchAll( $query, array(
			'user_id' => $_SESSION['user_id']
		) );
		$num_ads = count( $ads );
		?>

		<?php if ( $num_ads == 0 ): ?>
			<p>There are no ads to display.</p>
		<?php elseif ( $num_ads == 1 ): ?>
			<p>Displaying 1 ad.</p>
		<?php else: ?>
			<p>Displaying <?php echo $num_ads; ?> ads.</p>
		<?php endif; ?>

		<div id="books">
			<?php foreach ( $ads as $ad ): ?>
				<?php display_ad( $ad ); ?>
			<?php endforeach; ?>
		</div>

	</main>
	<?php
	include('assets/php/footer.php');
	?>
</body>
</html>
