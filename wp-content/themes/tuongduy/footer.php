<?php
wp_footer(); // export
?>
<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <!-- Menu Footer Service -->
            <?php echo tuongduy_footer_menu(); ?>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Project Gallery</h5>
                <div class="row g-2">
                    <?php
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'post_status' => 'publish'
                    );
                    $services_query = new WP_Query($args);
                    if ($services_query->have_posts()) :
                        while ($services_query->have_posts()) : $services_query->the_post(); ?>
                            <div class="col-4">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail');
                                    } else {
                                        echo '<img src="' . TUONGDUY_THEME_IMG . '/hero.png" alt="No Image" class="img-fluid rounded-start">';
                                    }
                                    ?>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // reset post data
                    else :
                        echo 'Không tìm thấy posts';
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Newsletter</h5>
                <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                <div class="position-relative w-100 mt-3">
                    <?php echo do_shortcode('[contact-form-7 id="7f31957" title="Contact form 1"]'); ?>
                    <!-- <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    <!--bottom footer -->
                    Designed By <a class="border-bottom" href="https://buimanhduc.com">Bùi Mạnh Đức chấm COM</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

</body>

</html>