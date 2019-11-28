<?php

/**
 * Carregando folhas de estilo e scripts js
 */
function load_scripts()
{
    # BootStrap (JavaScript)
    wp_enqueue_script(
        'bootstrap-js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js',
        array('jquery'),
        '4.4.0',
        true
    );
    # BootStrap (CSS)
    wp_enqueue_style(
        'bootstrap-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css',
        array(),
        '4.4.0',
        'all'
    );
    # Template do tema (CSS)
    wp_enqueue_style(
        'template',
        get_template_directory_uri('css/template.css'),
        array(),
        '1.0',
        'all'
    );
}

/**
 * Adicionando a chamada de scripts e folhas de estilo à fila de carregamento do WP
 */
add_action('wp_enqueue_scripts', 'load_scripts');


function wpcurso_config()
{
    /**
     * Registrando Menus
     */
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer menu'
        )
    );

    /**
     * Adicionando personalização de cabeçalho
     */
    $args = array(
        'height'    => 225,
        'width'     => 1920
    );
    add_theme_support('custom-header', $args);

    /**
     * Adicionando inclusão de thumnails para posts
     */
    add_theme_support( 'post-thumbnails' );
    
    /**
     * Adicionando definição de formato de post
     */
    add_theme_support( 'post-formats', array( 'video', 'image' ) );
}

add_action( 'after_setup_theme', 'wpcurso_config', 0 );
