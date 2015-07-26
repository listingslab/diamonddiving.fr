<?php
	////////////////////////
	// @listingslab
	// sidebar_rotator.php
	////////////////////////
	/*
	 * This functionality used to be defined by post attachments
	 * but to gain better control we're going to hardcode it
	 */
	$rotator = array ();
	$path_prefix = '/wp-content/themes/diamond-diving/_listingslab/_jpg/sidebar_top/';
	/*
	$item = array ();
	$item ['img'] = $path_prefix.'03_superyacht.jpg';
	$item ['link'] = get_permalink (1651);
	$rotator[] = $item;
	 */
	
	$item = array ();
	$item ['img'] = $path_prefix.'04_proshop.jpg';
	$item ['link'] = get_permalink (1946);
	$rotator[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'01_masterscuba.jpg';
	$item ['link'] = get_permalink (74);
	$rotator[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'02_discover.jpg';
	$item ['link'] = get_permalink (60);
	$rotator[] = $item;

	shuffle ($rotator);
	
	$rotator_sz = sizeof($rotator);
?>
	<div class="offer-rotator">
		<ul>
		<? for ($i = 0;$i < $rotator_sz;$i++ ) { ?>
			<li><a href="<?= $rotator[$i]['link'] ?>"><img src="<?= $rotator[$i]['img'] ?>" alt="" /></a></li>
		<? } ?>
		</ul>	
	</div>