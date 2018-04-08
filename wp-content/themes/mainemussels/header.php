<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Maine Mussels</title>
        <?php wp_head(); ?>
    </head>
    <?php
    // is_home is referenced to where the blog posts are, use is_front_page instead
        if ( is_front_page() ):
            $mainemussels_classes = array('mainemussels-class', 'my-class');
        else:
            $mainemussels_classes = array('no-mainemussels-class');
        endif;
            

    ?>
    <body <?php body_class( $mainemussels_classes );?>>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        
