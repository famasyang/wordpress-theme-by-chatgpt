<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<!-- Add other head content here -->
</head>
<body>
	<!-- Add content here -->
	
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
	<?php endif; ?>
</body>
</html>
