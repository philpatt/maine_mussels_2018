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
    <body>
        <div id='container'>
            <header>
                <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">Mussels Lacrosse</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teams <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo get_page_link(87); ?>">Mussels Green</a></li>
                            <li><a href="#">Mussels Navy</a></li>
                            <li><a href="#">Mussels Futures</a></li>
                        </ul>
                        </li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                    </div>
                </div>
                </nav>
            </header>

            <div id='banner' style="background-image: url(<?php header_image(); ?>)">
                <div class="banner-img-logo">
                    <img src="./uploads/2018/04/maine_mussels_logo-300x300.png" alt="logo">
                </div>              
            </div>




                <!-- content will change based on what each page -->
            <div id='content'>
                <h2>This is the content</h2>

        <!-- closing container and content div in footer -->