<?php

/*

Template Name: Portfolio

*/

?>

<?php get_header(); ?>


<?php wp_nav_menu(array( 'menu' => 'portfolio', 'container' => 'nav' )); ?>

<div class="box780">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>


<div class="portfolio">
<?php the_content(); ?>
</div>


<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</div><!--.box780-->

<?php get_footer(); ?>