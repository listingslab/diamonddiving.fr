<?php
/**
 * TwentyTen functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyten_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyten_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Diamond_Diving
 * @since Diamond Diving 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 960;

/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */

if ( ! function_exists( 'twentyten_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in twentyten_setup().
 *
 * @since Twenty Ten 1.0
 */
function twentyten_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * @since Diamond Diving 1.0
 * @uses register_sidebar
 */
function diamonddiving_widgets_init() {
	
	register_sidebar( array(
		'name' => 'Footer area',
		'id' => 'footer-area',
		'before_widget' => '<div class="column">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );

}

add_action( 'widgets_init', 'diamonddiving_widgets_init' );
remove_action('wp_head', 'wp_generator');

// custom login form
function nbcustom_login() {
	echo '<link rel="stylesheet" href="wp-content/plugins/wp-admin-theme/login.css" type="text/css" media="screen" />';
}
add_action('login_head', 'nbcustom_login');
// ends ---

// custom image sizes
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	add_image_size('feature-image', 665, 245, true);
}
// ends ---

function diamond_register_scripts() {
	// Register the javascript files
	wp_register_script('social', get_bloginfo('template_directory').'/js/social.js', false);
	wp_register_script('linkedin', 'http://platform.linkedin.com/in.js', false);
}
add_action('init', 'diamond_register_scripts');

// Enqueue scripts
function diamond_enqueue_scripts(){
	if ( ! is_admin()):
		wp_enqueue_script('social');
		wp_enqueue_script('linkedin');
	endif;
}
add_action('wp_print_scripts', 'diamond_enqueue_scripts');

// Change wp-login.php form header logo & link & title
function ll_custom_login_logo() {
	$png = 'dd_icon.png';
	$blogicon = get_template_directory_uri().'/_listingslab/_png/'.$png;
	print '<style type="text/css">
		h1 a { background-image:url('.$blogicon.') !important; }
	</style>';
}
add_action('login_head', 'll_custom_login_logo');
function ll_change_wplogin_url() {
	return get_bloginfo ('url');
}

add_filter('login_headerurl', 'll_change_wplogin_url');
function ll_change_wplogin_title() {
	return '' . get_option('blogname') . ' Login';
}
add_filter('login_headertitle', 'll_change_wplogin_title');

?>