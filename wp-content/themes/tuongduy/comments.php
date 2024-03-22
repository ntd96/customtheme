<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('Vui lòng không mở file này');
}
if (have_comments()) :
?>
    <div id="comments" class="comment-area">
        <h3 class="comments-title">
            <?php
            $comment_number = get_comments_number();
            if ($comment_number === 1) {
                printf(_x('One Comment', 'comment title', 'tuongduy'));
            } else {
                printf(_nx('%1$s Comment', '%1$s Comments', $comment_number, 'comment title', 'tuongduy'), number_format_i18n($comment_number));
            }
            ?>
        </h3>
        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ol',
                'avatar_size' => 42,
                'short_ping' => true
            ));
            ?>
        </ol>
        <?php
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
                <div class="nav-previous"> <?php previous_comments_link(__('< Older comments', 'tuongduy')) ?> </div>
                <div class="nav-next"> <?php next_comments_link(__(' Newer comments >', 'tuongduy')) ?> </div>
            </nav>
        <?php
        endif;
        ?>
    </div>
    <?php
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
        <p class="no-comments"> <?php __('Comment are Closed', 'tuongduy') ?> </p>
    <?php
    endif;
    ?>
<?php
endif;
?>
<?php comment_form(); ?>