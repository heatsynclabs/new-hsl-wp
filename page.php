
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
			<?php the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>