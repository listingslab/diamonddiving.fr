<?php
	////////////////////////
	// @listingslab
	// front_page_slider.php
	////////////////////////
	/*
	 * This functionality used to be defined by post attachments
	 * (see end of file)
	 * but to gain better control we're going to hardcode it
	 * the slider ONLY get's shown in the homepage (ID 132)
	 */
if ( get_the_ID() == 132 ) {
	$slider = array ();
	$path_prefix = '/wp-content/themes/diamond-diving/_listingslab/_jpg/home_top/';
	
	$item = array ();
	$item ['img'] = $path_prefix.'00_5starmap.jpg';
	$item ['link'] = get_permalink (78);
	$item ['title'] = 'Formation Professionnelle PADI';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'01_alex.jpg';
	$item ['link'] = get_permalink (30);
	$item ['title'] = 'Course Director Alex Diamond';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'02_rock.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'03_tiddler.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'04_coral.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'05_worm.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'06_diver.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
		
	$item = array ();
	$item ['img'] = $path_prefix.'07_morray.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'08_wheel.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
	
	$item = array ();
	$item ['img'] = $path_prefix.'09_ribs.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;

	$item = array ();
	$item ['img'] = $path_prefix.'10_polyp.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;

	$item = array ();
	$item ['img'] = $path_prefix.'11_fisheye.jpg';
	$item ['link'] = get_permalink (40);
	$item ['title'] = 'La plongee dans le sud de la France';
	$slider[] = $item;
	
	$slider_sz = sizeof($slider); 
?>

	<div class="slider">
		<ul>
		<? for ($i = 0;$i < $slider_sz;$i++ ) { ?>
			<li>
				<a href="<?= $slider[$i]['link'] ?>" title="<?= $slider[$i]['title'] ?>">
					<img src="<?= $slider[$i]['img'] ?>" alt="<?= $slider[$i]['title'] ?>" />				</a>
			</li>
		<? } ?>
		</ul>
		<div class="angle angle-lt">&nbsp;</div>
		<div class="angle angle-lb">&nbsp;</div>
		<div class="angle angle-rt">&nbsp;</div>
		<div class="angle angle-rb">&nbsp;</div>
	</div>
	<div class="relax">&nbsp;</div>
	<? } ?>
	<?
		/* OLD Code from Pauly Design
		 * $images =& get_children('post_type=attachment&post_mime_type=image&orderby=menu_order&order=ASC&post_parent='.$post->ID);
			if ($images != false){
				foreach( $images as $imageID => $imagePost ){
					$arr['img'] = wp_get_attachment_image_src($imageID, 'full');
					$arr['img'] = $arr['img'][0];
					$slider[] = $arr['img'];
				}
			}
		 */
	?>
