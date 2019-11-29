<?php get_header() ?>
<img class="img-fluid" src="<?php header_image() ?>" height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>" alt="Cabeçalho">
<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="row">
                <aside class="sidebar col-md-3 h-100">
                    <?php get_sidebar('blog') ?>
                </aside>
                <div class="news col-md-9">
                    <?php
                    // Se houver um post...
                    if (have_posts()) :
                        // mostre o post enquanto houverem posts
                        while (have_posts()) :
                            the_post();
                            get_template_part('template-parts/content', get_post_format());
                        endwhile;

                    else :
                        ?>
                        <p>Sorry... There's no posts to be displayed at the moment :/</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>