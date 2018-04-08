<!-- Home page -->
<?php get_header(); ?>

<?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
            <h3><?php the_title(); ?></h3>        
            <p><?php the_content(); ?><p>
            <p><?php the_comment(); ?><p>
            


            <hr>

        <?php endwhile;
        
    endif;
?>
<h2>Home page</h2>
<?php get_footer(); ?>
