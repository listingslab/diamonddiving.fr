<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	ini_set('short_open_tag', 'on');
?>
<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Diamont_Diving
 * @since Diamont Diving 1.0
 */
get_header(); ?>
		<div class="main-content">
		<? query_posts( 'name=home&post_type=page' );
			if ( have_posts() )  while ( have_posts() ) { the_post(); 
		?>
			<? include '_listingslab/_php/home_top.php';?>
			<? the_content() ?>
		<? } ?> 
		<? wp_reset_query();?>
				
				<div>
				<div class="box box-bg">
					<div class="box-bg-top"><div class="box-bg-bottom">
						<h3>Derni&egrave;res News</h3>
						<? query_posts( 'category_name=le-blog&showposts=1' ); ?>
						<? if ( have_posts() )  while ( have_posts() ) { the_post(); ?>
						<p class="date"><em><? the_date() ?></em></p>
						<h4><? the_title(); ?></h4>
						<?  global $more;
							$more = 0;
							the_content( 'Read more &raquo;' ); ?>
						<? } ?>
						<div class="newsletter">
							<p><em>Inscrivez-vous &agrave; notre Newsletter et restez inform&eacute;.</em></p>
							<form method="post" action="http://www.shortburst.co.uk/link/subscribe/subscribe.asp"><div>
								<input type="text" class="text auto-hint" name="txtField_0" value="Entrer votre adresse mail" title="Entrer votre adresse mail" />
								<input type="submit" class="button" value="Submit" />
								<input type="hidden" name="hidFormInfo" value="ICoQIFVaOwcjJQgEJgAwIHVwTVsSWz4KCyshATE9PRd1dEZBAwBxBiQmFxg2FxwXOxERHkFfIz0uMCEIOz09WXllHARQdTYHITc2CAcRChEkNycORlYyAAQGeV0=" />
							</div></form>
							<div class="relax">&nbsp;</div>
						</div>
					</div></div>
				</div>
			</div>
			<div class="relax">&nbsp;</div>
			</div>
			<?php get_sidebar(); ?>
			<div class="relax">&nbsp;</div>

<?php get_footer(); ?>