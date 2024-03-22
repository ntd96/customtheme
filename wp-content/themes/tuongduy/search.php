<?php get_header(); ?>
<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <header class="page-header">
            <h1>
                <?php
                printf(
                    esc_html__('Search Results for: %s ', 'tuongduy'),
                    '<span>' . get_search_query() . '</span>'
                )
                ?>
            </h1>
        </header>
        <?php
        $post_per_page = 2;
        $s = get_search_query();
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $post_per_page,
            's' => $s,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
                get_template_part('templates/content-post');
            endwhile;
            tuongduy_pagination($query, $post_per_page);
            wp_reset_postdata(); // reset post data
        // the_posts_pagination(array(
        //     'prev_text' => esc_html__('Previous','tuongduy'),
        //     'next_text' => esc_html__('Next','tuongduy'),

        // ));
        else :
            get_template_part('content', 'none');
        endif;
        ?>
    </main>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>