<?php get_header() ?>
<img class="img-fluid" src="<?php header_image() ?>" height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>" alt="Cabeçalho">
<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="row">
                <div class="error-404 col-9">
                    <header>
                        <h1>Page not found</h1>
                        <p>Unfortunately, the page you are trying to reach doesn't exists on this site 😕</p>
                    </header>
                    <div class="error">
                        <p>But wait! Don't go away too fast! 😄</p>
                        <p>See the recent posts of the blog. You may like something!</p>
                        <?php the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title'  => 'Latest posts',
                                'number' => 3
                            )
                        ); ?>
                    </div>
                </div>
                <aside class="sidebar col-md-3 h-100">
                    <?php get_sidebar('blog') ?>
                </aside>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>