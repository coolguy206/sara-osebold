<?php get_header(); ?>

<?php wp_nav_menu(array( 'menu' => 'portfolio', 'container' => 'nav' )); ?>



<div class="box620">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php if ( has_post_format( 'gallery' )) { ?>





<h1><?php the_title(); ?></h1>



<div class="post-links">

<?php previous_post_link('%link', 'Previous Post', TRUE); ?>

<?php next_post_link('%link', 'Next Post', TRUE ); ?>

</div>



<div>

<?php echo get_post_meta($post->ID, 'youtube', true); ?>

</div>



<p>
<?php echo str_replace("\n","<br/>",get_post_meta($post->ID, "description", true)); ?>

</p>



<div class="gallery">

<?php the_content(); ?>

</div>


<?php } elseif ( has_post_format( 'image' )) { ?>


<h1><?php the_title(); ?></h1>

<p>
<?php echo str_replace("\n","<br/>",get_post_meta($post->ID, "description", true)); ?>

</p>

<div class="post-links">

<?php previous_post_link('%link', 'Previous Post', TRUE); ?>

<?php next_post_link('%link', 'Next Post', TRUE ); ?>

</div>


<div class="image">

<?php the_content(); ?>

</div>


<?php } else { ?>



<h1><?php the_title(); ?></h1>

<p>
<?php echo str_replace("\n","<br/>",get_post_meta($post->ID, "description", true)); ?>

</p>

<div class="post-links">

<?php previous_post_link('%link', 'Previous Post', TRUE); ?>

<?php next_post_link('%link', 'Next Post', TRUE ); ?>

</div>


<div class="gallery">
<?php the_content(); ?>
</div>




<?php } ?>



<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>



</div><!--.box620-->



<div class="box140">

<?php rewind_posts(); ?>

<?php while (have_posts()) : the_post(); ?>

<h3>More <?php if (in_category('Sculptures')) : ?>



Sculptures



<?php elseif (in_category('Installations')) : ?>



Installations



<?php elseif (in_category('Performances')) : ?>



Performances



<?php elseif (in_category('Drawings')) : ?>



Drawings



<?php elseif (in_category('Works on Paper')) : ?>



Works on Paper



<?php elseif (in_category('Stage Work')) : ?>



Stage Work



<?php endif; ?></h3>



<ul>



<?php if ( in_category('Sculptures') ) : ?>



 <?php $pages = get_posts('category_name=sculptures&orderby=date&posts_per_page=100&order=DESC'); ?>







 



<?php elseif ( in_category('Installations') ) : ?>



 <?php $pages = get_posts('category_name=installations&orderby=date&posts_per_page=100&order=DESC'); ?>



 



<?php elseif ( in_category('Performances') ) : ?>



 <?php $pages = get_posts('category_name=performances&orderby=date&posts_per_page=100&order=DESC'); ?>



 



<?php elseif ( in_category('Drawings') ) : ?>



 <?php $pages = get_posts('category_name=drawings&orderby=date&posts_per_page=100&order=DESC'); ?>



 



<?php elseif ( in_category('Works on Paper') ) : ?>



 <?php $pages = get_posts('category_name=works-on-paper&orderby=date&posts_per_page=100&order=DESC'); ?>







<?php elseif ( in_category('Stage Work') ) : ?>



 <?php $pages = get_posts('category_name=stage-work&orderby=date&posts_per_page=100&order=DESC'); ?>







<?php endif; ?>







 <?php foreach ($pages as $page): ?>



 <li>



 <a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a>



 </li>



 <?php endforeach; ?>



</ul>

<?php endwhile; ?>

</div><!--.box140-->



<?php get_footer(); ?>