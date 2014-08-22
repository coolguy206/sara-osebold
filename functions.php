<?php

add_theme_support('post-formats', array('gallery', 'image'));

add_theme_support('post-thumbnails');

add_theme_support( 'automatic-feed-links' );

register_nav_menus( array(

	'main' => 'Main',

	'about' => 'About',

	'portfolio' => 'Portfolio'

) );

function custom_excerpt_length( $length ) {return 50;}add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {return ' <a href="'. get_permalink( get_the_ID() ) . '">Read More</a>';}add_filter( 'excerpt_more', 'new_excerpt_more' );

?>