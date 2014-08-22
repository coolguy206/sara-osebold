<?php global $query_string;

$query_args = explode("&", $query_string);

$search_query = array();foreach($query_args as $key => $string) {	$query_split = explode("=", $string);	$search_query[$query_split[0]] = urldecode($query_split[1]);} // foreach$search = new WP_Query($search_query);?>





<?php get_header(); ?>



<div class="box140">



</div><!--.box140-->



<div class="box780">



<h1 class="search-results">Search Results: <?php the_search_query(); ?></h1>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>

<?php the_excerpt(); ?>




<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria. Please try a different search.'); ?></p>

<?php endif; ?>

<div class="next-prev">
<?php next_posts_link('Previous'); ?>
<?php previous_posts_link('Next'); ?>
</div>

</div><!--.box780-->



<?php get_footer(); ?>