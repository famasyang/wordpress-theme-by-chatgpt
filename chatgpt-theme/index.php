<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="ajax-load-more-posts.js"></script>
</head>
<body>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article style="text-align: center;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </article>
    <?php endwhile; ?>

    <div id="pagination-container" style="text-align: center;">
      <?php the_posts_pagination( array( 'prev_text' => '上一页', 'next_text' => '下一页', 'screen_reader_text' => '' ) ); ?>
    </div>
  <?php else : ?>
    <p style="text-align: center;"><?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?></p>
  <?php endif; ?>
</body>
</html>
