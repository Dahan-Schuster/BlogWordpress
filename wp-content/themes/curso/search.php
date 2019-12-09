<?php get_header() ?>
<div class="primary">
    <div id="main">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h2>Search results for: <b><?= get_search_query() ?></b></h2>
                </div>
                <div class="col-md-6 text-right">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <hr>
            <?php
            // mostre o post enquanto houverem posts
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', 'search');

                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            endwhile;

            the_posts_pagination(
                array(
                    'mid_size' => 2,
                    'prev_text' => 'Previous',
                    'next_text' => 'Next',
                    'screen_reader_text' => 'Navigation: '
                )
            );

            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>