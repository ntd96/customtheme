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