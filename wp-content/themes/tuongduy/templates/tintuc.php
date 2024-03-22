<?php get_header(); ?>
HELLO MOTHer

<?php
$category_tintuc = get_queried_object_id();
$post_per_page = 2;
$args = array(
    'cat' => $category_tintuc,
    'posts_per_page' => $post_per_page,
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);
$query = new WP_Query($args);
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
      ?>
        <div class="recent-post">
            <?php if (has_post_thumbnail()) :
                the_post_thumbnail('thumbnail');
            endif;?>
            <div class="post-details">
                <h4> <a href="<?php the_permalink();?>"> <?php echo the_title();?></a></h4>
                <?php $excerpt = get_the_excerpt();?>
                <p class="fs-6"><?php echo wp_trim_words($excerpt, 20, '...');?></p>
                <p class="post-meta fs-6">
                    Tác giả: <?php the_author();?> | Ngày: <?php echo the_time('d/m/Y')?>
                </p>
            </div>
        </div>
        <?php
    }
    tuongduy_pagination($query, $post_per_page);
    wp_reset_postdata();
}
?>
<?php get_footer(); ?>