<?php
/**
 * The template for displaying all pages.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */

get_header(); ?>

	<div class="main-content">
	<?php if ( have_posts() ) while ( have_posts() ) { the_post(); ?>
		<?php //if ( function_exists( 'get_the_image' ) ) { get_the_image( array( 'size' => 'full', 'link_to_post' => false, 'image_class' => 'banner', 'attachment' => false )); } ?>
		
		<?php if (has_post_thumbnail()) { ?>
			<div class="slider">
				<div class="angle angle-lt">&nbsp;</div>
				<div class="angle angle-lb">&nbsp;</div>
				<div class="angle angle-rt">&nbsp;</div>
				<div class="angle angle-rb">&nbsp;</div>
				<?php the_post_thumbnail('feature-image'); ?>
			</div>
		<?php } ?>
		<h2 class="page-title"><?php the_title(); ?></h2>
		<?php if (is_page('96')) { //Payment Page ?>
			<iframe id="iframe" src="http://payment.diamonddiving.net/onlinepayment-french-new.asp">
				<p>Your browser does not support iframes.</p>
			</iframe>
		<?php } else {
			the_content(); } ?>
	<?php } ?>
	</div>
	<?php get_sidebar(); ?>
	<div class="relax">&nbsp;</div>
			
<?php get_footer(); ?>
