<article <?php post_class() ?>>
    <h2><?php the_title() ?></h2>
    <hr>
    <?php the_content() ?>
    <div class="meta-info">
        <p>Published in <?= get_the_date() ?> by <?php the_author_posts_link() ?></p>
        <p>Categories: <?php the_category(', ') ?></p>
        <p><?php the_tags('Tags: ', ', ') ?></p>
    </div>
    <hr class="mb-5">
</article>