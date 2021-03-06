<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <?php wp_body_open(); ?>
    
        <div id="wrapper">
            <header id="header">
                <h1><a href="/">Future Imperfect</a></h1>
                <nav class="links">
                    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                </nav>
            </header>
        
        
