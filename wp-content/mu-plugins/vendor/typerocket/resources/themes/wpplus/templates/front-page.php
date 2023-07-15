<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه اصلی */ ?>

<?php get_header(); ?>

<?php
    $queried_id = get_queried_object_id();

    $option = new \App\Models\Option;
    $where_option = [
        [
            'column'   => 'option_name',
            'operator' => '=',
            'value'    => 'posts_per_page'
        ]
    ];
    $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
    $option = $option[0]['option_value'];

    $post = new \App\Models\Post;
    $where_post = [
        [
            'column'   => 'post_status',
            'operator' => '=',
            'value'    => 'publish'
        ]
    ];
    $posts = $post->findAll()->with('meta')->where($where_post)->orderBy('id', 'DESC')->get();
?>

<main id="main" class="main index">
    <section id="slider" class="container-fluid slider">
        <div class="row">
            <div class="col-12 column">
                <!-- Swiper -->
                <div class="swiper sliderSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider1.jpg">
                                <div class="container content-container">
                                    <div class="row">
                                        <div class="col-12 column">
                                            <div class="content">
                                                <h2 class="title">تبلیغ در گوگل</h2>
                                                <p class="desc">
                                                    جایگاه اول گوگل در اختیار شماست. تنها کافیست با جیمکس تماس بگیرید
                                                </p>
                                                <!-- Component Button Start -->
                                                <a href="https://gmaxads.com/contact-us/" class="btn-default" target="_blank">
                                                    <button type="button" class="btn">
                                                        <span>تماس با ما</span>
                                                        <i class="las la-angle-left"></i>
                                                    </button>
                                                </a>
                                                <!-- Component Button End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider2.jpg">
                                <div class="container content-container">
                                    <div class="row">
                                        <div class="col-12 column">
                                            <div class="content">
                                                <h2 class="title">تبلیغ در یوتیوب</h2>
                                                <p class="desc">
                                                    با جیمکس، در بزرگترین وب سایت دنیا دیده شوید
                                                </p>
                                                <!-- Component Button Start -->
                                                <a href="https://gmaxads.com/youtubeads/" class="btn-default" target="_blank">
                                                    <button type="button" class="btn">
                                                        <span>کلیک کنید</span>
                                                        <i class="las la-angle-left"></i>
                                                    </button>
                                                </a>
                                                <!-- Component Button End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Slider Card Start -->
                            <div class="slider-card">
                                <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider3.jpg">
                                <div class="container content-container">
                                    <div class="row">
                                        <div class="col-12 column">
                                            <div class="content">
                                                <h2 class="title">کسب درآمد از یوتیوب</h2>
                                                <p class="desc">
                                                    با جیمکس در کمترین زمان، با بهترین نرخ، درآمدت رو نقد کن
                                                </p>
                                                <!-- Component Button Start -->
                                                <a href="https://gmaxads.com/monetization/" class="btn-default" target="_blank">
                                                    <button type="button" class="btn">
                                                        <span>کلیک کنید</span>
                                                        <i class="las la-angle-left"></i>
                                                    </button>
                                                </a>
                                                <!-- Component Button End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Component Slider Card End -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="customer" class="container-fluid customer">
        <div class="row">
            <div class="col-12 column">
                <div class="scroll-container">
                    <div class="scroll-parent">
                        <div class="scroll-element primary">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer1.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer2.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer3.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer4.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer5.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer6.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer7.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer8.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer9.jpg">                        
                        </div>
                        <div class="scroll-element secondary">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer1.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer2.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer3.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer4.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer5.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer6.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer7.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer8.jpg">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer9.jpg"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="container service">
        <div class="row">
            <div class="col-12 column">
                <div class="head">
                    <div class="title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">اولین بودن در تبلیغات گوگل با جیمکس</div>
                    <div class="subtitle" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">موفقیت شما موفقیت ماست</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-2 d-none d-xl-block">
                <a href="https://www.google.com/partners/agency?id=5847789388" target="_blank" class="slogan" rel="nofollow">جیمکس ادز، پارتنر رسمی گوگل در ایران</a>
            </div>
            <div class="col-12 col-xl-10">
                <!-- Swiper -->
                <div class="swiper infoBoxSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 48 48" id="b" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                            .c {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                            }
                                            </style>
                                        </defs>
                                        <path class="c" d="m38.6591,40.3009c4.0655-3.7527,6.4109-9.2645,6.4109-15.8123,0-1.5245-.1368-2.9905-.3909-4.3977h-20.2491v8.3264h11.5709c-.5082,2.6777-2.0327,4.945-4.3195,6.4695" />
                                        <path class="c" d="m5.2364,33.6555c3.5377,7.0168,10.7891,11.8445,19.1936,11.8445,5.805,0,10.6718-1.9155,14.2291-5.1991l-6.9777-5.4141c-1.9155,1.29-4.3586,2.0718-7.2514,2.0718-5.59,0-10.3395-3.7723-12.04-8.8541" />
                                        <path class="c" d="m5.2364,14.3641c-1.4659,2.8927-2.3064,6.1568-2.3064,9.6359s.8405,6.7432,2.3064,9.6359l5.5705-4.3391s1.5832-1.2118,1.5832-1.2118c-.43-1.29-.6841-2.6582-.6841-4.085s.2541-2.795.6841-4.085" />
                                        <path class="c" d="m24.43,11.0609c3.1664,0,5.9809,1.0945,8.2286,3.2055l6.1568-6.1568c-3.7332-3.4791-8.5805-5.6095-14.3855-5.6095-8.4045,0-15.6559,4.8277-19.1936,11.8641l7.1536,5.5509c1.7005-5.0818,6.45-8.8541,12.04-8.8541Z" />
                                    </svg>
                                </div>
                                <div class="info-title">تبلیغ در گوگل</div>
                                <div class="info-desc">
                                    دسترسی پذیری به مشتری تنها یک راه ۱۰۰٪ مطمئن دارد. ما این سرویس را برای شما فراهم می کنیم
                                </div>
                                <a href="https://gmaxads.com/googleads/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                            .b {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                            }
                                            </style>
                                        </defs>
                                        <g>
                                            <line class="b" x1="12" y1="39" x2="36" y2="39" />
                                            <rect class="b" x="4.5" y="9" width="39" height="26" rx="2" ry="2" />
                                        </g>
                                        <polygon class="b" points="29.8597 22 20.1403 16.404 20.1403 27.596 29.8597 22" />
                                    </svg>
                                </div>
                                <div class="info-title">کسب درآمد از یوتیوب</div>
                                <div class="info-desc">
                                    دسترسی پذیری به مشتری تنها یک راه ۱۰۰٪ مطمئن دارد. ما این سرویس را برای شما فراهم می کنیم
                                </div>
                                <a href="https://gmaxads.com/googleads/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M361.478 1023.792c-14.336 0-28.666-5.466-39.576-16.368L16.574 702.098c-10.534-10.542-16.336-24.6-16.344-39.592 0-14.978 5.802-29.034 16.336-39.56L457.608 181.89c20.794-20.812 59.496-31.666 88.068-24.598l206.468 50.624c24.582 6.038 49.352 27.824 60.192 52.968a8.006 8.006 0 0 1-4.156 10.51c-4.058 1.742-8.776-0.102-10.526-4.17-8.714-20.194-29.924-39.014-49.32-43.776L541.866 172.824c-22.858-5.646-56.288 3.702-72.952 20.374L27.874 634.254c-7.512 7.496-11.652 17.538-11.652 28.252 0 10.728 4.146 20.756 11.66 28.284l305.33 305.328c15.586 15.588 40.958 15.588 56.544 0l441.008-441.046c16.682-16.68 26.02-50.078 20.396-72.952l-37.326-152.234a7.992 7.992 0 0 1 5.842-9.676 8.008 8.008 0 0 1 9.684 5.864l37.326 152.228c7.028 28.564-3.78 67.258-24.614 88.076L401.062 1007.426c-10.908 10.9-25.254 16.366-39.584 16.366z" fill="" />
                                        <path d="M663.902 423.99c-16.368 0-32.766-6.232-45.228-18.704-24.958-24.95-24.958-65.54-0.032-90.474 21.99-21.942 56.38-25.012 81.776-7.278a66.824 66.824 0 0 1 8.714 7.222 8.022 8.022 0 0 1 0.094 11.308 7.98 7.98 0 0 1-11.308 0.11 50.418 50.418 0 0 0-6.622-5.504c-19.086-13.322-44.856-11.002-61.348 5.458-18.678 18.694-18.678 49.134 0.032 67.852 18.71 18.708 49.166 18.708 67.876 0 5.654-5.678 9.84-12.69 12.09-20.264 1.248-4.224 5.746-6.654 9.932-5.396a8.02 8.02 0 0 1 5.404 9.94c-2.998 10.106-8.558 19.446-16.086 27.012-12.494 12.478-28.896 18.718-45.294 18.718z" fill="" />
                                        <path d="M663.84 392.042a31.68 31.68 0 0 1-22.55-9.356 31.796 31.796 0 0 1-9.372-22.644c0-17.624 14.368-31.97 31.984-31.97 4.438 0 7.996 3.576 7.996 7.996s-3.558 7.998-7.996 7.998c-8.808 0-15.992 7.176-15.992 15.994 0 4.28 1.656 8.292 4.686 11.314a15.734 15.734 0 0 0 11.244 4.678c4.842 0.376 8.902-1.93 11.934-5.318 2.998-3.288 8.058-3.552 11.306-0.624a8.016 8.016 0 0 1 0.624 11.292 31.97 31.97 0 0 1-23.802 10.642l-0.062-0.002zM372.794 964.54a7.972 7.972 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l373.164-373.204a7.994 7.994 0 0 1 11.308 0 7.992 7.992 0 0 1 0 11.306L378.448 962.196a7.972 7.972 0 0 1-5.654 2.344zM67.458 659.18a7.976 7.976 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l373.188-373.166a7.994 7.994 0 0 1 11.308 0 7.994 7.994 0 0 1 0 11.308L73.112 656.836a7.976 7.976 0 0 1-5.654 2.344zM333.398 812.046a8.004 8.004 0 0 1-6.786-3.766 7.988 7.988 0 0 1 2.538-11.01c10.69-6.714 38.92-28.33 41.122-47.666 0.71-6.324-1.522-11.994-6.848-17.304-14.322-14.32-37.63-12.15-62.338-9.884-27.284 2.544-55.498 5.138-75.122-14.51-5.856-5.84-8.442-13.056-7.488-20.818 2.896-23.568 38.866-45.776 42.958-48.244a8 8 0 0 1 10.962 2.75 7.978 7.978 0 0 1-2.732 10.962c-12.87 7.746-33.844 24.52-35.312 36.482-0.234 1.938-0.118 4.532 2.92 7.56 14.306 14.338 37.646 12.182 62.346 9.9 27.268-2.56 55.498-5.122 75.114 14.494 8.746 8.746 12.698 19.272 11.424 30.424-3.476 30.456-43.924 56.538-48.532 59.41a8.034 8.034 0 0 1-4.226 1.22zM494.184 588.336a7.98 7.98 0 0 1-5.654-2.342l-50.54-50.542c-3.124-3.124-3.124-8.176 0-11.298s8.184-3.124 11.308 0l50.54 50.532a7.994 7.994 0 0 1-5.654 13.65zM562.012 520.484a7.992 7.992 0 0 1-5.652-2.344l-50.508-50.538c-3.124-3.124-3.124-8.184 0-11.308s8.184-3.124 11.308 0l50.508 50.54a7.992 7.992 0 0 1 0 11.306 7.944 7.944 0 0 1-5.656 2.344z" fill="" />
                                        <path d="M443.644 537.796a7.972 7.972 0 0 1-5.654-2.344c-21.826-21.816-21.826-57.332 0-79.158 21.834-21.818 57.348-21.818 79.166 0 3.124 3.124 3.124 8.184 0 11.308s-8.184 3.124-11.308 0c-15.594-15.594-40.958-15.58-56.552 0-15.594 15.594-15.594 40.958 0 56.552a7.98 7.98 0 0 1 0 11.298 7.956 7.956 0 0 1-5.652 2.344zM528.122 602.362c-14.344 0-28.674-5.452-39.59-16.368-3.124-3.108-3.124-8.186 0-11.308s8.184-3.124 11.308 0c15.554 15.556 40.934 15.588 56.522 0 15.586-15.586 15.586-40.964 0-56.544a7.992 7.992 0 0 1 0-11.306 7.992 7.992 0 0 1 11.306 0c21.802 21.81 21.834 57.326 0 79.16-10.902 10.898-25.24 16.366-39.546 16.366zM322.084 597.176a7.972 7.972 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l56.544-56.544a7.994 7.994 0 0 1 11.308 0 8.004 8.004 0 0 1 0 11.316l-56.544 56.536a7.986 7.986 0 0 1-5.654 2.342zM435.18 710.25a7.972 7.972 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l56.538-56.538c3.124-3.124 8.184-3.124 11.308 0s3.124 8.184 0 11.306l-56.536 56.538a7.98 7.98 0 0 1-5.656 2.344z" fill="" />
                                        <path d="M435.18 710.25a7.972 7.972 0 0 1-5.654-2.344l-113.096-113.074a7.992 7.992 0 0 1 0-11.306 7.992 7.992 0 0 1 11.306 0l113.098 113.074a7.992 7.992 0 0 1 0 11.306 7.972 7.972 0 0 1-5.654 2.344z" fill="" />
                                        <path d="M378.62 653.712a7.976 7.976 0 0 1-5.654-2.344 7.992 7.992 0 0 1 0-11.306l45.238-45.23a7.992 7.992 0 0 1 11.306 0 7.994 7.994 0 0 1 0 11.308l-45.236 45.228a7.966 7.966 0 0 1-5.654 2.344z" fill="" />
                                        <path d="M663.902 368.054a8 8 0 0 1-7.808-6.31 7.988 7.988 0 0 1 6.124-9.502C944.026 291.558 1007.746 50.106 1007.746 8.204a8 8 0 0 1 7.996-7.996 7.98 7.98 0 0 1 7.996 7.996c0 43.91-66.032 296.77-358.148 359.672a7.81 7.81 0 0 1-1.688 0.178z" fill="" />
                                        <path d="M738.776 192.12a7.992 7.992 0 0 1-4.592-1.446c-3.592-2.53-4.498-7.52-1.938-11.134C835.918 31.38 989.786 0.208 1015.774 0.208c4.436 0 7.996 3.576 7.996 7.996s-3.56 7.996-7.996 7.996c-23.27 0-171.984 31.814-270.44 172.508a7.98 7.98 0 0 1-6.558 3.412z" fill="" />
                                    </svg>
                                </div>
                                <div class="info-title">سئو</div>
                                <div class="info-desc">
                                    طراحی وب سایت شما توسط تیم حرفه ای جیمکس و با دیزاین مورد نظر شما انجام خواهد شد.
                                </div>
                                <a href="https://gmaxads.com/website-design" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>          
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg width="auto" height="auto" viewBox="0 0 48 48" id="b" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <style>
                                            .e {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                            }
                                            </style>
                                        </defs>
                                        <polyline id="c" class="e" points="17.592 37.092 4.5 24 17.592 10.908" />
                                        <path class="e" d="m20.4159,37.1091l7.2181-26.2181" />
                                        <polyline id="d" class="e" points="30.408 10.908 43.5 24 30.408 37.092" />
                                    </svg>
                                </div>
                                <div class="info-title">طراحی وب سایت</div>
                                <div class="info-desc">
                                    طراحی وب سایت شما توسط تیم حرفه ای جیمکس و با دیزاین مورد نظر شما انجام خواهد شد.
                                </div>
                                <a href="https://gmaxads.com/website-design" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>          
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg height="auto" width="auto" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                        <path style="fill:#E21B1B;" d="M493.392,347.76H224.728c-10.256-0.032-18.568-8.344-18.6-18.6V182.84
                                            c0.032-10.256,8.344-18.568,18.6-18.6H493.4c10.256,0.032,18.568,8.344,18.6,18.6v146.328
                                            C511.96,339.424,503.648,347.728,493.392,347.76z" />
                                        <path d="M24.096,300.152v-31.744L0,223.96h15.84l9.152,19.52c2.624,5.664,4.544,9.976,6.592,15.16h0.2
                                            c1.944-4.856,4.064-9.6,6.688-15.16l9.152-19.52H63.32l-25.336,44.096v32.088L24.096,300.152L24.096,300.152z" />
                                        <path d="M112.992,272.096c1.136,15.008-10.112,28.088-25.12,29.224c-1.048,0.08-2.096,0.096-3.136,0.056
                                            c-14.672,0.584-27.04-10.848-27.624-25.52c-0.04-0.936-0.024-1.88,0.04-2.816c-1.136-14.976,10.096-28.04,25.072-29.176
                                            c1.144-0.088,2.288-0.104,3.432-0.04c14.568-0.552,26.832,10.808,27.384,25.376C113.08,270.168,113.064,271.136,112.992,272.096z
                                            M71.512,272.712c0,10.584,5.184,18.64,13.656,18.64c7.928,0,13.48-7.784,13.48-18.912c0-8.6-3.864-18.4-13.344-18.4
                                            C75.472,254,71.512,263.488,71.512,272.712L71.512,272.712z" />
                                        <path d="M173.72,283.624c0,6.552,0.232,12,0.448,16.52h-12.224l-0.68-8.392h-0.208c-3.736,6.136-10.472,9.8-17.656,9.6
                                            c-10.072,0-19.2-6.008-19.2-24v-32.296h13.888v29.976c0,9.152,2.968,15.096,10.304,15.096c6.376-0.184,11.44-5.424,11.408-11.808
                                            v-33.248h13.92C173.72,245.072,173.72,283.624,173.72,283.624z" />
                                        <path d="M493.392,347.76H224.728c-10.256-0.032-18.568-8.344-18.6-18.6V182.84c0.032-10.256,8.344-18.568,18.6-18.6H493.4
                                            c10.256,0.032,18.568,8.344,18.6,18.6v146.328C511.96,339.424,503.648,347.728,493.392,347.76z" />
                                        <g>
                                            <g>
                                            <path style="opacity:0.2;fill:#FFFFFF;enable-background:new    ;" d="M206.128,187.792V313.2
                                                    c0.032,2.336,0.416,4.648,1.144,6.864L392.416,164.24H206.24" />
                                            </g>
                                        </g>
                                        <g>
                                            <path style="fill:#FFFFFF;" d="M262.224,235.568H240.52V223.96h57.6v11.608h-21.96v64.592h-13.936V235.568z" />
                                            <path style="fill:#FFFFFF;" d="M350.12,283.624c0,6.552,0.232,12,0.448,16.52h-12.224l-0.68-8.392h-0.2
                                                c-3.736,6.136-10.472,9.8-17.656,9.6c-10.072,0-19.2-6.008-19.2-24v-32.296h13.872v29.976c0,9.152,2.968,15.096,10.304,15.096
                                                c6.376-0.184,11.44-5.424,11.408-11.808v-33.248h13.92L350.12,283.624z" />
                                            <path style="fill:#FFFFFF;" d="M364.704,300.152c0.232-3.752,0.48-9.824,0.48-15.496v-64.8h13.888v32.8h0.232
                                                c3.92-5.816,10.6-9.152,17.6-8.8c13.48,0,23.072,11.2,22.976,27.928c0,19.8-12.568,29.6-24.984,29.6
                                                c-7.128,0.36-13.856-3.304-17.408-9.496h-0.232l-0.68,8.256L364.704,300.152z M379.104,277.416c-0.016,1.104,0.104,2.2,0.344,3.272
                                                c1.408,5.68,6.472,9.688,12.32,9.76c8.704,0,14.032-7.032,14.032-18.088c0-9.76-4.64-17.688-13.92-17.688
                                                c-5.944,0.2-11,4.376-12.32,10.176c-0.272,1.184-0.416,2.4-0.448,3.616L379.104,277.416L379.104,277.416z" />
                                            <path style="fill:#FFFFFF;" d="M441.168,276.528c0.304,8.256,7.248,14.704,15.504,14.4c0.488-0.016,0.976-0.056,1.456-0.128
                                                c5.2,0.12,10.376-0.736,15.256-2.528l2.048,9.6c-6.144,2.344-12.68,3.504-19.256,3.416c-14.336,1.304-27.024-9.264-28.328-23.6
                                                c-0.128-1.416-0.144-2.84-0.04-4.256c-1.272-15.024,9.872-28.232,24.896-29.504c0.672-0.056,1.336-0.088,2.008-0.096
                                                c17.888,0,23.76,14.744,23.76,26.832c0.016,1.968-0.136,3.936-0.448,5.88h-36.856V276.528z M465.368,266.768
                                                c0.88-6.488-3.664-12.464-10.152-13.344c-0.424-0.056-0.848-0.096-1.28-0.104c-7.136,0.424-12.736,6.296-12.8,13.448H465.368z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="info-title">تبلیغ در یوتیوب</div>
                                <div class="info-desc">
                                    در یوتیوب دیده شوید! امکان نمایش شما در یوتیوب، قبل از کانال هایی که دوست دارید وجود دارد!
                                </div>
                                <a href="https://gmaxads.com/youtubeads/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Component Info Box Card Start -->
                            <div class="info-box">
                                <div class="info-img">
                                    <svg height="auto" width="auto" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                        <g>
                                            <path fill="#231F20" d="M32,48c7.732,0,14-6.268,14-14V14c0-7.732-6.268-14-14-14S18,6.268,18,14v20C18,41.732,24.268,48,32,48z
                                                M20,31h5c0.553,0,1-0.447,1-1s-0.447-1-1-1h-5v-4h5c0.553,0,1-0.447,1-1s-0.447-1-1-1h-5v-4h5c0.553,0,1-0.447,1-1s-0.447-1-1-1
                                                h-5v-3c0-6.627,5.373-12,12-12s12,5.373,12,12v3h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5v4h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5v4
                                                h-5c-0.553,0-1,0.447-1,1s0.447,1,1,1h5v3c0,6.627-5.373,12-12,12s-12-5.373-12-12V31z" />
                                            <path fill="#231F20" d="M51,31.002c-1.657,0-2.999,1.342-3,2.998c-0.001,8.838-7.163,15.999-16,15.999S16.001,42.838,16,34
                                                c0-1.656-1.343-3-3-3s-3,1.344-3,3c0,10.43,7.26,19.157,17,21.423v4.576c0,2.209,1.791,4,4,4h2c2.209,0,4-1.791,4-4v-4.576
                                                C46.74,53.157,54,44.43,54,34C53.999,32.344,52.657,31.002,51,31.002z M37,53.345c-0.654,0.168-1.321,0.304-2,0.407v6.247
                                                c0,1.104-0.896,2-2,2h-2c-1.104,0-2-0.896-2-2v-6.247c-0.679-0.104-1.346-0.239-2-0.407C18.379,51.121,12,43.315,12,34
                                                c0-0.553,0.447-1,1-1s1,0.447,1,1c0.001,9.94,8.059,17.999,18,17.999S49.999,43.94,50,34c0.001-0.551,0.447-0.998,1-0.998
                                                s0.999,0.447,1,0.998C52,43.315,45.621,51.121,37,53.345z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="info-title">استودیو یوتیوب</div>
                                <div class="info-desc">
                                    استفاده از بروزترین تجهیزات و فضای مناسب ضبط ویدئو یوتیوب و پادکست. امکان استفاده رایگان
                                </div>
                                <a href="https://gmaxads.com/gmaxads-studio/" class="info-more">
                                    <button type="button" class="btn">
                                        <span>مشاهده بیشتر</span>
                                        <i class="las la-paperclip"></i>
                                    </button>
                                </a>
                            </div>
                            <!-- Component Info Box Card End -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="container cta">
        <div class="row">
            <div class="col-12 column">
                <!-- Component CTA Start -->
                <div class="content-cta">
                    <div class="title">
                        <strong>اگر سوالی در ذهن دارید با کارشناسان ما تماس حاصل فرمایید</strong>
                        <p>برای مشاوره و اطلاع از تعرفه ی خدمات تبلیغات در گوگل با کارشناسان جیمکس تماس بگیرید</p>
                    </div>
                    <a href="https://gmaxads.com/contact/" class="btn-cta" target="_blank">
                        <button type="button" class="btn">
                            <span>همین الان مشاوره بگیرید</span>
                            <i class="las la-angle-left"></i>
                        </button>
                    </a>
                </div>
                <!-- Component CTA End -->
            </div>
        </div>
    </section>

    <section id="timeline" class="container timeline">
        <div class="row">
            <div class="col-12 column">
                <div class="title" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">مراحل اجرای کمپین تبلیغات در گوگل ادز</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 column">
                <div class="timeline__event animated fadeInUp delay-3s timeline__event--type1">
                    <div class="timeline__event__icon">
                        <i class="las la-hashtag"></i> 1
                    </div>
                    <div class="timeline__event__date">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                            <polygon fill="#ffc107" points="30.129,15.75 18.871,9.25 5.871,31.25 17.129,37.75"/>
                            <path fill="#1e88e5" d="M31.871,37.75c1.795,3.109,5.847,4.144,8.879,2.379c3.103-1.806,4.174-5.77,2.379-8.879l-13-22 c-1.795-3.109-5.835-4.144-8.879-2.379c-3.106,1.801-4.174,5.77-2.379,8.879L31.871,37.75z"/>
                            <circle cx="11.5" cy="34.5" r="6.5" fill="#43a047"/>
                        </svg>
                    </div>
                    <div class="timeline__event__content ">
                        <div class="timeline__event__title">سفارش ورودی گوگل</div>
                        <div class="timeline__event__description">
                            <p>
                                اولین اقدامی که باید برای تبلیغات در گوگل بعد از مشاوره تلفنی یا آنلاین با کارشناسان جیمکس انجام دهید، سفارش کلیک گوگل و خرید اکانت است. در این مرحله شما با قبول قوانین و مقررات مربوط به تبلیغ در گوگل، سفارش خود را با همراهی کارشناسان ما ثبت می‌کنید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline__event animated fadeInUp delay-2s timeline__event--type2">
                    <div class="timeline__event__icon">
                        <i class="las la-hashtag"></i> 2
                    </div>
                    <div class="timeline__event__date">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                        <defs>
                            <style>.cls-1{fill:#6fabe6}.cls-2{fill:#82bcf4}.cls-4{fill:#84b749}</style>
                        </defs>
                        <g id="chart_statistic_rise_up" data-name="chart statistic rise up">
                            <path class="cls-1" d="M35 1h8v46h-8z"/>
                            <path class="cls-2" d="M43 1c0 44.29-.1 43 0 43a6 6 0 0 1-6-6V1z"/>
                            <path class="cls-1" d="M7 25h8v22H7z"/>
                            <path class="cls-2" d="M15 25c0 19.75-.1 19 0 19a6 6 0 0 1-6-6V25z"/>
                            <path class="cls-1" d="M21 15h8v32h-8z"/>
                            <path class="cls-2" d="M29 15c0 30.2-.1 29 0 29a6 6 0 0 1-6-6V15z"/>
                            <path d="M47 48H1a1 1 0 0 1-1-1V1a1 1 0 0 1 2 0v45h45a1 1 0 0 1 0 2z" style="fill:#425b72"/>
                            <path class="cls-4" d="M24 5V2h-3a1 1 0 0 1 0-2h4a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0z"/>
                            <path class="cls-4" d="M11 16a1 1 0 0 1-.71-1.71l14-14a1 1 0 0 1 1.42 1.42C10.41 17 11.59 16 11 16z"/>
                        </g>
                    </svg>
                    </div>
                    <div class="timeline__event__content">
                        <div class="timeline__event__title">
                            بررسی و آنالیز
                        </div>
                        <div class="timeline__event__description">
                            <p>بعد از انجام مراحل اداری و مالی و ثبت نهایی تبلیغات، کارشناسان ما با در نظر داشتن نوع کسب‌و‌کار، بازار هدف و رقبا، وب‌سایت شما را بررسی می‌کنند؛ و با آنالیز صفحات مهمی مثل لندینگ پیج ‌ها و اعلام نتایج به شما، برای هرچه بهتر اجرا شدن تبلیغات کلیکی گوگل شما تلاش می‌کنند.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline__event animated fadeInUp delay-1s timeline__event--type3">
                    <div class="timeline__event__icon">
                        <i class="las la-hashtag"></i> 3
                    </div>
                    <div class="timeline__event__date">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <circle style="fill:#ff507d" cx="229.46" cy="282.54" r="221.166"/>
                            <path style="fill:#d23c69" d="M448.349 251.002a219.627 219.627 0 0 0-3.225-17.398L227.851 273.84c-4.813.89-7.983 5.504-7.093 10.306.786 4.267 4.51 7.24 8.691 7.24a8.56 8.56 0 0 0 1.616-.147l217.284-40.237z"/>
                            <circle style="fill:#fff" cx="229.46" cy="282.54" r="168.086"/>
                            <path style="fill:#e4eaf8" d="M395.968 260.702a166.808 166.808 0 0 0-3.215-17.399l-164.9 30.538c-4.813.89-7.983 5.504-7.093 10.306.786 4.267 4.51 7.24 8.691 7.24a8.56 8.56 0 0 0 1.616-.147l164.901-30.538z"/>
                            <circle style="fill:#ff507d" cx="229.46" cy="282.54" r="115.006"/>
                            <path style="fill:#d23c69" d="M343.807 270.361c-.626-5.956-1.818-11.731-3.319-17.38l-112.636 20.858c-4.813.89-7.983 5.504-7.093 10.306.786 4.267 4.51 7.24 8.691 7.24a8.56 8.56 0 0 0 1.616-.147l112.741-20.877z"/>
                            <circle style="fill:#fff" cx="229.46" cy="282.54" r="61.927"/>
                            <path style="fill:#ff507d" d="M468.32 8.294V43.68h35.386l-53.08 53.08H415.24V61.374z"/>
                            <path style="fill:#d23c69" d="m415.241 61.374-.001.001V96.76l53.08-53.08V8.294z"/>
                            <path style="fill:#e4eaf8" d="M291.264 280.093c-.239-6.068-1.325-11.908-3.187-17.405l-60.224 11.152c-4.813.89-7.983 5.504-7.093 10.306.786 4.267 4.51 7.24 8.691 7.24a8.56 8.56 0 0 0 1.616-.147l60.197-11.146z"/>
                            <path d="M328.742 146.64a8.294 8.294 0 0 0-2.362-11.488c-28.789-18.966-62.303-28.992-96.92-28.992-97.257 0-176.38 79.123-176.38 176.38 0 40.514 14.078 80.084 39.643 111.42a8.278 8.278 0 0 0 6.432 3.051 8.293 8.293 0 0 0 6.421-13.536C82.42 355.09 69.667 319.245 69.667 282.54c0-88.11 71.682-159.793 159.793-159.793 31.364 0 61.722 9.079 87.793 26.256a8.295 8.295 0 0 0 11.489-2.363z"/>
                            <path d="M267.375 165.181a8.292 8.292 0 0 0-10.44 5.344 8.292 8.292 0 0 0 5.344 10.44 106.284 106.284 0 0 1 16.424 6.875 8.257 8.257 0 0 0 3.825.94 8.298 8.298 0 0 0 7.363-4.463 8.293 8.293 0 0 0-3.523-11.188 123.31 123.31 0 0 0-18.993-7.948z"/>
                            <path d="M450.626 105.054a8.29 8.29 0 0 0 5.864-2.43l53.08-53.08a8.293 8.293 0 0 0-5.864-14.158h-27.093V8.294a8.292 8.292 0 0 0-14.158-5.864l-53.08 53.08a8.291 8.291 0 0 0-2.43 5.864v31.952l-183.35 183.35a8.292 8.292 0 0 0 0 11.728c1.619 1.619 3.742 2.43 5.864 2.43s4.245-.809 5.864-2.43l37.473-37.472c6.681 9.126 10.295 20.104 10.295 31.608 0 29.573-24.06 53.633-53.633 53.633s-53.633-24.06-53.633-53.633 24.06-53.633 53.633-53.633c2.571 0 5.153.184 7.674.544a8.292 8.292 0 0 0 9.385-7.035 8.293 8.293 0 0 0-7.035-9.385 70.99 70.99 0 0 0-10.024-.711c-38.72 0-70.22 31.501-70.22 70.22s31.501 70.22 70.22 70.22 70.22-31.501 70.22-70.22c0-15.936-5.306-31.098-15.054-43.437l25.917-25.917c16.561 19.324 25.629 43.716 25.629 69.354 0 58.841-47.871 106.713-106.713 106.713s-106.71-47.872-106.71-106.713 47.871-106.713 106.713-106.713a8.294 8.294 0 0 0 0-16.588c-67.988 0-123.3 55.313-123.3 123.3s55.313 123.3 123.3 123.3 123.3-55.313 123.3-123.3c0-30.058-10.772-58.644-30.446-81.125l25.845-25.845c26.521 29.401 41.093 67.257 41.093 106.97 0 88.11-71.682 159.793-159.793 159.793-36.687 0-72.52-12.741-100.897-35.878a8.294 8.294 0 0 0-11.669 1.188 8.294 8.294 0 0 0 1.188 11.669c31.328 25.542 70.883 39.609 111.378 39.609 97.257 0 176.38-79.123 176.38-176.38 0-44.123-16.301-86.166-45.941-118.71l25.83-25.83c36.531 39.456 56.603 90.606 56.603 144.54 0 117.378-95.494 212.873-212.873 212.873S16.587 399.918 16.587 282.54 112.082 69.667 229.46 69.667c45.18 0 88.332 13.968 124.791 40.394a8.294 8.294 0 0 0 9.734-13.43C324.677 68.139 278.16 53.08 229.46 53.08 102.935 53.08 0 156.015 0 282.54S102.935 512 229.46 512s229.46-102.935 229.46-229.46c0-58.351-21.8-113.678-61.458-156.274l21.212-21.212h31.952zm-27.093-40.246 36.492-36.492V43.68a8.294 8.294 0 0 0 8.294 8.294h15.364l-36.492 36.492h-23.658V64.808z"/>
                        </svg>
                    </div>
                    <div class="timeline__event__content">
                        <div class="timeline__event__title">
                            اجرای کمپین تبلیغاتی
                        </div>
                        <div class="timeline__event__description">
                            <p>در این مرحله کارشناسان ما بر اساس نتایج به دست آمده از آنالیزهای انجام شده، کمپین تبلیغاتی شما را در گوگل اجرا می‌کنند. انتخاب و تست کلمات و عبارات کلیدی، متن‌های تبلیغاتی و بررسی امتیاز کیفیت تلبغ شما در گوگل، در این مرحله انجام می‌شود.</p>
                        </div>
                    </div>
                </div>
                <div class="timeline__event animated fadeInUp timeline__event--type1">
                    <div class="timeline__event__icon">
                        <i class="las la-hashtag"></i> 4
                    </div>
                    <div class="timeline__event__date">
                        <svg width="48" height="48" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M272 312H176V376H272V312Z" fill="#FFDAAA"/>
                            <path d="M328 144V224C328 281.438 264 328 224 328C184 328 120 281.438 120 224V144" fill="#FFDAAA"/>
                            <path d="M328 144C328 121.909 281.438 104 224 104C166.562 104 120 121.909 120 144H328Z" fill="#FF9811"/>
                            <path d="M304 350.627L272 344L256.62 353.07C231.55 367.84 216.45 367.84 191.38 353.07L176 344L128 353.94L96 361.88L79.19 366.06C64.9469 369.061 51.7922 375.891 41.1422 385.813C30.4922 395.735 22.7503 408.375 18.75 422.37L16 496H432" fill="#FF9811"/>
                            <path d="M120 144H96V240H120V144Z" fill="#3E3D42"/>
                            <path d="M84 152H96V232H84C78.6957 232 73.6086 229.893 69.8579 226.142C66.1071 222.391 64 217.304 64 212V172C64 166.696 66.1071 161.609 69.8579 157.858C73.6086 154.107 78.6957 152 84 152V152Z" fill="#787680"/>
                            <path d="M328 240H352V144H328V240Z" fill="#3E3D42"/>
                            <path d="M364 232H352V152H364C369.304 152 374.391 154.107 378.142 157.858C381.893 161.609 384 166.696 384 172V212C384 217.304 381.893 222.391 378.142 226.142C374.391 229.893 369.304 232 364 232Z" fill="#787680"/>
                            <path d="M248 272H200V304H248V272Z" fill="#3E3D42"/>
                            <path d="M288 464H496V484C496 487.183 494.736 490.235 492.485 492.485C490.235 494.736 487.183 496 484 496H300C296.817 496 293.765 494.736 291.515 492.485C289.264 490.235 288 487.183 288 484V464Z" fill="#787680"/>
                            <path d="M316 336H468C471.183 336 474.235 337.264 476.485 339.515C478.736 341.765 480 344.817 480 348V464H304V348C304 344.817 305.264 341.765 307.515 339.515C309.765 337.264 312.817 336 316 336V336Z" fill="#ACABB1"/>
                            <path d="M392 424C405.255 424 416 413.255 416 400C416 386.745 405.255 376 392 376C378.745 376 368 386.745 368 400C368 413.255 378.745 424 392 424Z" fill="#FF9811"/>
                            <path d="M120 143V120C120 92.4175 130.957 65.9647 150.461 46.4609C169.965 26.9571 196.417 16 224 16V16C251.583 16 278.035 26.9571 297.539 46.4609C317.043 65.9647 328 92.4175 328 120V143" fill="#FF9811"/>
                            <path d="M176 208C184.837 208 192 200.837 192 192C192 183.163 184.837 176 176 176C167.163 176 160 183.163 160 192C160 200.837 167.163 208 176 208Z" fill="black"/>
                            <path d="M272 208C280.837 208 288 200.837 288 192C288 183.163 280.837 176 272 176C263.163 176 256 183.163 256 192C256 200.837 263.163 208 272 208Z" fill="black"/>
                            <path d="M496 456H488V348C487.995 342.697 485.886 337.613 482.136 333.864C478.387 330.114 473.303 328.005 468 328H316C311.919 328.007 307.937 329.262 304.589 331.596C301.241 333.93 298.687 337.233 297.27 341.06L280 337.49V316.11C303.66 300.25 324.64 276.09 332.6 248H352C354.122 248 356.157 247.157 357.657 245.657C359.157 244.157 360 242.122 360 240H364C371.424 239.992 378.541 237.039 383.79 231.79C389.039 226.541 391.992 219.424 392 212V172C391.992 164.576 389.039 157.459 383.79 152.21C378.541 146.961 371.424 144.008 364 144H360C360 141.878 359.157 139.843 357.657 138.343C356.157 136.843 354.122 136 352 136H336V120C336 90.2958 324.2 61.8081 303.196 40.804C282.192 19.8 253.704 8 224 8C194.296 8 165.808 19.8 144.804 40.804C123.8 61.8081 112 90.2958 112 120V136H96C93.8783 136 91.8435 136.843 90.3432 138.343C88.8429 139.843 88 141.878 88 144H84C76.5765 144.008 69.4593 146.961 64.2101 152.21C58.9609 157.459 56.0082 164.576 56 172V212C56.0082 219.424 58.9609 226.541 64.2101 231.79C69.4593 237.039 76.5765 239.992 84 240H88V268C88.0082 275.424 90.9609 282.541 96.2101 287.79C101.459 293.039 108.576 295.992 116 296H144.01C151.265 303.542 159.307 310.284 168 316.11V337.49L126.38 346.11C126.28 346.13 126.17 346.15 126.07 346.18L77.4 358.26C61.7531 361.561 47.3045 369.071 35.6134 379.982C23.9222 390.892 15.4324 404.788 11.06 420.17C10.8808 420.788 10.78 421.427 10.76 422.07L8.01002 495.7C7.96969 496.775 8.14647 497.847 8.52978 498.851C8.91309 499.856 9.49507 500.773 10.2409 501.548C10.9868 502.323 11.8812 502.939 12.8707 503.361C13.8603 503.782 14.9246 503.999 16 504H484C489.303 503.995 494.387 501.886 498.136 498.136C501.886 494.387 503.995 489.303 504 484V464C504 461.878 503.157 459.843 501.657 458.343C500.157 456.843 498.122 456 496 456ZM360 160H364C367.182 160.003 370.233 161.268 372.482 163.518C374.732 165.768 375.997 168.818 376 172V212C375.997 215.182 374.732 218.232 372.482 220.482C370.233 222.732 367.182 223.997 364 224H360V160ZM336 152H344V232H336V152ZM88 224H84C80.8182 223.997 77.7675 222.732 75.5177 220.482C73.2678 218.232 72.0027 215.182 72 212V172C72.0027 168.818 73.2678 165.768 75.5177 163.518C77.7675 161.268 80.8182 160.003 84 160H88V224ZM312 348C312 346.939 312.421 345.922 313.172 345.172C313.922 344.421 314.939 344 316 344H468C469.061 344 470.078 344.421 470.828 345.172C471.579 345.922 472 346.939 472 348V456H312V348ZM224 24C249.167 24.0291 273.319 33.9292 291.266 51.5731C309.213 69.217 319.523 93.1968 319.98 118.36C299.06 103.71 260.75 96 224 96C187.25 96 148.94 103.71 128.02 118.36C128.477 93.1968 138.787 69.217 156.734 51.5731C174.681 33.9292 198.833 24.0291 224 24V24ZM316.16 136H131.84C142.66 124.24 175.79 112 224 112C272.21 112 305.34 124.24 316.16 136V136ZM104 152H112V232H104V152ZM116 280C112.818 279.997 109.768 278.732 107.518 276.482C105.268 274.232 104.003 271.182 104 268V248H115.4C118.744 259.448 123.965 270.262 130.85 280H116ZM167.54 296H192V304C192 306.122 192.843 308.157 194.343 309.657C195.843 311.157 197.878 312 200 312H248C250.122 312 252.157 311.157 253.657 309.657C255.157 308.157 256 306.122 256 304V272C256 269.878 255.157 267.843 253.657 266.343C252.157 264.843 250.122 264 248 264H200C197.878 264 195.843 264.843 194.343 266.343C192.843 267.843 192 269.878 192 272V280H150.93C131.28 257.26 128 235.76 128 224V152H320V224C320 237.75 315.54 264.8 285.66 291.58C266.4 308.85 242.19 320 224 320C207.41 320 185.83 310.72 167.54 296ZM208 296V280H240V296H208ZM216 488H80V456C80 453.878 79.1572 451.843 77.6569 450.343C76.1566 448.843 74.1218 448 72 448C69.8783 448 67.8435 448.843 66.3432 450.343C64.8429 451.843 64 453.878 64 456V488H24.3L26.71 423.66C30.4137 411.258 37.3985 400.087 46.9264 391.326C56.4542 382.566 68.1714 376.542 80.84 373.89C80.9345 373.871 81.0279 373.848 81.12 373.82L129.78 361.74L174.6 352.46L187.32 359.96C197.86 366.17 207.08 369.98 216 371.42V488ZM195.44 346.18L184 339.43V325.38C197.85 332.19 211.82 336 224 336C236.18 336 250.15 332.19 264 325.38V339.43L252.56 346.18C229.87 359.54 218.13 359.54 195.44 346.18ZM280 464V484C280 485.343 280.134 486.683 280.4 488H232V371.42C240.92 369.98 250.14 366.17 260.68 359.96L273.4 352.46L296 357.14V456H288C286.949 456 285.909 456.207 284.939 456.609C283.968 457.011 283.086 457.6 282.343 458.343C281.6 459.086 281.011 459.968 280.609 460.939C280.207 461.909 280 462.949 280 464ZM488 484C488 485.061 487.579 486.078 486.828 486.828C486.078 487.579 485.061 488 484 488H300C298.939 488 297.922 487.579 297.172 486.828C296.421 486.078 296 485.061 296 484V472H488V484Z" fill="black"/>
                            <path d="M392 432C398.329 432 404.516 430.123 409.778 426.607C415.041 423.091 419.142 418.093 421.564 412.246C423.986 406.399 424.62 399.965 423.385 393.757C422.15 387.55 419.103 381.848 414.627 377.373C410.152 372.897 404.45 369.85 398.243 368.615C392.035 367.38 385.601 368.014 379.754 370.436C373.907 372.858 368.909 376.959 365.393 382.222C361.877 387.484 360 393.671 360 400C360.01 408.484 363.384 416.618 369.383 422.617C375.382 428.616 383.516 431.99 392 432V432ZM392 384C395.165 384 398.258 384.938 400.889 386.696C403.52 388.455 405.571 390.953 406.782 393.877C407.993 396.801 408.31 400.018 407.693 403.121C407.075 406.225 405.551 409.076 403.314 411.314C401.076 413.551 398.225 415.075 395.121 415.693C392.018 416.31 388.801 415.993 385.877 414.782C382.953 413.571 380.455 411.52 378.696 408.889C376.938 406.258 376 403.165 376 400C376.005 395.758 377.692 391.691 380.692 388.692C383.691 385.692 387.758 384.005 392 384V384Z" fill="black"/>
                        </svg>
                    </div>
                    <div class="timeline__event__content">
                        <div class="timeline__event__title">
                            مدیریت و پشتیبانی
                        </div>
                        <div class="timeline__event__description">
                            <p>
                                بعد از اجرای کمپین در گوگل ادز مرحله مدیریت و پشتیبانی ما آغاز می‌شود. مانیتورینگ روزانه کمپین شما برای کنترل بودجه، محل نمایش آگهی و همینطور بررسی لحظه‌ای اهداف تعریف شده در گوگل آنالیتیکس، از مهم‌ترین کارهایی است که در فاز مدیریت تبلیغات گوگل ادز توسط تیم جیمکس انجام می‌شود.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="banner" class="container-fluid banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-7 order-2 order-xl-1 column">
                    <div class="title">
                        <span><strong>کانال یوتیوب</strong> شما سرمایه شماست</span>
                    </div>
                    <div class="desc">
                        شرکت جیمکس با بهره وری از ادسنس های متعدد در کشورهای اروپایی و مناطق آزاد بین المللی با بهترین نرخ و امن ترین ادسنس ها، نگرانی شما یوتیوبر ها را از بابت استرایگ، ریسک از دست دادن چنل تان را صفر میکند. همچنین هیچ یک از کانال های ما با استرایگ مواجه نشده است. چرا که کارشناسان ما، نظارت مستمر بر فعالیت چنل ها دارند.
                    </div>
                </div>
                <div class="col-12 col-xl-5 order-1 order-xl-2 column">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/gads.webp" width="auto" height="auto">
                </div>
            </div>
        </div>
    </section>

    <section id="faqs" class="container faqs">
        <div class="row">
            <div class="col-12 column">
                <!-- Component FAQ Start -->
                <div class="faq accordion" id="accordionExample">
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                تبلیغات در گوگل چگونه به وب سایت ما کمک می کند؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                تبلیغات در گوگل، که به آن Google Ads هم گفته می شود، یکی از قدرتمندترین راه‌ها برای تبلیغ محصولات و خدمات شما در اینترنت است. این سرویس به شما اجازه می‌دهد تا تبلیغات خود را در صفحات نتایج جستجوی گوگل، وب‌سایت‌های همکار گوگل (شبکه تبلیغاتی گوگل) و حتی در برنامه‌های موبایلی که تبلیغات گوگل دارند، نمایش دهید.
                                متخصصان جیمکس متشکل از کارشناسان تبلیغات آنلاین و بهینه‌سازی جستجو، که با تجربه و تخصص خود در زمینه گوگل ادز، می‌توانند بهترین راهکارها را برای تبلیغات شما ارائه دهند.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                درآمد خود را از یوتیوب چگونه نقد کنیم؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                کسب درآمد از یوتیوب، یکی از روش‌های جذاب و پرطرفدار برای کسب درآمد از طریق ایجاد ویدیوهای خود است. با ایجاد یک کانال یوتیوب و ارائه محتوای جذاب و مفید، می‌توانید به طور قابل توجهی درآمد کسب کنید. یوتیوب امکانات و ابزارهایی را برای تبلیغ و کسب درآمد از ویدیوها فراهم کرده است.
                                متخصصان جیمکس با تکیه بر تجربه و تخصص، شناخت مشتریان هدف و تحقیق درباره روند و موضوعات مورد علاقه جامعه یوتیوب، می‌توانید یک کسب و کار موفق برای شما در این پلتفرم رقم زده و از تبدیل هوادارانتان به منابع درآمدی استفاده نماید.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                چرا باید سایت داشته باشیم؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                طراحی سایت یکی از اساسی‌ترین راه‌ها برای ایجاد حضور آنلاین قوی و جذاب برای کسب و کار شماست. با طراحی یک وبسایت حرفه‌ای و سازگار با نیازهای شما و مشتریانتان، می‌توانید به صورت مداوم بازدیدکنندگان جدید جذب کنید و بازدیدکنندگان فعلی را به مشتریان وفادار تبدیل کنید.
                                با طراحی سایت حرفه‌ای، می‌توانید به طرفداران و مشتریانتان یک تجربه کاربری بی‌نظیر ارائه دهید و باعث اعتماد بیشتر آن‌ها به کسب و کار شما شوید. اضافه‌کردن امکاناتی مانند فرم تماس، فروش آنلاین، نمونه‌کارها و بازخوردها، بخش‌های اخبار و بلاگ و اینتگراسیون با شبکه‌های اجتماعی نیز می‌تواند به ارتقای تجربه کاربری و افزایش نرخ تبدیل شما کمک کند.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingّFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseّFour" aria-expanded="false" aria-controls="collapseّFour">
                                سئو چگونه به سایت شما کمک می کند؟
                            </button>
                        </h2>
                        <div id="collapseّFour" class="accordion-collapse collapse" aria-labelledby="headingّFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                سئو پروسه بهبود دیدن شدن و رنک وب سایت شما در صفحه نتایج گوگل است. جیمکس به کمک استراتژی و تکنیک های مختلف، وب سایت شما را به استانداردهای گوگل نزدیک می کند. همین مسئله باعث می شود که وب سایت شما در گوگل و دیگر موتورهای جستجو بیشتر دیده شده و مشتریان بالقوه خود را جذب نماید.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Component FAQ End -->
            </div>
        </div>
    </section>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "FAQPage",
			"mainEntity": [{
				"@type": "Question",
				"name": "تبلیغات در گوگل چگونه به وب سایت ما کمک می کند؟",
				"acceptedAnswer": {
				"@type": "Answer",
				"text": "تبلیغات در گوگل، که به آن Google Ads هم گفته می شود، یکی از قدرتمندترین راه‌ها برای تبلیغ محصولات و خدمات شما در اینترنت است. این سرویس به شما اجازه می‌دهد تا تبلیغات خود را در صفحات نتایج جستجوی گوگل، وب‌سایت‌های همکار گوگل (شبکه تبلیغاتی گوگل) و حتی در برنامه‌های موبایلی که تبلیغات گوگل دارند، نمایش دهید. متخصصان جیمکس متشکل از کارشناسان تبلیغات آنلاین و بهینه‌سازی جستجو، که با تجربه و تخصص خود در زمینه گوگل ادز، می‌توانند بهترین راهکارها را برای تبلیغات شما ارائه دهند."
				}
			},{
				"@type": "Question",
				"name": "درآمد خود را از یوتیوب چگونه نقد کنیم؟",
				"acceptedAnswer": {
				"@type": "Answer",
				"text": "کسب درآمد از یوتیوب، یکی از روش‌های جذاب و پرطرفدار برای کسب درآمد از طریق ایجاد ویدیوهای خود است. با ایجاد یک کانال یوتیوب و ارائه محتوای جذاب و مفید، می‌توانید به طور قابل توجهی درآمد کسب کنید. یوتیوب امکانات و ابزارهایی را برای تبلیغ و کسب درآمد از ویدیوها فراهم کرده است. متخصصان جیمکس با تکیه بر تجربه و تخصص، شناخت مشتریان هدف و تحقیق درباره روند و موضوعات مورد علاقه جامعه یوتیوب، می‌توانید یک کسب و کار موفق برای شما در این پلتفرم رقم زده و از تبدیل هوادارانتان به منابع درآمدی استفاده نماید."
				}
			},{
				"@type": "Question",
				"name": "چرا باید سایت داشته باشیم؟",
				"acceptedAnswer": {
				"@type": "Answer",
				"text": "طراحی سایت یکی از اساسی‌ترین راه‌ها برای ایجاد حضور آنلاین قوی و جذاب برای کسب و کار شماست. با طراحی یک وبسایت حرفه‌ای و سازگار با نیازهای شما و مشتریانتان، می‌توانید به صورت مداوم بازدیدکنندگان جدید جذب کنید و بازدیدکنندگان فعلی را به مشتریان وفادار تبدیل کنید. با طراحی سایت حرفه‌ای، می‌توانید به طرفداران و مشتریانتان یک تجربه کاربری بی‌نظیر ارائه دهید و باعث اعتماد بیشتر آن‌ها به کسب و کار شما شوید. اضافه‌کردن امکاناتی مانند فرم تماس، فروش آنلاین، نمونه‌کارها و بازخوردها، بخش‌های اخبار و بلاگ و اینتگراسیون با شبکه‌های اجتماعی نیز می‌تواند به ارتقای تجربه کاربری و افزایش نرخ تبدیل شما کمک کند."
				}
			},{
				"@type": "Question",
				"name": "سئو چگونه به سایت شما کمک می کند؟",
				"acceptedAnswer": {
				"@type": "Answer",
				"text": "سئو پروسه بهبود دیدن شدن و رنک وب سایت شما در صفحه نتایج گوگل است. جیمکس به کمک استراتژی و تکنیک های مختلف، وب سایت شما را به استانداردهای گوگل نزدیک می کند. همین مسئله باعث می شود که وب سایت شما در گوگل و دیگر موتورهای جستجو بیشتر دیده شده و مشتریان بالقوه خود را جذب نماید."
				}
			}]
		}
	</script>

    <section id="cta" class="container cta">
        <div class="row">
            <div class="col-12 column">
                <!-- Component CTA Start -->
                <div class="content-cta">
                    <div class="title">
                        <strong>اگر همچنان سوالی در ذهن دارید با کارشناسان ما تماس حاصل فرمایید</strong>
                        <p>برای مشاوره و اطلاع از تعرفه ی خدمات تبلیغات گوگل با کارشناسان ما در تماس باشید</p>
                    </div>
                    <a href="https://gmaxads.com/contact-us/" class="btn-cta" target="_blank">
                        <button type="button" class="btn">
                            <span>همین الان مشاوره بگیرید</span>
                            <i class="las la-angle-left"></i>
                        </button>
                    </a>
                </div>
                <!-- Component CTA End -->
            </div>
        </div>
    </section>

    <?php if( $posts ): ?>
        <section id="blog" class="container blog">
            <div class="row">
                <div class="col-12 column">
                    <!-- Component Heading Start -->
                    <div class="heading">
                        <div class="title">آخرین اخبار و بلاگ</div>
                        <div class="link">
                            <div class="navigation d-none d-sm-block">
                                <div class="nav next blogswiper-button-next"><i class="las la-angle-right"></i></div>
                                <div class="nav prev blogswiper-button-prev"><i class="las la-angle-left"></i></div>
                            </div>
                            <a href="<?php echo get_home_url() . '/blog'; ?>" class="more">
                                <button type="button" class="btn">
                                    <span>مشاهده بیشتر</span>
                                    <i class="las la-paperclip"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- Component Heading End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 column">
                    <!-- Swiper -->
                    <div class="swiper blogSwiper">
                        <div class="swiper-wrapper">
                            <?php foreach( $posts as $post ): ?>
                                <div class="swiper-slide">
                                    <!-- Component Blog Card Start -->
                                    <?php require TYPEROCKET_DIR_PATH . '/resources/themes/wpplus/components/blog-card.php'; ?>
                                    <!-- Component Blog Card End -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>