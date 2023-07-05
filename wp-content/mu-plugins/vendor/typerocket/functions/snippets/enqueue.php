<?php

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.

function wpplus_enqueue_scripts() {

    // Styles
    // <!-- Bootstrap Css -->
    wp_register_style( 'bootstrap-reboot.rtl.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/bootstrap/css/bootstrap-reboot.rtl.min.css', array(), '5.3.0', 'all' );
    wp_register_style( 'bootstrap.rtl.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/bootstrap/css/bootstrap.rtl.min.css', array(), '5.3.0', 'all' );
    // <!-- Menu Css -->
    wp_register_style( 'stellarnav.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/stellarnav/css/stellarnav.min.css', array(), '1.0.0', 'all' );
    wp_register_style( 'header-footer', TYPEROCKET_DIR_URL . 'resources/assets/css/header-footer.css', array(), '1.0.0', 'all' );
    // <!-- Icon Css -->
    wp_register_style( 'font-awesome.min', TYPEROCKET_DIR_URL . 'resources/assets/font/font-awesome/css/fontawesome.min.css', array(), '6.4.0', 'all' );
    wp_register_style( 'line-awesome.min', TYPEROCKET_DIR_URL . 'resources/assets/font/line-awesome/css/line-awesome.min.css', array(), '1.3.1', 'all' );
    // <!-- AOS Css -->
    wp_register_style( 'aos', TYPEROCKET_DIR_URL . 'resources/assets/vendor/aos/css/aos.css', array(), '1.2.0', 'all' );
    // <!-- Swiper Css -->
    wp_register_style( 'swiper-bundle.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/swiper/css/swiper-bundle.min.css', array(), '9.4.1', 'all' );
    // <!-- LightGallery Css -->
    wp_register_style( 'lightgallery-bundle.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/css/lightgallery-bundle.min.css', array(), '2.7.2', 'all' );
    // <!-- Gmax Css -->
    wp_register_style( 'style', TYPEROCKET_DIR_URL . 'resources/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_register_style( 'responsive', TYPEROCKET_DIR_URL . 'resources/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_register_style( 'component', TYPEROCKET_DIR_URL . 'resources/assets/css/component.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'bootstrap-reboot.rtl.min' );
    wp_enqueue_style( 'bootstrap.rtl.min' );
    wp_enqueue_style( 'stellarnav.min' );
    wp_enqueue_style( 'header-footer' );
    wp_enqueue_style( 'font-awesome.min' );
    wp_enqueue_style( 'line-awesome.min' );
    wp_enqueue_style( 'aos' );
    wp_enqueue_style( 'swiper-bundle.min' );
    wp_enqueue_style( 'lightgallery-bundle.min' );
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'responsive' );
    wp_enqueue_style( 'component' );


    // Scripts
    // <!-- Bootstrap Js -->
	wp_register_script( 'bootstrap.bundle.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '5.3.0', true );
    // <!-- Menu Js -->
	// wp_register_script( 'jquery.min', TYPEROCKET_DIR_URL . 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true );
	// wp_register_script( 'jquery-migrate', TYPEROCKET_DIR_URL . 'https://code.jquery.com/jquery-migrate-3.0.1.js', array(), '3.0.1', true );
	wp_register_script( 'stellarnav.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/stellarnav/js/stellarnav.min.js', array('jquery'), '1.0.0', true );
    // <!-- Lottie Js -->
	wp_register_script( 'lottie.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lottie/lottie.min.js', array(), '1.0.0', true );
    // <!-- AOS Js -->
	wp_register_script( 'aos', TYPEROCKET_DIR_URL . 'resources/assets/vendor/aos/js/aos.js', array(), '1.2.0', true );
    // <!-- Swiper Js -->
	wp_register_script( 'swiper-bundle.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/swiper/js/swiper-bundle.min.js', array(), '9.4.1', true );
    // <!-- LightGallery Js -->
	wp_register_script( 'lightgallery.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/lightgallery.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-autoplay.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/autoplay/lg-autoplay.min.js', array(), '2.7.2', true );
	// wp_register_script( 'lg-comment.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/comment/lg-comment.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-fullscreen.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js', array(), '2.7.2', true );
	// wp_register_script( 'lg-hash.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/hash/lg-hash.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-medium-zoom.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/mediumZoom/lg-medium-zoom.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-pager.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/pager/lg-pager.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-relative-caption.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/relativeCaption/lg-relative-caption.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-rotate.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/rotate/lg-rotate.min.js', array(), '2.7.2', true );
	// wp_register_script( 'lg-share.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/share/lg-share.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-thumbnail.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/thumbnail/lg-thumbnail.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-video.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/video/lg-video.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-vimeo-thumbnail.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/vimeoThumbnail/lg-vimeo-thumbnail.min.js', array(), '2.7.2', true );
	wp_register_script( 'lg-zoom.min', TYPEROCKET_DIR_URL . 'resources/assets/vendor/lightgallery/plugins/zoom/lg-zoom.min.js', array(), '2.7.2', true );
    // <!-- Gmax Js -->
	wp_register_script( 'script', TYPEROCKET_DIR_URL . 'resources/assets/js/script.js', array(), '1.0.0', true );

    wp_enqueue_script( 'bootstrap.bundle.min' );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-migrate' );
    // wp_enqueue_script( 'jquery.min' );
    wp_enqueue_script( 'stellarnav.min' );
    // wp_enqueue_script( 'jquery-migrate' );
    wp_enqueue_script( 'lottie.min' );
    wp_enqueue_script( 'aos' );
    wp_enqueue_script( 'swiper-bundle.min' );
    wp_enqueue_script( 'lightgallery.min' );
    wp_enqueue_script( 'lg-autoplay.min' );
    // wp_enqueue_script( 'lg-comment.min' );
    wp_enqueue_script( 'lg-fullscreen.min' );
    // wp_enqueue_script( 'lg-hash.min' );
    wp_enqueue_script( 'lg-medium-zoom.min' );
    wp_enqueue_script( 'lg-pager.min' );
    wp_enqueue_script( 'lg-relative-caption.min' );
    wp_enqueue_script( 'lg-rotate.min' );
    // wp_enqueue_script( 'lg-share.min' );
    wp_enqueue_script( 'lg-thumbnail.min' );
    wp_enqueue_script( 'lg-video.min' );
    wp_enqueue_script( 'lg-vimeo-thumbnail.min' );
    wp_enqueue_script( 'lg-zoom.min' );
    wp_enqueue_script( 'script' );


    // Ajax Handler
    // wp_localize_script(
    //     'ajax-sample-script', 'sample_ajax_localize_obj', array(
    //         'ajax_url' => admin_url( 'admin-ajax.php' ),
    //         'the_nonce' => wp_create_nonce('sample_name_form_nonce') 
    //     )
    // );

}
add_action( 'wp_enqueue_scripts', 'wpplus_enqueue_scripts' );
// add_action( 'admin_enqueue_scripts', 'wpplus_enqueue_scripts' );
// add_action( 'enqueue_embed_scripts', 'wpplus_enqueue_scripts' );