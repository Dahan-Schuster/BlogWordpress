<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="container-fluid">
        <header>
            <section class="top-bar">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-sm-7 col-12">
                        <?php
                        if (is_active_sidebar('social-media'))
                            dynamic_sidebar('social-media');
                        ?>
                    </div>
                    <div class="search col-xl-3 col-sm-5 col-12 text-right"><?php get_search_form() ?></div>
                </div>
            </section>
            <section class="menu-area">
                <div class="row">
                    <section class="logo col-md-2 col-12 text-center">Logo</section>
                    <nav class="main-menu col-md-10 col-12 text-right">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu'
                            )
                        ); ?>
                    </nav>
                </div>
            </section>
        </header>