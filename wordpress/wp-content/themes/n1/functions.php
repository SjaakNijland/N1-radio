<?php

function N1_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'N1_resources');

<<<<<<< HEAD
$args = array(
	'width'         => 1502,
	'height'        => 600,
	'default-image' => get_template_directory_uri() . '/localhost/wordpress/wp-content/uploads/2017/03/banner.jpg',
);
add_theme_support( 'custom-header', $args );

//navmenu
register_nav_menus(array(
'primary' => __('Primary Menu'),
'footer' => __('Footer Menu'),
));
=======
>>>>>>> origin/master
?>