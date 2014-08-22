<?php

/*

Template Name: About

*/

?>

<?php get_header(); ?>

<?php wp_nav_menu(array( 'menu' => 'about', 'container' => 'nav' )); ?>

<div class="box780">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<h1><?php the_title(); ?></h1>



<?php the_content(); ?>



<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div><!--.box780-->

<?php get_footer(); ?>