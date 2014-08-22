<?php get_header(); ?>



<?php wp_nav_menu(array( 'menu' => 'portfolio', 'container' => 'nav' )); ?>



<div class="box780">



<?php if (is_category('sculptures')) : ?>



<h1>Sculptures</h1>



<?php elseif (is_category('installations')) : ?>



<h1>Installations</h1>



<?php elseif (is_category('performances')) : ?>



<h1>Performances</h1>



<?php elseif (is_category('drawings')) : ?>



<h1>Drawings</h1>



<?php elseif (is_category('Works on Paper')) : ?>



<h1>Works on Paper</h1>



<?php elseif (is_category('Stage Work')) : ?>



<h1>Stage Work</h1>



<?php endif; ?>







<ul class="project">



<?php if ( in_category('sculptures') ) : ?>



 <?php $pages = get_posts('category_name=sculptures&orderby=date&posts_per_page=100&order=DESC'); ?>







 



<?php elseif ( in_category('installations') ) : ?>



 <?php $pages = get_posts('category_name=installations&orderby=date&posts_per_page=100&order=DESC'); ?>



 



<?php elseif ( in_category('performances') ) : ?>



 <?php $pages = get_posts('category_name=performances&orderby=date&posts_per_page=100&order=DESC'); ?>



 



<?php elseif ( in_category('drawings') ) : ?>



 <?php 
$pages = get_posts('category_name=drawings&orderby=date&posts_per_page=100&order=DESC'); ?>



 



<?php elseif ( in_category('Works on Paper') ) : ?>



 <?php $pages = get_posts('category_name=works-on-paper&orderby=date&posts_per_page=100&order=DESC'); ?>







<?php elseif ( in_category('Stage Work') ) : ?>



 <?php $pages = get_posts('category_name=stage-work&orderby=date&posts_per_page=100&order=DESC'); ?>







<?php endif; ?>







 <?php foreach ($pages as $page): ?>



 <li>



 <a href="<?php echo get_permalink($page->ID); ?>"><p><?php echo $page->post_title; ?></p><?php echo get_the_post_thumbnail($page->ID); ?></a>



 </li>



 <?php endforeach; ?>





</ul>




</div><!--.box780-->



<?php get_footer(); ?>