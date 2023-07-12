<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه تبلیغ در گوگل */ ?>

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

    $meta = get_post_meta( $queried_id, 'pageInfo', true );
?>

<main id="main" class="main googleads">
    <section id="hero" class="container-fluid hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 content-column column">
                    <h1 class="title">تبلیغ در گوگل</h1>
                    <p class="desc">
                        تبلیغ در گوگل بهترین راه حل برای معرفی محصول و خدمات شما به مشتریان صد در صدی است. شما با این نوع از تبلیغات، محصول خود را در بالاترین رتبه های گوگل، به کسانی که برای آن جستجو می کنند نشان خواهید داد
                    </p>
                    <ul class="details">
                        <li>بدون سئو رتبه های بالای گوگل را برای خود کنید</li>
                        <li>هزینه ی مقرون به صرفه به ازای هر کلیک</li>
                        <li>دریافت گزارش لحظه ای و دقیق</li>
                        <li>امکان رصد کردن رفتار دقیق کاربران</li>
                        <li>امکان مدیریت زمان پاسخگویی و تماس مشتریان</li>
                    </ul>
                    <!-- Component Button Start -->
                    <a href="https://panel.gmaxads.com/" class="btn-default" target="_blank">
                        <button type="button" class="btn">
                            <span>سفارش / ثبت نام</span>
                            <i class="las la-angle-left"></i>
                        </button>
                    </a>
                    <!-- Component Button End -->
                </div>

                <div class="col-12 col-xl-6 img-column column">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/googleads.png" alt="google-ads">
                </div>
            </div>
        </div>
    </section>

    <section id="introducing" class="container introducing">
        <div class="row">
            <div class="col-12 col-xl-3 column">
                <!-- Component Box Card Start -->
                <div class="box" data-aos="fade-in" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box7.png" alt="">
                    </div>
                    <div class="title">افزایش بازدید مشتری از فروشگاه</div>
                    <div class="desc">
                        با استفاده از تبلیغات در گوگل، می توانید مشتریان را با فروشگاه خود آشنا کنید
                    </div>
                </div>
                <!-- Component Box Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Box Card Start -->
                <div class="box" data-aos="fade-in" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box8.png" alt="">
                    </div>
                    <div class="title">افزایش تماس به شرکت</div>
                    <div class="desc">
                        افزایش تماس به وسیله تبلیغات در گوگل و اضافه کردن شماره تلفن به آن
                    </div>
                </div>
                <!-- Component Box Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Box Card Start -->
                <div class="box" data-aos="fade-in" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/box9.png" alt="">
                    </div>
                    <div class="title">افزایش ترافیک وب سایت</div>
                    <div class="desc">
                        افزایش فروش و سفارش خدمات، و یا حتی افزایش ثبت نام در خبرنامه به وسیله ترافیک اضافه شده از طریق گوگل ادز
                    </div>
                </div>
                <!-- Component Box Card End -->
            </div>
        </div>
    </section>

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

    <section id="budget" class="container-fluid budget">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-7 order-1 order-xl-1 content-column column">
                    <h2 class="title">مشاوره رایگان تبلیغ در گوگل</h2>
                    <p class="desc">
                        متخصصین جیمکس در اسرع وقت با شما تماس خواهند گرفت
                    </p>
                </div>

                <div class="col-12 col-xl-5 order-2 order-xl-2 img-column column">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/content6.jpg" alt="budget">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if( $meta['tables'] ): ?>
        <section id="pricing" class="container pricing">
            <div class="row">
                <?php $i = 0; ?>
                <?php foreach( $meta['tables'] as $tables ): ?>
                    <div class="col-12 column">
                        <div class="head dolar-head <?php if( $i != 0 ) echo 'dirham-head'; ?>"><?php echo $tables['title']; ?></div>
                    </div>

                    <?php if( $tables['plans'] ): ?>
                        <div class="col-12 col-xl-10 mx-auto column">
                            <div class="pricing-content dolar-table">
                                <?php foreach( $tables['plans'] as $plan ): ?>
                                    <div class="plan <?php if( $plan['special'] ) echo 'popular'; ?>" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                                        <?php if( $plan['special'] ): ?>
                                            <span class="comment">پیشنهاد ما</span>
                                        <?php endif; ?>
                                        <div class="title"><?php echo $plan['title']; ?></div>
                                        <p class="offer"><?php echo $plan['subtitle']; ?></p>
                                        <div class="price"><?php echo number_format($plan['price']); ?><span class="format">تومان</span></div>
                                        <?php if( $plan['desc'] ): ?>
                                            <ul class="features">
                                                <?php foreach( $plan['desc'] as $des ): ?>
                                                    <?php if( $des['type'] ): ?>
                                                        <li>
                                                            <i class="las la-check"></i>
                                                            <span class="check"><?php echo $des['feacher']; ?></span>
                                                        </li>
                                                    <?php else: ?>
                                                        <li>
                                                            <i class="las la-times"></i>
                                                            <span class="uncheck"><?php echo $des['feacher']; ?></span>
                                                        </li>
                                                    <?php endif ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <a href="<?php echo $plan['link']['url']; ?>" target="_blank" class="link">سفارش</a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

    <section id="find" class="container-fluid find">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-5 order-2 order-xl-1 img-column column">
                    <div class="img">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/content7.jpg" alt="budget">
                    </div>
                </div>

                <div class="col-12 col-xl-7 order-1 order-xl-2 content-column column">
                    <h2 class="title">به کمک جیمکس ادز مشتریان خود را پیدا کنید</h2>
                    <p class="desc">
                        به وسیله ی تبلیغ در گوگل و یوتیوب می توانید با بودجه ای مناسب، مشتریان اصلی و مرتبط خود را پیدا کنید. به وسیله ی ابزارهای هوشمند گوگل، این تبلیغات به مرور زمان بهتر شده و نتایجی بهتر برای کسب و کار شما به ارمغان می آورند
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="feachers" class="container feachers">
        <div class="row">
            <div class="col-12 col-xl-3 column">
                <!-- Component Feacher Card Start -->
                <div class="feacher" data-aos="fade-in" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                    <div class="icon">
                        <svg width="75px" height="75px" viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M512 711.948c-46.904 0-91.06-18.33-124.35-51.62-33.274-33.29-51.604-77.446-51.62-124.35 0-46.904 18.33-91.076 51.62-124.356 57.944-57.952 146.972-68.474 216.518-25.538a7.99 7.99 0 0 1 2.592 11 7.988 7.988 0 0 1-10.992 2.6c-63.206-38.988-144.13-29.456-196.812 23.242-30.26 30.268-46.936 70.418-46.936 113.052 0.016 42.626 16.676 82.786 46.936 113.044 30.276 30.26 70.418 46.936 113.044 46.936h0.016c42.64 0 82.784-16.676 113.058-46.936 52.698-52.682 62.236-133.592 23.218-196.79a7.996 7.996 0 0 1 2.608-11 7.966 7.966 0 0 1 10.992 2.6c42.938 69.536 32.446 158.566-25.514 216.494-33.288 33.29-77.458 51.62-124.364 51.62 0.002 0.002 0.002 0.002-0.014 0.002z" fill=""></path>
                                <path d="M512.016 655.77c-30.698 0-61.378-11.68-84.736-35.04-46.716-46.748-46.716-122.78 0-169.496 38.348-38.356 97.852-46.216 144.662-19.112a7.986 7.986 0 0 1 2.92 10.922 8.014 8.014 0 0 1-10.93 2.912c-40.55-23.49-92.106-16.66-125.348 16.582-40.488 40.486-40.488 106.384 0 146.886 40.488 40.472 106.378 40.472 146.88 0 33.258-33.29 40.064-84.854 16.536-125.434a7.99 7.99 0 0 1 2.904-10.93 8.02 8.02 0 0 1 10.93 2.904c27.152 46.842 19.314 106.384-19.064 144.764-23.378 23.362-54.072 35.01-84.754 35.042z" fill=""></path>
                                <path d="M512 599.872c-16.364 0-32.726-6.246-45.172-18.674-24.92-24.952-24.92-65.494 0-90.412 14.38-14.404 34.132-21.016 54.304-18.114 4.374 0.632 7.402 4.684 6.778 9.056s-4.592 7.4-9.056 6.776c-15.098-2.21-29.932 2.772-40.72 13.584-18.69 18.69-18.69 49.098 0 67.804 18.69 18.674 49.09 18.642 67.78 0 10.804-10.836 15.754-25.702 13.568-40.784a8.002 8.002 0 0 1 6.762-9.048c4.386-0.546 8.432 2.404 9.056 6.776 2.918 20.104-3.67 39.902-18.082 54.362-12.476 12.426-28.84 18.674-45.218 18.674zM615.926 967.672H408.074a7.982 7.982 0 0 1-5.652-2.344l-31.978-31.976a7.988 7.988 0 0 1-2.342-5.652v-111.92a7.98 7.98 0 0 1 7.994-7.994h271.806a7.978 7.978 0 0 1 7.994 7.994v111.92a7.992 7.992 0 0 1-2.342 5.652l-31.976 31.976a7.99 7.99 0 0 1-5.652 2.344z m-204.542-15.99h201.232l27.292-27.292v-100.616H384.09v100.616l27.294 27.292z" fill=""></path>
                                <path d="M360.108 871.738a7.988 7.988 0 0 1-7.978-7.588c-0.234-4.402 3.154-8.15 7.556-8.4l303.784-15.988c4.374-0.562 8.166 3.154 8.4 7.558a7.98 7.98 0 0 1-7.556 8.398l-303.784 15.988c-0.142 0.032-0.282 0.032-0.422 0.032zM360.108 919.706a7.99 7.99 0 0 1-7.978-7.588c-0.234-4.404 3.154-8.15 7.556-8.4l303.784-15.988c4.374-0.532 8.166 3.154 8.4 7.556s-3.152 8.182-7.556 8.4l-303.784 15.988c-0.142 0.032-0.282 0.032-0.422 0.032zM647.902 823.774H376.096a8 8 0 0 1-7.994-7.994v-49.56c-80.176-50.122-127.908-135.84-127.908-230.242 0-149.892 121.928-271.83 271.806-271.83 149.876 0 271.804 121.936 271.804 271.83 0 94.402-47.73 180.152-127.908 230.242v49.558a8 8 0 0 1-7.994 7.996z m-263.812-15.988h255.818v-46.03c0-2.81 1.468-5.402 3.856-6.872 77.68-46.81 124.052-128.658 124.052-218.906 0-141.07-114.762-255.84-255.816-255.84-141.056 0-255.818 114.77-255.818 255.84 0 90.248 46.374 172.096 124.052 218.938a7.98 7.98 0 0 1 3.856 6.84v46.03zM512 999.648c-60.208 0-78.352-34.914-79.1-36.412a7.982 7.982 0 0 1 3.576-10.71 7.94 7.94 0 0 1 10.696 3.53c0.702 1.31 15.254 27.606 64.83 27.606 49.76 0 64.234-26.514 64.828-27.636 2.044-3.874 6.838-5.434 10.742-3.436s5.48 6.744 3.53 10.648c-0.752 1.496-18.894 36.41-79.102 36.41zM168.26 543.972H8.36a7.998 7.998 0 0 1-7.994-7.994 7.986 7.986 0 0 1 7.994-8.002h159.9a7.988 7.988 0 0 1 7.996 8.002 8 8 0 0 1-7.996 7.994zM1015.64 543.972h-159.886a8 8 0 0 1 0-15.996h159.886a8 8 0 0 1 0 15.996zM46.708 736.71a8.01 8.01 0 0 1-7.386-4.934 8.01 8.01 0 0 1 4.326-10.46l147.722-61.208a8 8 0 0 1 10.446 4.34 7.988 7.988 0 0 1-4.324 10.43l-147.724 61.208c-1 0.438-2.048 0.624-3.06 0.624zM829.586 412.402a7.98 7.98 0 0 1-7.386-4.934 8 8 0 0 1 4.326-10.446l147.708-61.176a8.008 8.008 0 0 1 10.446 4.326 8 8 0 0 1-4.324 10.446l-147.708 61.174a7.994 7.994 0 0 1-3.062 0.61zM155.878 900.094a7.97 7.97 0 0 1-5.652-2.342 7.988 7.988 0 0 1 0-11.304l113.06-113.076a7.992 7.992 0 1 1 11.304 11.304l-113.06 113.076a7.974 7.974 0 0 1-5.652 2.342zM643.56 226.378a7.998 7.998 0 0 1-7.384-11.054l61.176-147.708a7.992 7.992 0 1 1 14.772 6.122l-61.176 147.708a8.012 8.012 0 0 1-7.388 4.932zM512.016 200.21a7.99 7.99 0 0 1-7.996-7.994V32.346a7.99 7.99 0 0 1 7.996-7.994 7.99 7.99 0 0 1 7.994 7.994v159.872a7.99 7.99 0 0 1-7.994 7.992zM380.468 226.378a7.98 7.98 0 0 1-7.386-4.934l-61.174-147.708a8 8 0 0 1 4.324-10.446 8.006 8.006 0 0 1 10.446 4.324l61.174 147.708a8 8 0 0 1-7.384 11.056zM868.12 900.094a7.978 7.978 0 0 1-5.652-2.342l-113.074-113.076a7.992 7.992 0 1 1 11.304-11.304l113.074 113.076a7.988 7.988 0 0 1 0 11.304 7.974 7.974 0 0 1-5.652 2.342zM268.954 300.888a7.966 7.966 0 0 1-5.652-2.342L150.258 185.502a7.988 7.988 0 0 1 0-11.304 7.988 7.988 0 0 1 11.304 0l113.044 113.044a7.992 7.992 0 0 1-5.652 13.646zM977.292 736.71c-1.032 0-2.06-0.188-3.06-0.624l-147.738-61.208a7.988 7.988 0 0 1-4.326-10.43c1.688-4.09 6.386-6.058 10.448-4.34l147.738 61.208a8.012 8.012 0 0 1 4.324 10.46 8.04 8.04 0 0 1-7.386 4.934zM194.446 412.402a7.938 7.938 0 0 1-3.06-0.608L43.678 350.62a8 8 0 0 1-4.326-10.446 8.006 8.006 0 0 1 10.446-4.326l147.708 61.176a8 8 0 0 1 4.324 10.446 8.012 8.012 0 0 1-7.384 4.932z" fill=""></path>
                                <path d="M512.046 543.972a7.97 7.97 0 0 1-5.652-2.342 7.988 7.988 0 0 1 0-11.304L866.09 170.608a7.988 7.988 0 0 1 11.304 0 7.988 7.988 0 0 1 0 11.304l-359.698 359.72a7.964 7.964 0 0 1-5.65 2.34z" fill=""></path>
                                <path d="M769.83 286.118a7.986 7.986 0 0 1-7.992-7.986 7.992 7.992 0 0 1 7.976-8.002l41.94-0.032 65.954-65.96-23.374-4.012a7.982 7.982 0 0 1-6.528-9.228c0.75-4.348 4.902-7.284 9.226-6.526l38.598 6.62c2.954 0.5 5.372 2.608 6.278 5.458s0.14 5.958-1.966 8.072l-79.224 79.224a7.988 7.988 0 0 1-5.652 2.342l-45.236 0.03z" fill=""></path>
                                <path d="M769.83 286.118a7.994 7.994 0 0 1-7.992-7.994l0.016-45.25c0-2.124 0.842-4.154 2.34-5.652l79.102-79.1a7.974 7.974 0 0 1 8.056-1.966 7.986 7.986 0 0 1 5.464 6.236l6.744 38.472a7.992 7.992 0 0 1-6.496 9.26c-4.324 0.718-8.492-2.146-9.258-6.496l-4.09-23.326-65.876 65.882-0.016 41.938a8 8 0 0 1-7.994 7.996z" fill=""></path>
                            </g>
                        </svg>
                    </div>
                    <div class="title">هدف گذاری دقیق کاربران</div>
                    <div class="desc">
                        ما به شما کمک می کنیم تا بهترین کلمات را پیدا کرده و مشتریان هدف خود را، به سایت هدایت کنید
                    </div>
                </div>
                <!-- Component Feacher Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Feacher Card Start -->
                <div class="feacher" data-aos="fade-in" data-aos-duration="500" data-aos-delay="0" data-aos-easing="ease-in-sine">
                    <div class="icon">
                        <svg height="75px" width="75px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 195.803 195.803" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                <g>
                                    <g>
                                    <path style="fill:#010002;" d="M195.803,104.175l-15.958-18.141l9.688-19.612l-19.494-9.616l1.525-23.685l-24.182-1.557 l-7.315-21.616l-20.915,7.086L104.173,0.002L86.504,15.541L65.146,4.991L54.939,25.648l-21.82-1.396L31.68,46.67L8.668,54.461 l7.716,22.769L0,91.628l14.315,16.277l-10.604,21.48l21.978,10.851l-1.442,22.457l21.552,1.385l7.383,21.777l22.887-7.748 l15.561,17.694l16.745-14.731l19.727,9.742l10.275-20.815l24.322,1.568l1.492-23.313l20.389-6.907l-7.125-21.033L195.803,104.175 z M158.303,143.743l-1.364,21.273l-22.268-1.424l-9.369,18.975l-17.898-8.84l-15.21,13.378l-14.208-16.162l-20.947,7.097 l-6.735-19.852l-19.512-1.249l1.306-20.414l-20.135-9.942l9.706-19.644L8.7,92.197l14.838-13.048l-7.054-20.829l21.083-7.143 l1.303-20.392l19.784,1.267l9.284-18.814l19.541,9.656l16.141-14.197l13.618,15.489l18.975-6.428l6.671,19.687l22.139,1.417 l-1.385,21.638l17.654,8.722L172.504,87l14.609,16.617L170.3,118.401l6.471,19.082L158.303,143.743z"></path>
                                    </g>
                                    <g>
                                    <path style="fill:#010002;" d="M120.707,90.797c-9.18,0-16.763,7.791-16.763,21.784c0.1,13.879,7.58,20.818,16.23,20.818 c8.868,0,16.552-7.258,16.552-21.895C136.73,98.27,130.431,90.797,120.707,90.797z M120.389,127.742 c-5.766,0-9.183-6.725-9.076-15.582c0-8.761,3.203-15.7,9.076-15.7c6.51,0,8.965,7.047,8.965,15.489 C129.354,121.121,126.584,127.742,120.389,127.742z"></path>
                                    </g>
                                    <g>
                                    <path style="fill:#010002;" d="M91.558,82.791c0-13.238-6.406-20.722-16.123-20.722c-9.183,0-16.763,7.802-16.763,21.681 c0.107,13.983,7.58,20.922,16.23,20.922C83.87,104.676,91.558,97.415,91.558,82.791z M66.144,83.432 c0-8.761,3.103-15.7,8.969-15.7c6.514,0,8.969,7.047,8.969,15.489c0,9.176-2.777,15.797-8.969,15.797 C69.247,99.014,65.93,92.29,66.144,83.432z"></path>
                                    </g>
                                    <g>
                                    <polygon style="fill:#010002;" points="115.049,62.07 74.258,133.829 80.234,133.829 121.03,62.07 "></polygon>
                                    </g>
                                </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="title">هزینه مقرون به صرفه</div>
                    <div class="desc">
                        شما تنها به ازای کلیک هزینه پرداخت می کنید و نمایش تبلیغ به تنهایی هزینه ای برای شما نخواهد داشت
                    </div>
                </div>
                <!-- Component Feacher Card End -->
            </div>
            <div class="col-12 col-xl-3 column">
                <!-- Component Feacher Card Start -->
                <div class="feacher" data-aos="fade-in" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                    <div class="icon">
                        <svg fill="#000000" height="75px" width="75px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                <g>
                                    <g>
                                    <path d="M363.789,436.548h43.116c16.344,0,29.642-13.297,29.642-29.642V29.642C436.547,13.298,423.249,0,406.905,0h-43.116 c-16.344,0-29.642,13.298-29.642,29.642v377.263C334.147,423.251,347.445,436.548,363.789,436.548z M350.316,29.642 c0-7.43,6.044-13.474,13.474-13.474h43.116c7.43,0,13.474,6.044,13.474,13.474v377.263c0,7.43-6.044,13.474-13.474,13.474 h-43.116c-7.43,0-13.474-6.044-13.474-13.474V29.642z"></path>
                                    <path d="M234.442,436.548h43.116c16.344,0,29.642-13.297,29.642-29.642V158.99c0-16.345-13.298-29.642-29.642-29.642h-43.116 c-16.344,0-29.642,13.297-29.642,29.642v247.916C204.8,423.251,218.098,436.548,234.442,436.548z M220.968,158.99 c0-7.43,6.044-13.474,13.474-13.474h43.116c7.43,0,13.474,6.044,13.474,13.474v247.916c0,7.43-6.044,13.474-13.474,13.474 h-43.116c-7.43,0-13.474-6.044-13.474-13.474V158.99z"></path>
                                    <path d="M509.633,476.642l-21.558-21.558c-3.157-3.157-8.275-3.157-11.433,0c-3.157,3.156-3.157,8.275,0,11.432l7.758,7.758H51.2 c-7.43,0-13.474-6.044-13.474-13.474V27.602l7.758,7.758c3.157,3.157,8.275,3.157,11.433,0c3.157-3.156,3.157-8.275,0-11.432 L35.359,2.369c-3.157-3.157-8.275-3.157-11.433,0L2.368,23.927c-3.157,3.156-3.157,8.275,0,11.432 c3.157,3.157,8.275,3.157,11.433,0l7.757-7.758V460.8c0,16.345,13.298,29.642,29.642,29.642h433.198l-7.758,7.758 c-3.157,3.156-3.157,8.275,0,11.432c1.579,1.579,3.649,2.368,5.717,2.368c2.068,0,4.138-0.79,5.717-2.368l21.558-21.558 C512.79,484.918,512.79,479.799,509.633,476.642z"></path>
                                    <path d="M105.094,436.548h43.116c16.344,0,29.642-13.297,29.642-29.642V277.558c0-16.345-13.298-29.642-29.642-29.642h-43.116 c-16.344,0-29.642,13.298-29.642,29.642v129.347C75.452,423.251,88.75,436.548,105.094,436.548z M91.621,277.558 c0-7.43,6.044-13.474,13.474-13.474h43.116c7.43,0,13.474,6.044,13.474,13.474v129.347c0,7.43-6.044,13.474-13.474,13.474 h-43.116c-7.43,0-13.474-6.044-13.474-13.474V277.558z"></path>
                                    </g>
                                </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="title">رشد کسب و کار شما</div>
                    <div class="desc">
                        کسب و کار خود را به کاربرانی که به دنبال خدمات یا محصولات شما هستند، تبلیغات خود را نمایش دهید و به سرعت افزایش فروش را مشاهده کنید
                    </div>
                </div>
                <!-- Component Feacher Card End -->
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
                                هزینه هر کلیک چقدر است؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                هزینه ی هر کلیک به سه فاکتور بستگی دارد.
                                گوگل مزایده بوده، بنابراین هر چقدر رقابت بیشتری داشته باشید، برای نمایش در لینک های اول هزینه ی بیشتری لازم است
                                میزان سرچ کلمات شما در هزینه ی هر کلیک تاثیر گذار است، هر چقدر کلمات شما کم سرچ تر باشد، هزینه ی کلیک تان افزایش پیدا می کند
                                امتیاز کیفی سایت شما، به این معنی که هر چقدر گوگل امتیاز کیفی بیشتری به سایت شما بدهد، هزینه کلیکتان بهتر خواهد شد
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                آیا دسترسی مستقیم به پنل گوگل ادز را خواهیم داشت؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                بله شما می توانید تمامی گزارش ها را از پنل گوگل ادز دریافت و بررسی نمایید
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                چقدر زمان می برد تا تبلیغ من در لینک اول نمایش یابد؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                بعد از 24 تا 48 ساعت آنالیز گوگل، در صورتی که هزینه ی کلیک شما از رقبایتان بالاتر باشد، در لینک اول گوگل نمایش خواهید یافت.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="900" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                آیا پروموشن کد گوگل به ما تعلق خواهد گرفت؟
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                بله. پروموشن کد گوگل بسته به میزان مصرف اکانت شما متفاوت است اما به هر میزان که گوگل به شما پروموشن کد بدهد، به صورت رایگان بر روی اکانت شما فعال خواهد شد
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1200" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                گوگل ادز چه مقدار به فروش بیشتر من کمک خواهد کرد؟
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                میزان افزایش فروش شما به شرایط مختلفی از جمله کیفیت خدمات و قیمت های شما بستگی دارد. ما می توانیم به شما مشاوره داده و شما را در این مسیر راهنمایی کنیم.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1500" data-aos-easing="ease-in-sine">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                چرا زمانی که رقبای من تبلیغی در گوگل ندارند، باز هم هزینه ی کلیک من حداقل نیست؟
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                رقبای شما صرفا افرادی که از سرویس گوگل ادز استفاده می کنند نیستند. بلکه سایت هایی که سئو قوی ای دارند نیز، مثل ویکی پدیا و دیجیکالا، رقیب شما محسوب شده و برای نمایش بالاتر از آنها لازم است هزینه ی کلیک خود را افزایش دهید.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Component FAQ End -->
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>