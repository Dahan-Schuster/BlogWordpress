<article <?php post_class(array('class' => 'secondary')) ?>>
    <h2>
        <?php the_title() ?>
    </h2>
    <hr>
    <div class="thumbnail">
        <?php the_post_thumbnail('large', array('class' => 'img-fluid')) ?>
    </div>
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link() ?></span>
            Categories: <span><?php the_category(' ') ?></span>
            <?php the_tags('Tags: <span>', ', ', '</span>') ?>
        </p>
        <p><span><?= get_the_date() ?></span></p>
    </div>
    <?php the_excerpt() ?>
    <a href="<?php the_permalink() ?>">Leia mais</a>
</article>