<?php get_header() ?>
<div class="content-area">
    <main>
        <section class="slides">Slides</section>
        <section class="services">Serviços</section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-md-4">Sidebar</aside>
                    <div class="news col-md-8">
                        <?php
                        // Se houver um post...
                        if (have_posts()) :
                            // mostre o post enquanto houverem posts
                            while (have_posts()) : the_post();
                                ?>
                                <article>
                                    <h2><?php the_title() ?></h2>
                                    <p>Published in <?= get_the_date() ?> by <?php the_author_posts_link() ?></p>
                                    <p>Categories: <?php the_category(' ') ?></p>
                                    <p><?php the_tags('Tags: ', ', ') ?></p>
                                    <?php the_content() ?>
                                </article>
                            <?php
                                endwhile;

                            else :
                                ?>
                            <p>Sorry... There's no posts to be displayed at the moment :/</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">Mapa</section>
    </main>
</div>
<?php get_footer() ?>