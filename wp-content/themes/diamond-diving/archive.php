<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */

get_header(); ?>

	<div class="main-content">
	<?php if ( have_posts() ) the_post(); ?>
		<h2 class="page-title">
			<?php if (is_year()) printf( __( 'Archive <span>%s</span>'), get_the_date('Y') ); ?>
		</h2>
		<?php rewind_posts(); ?>
		
	<?php if ( have_posts() ) while ( have_posts() ) { the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('categories'); ?>>
			<div class="date"><p><?php the_time('dS F Y'); ?></p></div>
			<h4><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'diamond-diving' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>

			<div class="entry-content">
				<?php the_content( __( 'Click here to read more &raquo;', 'diamond-diving' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'diamond-diving' ), 'after' => '</div>' ) ); ?>
			</div>
		
		</div>
	<? } ?>
	
	<p><a href="<?php bloginfo( 'url' ); ?>/blog/">&laquo; Back to the blog</a></a>
		
	</div>
	
	<?php get_sidebar(); ?>
	<div class="relax">&nbsp;</div>
	
<?php get_footer(); ?>
