<section class="content-none">
    <header class="page-header">
        <h1 class="page-title"> <?php echo __('Nothing Found', 'tuongduy') ?> </h1>
    </header>
    <div class="page-content-none">
        <!-- xác định conntent none thì cho ra result like that -->
        <?php if (is_search()) : ?>
            <p> <?php echo __('Sr, Nothing matched Your keyword!', 'tuongduy'); ?> </p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p> <?php echo __('Sorry, nothing matched your search terms. Please try again with different keywords.', 'tuongduy'); ?> </p>
            <?php get_search_form();?>
        <?php endif; ?>
    </div>
</section>