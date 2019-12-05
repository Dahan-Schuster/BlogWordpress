<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
    <header>
        <h1>
            <?php the_title() ?>
        </h1>
        <hr>
        <div class="meta-info">
            <p>Published in <?= get_the_date() ?> by <?php the_author_posts_link() ?></p>
            <p>Categories: <?php the_category(', ') ?></p>
            <p><?php the_tags('Tags: ', ', ') ?></p>
        </div>
    </header>    

    <div class="content">
        <?php the_content() ?>
    </div>
</article>
<div class="mb-5"></div>