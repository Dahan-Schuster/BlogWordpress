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


# Adicionando a chamada de scripts e folhas de estilo à fila de carregamento do WP
add_action('wp_enqueue_scripts', 'load_scripts');

/*************************************************************/

/**
 * Configurando suportes do tema
 */
function theme_config()
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
     * Adicionando inclusão de thumbnails para posts
     */
    add_theme_support('post-thumbnails');

    /**
     * Adicionando definição de formato de post
     */
    add_theme_support('post-formats', array('video', 'image'));

    /**
     * Definindo a tag title
     */
    add_theme_support('title-tag');
}

# Amarrando a rotina de configuração do tema ao gancho chamado após a inicialização
add_action('after_setup_theme', 'theme_config', 0);

/*************************************************************/

/**
 * Configurando os widgetes
 */
function theme_widgets()
{
    # Sidebar Home
    register_sidebar(
        array(
            'name'          => 'Home Page Sidebar',
            'id'            => 'sidebar-home',
            'description'   => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
    
    # Sidebar Blog
    register_sidebar(
        array(
            'name'          => 'Blog Sidebar',
            'id'            => 'sidebar-blog',
            'description'   => 'Sidebar to be used on Posts Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    # Redes Sociais
    register_sidebar(
        array(
            'name'          => 'Social Media Icons',
            'id'            => 'social-media',
            'description'   => 'Social Media Icons widget',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    /**
     * Área de serviços 
     * */ 

    # Widget 1
    register_sidebar(
        array(
            'name'          => 'Services 1',
            'id'            => 'services-1',
            'description'   => 'First widget of Services area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    # Widget 2
    register_sidebar(
        array(
            'name'          => 'Services 2',
            'id'            => 'services-2',
            'description'   => 'Second widget of Services area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    # Widget 3
    register_sidebar(
        array(
            'name'          => 'Services 3',
            'id'            => 'services-3',
            'description'   => 'Third widget of Services area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

}

# Amarrando a rotina de configuração das sidebars ao gancho de inicialização dos widgets
add_action('widgets_init', 'theme_widgets');
