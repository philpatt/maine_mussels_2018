<!-- contact page -->
<?php get_header(); ?>
<h3><?php the_title(); ?></h3>        

<?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
            <h3><?php the_title(); ?></h3>        
            <p><?php the_content(); ?><p>
            <hr>
        <?php endwhile;
    endif;
?>
<h3>contact page</h3>
<?php get_footer(); ?>
