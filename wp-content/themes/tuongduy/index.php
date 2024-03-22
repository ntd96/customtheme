<?php get_header(); ?>
<div id="primary" class="content-area">
    <header class="page-header">
        <h1 class="page-title">
            <?php
            if (is_category()) { // Néu là trang danh mục
                single_cat_title();
            } elseif (is_tag()) { // Nếu là trang tag
                single_tag_title();
            } elseif (is_author()) {
                printf(__('Author: %s', 'tuongduy'), '<span class="vcard"> .get_the_author().</span>');
            } elseif (is_home()) {
                echo 'Trang chủ';
            } else {
                __('Archives', 'tuongduy');
            }
            ?>
        </h1>
    </header>
    <?php get_template_part('templates/news'); ?>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>