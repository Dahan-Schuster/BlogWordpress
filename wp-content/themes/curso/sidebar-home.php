<?php if (is_active_sidebar('sidebar-home')) : ?>
    <?php dynamic_sidebar('sidebar-home') ?>
<?php else: ?>
    <p>There's no widget in use at the moment. What about choose some at the <a href="<?= get_admin_url(null, 'widgets.php') ?>">widgets page</a>? ;)</p>
<?php endif; ?>