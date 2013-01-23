<article id="post-&lt;?php the_ID(); ?&gt;" <?php post_class(); ?>>
  <header class="entry-header">
    <h3><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
  </header><!-- .entry-header -->
</article>
<div class="entry-content">
  <?php the_content(); ?>
</div><!-- .entry-content -->
<?php if ( 'post' == get_post_type() ) : ?>
  <div class="entry-meta">
    <?php twentyeleven_posted_on(); ?>
    <br>
    <?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
  </div><!-- .entry-meta -->
<?php endif; ?>