<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php get_header(); ?>

<main id="main" class="main error">
    <section id="error-content" class="container-fluid error-content">
        <div class="row">
            <div class="col-12 column">
                <div class='oopss'>
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/global/404.svg" alt="404" class="img">
                    <div class='error-text'>
                        <div class="title">صفحه‌ای یافت نشد!</div>
                        <!-- Component Button Start -->
                        <a href="<?php echo get_home_url(); ?>/contact-us/" class="btn-default">
                            <button type="button" class="btn">
                                <span>رفتن به صفحه اصلی</span>
                                <i class="las la-angle-left"></i>
                            </button>
                        </a>
                        <!-- Component Button End -->
                    </div>
                </div>            
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>