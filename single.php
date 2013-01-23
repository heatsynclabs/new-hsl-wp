<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div id="primary">
  <div id="content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'single' ); ?>
      <nav id="nav-single">
        <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?> </span> <span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?> 
        </span> 
      </nav><!-- #nav-single -->
      <!-- #post-<?php the_ID(); ?> -->
    <?php endwhile; // end of the loop. ?>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>