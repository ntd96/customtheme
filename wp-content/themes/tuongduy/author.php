<?php get_header(); ?>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <div class="author-avatar">
                        <?php echo get_avatar(get_the_author_meta('user_email'), 80); ?>
                    </div>
                    <h1 class="text-white animated zoomIn"> <?php echo get_the_author(); ?> </h1>
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
    <!-- Render -->
    <?php
    // Lấy Id của danh mục hiện tại
    $category_id = get_queried_object_id();
    $post_per_page = 3;
    $args = array(
        'author' => $category_id,
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