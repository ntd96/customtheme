<?php 
    $post_id = get_the_ID(); // Lấy Id hiện tại của bài viết dựa trên slug
    $author_id = get_post_field('post_author', $post_id); // Từ Id bài viet61, query reverse 
    $author_name = get_the_author_meta('display_name', $author_id); // Lấy tên tác giả của bài viết
    $author_link = get_author_posts_url($author_id);
    $author_description = get_the_author_meta('description', $author_id);
    $author_avatar = get_avatar($author_id, 80);
?>
<div class="author-info">
    <div class="author-avatar">
        <?php echo $author_avatar;?>
    </div>
    <div class="author-detail">
        <h4 class="author-name">
            <a href="<?php echo $author_link;?>"><?php echo esc_html($author_name);?></a>
        </h4>
        <p class="author-description">
            <?php echo esc_html($author_description);?>
        </p>
    </div>
</div>