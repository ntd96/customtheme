<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        if (have_posts()) : ?>
        <header>

        </header>
        <?php while (have_posts()) : the_post();
                get_template_part('content', get_post_format());
            endwhile;
        else :
            get_template_part('content', 'none');
        endif;
        ?>
    </main>
</div>
<?php get_sidebar();?>
<?php get_footer();?>