<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
  <?php else : ?>
    <div class="entry-content">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
  <?php endif; ?>
  <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <?php twentyeleven_posted_on(); ?>
    </div><!-- .entry-meta -->
  <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->