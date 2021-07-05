<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function register_assets() {
    
    // Déclarer le JS
	wp_enqueue_script( 
        'jquery', 
        get_template_directory_uri() . '/assets/js/jquery.min.js', 
    );

    // Déclarer le JS
	wp_enqueue_script( 
        'browser', 
        get_template_directory_uri() . '/assets/js/browser.min.js', 
    );

    // Déclarer le JS
	wp_enqueue_script( 
        'breakpoints', 
        get_template_directory_uri() . '/assets/js/breakpoints.min.js', 
    );

    // Déclarer le JS
	wp_enqueue_script( 
        'util', 
        get_template_directory_uri() . '/assets/js/util.js', 
    );

    // Déclarer le JS
	wp_enqueue_script( 
        'main', 
        get_template_directory_uri() . '/assets/js/main.js', 
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'capitaine',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'capitaine', 
        get_template_directory_uri() . '/assets/css/fontawesome-all.min.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'register_assets' );

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

