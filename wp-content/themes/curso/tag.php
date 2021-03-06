<?php get_header() ?>
<img class="img-fluid" src="<?php header_image() ?>" height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>" alt="Cabeçalho">
<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="row">
                <div class="tag">
                    <?php

                    the_archive_title('<h1 class="archive-title"> Listando posts da <b>', '</b></h1><hr class="mb-5">');

                    // Se houver um post...
                    if (have_posts()) : ?>
                        <div class="row">
                            <?php

                                // mostre o post enquanto houverem posts
                                while (have_posts()) :
                                    the_post();
                                    get_template_part('template-parts/content', 'tag');
                                endwhile;

                                ?>
                        </div>
                        <div class="row">
                            <div class="pages text-right col-6">
                                <?php previous_posts_link('<< Newer posts') ?>
                            </div>
                            <div class="pages text-left col-6">
                                <?php next_posts_link('Older posts >>') ?>
                            </div>
                        </div>
                    <?php

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