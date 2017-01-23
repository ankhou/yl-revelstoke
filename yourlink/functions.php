<?php

// Add ACF options page

if( function_exists('acf_add_options_page') ) {
 
	acf_add_options_page(array(
		'page_title' 	=> 'YourLink Settings',
		'menu_title' 	=> 'YourLink Settings',
		'menu_slug' 	=> 'yourlink-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'YourLink Menu',
		'menu_title'	=> 'Menu',
		'parent_slug'	=> 'yourlink-settings'
	));
 
}

// Turn off theme footer

add_action( 'after_setup_theme', 'turnoff_320press_footer' );
function turnoff_320press_footer() {
        remove_filter('admin_footer_text', 'wp_bootstrap_custom_admin_footer');
}

// Custom Backend Footer
// add_filter('admin_footer_text', 'mustang_custom_admin_footer');
// function mustang_custom_admin_footer() {
//	echo '<span id="footer-thankyou">Developed by <a href="http://ankhou.com" target="_blank">Ankhou</a></span>. Built on <a href="http://320press.com/wpbs/" target="_blank">Wordpress Bootstrap</a>.';
// }

// adding it to the admin area
// add_filter('admin_footer_text', 'mustang_custom_admin_footer');

// Customise password protected page & remove 320press custom PW page
add_action( 'after_setup_theme', 'turnoff_320press_password' );
function turnoff_320press_password() {
        remove_filter('the_password_form', 'custom_password_form');
}

add_filter('the_password_form', 'ankhou_custom_password');
function ankhou_custom_password() {
	global $post;
	$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
	$o = '<div class="clearfix"><form style="text-align:center;" class="protected-post-form" action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post"><div class="input-append"><input name="post_password" id="' . $label . '" type="password" placeholder="Enter Password" style="padding:8px;margin-right:10px;" size="20" /><input type="submit" name="Submit" class="btn btn-primary" value="' . esc_attr__( "Log In",'wpbootstrap' ) . '" /></div>
	</form></div>
	';
	return $o;
}

// Enqueue scripts & styles

function yourlink_scripts() {
	wp_enqueue_style( 'glyphicons-css', get_stylesheet_directory_uri() . '/styles/glyphicons.css' );
	wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/styles/animate.css' );
	wp_enqueue_style( 'fontawesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'google-fonts-css', 'https://fonts.googleapis.com/css?family=Exo+2:300,600|Open+Sans:300,400,700' );
	wp_enqueue_script( 'yourlink-js', get_stylesheet_directory_uri() . '/scripts/yourlink.js', array(), '1.0.0', true );
	wp_enqueue_script( 'wow-js', get_stylesheet_directory_uri() . '/scripts/wow.min.js' );
	wp_enqueue_script( 'google-maps-js', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false' );
	wp_enqueue_script( 'scroll-to-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js' );
	wp_enqueue_script( 'lifestream-js', '//rawgithub.com/christianv/jquery-lifestream/master/jquery.lifestream.min.js' );
	wp_enqueue_script( 'instafeed-js', get_stylesheet_directory_uri() . '/scripts/instafeed.min.js' );
}

add_action( 'wp_enqueue_scripts', 'yourlink_scripts' );

?>