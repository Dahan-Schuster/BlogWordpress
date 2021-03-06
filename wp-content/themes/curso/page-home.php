<?php get_header() ?>
<div class="content-area">
    <main>
        <section class="slides">
            <?= do_shortcode('[recent_post_slider design="design-2" limit=3]') ?>
        </section>
        <section class="services">
            <div class="row text-center">
                <h1 class="col-12"><?php _e('Our Services', 'wpcurso'); ?></h1>
                <div class="col-sm-4">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-1'))
                            dynamic_sidebar('services-1');
                        ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-2'))
                            dynamic_sidebar('services-2');
                        ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services-item">
                        <?php
                        if (is_active_sidebar('services-3'))
                            dynamic_sidebar('services-3');
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container-fluid">
                <div class="row">
                    <aside class="sidebar offset-2 col-md-2 h-100">
                        <?php get_sidebar('home') ?>
                    </aside>
                    <div class="news col-md-8">
                        <div class="container">
                            <h1><?php _e('Latest News', 'wpcurso'); ?></h1>
                            <div class="row">
                                <div class="col-12">
                                    <!-- Notícia principal -->
                                    <?php

                                    // Argumentos de pesquisa para filtrar os posts
                                    // Nesse caso, pesquisa um único post das categorias 19, 31 ou 9
                                    $args = 'post_type=post&posts_per_page=1&cat=19,31,9';
                                    $featured = new WP_Query($args);

                                    /**
                                     * Após realizar a Query, o objeto $featured contém 
                                     * todos os posts que passaram no filtro
                                     * Com ele é possível realizar o loop padrão do WordPress
                                     * Um loop sem nenhum filtro está no arquivo Index
                                     */
                                    if ($featured->have_posts()) : # Se houver algum post...
                                        # itera pelos posts, carregando cada um
                                        # aqui, como a pesquisa chamou apenas um post, é possível
                                        # remover o while (já que o loop terá apenas uma volta)
                                        while ($featured->have_posts()) : $featured->the_post();

                                            # mostra na tela as informações do post 
                                            get_template_part('template-parts/content', 'featured');

                                        endwhile;
                                        # Redefine o filtro de posts, voltando a 
                                        # pesquisar por todos sem filtragem
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                                <!-- Notícias secundárias -->
                                <?php
                                $args = array(
                                    'posts_per_page' => 2,
                                    'post_type' => 'post',
                                    'offset' => 1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'post_format',
                                            'field' => 'slug',
                                            'terms' => array(
                                                'post-format-aside',
                                                'post-format-gallery',
                                                'post-format-link',
                                                'post-format-quote',
                                                'post-format-status',
                                                'post-format-audio',
                                                'post-format-chat',
                                                'post-format-video'
                                            ),
                                            'operator' => 'NOT IN'
                                        )
                                    )
                                );
                                $secondary = new WP_Query($args);
                                if ($secondary->have_posts()) :
                                    while ($secondary->have_posts()) : $secondary->the_post(); ?>
                                        <div class="col-sm-6">
                                            <?php get_template_part('template-parts/content', 'secondary'); ?>
                                        </div>
                                <?php endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=API_KEY&q=Space+Needle,Seattle+WA&zoom=15" allowfullscreen>
            </iframe>
        </section>
    </main>
</div>
<?php get_footer() ?>