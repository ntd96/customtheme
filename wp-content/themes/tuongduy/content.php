<article id="content-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="content-cntainer">
        <?php the_content(); ?>
    </div>
    <hr>
    <?php
    if (is_single()) {
    ?>
        <footer class="entry-footer">
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="NONCE"></script>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <div class="social-share">
                <span>Chia sẻ: </span>
                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" class="sharer-facebook"> Facebook </a>
                <a target="_blank" href="https://twitter.com/share" class="twitter-share-button" data-text='AD' data-url="<?php echo get_permalink(); ?>"> Twitter </a>
            </div>
            <div class="content-tags">
                <?php
                if (has_tag()):
                ?>
                    <span class="tags-span">
                        Tags: <?php the_tags('', ', ', ''); ?>
                    </span>
                <?php
                endif;
                ?>
            </div>
        </footer>
    <?php
    } else {
        echo 'Không hiện gì!';
    }
    ?>
</article>