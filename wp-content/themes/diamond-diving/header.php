<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */
echo '<?xml version="1.0"?>';?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title( '|', true, 'right' );?>&nbsp;<?php bloginfo( 'name' );?></title>
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if (is_front_page()) { ?>
<meta name="google-site-verification" content="QkA-hdxW4KTQzojrym7GvXD-wA6OFzlBJMKxR-50YOg" />
<?php } ?>

<style type="text/css" media="all">
    @import url("<?php bloginfo( 'stylesheet_url' ); ?>");
</style>

<!--[if lt IE 7]>
<style type="text/css">
BODY { behavior: url("<?php bloginfo( 'template_url' ); ?>/public/css/csshover.htc"); }
.bottom-content{
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/bg/bottom-content.png', sizingMethod='scope');
}
.main-menu-bg LI UL LI.last{
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/bg/sub-menu-last.png', sizingMethod='crop');
}
.main-menu-bg LI UL LI.last:hover{
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/bg/sub-menu-last-hover.png', sizingMethod='crop');
}
#content .main-content .slider .angle.angle-lt {
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/bg/angle-lt.png', sizingMethod='image');
}
#content .main-content .slider .angle.angle-lb {
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/bg/angle-lb.png', sizingMethod='image');
}
#content .main-content .slider .angle.angle-rt {
	right: -1px;
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/bg/angle-rt.png', sizingMethod='image');
}
#content .main-content .slider .angle.angle-rb {
	right: -1px;
	background: none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/bg/angle-rb.png', sizingMethod='image');
}
#sidebar .prices ul li a.arrow {
	background:none;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo( 'template_url' ); ?>/public/images/icons/arrow-white.png');
	cursor:pointer;
	line-height:100px;
}
</style>
<![endif]-->

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/public/js/jquery.cycle.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/public/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/public/js/helvetica-heavy-ex_750.font.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/public/js/main.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11246617-12']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>

    <!-- Page -->
    <div id="page">
    
    	<!-- Header -->
    	<div id="header">
			<a class="logo" href="<?php echo home_url( '/' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/logo.gif" alt=""/></a>			
			<div class="language">
				<p>Langage du site?</p>
				<ul class="flag">
					<!-- listingslab -->
					<li><a href="http://diamonddiving.net"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/gb-flag.gif" alt="gb-flag"/></a></li>
					<li><a href="http://diamonddiving.fr"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/france-flag.gif" alt="france-flag"/></a></li>
				</ul>
			</div>
			
			<ul class="pic">
				<li><a href="http://padi.com" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/pictures/padi-pic.gif" alt="padi"/></a></li>
				<li><a href="http://www.aqualung.com/fr/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/pictures/aqua-lung-logo.png" alt="Aqua Lung"/></a></li>
			</ul>
			<div class="social-area">
				<ul class="social-pics">
					<li><a href="http://www.facebook.com/pages/Diamond-Diving/8063319234"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/facebook.png" alt="Facebook"/></a></li>
					<li><a href="http://twitter.com/DiamondDiving"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/twitter.png" alt="Twitter"/></a></li>
                    <li><a href="http://www.linkedin.com/company/diamond-diving"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/linkedin.png" alt="Linkedin"/></a></li>
                    <li><a href="https://plus.google.com/u/0/101382962348476096592/posts"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/googleplus.png" alt="Google+"/></a></li>
                    <li><a href="http://www.youtube.com/user/DiamondDiving1"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/youtube.png" alt="Youtube"/></a></li>
					<li><a href="mailto:info@diamonddiving.net" title="Email Diamond Diving"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/email.png" alt="Email"/></a></li>
					<li><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/public/images/icons/rss.png" alt="RSS"/></a></li>
				</ul>
				<ul class="coord">
					<li class="first">T&egrave;l:<span> 06 15 30 52 23</span></li>
					<li>Email:<a href="mailto:info@diamonddiving.net">info@diamonddiving.net</a></li>
				</ul>
			</div>
			<div class="relax">&nbsp;</div>
			<div class="main-menu-bg">
				<div class="main-menu-right">
					<div class="main-menu-left">
						<?php wp_nav_menu( array( 'menu' => 'main-menu', 'link_before' => '<span><span>', 'link_after' => '</span></span>' )); ?>
					</div>
				</div>
			</div>
			<div class="relax">&nbsp;</div>
    	</div>
		
		<!-- Content -->
    	<div id="content">