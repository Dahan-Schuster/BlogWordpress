<article <?php post_class() ?>>
    <h2>
        <?php the_title() ?>
        <small><a href="<?php the_permalink() ?>">Leia mais</a></small>
    </h2>
    <hr>
    <?php the_excerpt() ?>
    <div class="meta-info">
        <p>Published in <?= get_the_date() ?> by <?php the_author_posts_link() ?></p>
        <?php if (has_category()) : ?>
            <p>Categories: <?php the_category(', ') ?></p>
        <?php endif ?>
        <p><?php the_tags('Tags: ', ', ') ?></p>
    </div>
    <hr class="mb-5">
</article>