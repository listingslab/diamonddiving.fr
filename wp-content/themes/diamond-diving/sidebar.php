<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */
?>

<div id="sidebar">
	<div class="enquiry">
		<a href="<?php echo home_url( '/' ); ?>contacter-et-reserver/demander-un-devis.html"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/pictures/online-enquiry.gif" alt="Devis en ligne" /></a>
	</div>
	<div class="prices">
		<h3>Prix</h3>
		<ul>
			<li class="holidays"><a href="<?php echo get_permalink(56); ?>" class="arrow">arrow</a><span>Formations PADI</span></li>
			<li class="courses"><a href="<?php echo get_permalink(94); ?>" class="arrow">arrow</a><span>Groupes</span></li>
			<li class="diving"><a href="<?php echo get_permalink(78); ?>" class="arrow">arrow</a><span>Professionelles PADI</span></li>
		</ul>
	</div>
	
	<? include '_listingslab/_php/sidebar_top.php';?>
	<? include '_listingslab/_php/sidebar_bottom.php';?>
	<? include '_listingslab/_php/tripadvisor.php';?>

</div>