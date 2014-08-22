<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div>
<?php while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>
</div>

<div class="box460">
<h1>Featured Art</h1>
<?php rewind_posts(); ?>
<?php query_posts('posts_per_page=1&orderby=rand'); ?> 
<?php while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(array(460,9999)); ?>
   </a>
 <?php endif; ?>
<?php endwhile; ?>
</div><!--.box460-->

<div class="box460">
<h1>Most Recent</h1>
<?php rewind_posts(); ?>
 <?php query_posts('posts_per_page=1&orderby=date'); ?> 
<?php while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(array(460,9999)); ?>
   </a>
 <?php endif; ?>
<?php endwhile; ?>
</div><!--.box460-->


<?php get_footer(); ?>