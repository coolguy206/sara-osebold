<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>

<head>

<title><?php the_title(); ?> | <?php bloginfo('name'); ?> | Seattle, WA</title>

<meta charset="UTF-8">

<meta name="description" content="<?php bloginfo('description'); ?>">

<meta name="keywords" content="sara osebold, seattle, sculptor, performer, installation, sculpture, performance art, non-conventional, non-traditional, mixed media, sound, stage set, landscape, environment, arctic, wool felt, emerging artist, artistic, surreal, imaginative, experimental">

<meta name="author" content="Sara Osebold">

<meta name="viewport" content="initial-scale=1.0, width=device-width">

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>



<!--[if lt IE 9]>

	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<link href=" <?php bloginfo('stylesheet_url'); ?> " rel="stylesheet" type="text/css">

<script type="text/javascript">

$(document).ready(function(){

$('header input[type=image]').hover(function(){

$(this).attr('src','<?php bloginfo('template_url'); ?>/image/search-hover.png');

},function(){

$(this).attr('src','<?php bloginfo('template_url'); ?>/image/search.png');

});

$('.responsive-icons img').click(function(){

$('nav').toggle();

});

});

</script>

<?php wp_head(); ?>

</head>

<body>

<div class="wrapper">

<header>

<a href="<?php bloginfo('url'); ?>" class="logo">SARA OSEBOLD</a>



<?php get_search_form(); ?>





<div class="responsive-icons">

<img src="<?php bloginfo('template_url'); ?>/image/mobile-nav.png">

</div>



</header>



<?php wp_nav_menu(array( 'menu' => 'main', 'container' => 'nav' )); ?>



<section class="content">

