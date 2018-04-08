<?php 
/*
    Template Name: Page No Title
 */

get_header(); ?>

<?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
            <h2>THIS IS MY STATIC TITLE</h2>
            <p><?php the_content(); ?><p>
            <h3><?php the_title(); ?></h3>

            <hr>

        <?php endwhile;
        
    endif;
?>

<?php get_footer(); ?>
