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

