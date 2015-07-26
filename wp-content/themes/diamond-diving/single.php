<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */

get_header(); ?>

		<div class="main-content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="page-title"><?php the_title(); ?></h2>
					<div class="date"><p><?php the_time('dS F Y'); ?></p></div>

					<div class="entry-content">
						<?php the_content(); ?> 
                        <?php get_template_part('share'); ?>
						<p><a href="/blog/">&laquo; Back to the blog</a></p>
					</div>
					
				</div>

<?php endwhile; ?>

		</div>
		<?php get_sidebar(); ?>
		<div class="relax">&nbsp;</div>
<?php get_footer(); ?>
