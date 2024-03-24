<?php get_header(); ?>
<div class="container-xxl bg-white p-0">
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
                        <h1 class="text-white animated zoomIn"> <?php the_title(); ?> </h1>
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

    <!-- Navbar & Hero End -->
    <?php get_template_part('content'); ?>
    <?php get_sidebar(); ?>
    <?php get_template_part('templates/author','bio') ?>
</div>
<?php comments_template(); ?>
<?php get_footer(); ?>