<?php
// khai báo hằng số thư mục
define('TUONGDUY_THEME_DIR', get_template_directory());
define('TUONGDUY_THEME_URL', get_template_directory_uri());
define('TUONGDUY_THEME_CSS', TUONGDUY_THEME_URL . '/css');
define('TUONGDUY_THEME_IMG', TUONGDUY_THEME_URL . '/img');
define('TUONGDUY_THEME_JS', TUONGDUY_THEME_URL . '/js');
define('TUONGDUY_THEME_LANG', TUONGDUY_THEME_DIR . '/lang');
define('TUONGDUY_THEME_LIB', TUONGDUY_THEME_URL . '/lib');
define('TUONGDUY_THEME_SCSS', TUONGDUY_THEME_URL . '/scss');
define('TUONGDUY_THEME_TEMPLATES', TUONGDUY_THEME_URL . '/templates');

// Khai báo  css bằng wp_enqueue_style();
function tuongduy_enqueue_style()
{
    // GG Font
    wp_enqueue_style('tuongduy_theme_style_1', 'https://fonts.googleapis.com', array(), '1.0', 'all');
    wp_enqueue_style('tuongduy_theme_style_2', 'https://fonts.gstatic.com', array(), '1.0', 'all');
    wp_enqueue_style('tuongduy_theme_style_3', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap', array(), '1.0', 'all');
    // Icon
    wp_enqueue_style('tuongduy_theme_style_4', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('tuongduy_theme_style_5', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css ', array(), '1.0', 'all');
    // Lib Style
    wp_enqueue_style('tuongduy_theme_style_6', TUONGDUY_THEME_LIB . '/animate/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('tuongduy_theme_style_7', TUONGDUY_THEME_LIB . '/owlcarousel/assets/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style('tuongduy_theme_style_8', TUONGDUY_THEME_LIB . '/lightbox/css/lightbox.min.css', array(), '1.0', 'all');
    // BOOTSTRAP
    wp_enqueue_style('tuongduy_theme_style_9', TUONGDUY_THEME_CSS . '/bootstrap.min.css', array(), '1.0', 'all');
    // TEMPLATE STYLE
    wp_enqueue_style('tuongduy_theme_style_10', TUONGDUY_THEME_CSS . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'tuongduy_enqueue_style');

function tuongduy_enqueue_script()
{
    wp_enqueue_script('tuongduy_theme_js_1', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_2', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_3', TUONGDUY_THEME_LIB . '/wow/wow.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_4', TUONGDUY_THEME_LIB . '/easing/easing.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_5', TUONGDUY_THEME_LIB . '/waypoints/waypoints.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_6', TUONGDUY_THEME_LIB . '/owlcarousel/owl.carousel.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_7', TUONGDUY_THEME_LIB . '/isotope/isotope.pkgd.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_8', TUONGDUY_THEME_LIB . '/lightbox/js/lightbox.min.js', array(), '1.0', 'true');
    wp_enqueue_script('tuongduy_theme_js_9', TUONGDUY_THEME_JS . '/main.js', array(), '1.0', 'true');
}
add_action('wp_enqueue_scripts', 'tuongduy_enqueue_script');

// Add thumbnnail vào theme
function tuongduy_theme_option()
{
    // Add thumb trong post
    add_theme_support('post-thumbnails');
    // SEO
    add_theme_support('title-tag');
    // Tạo màu sắc, hình nền ở customize
    $default_bg = array(
        'default-color' => '#c6c6c6',
        'default-repeat' => 'no-repeat'
    );
    add_theme_support('custom-background', $default_bg);
    // Tạo menu
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'tuongduy'),
        'footer_menu'  => __('Footer Menu', 'tuongduy'),
    ));
    // Tạo sidebar - widget
    $sidebar = array(
        'name' => __('Main Sidebar', 'tuongduy'),
        'id' => 'main-sidebar',
        'description' => '',
        'class' => 'main-sidebar',
        'before_title' => '<h3 class="main-sidebar">',
        'after_title' => '</h3>'
    );
    register_sidebar($sidebar);
    // Add Lang
    load_theme_textdomain('tuongduy', TUONGDUY_THEME_LANG);
    // Add format post
    add_theme_support('post-formats', array('aside', 'gallery', 'video', 'image', 'quote', 'link'));
}

add_action('init', 'tuongduy_theme_option');

// Tạo mới danh sách services CUSTOM POST TYPE
// if(!function_exists('tuongduy_option')) {
//     function tuongduy_option($option ='', $default = null) {
//         $option = get_option('manhduc_cs_option');
//         return (isset($option[$option])) ? $option[$option] : $default;
//     }
// }
// class Tuongduy_Services {
//     function __construct() {
//         add_action('init', array(__CLASS__, 'tuongduy_services_init'));
//         add_filter('single_template', array($this, 'portfolio_single'));
//     }
// }
// function tuongduy_services_init() {
//     if(function_exists('tuongduy_option')) {
//         $slug_text = tuongduy_option('Services_slug');
//     }
//     $slug = !empty($slug_text) ? $slug_text : 'dich-vu';

// }
// register_post_type('services', array(
//     'puclic' => true,

// ));

// MENU NAV
// dyamic menu for user wp admin
function tuongduy_menu()
{
    $menu_args = array(
        'theme_location' => 'primary_menu',
        'container' => 'div',
        'container_class' => 'pcollapse navbar-collapse',
        'container_id' => 'navbarCollapse',
        'menu_class' => 'navbar-nav ms-auto py-0',
        'fallback_cb' => 'false'
    );
    wp_nav_menu($menu_args);
}
// Hàm khai báo mục nav của code để gọi vào header
function tuongduy_nav_menu()
{ ?>
    <div class="container-xxl position-relative p-0">

        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1>
                <img src="img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <?php tuongduy_menu() ?>
            <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="project.html" class="nav-item nav-link">Project</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div> -->
            <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            <a href="https://buimanhduc.com" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Bùi Mạnh Đức</a>
            <!-- </div> -->
        </nav>
    </div>
<?php }
