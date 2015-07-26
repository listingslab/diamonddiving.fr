<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */

get_header(); ?>

	<div class="main-content">
	<h2 class="page-title">Le Blog</h2>
	<p>Les derni&egrave;res news et photos de Diamond Diving, dont nos projets, les articles dans les medias, les moments forts en plong&eacute;es, les salons de plong&eacute;e et les f&eacute;licitations &agrave; nos &eacute;l&egrave;ves qui viennent de valider un nouveau niveau PADI ou CMAS.<br /><br /></p>
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
	<h4>Rechercher dans le blog par ann&eacute;e</h4>
	<ul id="year-archive">
		<?php wp_get_archives('type=yearly'); ?> 
	</ul>	
	</div>
	
	<?php get_sidebar(); ?>
	<div class="relax">&nbsp;</div>
	
<?php get_footer(); ?>
