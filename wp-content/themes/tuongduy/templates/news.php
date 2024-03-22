<div class="main-content">
    <?php
    $recent_post = new WP_Query(
        array(
            'post_type' => 'post',
            'posts_per_page' => 2,
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        )
    );
    if ($recent_post->have_posts()) :
        while ($recent_post->have_posts()) :
            $recent_post->the_post();
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
        tuongduy_pagination($recent_post, 2);
        wp_reset_postdata(); // reset post data
    else :
        get_template_part('contennt', 'none');
    endif;
    ?>
</div>