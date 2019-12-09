<article <?php post_class(array('class' => 'col-sm-6 mb-5')) ?>>
    <h4>
        "<?php the_title() ?>", by <?php the_author_posts_link() ?> 
        <small>(<a href="<?php the_permalink() ?>">Leia mais</a>)</small>
    </h4>
    <?php the_post_thumbnail('medium', array('class' => 'img-fluid')) ?>
    <div style="text-align: justify;"><?php the_excerpt() ?></div>
    <div class="meta-info">
        <p>Categories: <?php the_category(', ') ?></p>
        <p><?php the_tags('Tags: ', ', ') ?></p>
    </div>
</article>