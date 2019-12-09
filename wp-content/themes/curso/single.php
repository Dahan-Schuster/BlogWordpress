<?php get_header() ?>
<div class="primary">
    <div id="main">
        <div class="container">
            <?php
            // mostre o post enquanto houverem posts
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', 'single'); ?>

                <div class="row">
                    <div class="pages text-left col-6">
                        <?php next_post_link('&laquo; %link') ?>
                    </div>
                    <div class="pages text-right col-6">
                        <?php previous_post_link('%link &raquo;') ?>
                    </div>
                </div>
                <hr>

            <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>