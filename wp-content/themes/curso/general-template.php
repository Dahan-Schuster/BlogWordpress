<?php
/*
Template name: Modelo geral
*/
?>
<?php get_header() ?>
<img class="img-fluid" src="<?php header_image() ?>" height="<?= get_custom_header()->height ?>" width="<?= get_custom_header()->width ?>" alt="Cabeçalho">
<div class="content-area">
    <main>
        <section class="middle-area">
            <div class="general-template">
                <?php
                // Se houver um post...
                if (have_posts()) :
                    // mostre o post enquanto houverem posts
                    while (have_posts()) : the_post();
                        ?>
                        <article>
                            <h2><?php the_title() ?></h2>
                            <hr>
                            <?php the_content() ?>
                        </article>
                    <?php
                        endwhile;

                    else :
                        ?>
                    <p>Sorry... There's no posts to be displayed at the moment :/</p>
                <?php endif; ?>
            </div>
        </section>
    </main>
</div>
<?php get_footer() ?>