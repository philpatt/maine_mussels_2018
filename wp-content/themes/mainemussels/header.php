<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Maine Mussels</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
       <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Maine Mussels</a>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) );
                ?>
            </div>
        </nav>
        <img src="<?php header_image(); ?>" alt="">

        
