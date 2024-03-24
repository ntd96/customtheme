<?php get_header(); ?>
<div id="primary" class="content-area">

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <div class="container-xxl py-5 bg-primary hero-header mb-5">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated zoomIn">
                            <?php
                            // if (is_category(8)) {
                            //     get_template_part('templates/tintuc');
                            // }
                            if (is_category()) { // Néu là trang danh mục
                                $archive_title = single_cat_title();
                            } elseif (is_tag()) { // Nếu là trang tag
                                $archive_title = single_tag_title();
                            } elseif (is_author()) {
                                $archive_title = get_the_author();
                            } elseif (is_date()) {
                                if (is_day()) {
                                    $archive_title = get_the_date();
                                } elseif (is_month()) {
                                    $archive_title = get_the_date('F Y');
                                } elseif (is_year()) {
                                    $archive_title = get_the_date('Y');
                                }
                            } elseif (is_post_type_archive()) {
                                $archive_title = post_type_archive_title('', false);
                            } elseif (is_tax()) {
                                $archive_title = single_term_title('', false);
                            } else {
                                $archive_title = __('Archives', 'tuongduy');
                            }
                            echo '<h1 class="page-title">' . esc_html($archive_title) . "</h1>";
                            ?> </h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <?php
                            tuongduy_breadcrumb();
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main id="main" class="site-main">
     
        <?php
        // Lấy Id của danh mục hiện tại
        $category_id = get_queried_object_id();
        $post_per_page = 2;
        $args = array(
            'cat' => $category_id,
            'posts_per_page' => $post_per_page,
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
        );
        $query = new WP_Query($args);
        debug_to_console($query);
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <div class="recent-post">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('thumbnail');
                    endif; ?>
                    <div class="post-details">
                        <h2> <a href="<?php the_permalink(); ?>"> <?php echo the_title(); ?></a></h2>
                        <?php $excerpt = get_the_excerpt(); ?>
                        <p><?php echo wp_trim_words($excerpt, 20, '...'); ?></p>
                        <p class="post-meta">
                            Tác giả: <?php the_author(); ?> | Ngày: <?php echo the_time('d/m/Y') ?>
                        </p>
                    </div>
                </div>
        <?php
            endwhile;
            tuongduy_pagination($query, $post_per_page);
            wp_reset_postdata();
        else :
            echo 'Không tìm thấy bài viết trong danh mục này!';
        endif;
        ?>

    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>