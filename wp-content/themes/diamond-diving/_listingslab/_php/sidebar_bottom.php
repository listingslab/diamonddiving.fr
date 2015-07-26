<?php
	////////////////////////
	// @listingslab
	// sidebar_rotator_2.php
	////////////////////////
	/*
	 * This functionality used to be defined by post attachments
	 * but to gain better control we're going to hardcode it
	 */
	$r_2 = array ();
	$path_prefix = '/wp-content/themes/diamond-diving/_listingslab/_jpg/sidebar_bottom/';
	$i = array ();
	
	$i = array ();
	$i ['img'] = $path_prefix.'02_gopro.jpg';
	$i ['link'] = get_permalink (78);
	$i ['target'] = '_self';
	$r_2[] = $i;
	
	$i = array ();
	$i ['img'] = $path_prefix.'03_elearning.jpg';
	$i ['link'] = get_permalink (52);
	$i ['target'] = '_self';
	$r_2[] = $i;
	
	$i = array ();
	$i ['img'] = $path_prefix.'04_superyacht.jpg';
	$i ['link'] = get_permalink (1941);
	$i ['target'] = '_self';
	$r_2[] = $i;
	
	shuffle ($r_2);
	$r_2_sz = sizeof($r_2);
?>
	<div class="ad-rotator">
		<ul>
		<? for ($i = 0; $i < $r_2_sz; $i++) { ?>
			<li><a href="<?= $r_2[$i]['link'] ?>" target="<?= $r_2[$i]['target'] ?>"><img src="<?= $r_2[$i]['img'] ?>" alt="" /></a></li>
		<? } ?>
		</ul>	
	</div>
