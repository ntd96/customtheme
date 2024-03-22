<?php get_header(); ?>
<div id="primary" class="content-area">
    <header class="page-header">
        <h1 class="page-title">
            <?php
                the_title();
            ?>
        </h1>
    </header>
    <?php get_template_part('content'); ?>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

<!--  include TUONGDUY_THEME_DIR.'/page/page-team.php' nhớ bọc php --> 
 